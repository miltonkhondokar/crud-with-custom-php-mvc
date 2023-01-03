<?php

use Pecee\SimpleRouter\SimpleRouter;
use App\Controllers\SalesTrackerController;

//routes
SimpleRouter::get('crud-with-custom-mvc', [SalesTrackerController::class, 'index'])->name('dashboard');
SimpleRouter::get('crud-with-custom-mvc/sales-form', [SalesTrackerController::class, 'create_form'])->name('sales-form');
SimpleRouter::post('crud-with-custom-mvc/create-sales', [SalesTrackerController::class, 'create_sales'])->name('create-sales');
SimpleRouter::post('crud-with-custom-mvc/report_filter', [SalesTrackerController::class, 'report_filter'])->name('report_filter');