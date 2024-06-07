<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\DB;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // $authData = DB::table('tb_user')->get();
        $auth = DB::table('tb_user')
        ->where('user_status','Administrator')
        ->get();
        
        $authAd = $auth->pluck('user_email');
        
        view()->share('authAd', $authAd);
    }

}
