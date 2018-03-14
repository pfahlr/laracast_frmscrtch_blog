<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Post;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('partials.sidebar-right', function($view){
          $view->with('archives', Post::archives());

        });


    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
      \App::singleton('App\Billing\Stripe', function(){
        return new \App\Billing\Stripe(config('services.stripe.secret'));
      });
    }
}
