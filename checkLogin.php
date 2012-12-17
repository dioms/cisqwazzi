<?php
  
  include_once('functions.php');
  $uname=$_POST['username'];
  $pword = $_POST['password'];

// setup connection string

//find username from db
  $q = "SELECT name FROM user WHERE username = '$uname'";

//run the query
  $result = mysqli_query($dbc,$q) 
    or die('Unable to connect to MySQL Server! Process aborted...');

/* if username wasn't matched, return a '1' error to login page */
if (mysqli_num_rows($result)==0)
  {
    header('Location: user_signin.php?lerror=1');
    exit;
  }


//if username does match, then continue to check pword match
  $q = "SELECT * FROM user WHERE username = '$uname' AND password = SHA1('$pword')" ;
  $result = mysqli_query($dbc,$q) 
    or die('Unable to connect to MySQL Server! Process aborted...');

// if pword doesnt match, throw error
  if(mysqli_num_rows($result)==0)
  {
    header('Location: user_signin.php?lerror=2');
    exit;
  } 

// else, continue on and log user in.
  mysqli_close($dbc);
  session_start();

  $row = mysqli_fetch_array($result);
  $_SESSION['name']= $row['name'];
  header('Location: user_welcome.php');
  exit;

//pass a error 3 to customerLogin.php for testing
header('Location: user_signin.php?lerror=3');
exit;
?>