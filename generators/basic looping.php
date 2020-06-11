<?php

$mem_usage = memory_get_usage();
echo 'Memory usage before the loop: <strong>' . round($mem_usage / 1024) . 'KB</strong><br>';

/* Get the memory limit in bytes. */
$memory_limit =ini_get('memory_limit');
if (preg_match('/^(\d+)(.)$/', $memory_limit, $matches)) {
    if ($matches[2] == 'M') {
        $memory_limit = $matches[1] * 1024 * 1024; // nnnM -> nnn MB
    } else if ($matches[2] == 'K') {
        $memory_limit = $matches[1] * 1024; // nnnK -> nnn KB
    }
}
echo 'Memory limit: <strong>' . round($memory_limit / 1048576) . 'MB</strong><br>';
//echo $memory_limit;
$array = array();

for ($i = 0; $i < 100000; $i++)
{
   $array[] = $i;
   
   /* Check the memory usage every 10000 iterations. */
   if (($i % 10000) == 0)
   {
     $mem_usage = memory_get_usage();
     $limit_perc = $mem_usage * 100 / $memory_limit;
     
     echo 'Memory usage after iteration ' . $i . ': <strong>' . round($mem_usage / 1024) . 'KB</strong> ';
     echo '(' . round($limit_perc) . '% of the available memory for the script)<br>';
   }
}

$mem_usage = memory_get_usage();
echo 'Memory usage after the loop: <strong>' . round($mem_usage / 1024) . 'KB</strong><br>';

