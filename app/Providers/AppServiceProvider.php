<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Contracts\Mail\Mailer;

class AppServiceProvider extends ServiceProvider
{
	
	public function boot()
	{
		Schema::defaultStringLength(191);
	}
	
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
		//
    }
}
