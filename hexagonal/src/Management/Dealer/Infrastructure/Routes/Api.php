<?php

use Illuminate\Support\Facades\Route;

Route::get('/', DealerController::class);

Route::post('/filter', DealerFilterController::class);

Route::post('/create', DealerCreateController::class);

Route::post('/update', DealerFilterController::class);

Route::post('/:id', DealerFilterController::class);
