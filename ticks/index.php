<?php
declare(ticks=2);

// A function called on each tick event
function abc()
{
  
    echo "tick_handler() called<br>";
   
}

register_tick_function('abc'); //if we calling function tick function executed;


$a=5; // assign statement tick function call executed
//echo $a; // echoing varibale tick function callled
$a=5; // assign statement tick function call executed
$a=5; // assign statement tick function call executed


function kbc(){  // function declaration tick  function is note executed
    
}



kbc(); // function calling tick function executed
kbc(); // function calling tick function executed
kbc(); // function calling tick function executed


unregister_tick_function('abc');



?>