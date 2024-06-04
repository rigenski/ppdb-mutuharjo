<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('*', function ($view) {
            $view->with('major', collect([
                'TO_TKR' => 'Teknik Otomotif - TKR',
                'TO_TSM' => 'Teknik Otomotif - TSM',
                'TM' => 'Teknik Mesin',
                'TE' => 'Teknik Elektronika',
                'TKJT' => 'Teknik Komputer Jaringan dan Telekomunikasi',
                'PPLG' => 'Pengembangan Perangkat Lunak dan Gim',

            ]));
        });
    }
}
