<?php
/*

=>  Traversable It Is a interface which is used 
    to check whether a class instance is traversable using foreach.
    The traversable interface has no methods defined in it.

=>  n the scripts where you use foreach loop, it is automatically implemented by the PHP engine.
    But if you want to implement it in your own class, 
    you need to implement either IteratorAggregate or Iterator 
    which actually extends traversable interface to make your class traversable.

=>  You can apply your own logic to return values when an object is iterated over.


=> When do we face the need to make our class traversable? 
   Generally we use simple foreach loop to access and traverse values in our class, 
   but a foreach loop can only traverse through public values and objects. 
   If you encapsulate an object with private and protected values and write getter and setter methods 
   to access it, it will be problematic for foreach loop to access it. 
   So here to access these values you can make your class to implement 
   IteratorAggregate or Iterator to make your class traversable and write the logic to access these values 
   on your own.


*/


   
class myData implements IteratorAggregate {
    public $property1 = "Public property one";
    public $property2 = "Public property two";
    public $property3 = "Public property three";

    public function __construct() {
        $this->property4 = "last property";
    }

    public function getIterator() {
        return new ArrayIterator($this);
        // return new ArrayIterator(["abc","abc","abc","abc","abc","abc"]); <------ valid  
        // return new ArrayObject(["abc","abc","abc","abc","abc"]);   <------ valid & here used Array Object that copy array object to array iterator internally and then work
        // return ["abc","abc","abc","abc","abc","abc"] throw error must return Object 
    }

}


$obj = new myData();

// print_r($obj); ---> as u can see object is also assoicative array in php 

foreach($obj as $key => $value) {
    echo $key."===".$value;
    echo "<br>";
}

?>