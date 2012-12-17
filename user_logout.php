<?
include_once('functions.php');
//start session
  session_start();

//destroy(logoff) session
  session_unset();
  session_destroy();

  header('location: .');
?>