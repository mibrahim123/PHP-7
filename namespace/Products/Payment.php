<?php
namespace Products;
use Cart\Cart;



class Payment {
   public $a="hi I am in products space";
   function abc(){
      echo "hello";
      $b=new Cart();
      echo $b->cart;
   }
}
?>