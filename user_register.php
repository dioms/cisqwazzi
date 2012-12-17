<?php

  include_once('functions.php');
  //set php variables
  $name = $_POST['name'];
  $uname = $_POST['username'];
  $pword = $_POST['password'];
  $email =$_POST['email'];
  
    
  //insert into db
  $query =
  "INSERT INTO user(name,username,password,email)" .
  "VALUES('$name','$uname', SHA1('$pword'),'$email')";
  
  $result = mysqli_query($dbc,$query)
    or die('Unable to write to MySQL database! Process aborted');
  //close db
  mysqli_close($dbc); 

  header('Location: user_signin.php?welcome');
  exit;

?>