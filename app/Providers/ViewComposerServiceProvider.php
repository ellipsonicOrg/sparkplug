<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ViewComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->composeSidebar();
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }


    public function composeSidebar() {

        view()->composer('backend/partials/sidebarMenu', 'App\Http\ViewComposers\SidebarComposer@compose');

    }
}
