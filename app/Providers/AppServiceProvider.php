<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->share('support_email_id', env('SUPPORT_EMAIL_ID'));
        view()->share('product_name', env('PRODUCT_NAME'));
        view()->share('powered_by', env('POWERED_BY'));
        view()->share('powered_by_url', env('POWERED_BY_URL'));
        view()->share('powered_by_badge_image', env('POWERED_BY_BADGE_IMAGE'));
        view()->share('body_class','skin-purple sidebar-mini sidebar-collapse');
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
