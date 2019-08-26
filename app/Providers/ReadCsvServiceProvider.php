<?php

namespace App\Providers;

use App\Services\Csv\Csv;
use Illuminate\Support\ServiceProvider;

class ReadCsvServiceProvider extends ServiceProvider
{
    /**
     * Register Read CSV service.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('App\Services\ReadCsv\ReadCsv', function ($app) {
            return new Csv();
        });
    }
}
