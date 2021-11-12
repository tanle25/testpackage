<?php

use Illuminate\Support\Facades\Route;
use Tanle\Vnpay\TestController;

Route::get('test', [TestController::class,'index']);
