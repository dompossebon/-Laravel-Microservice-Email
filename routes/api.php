<?php

use App\Jobs\CompanyCreated;
use Illuminate\Support\Facades\Route;

Route::get('/teste', function () {
    CompanyCreated::dispatch('testestestes@email.com')->onQueue('queue_email');

    return response()->json(['message' => 'success xx']);
});

Route::get('/', function () {
    return response()->json(['message' => 'success']);
});
