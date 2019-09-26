<?php
  namespace Kuoze\ShoppingCart\Facades;

  use Illuminate\Support\Facades\Facade;

  /**
  * Class ShoppingCartFacade
  * @package Kuoze\ShoppingCart
  */
  class ShoppingCartFacade extends Facade {

    /**
    * @return string
    */
    protected static function  getFacadeAccessor(){
      return 'shoppingcart';
    }
  }
