<?php

use Illuminate\Support\Facades\Route;

Route::get('/:lc:package', function () {
    return ':uc:package';
})->name(':lc:package');
