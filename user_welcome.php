<?php
include_once('functions.php');
include_once('header.php');

  
?>

<div class="container paddingtop40">
  <div class="row">
    <div class="span12">
      
      <?php
      // if(!isset($_SESSION["name"]))
      // {
      //   header('Location: user_signin.php');
      //   exit;
      // } 
        echo "Welcome back " . $_SESSION["name"] . ".";
        echo  '<a href="user_logout.php">log out </a>';
      
      ?>



      </div> <!-- close span -->


  </div> <!-- ended row -->
</div>

<?php include_once ('footer.php'); ?>
