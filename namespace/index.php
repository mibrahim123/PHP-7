<?php
include 'Products/Payment.php';
include 'Payment/Payment.php';
include 'Cart/cart.php';




$Obj1=new Products\Payment();
$Obj2=new Payment\Payment();

echo $Obj1->a;

echo $Obj2->a;
echo $Obj1->abc();




?>