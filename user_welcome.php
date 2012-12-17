<?php
include_once('functions.php');
include_once('header.php');
?>

<div class="container paddingtop40">
  <div class="row">
    <div class="span12">
      
      <?php
       
          echo 'Welcome (username)! ';
          echo "Welcome back bro! You are logged in as " . $_SESSION["name"] . ".";
      ?>


      </div> <!-- close span -->


  </div> <!-- ended row -->
</div>

<?php include_once ('footer.php'); ?>
