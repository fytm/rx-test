<?php

use App\Services\OrderDetailsService;
use Illuminate\Support\Facades\Route;

Route::get('/orders', function () {
    return OrderDetailsService::get_orders();
});

Route::get('/order/{id}', function ($id) {
    return OrderDetailsService::get_order($id);
});