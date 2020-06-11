<?php


$cookie_name = "user";
$cookie_value = base64_encode("John Doe");
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 seconds = 1 day
setcookie($cookie_name, "johm doe", time() + (0), "/");//to destroy cookie set second to zero


// session_start();
// $_SESSION["favcolor"] = "green"; 


// Session Are Stored On server May be on database or 
//file and after store return encoded session id 
// which is stored on client sites in cookies
// so server can identify session with session id 
//which is destroy if we close browser
//once session generated you can use any browser tab untill close browser same for cookies
// but it is avalible untill expiration time or 
//user manually clean cookies


$red = @file ('non_existent_file'); // here @operator is to used to not get error if any error is genrated by xpression

?>


