<?php
 //define('HOST','connect-practicingbee.rhcloud.com');
 //define('USER','adminmVT8KhB');
 //define('PASS','65VQUEAcTSvN');
// define('DB','music_database');
 //$con = mysqli_connect(HOST,USER,PASS,DB) or die('Unable to Connect');
 
 
/*
 * All database connection variables
 */


define('DB_HOST', getenv('OPENSHIFT_MYSQL_DB_HOST'));
define('DB_PORT', getenv('OPENSHIFT_MYSQL_DB_PORT'));
define('DB_USER', getenv('OPENSHIFT_MYSQL_DB_USERNAME'));
define('DB_PASS', getenv('OPENSHIFT_MYSQL_DB_PASSWORD'));
define('DB_NAME', getenv('OPENSHIFT_GEAR_NAME'));
define('DB','music_database');

$dbhost = constant("DB_HOST"); // Host name 
$dbport = constant("DB_PORT"); // Host port
$dbusername = constant("DB_USER"); // Mysql username 
$dbpassword = constant("DB_PASS"); // Mysql password 
$db_name = constant("DB_NAME"); // Database name

/*echo $dbhost." ";
echo $dbport." ";
echo $dbusername." ";
echo $dbpassword." ";
echo $db_name." ";
echo $dbport." ";*/

$con = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB) or die("Error: " . mysqli_error($con));
mysqli_select_db($con, DB) or die("Error: " . mysqli_error($con));;
 

 
 ?>