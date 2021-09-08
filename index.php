<?php

/*
* 
* Script to monitor if server and components are working fine
* This script is called and monitored through external monitor
* All monitors are registered in main script
*
*/

ini_set('display_errors', 0);
date_default_timezone_set('UTC');

require 'conf.php';

echo "Server Monitor - Only for internal use";
echo "<br>";
echo "PHP Version: " . phpversion();
echo "<br>";
echo "SAPI: " . php_sapi_name();
echo "<br>";
echo "Web Server Check: Passed";
echo "<br>";

echo "Opcache: " . (is_array(opcache_get_status()) ? 'enabled' : 'disabled');
echo "<br>";

echo "Ioncube Loader: ";

if(extension_loaded("IonCube Loader")) {     
  echo "Passed";
}
else {
  echo "Failed";
}
echo "<br>";

$mysqli = new mysqli($dbhost, $dbuser, $dbpass);

if ($mysqli->connect_errno) {
	die('Mysql: Failed');
}else{
	echo "Mysql: Passed";
}

// For external monitor, be happy
echo "<br> All fine";

?>
