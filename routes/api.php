<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CountryController;

Route::get('/countries', [CountryController::class, 'index']);
Route::get('/countries/{countryId}/cities', [CountryController::class, 'cities']);
