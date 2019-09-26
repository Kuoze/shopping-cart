<?php

namespace Kuoze\ShoppingCart;

use Illuminate\Support\ServiceProvider;
use Kuoze\ShoppingCart\Services\ShoppingCart;

class ShoppingCartServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('shoppingcart', function(){
          return new ShoppingCart();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
          __DIR__ . '/config/shoppingcart.php' => config_path('shoppingcart.php'),
        ], 'config');
    }
}
