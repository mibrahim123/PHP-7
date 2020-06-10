<?php
    
    ini_set("display_errors","0");          // If We set this to "0" error cant display in Production
    ini_set("log_errors", 1);               // If We set this to 1 allow logging of errors
    ini_set('error_log', "./syslog.log");   // set file where to log error
   
    include 'any_how_generate_Error.php';

    error_log(E_ALL); // the error_log function which takes argument so which kind of error log in log files 


    /* for more understand visit 
    https://www.cloudways.com/blog/php-error-logging/#:~:text=Enable%20Error%20Logging%20in%20php.,-ini&text=To%20log%20errors%20in%20PHP,the%20following%20lines%20of%20code.&text=If%20you%20want%20to%20enable,1)%3B%20error_reporting(E_ALL)%3B
    */

?>