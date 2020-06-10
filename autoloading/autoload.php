<!-- 
    Autoloading is the process of automatically loading PHP classes without explicitly loading them with 
the require(), require_once(), include(), or include_once() functions.
It’s necessary to name your class files exactly the same as your classes. 
The class Views would be placed in Views.php, a class called Users would be stored in Users.php and 
so on. 

for this use previously __autoload() function which was (deprecated)
now use spl_autoload_register() function which allows you to register multiple autoloader functions.

-->


<?php

spl_autoload_register();

$homecontroller=new controller\Home();
echo $homecontroller->a."<br>";

$homemodel=new model\Home();
echo $homemodel->a."<br>";

$homeview=new views\Home();
echo $homeview->a."<br>";

$productscontroller=new controller\Products();
echo $productscontroller->a."<br>";

$productsmodel=new model\Products();
echo $productsmodel->a."<br>";

$productsview=new views\Products();
echo $productsview->a;
