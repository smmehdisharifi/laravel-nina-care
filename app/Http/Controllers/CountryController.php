<?php

namespace App\Http\Controllers;

use App\Repositories\CountryRepositoryInterface;
use App\Repositories\CityRepositoryInterface;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function __construct(
        private readonly CountryRepositoryInterface $countryRepository,
        private readonly CityRepositoryInterface $cityRepository
    ) {}

    public function index(Request $request): JsonResponse
    {
        $countries = $this->countryRepository->search($request->search);

        return response()->json($countries);
    }

    public function cities(Request $request, $countryId): JsonResponse
    {
        $cities = $this->cityRepository->findAllByCountry($countryId, $request->search);

        return response()->json($cities);
    }
}
