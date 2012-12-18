<?php 

//functions.php
$dbhost  = 'localhost';    // Unlikely to require changing
//$dbname  = 'root'; // Modify these...
$dbuser  = "root";     // ...variables according
$dbpass  = "root";     // ...to your installation
$dbname = 'qwazzi';  //from cis class?


$dbc = mysqli_connect ($dbhost, $dbuser, $dbpass, $dbname)
  or die ('Error connecting to MySQL server.');

// mysql_connect($dbhost, $dbuser, $dbpass) or die(mysql_error());
// mysql_select_db($dbname) or die(mysql_error());
session_start();
?>