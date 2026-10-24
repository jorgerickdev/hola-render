<?php

use App\Http\Controllers\HolaController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HolaController::class, 'index']);
