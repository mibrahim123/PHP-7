<?php
/*
    iterator defines how foreach loop itearte your arrays
    you can define your custom iterator for example
    if you want to iterate only even index
    give $this->position+=2 in next method of
    iterator
    
    php also define custom iterator 
    for their built in function like mysql_fetch_assoc()

*/


class myIterator implements Iterator {
    private $position = 0;
    private $array = array(
        "firstelement",
        "secondelement",
        "lastelement",
    );  

    public function __construct() {
        $this->position = 0;
    }

    public function rewind() {
        // echo __METHOD__."calling<br>";
        $this->position = 0;
    }

    public function current() {
        // echo __METHOD__."calling<br>";
        
        return $this->array[$this->position];
    }

    public function key() {
        // echo __METHOD__."calling<br>";
        return $this->position;
    }

    public function next() {
        // echo __METHOD__."calling<br>";
        ++$this->position;
    }

    public function valid() {
        // echo __METHOD__."calling<br>";
        return isset($this->array[$this->position]);
    }
}

$it = new myIterator;

foreach($it as $key => $value) {
    echo $key."=>".$value;
    echo "\n";
}