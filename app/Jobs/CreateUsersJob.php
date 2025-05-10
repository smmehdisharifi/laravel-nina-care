<?php

namespace App\Jobs;

use App\Models\Address;
use App\Models\User;
use App\Repositories\CityRepository;
use App\Repositories\CityRepositoryInterface;
use Illuminate\Contracts\Cache\LockTimeoutException;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class CreateUsersJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected int $count;
    protected readonly CityRepositoryInterface $cityRepository;

    /**
     * Create a new job instance.
     */
    public function __construct(int $count = 1000)
    {
        $this->count = $count;
        $this->cityRepository = app(CityRepository::class);
    }

    /**
     * Execute the job.
     * @throws LockTimeoutException
     */
    public function handle(): void
    {
        $users = User::factory()->count($this->count)->make();
        $city = $this->cityRepository->findRandomCity();
        $now = now();

        $lockKey = 'create_users_lock';
        $lockSeconds = 10;
        $blockSeconds = 30;

        $lock = Cache::lock($lockKey, $lockSeconds);

        $lock->block($blockSeconds, function () use ($users, $city, $now) {
            $startId = DB::table('users')->max('id') + 1;

            $users->each(function ($user, $index) use ($startId, $now) {
                $user->email = "user" . ($startId + $index) . "@example.com";
                $user->email_verified_at = $now;
            });

            DB::table('users')->insert(
                $users->map(fn($user) => $user->getAttributes())->all()
            );

            $addresses = Address::factory()->count($this->count)->make();

            $addresses->each(function ($address, $index) use ($startId, $city) {
                $address->user_id = $startId + $index;
                $address->city_id = $city->id;
                $address->country_id = $city->country_id;
            });

            DB::table('addresses')->insert(
                $addresses->map(fn($address) => $address->getAttributes())->all()
            );
        });
    }
}
