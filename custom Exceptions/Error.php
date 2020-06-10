<?php
/*
    PHP has an exception model similar to that of other programming languages. 
    An exception can be thrown, and caught ("catched") within PHP. 
    Code may be surrounded in a try block, to facilitate the catching of potential exceptions. 
    Each try must have at least one corresponding catch or finally block.
    The thrown object must be an instance of the ***Exception class***** or a *****subclass of Exception******. 
    Trying to throw an object that is not will result in a PHP Fatal Error.

*/
        function inverse($x="") {
           
            
            if (empty($x)) {
                throw new InvalidArgumentException('Required var is empty.');
            }

            if($x<1)
            {
                throw new Exception('Division by zero'); // error must be Instance Of Object
                
            }

            if($x>=5)
            {
                throw new Exception('Please Enter less than 5 value'); 
            }

            return 1/$x;
        }

        try {
            //echo inverse(5) . "\n";
         //echo inverse(0) . "\n";
            echo inverse(5) . "\n";
        } catch (Exception $e) {
            echo 'Caught exception: ',  $e->getMessage(), "\n";
        }
        {
            echo "hey i am finally always executed error are weakens in front of me";
        }

        // Continue execution
        echo "Hello World\n";

?>