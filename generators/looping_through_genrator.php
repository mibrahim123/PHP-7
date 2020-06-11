<?php

$mem_usage = memory_get_usage();
echo 'Memory usage before the loop: <strong>' . round($mem_usage / 1024) . 'KB</strong><br>';

/* Get the memory limit in bytes. */
$memory_limit =ini_get('memory_limit');
echo $memory_limit."<br>";
if (preg_match('/^(\d+)(.)$/', $memory_limit, $matches)) {
    if ($matches[2] == 'M') {

        $memory_limit = $matches[1] * 1024 * 1024; // nnnM -> if in MB multiply by 1024 * 1024 convert into bytes
    } else if ($matches[2] == 'K') {
        $memory_limit = $matches[1] * 1024; // nnnK -> nnn KB -> if in kb mutiply by 1024 to convert in bytes
    }
}
echo 'Memory limit: <strong>' . round($memory_limit / 1048576) . 'MB</strong><br>';
//echo $memory_limit;

function getmemusage ($max = 100000) {
    global $memory_limit;
    for ($i = 1; $i < $max; $i++) {
        if (($i % 10000) == 0)
        {
                $mem_usage = memory_get_usage();
                $limit_perc = $mem_usage * 100 / $memory_limit;
                echo 'Memory usage after iteration ' . $i . ': <strong>' . round($mem_usage / 1024) . 'KB</strong> ';
                echo '(' . round($limit_perc) . '% of the available memory for the script)<br>';
                  
        }
        yield $i;
    }
}

foreach (getmemusage() as $range) {
  //now we use return value as yiled pass array value insted of storing value in array return entire array then use in for loop in basic looping.php
}

$mem_usage = memory_get_usage();
echo 'Memory usage after the loop: <strong>' . round($mem_usage / 1024) . 'KB</strong><br>';