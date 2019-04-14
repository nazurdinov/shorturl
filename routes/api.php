<?php

Route::prefix('v1')->group(function () {
    Route::apiResource('shorturls', 'API\ShorturlsController');
});