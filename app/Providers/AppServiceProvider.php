<?php

namespace App\Providers;

use App\Models\Backend\Menu;
use Illuminate\Routing\UrlGenerator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if(env('REDIRECT_HTTPS')){
            $this->app['request']->server->set('HTTPS',true);
        }
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(UrlGenerator $url)
    {
        if(env('REDIRECT_HTTPS')){
            $url->formatScheme('https://');
        }
        View::composer("theme.back.aside", function ($view){
            $rol_id = session()->get('rol_id');
            $menuP = cache()->tags('Menu')->rememberForever("MenuPrincipal.rolid.$rol_id",function(){
                return Menu::getMenu(true);
            });
            $view->with('menuPrincipal', $menuP);
        });
    }
}
