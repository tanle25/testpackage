<?php

namespace Tanle\Vnpay;

use Illuminate\Support\ServiceProvider;

class VnpayService extends ServiceProvider{

    public function boot()
    {
        # code...
        $this->loadRoutesFrom(__DIR__.'/route.php');
    }

}
