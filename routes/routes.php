<?php

use Pecee\SimpleRouter\SimpleRouter;
use App\Controllers\SalesTrackerController;

//routes
SimpleRouter::get('crud-with-custom-mvc', [SalesTrackerController::class, 'index'])->name('dashboard');
SimpleRouter::get('crud-with-custom-mvc/create-sales', [SalesTrackerController::class, 'create'])->name('create-sales');