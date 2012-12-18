<?php
include_once('functions.php');
include_once('header.php');

  if(isset($_SESSION["loggedin"]))
  {
   header('Location: index.php?mess=2');
  }

?>

<div class="container paddingtop40">
  <div class="row">
    <div class="span12">
      
      <?php
        //show appropriate messaging for invalid user names
        if($_GET["lerror"]==1)
        {
          echo '<div class="alert alert-error">User Name not found!</div>';
        }
        if($_GET["lerror"]==2)
        {
          echo '<div class="alert alert-error">Invalid Password!</div>';
        }
        if($_GET["lerror"]==3)
        {
          echo '<div class="alert alert-error">Returned.. Please log in </div>';
        }
        if($_GET["lerror"]==4)
        {
          echo '<div class="alert alert-error"> Please fill in both username and password. </div>';
        }
        
      ?>





      <div id="userform">
      <h4>
        <span class="formheader">Login Form: </span>
      </h4>

      <form action="checkLogin.php" method="post">

        <!--- user name -->
        <label for="username">Username:</label>

        <input type="text" id="username" name="username" value="" 
        required autofocus 
        title="User Name 4-15 chars"
        pattern="[a-zA-Z0-9?.!@#$%^*-_()]{4,15}"/>

        <br />

        <!--- password -->

        <label for="password">Password:</label>

        <input type="password" id="password" name="password" value="" 
        required title= "Password 5-15 chars"
        pattern="[a-zA-Z0-9?.!@#$%^*-_()]{5,15}"
        />

        <br />

        <!-- Submit Button -->
        <input type ="submit" class="btn btn-success" value="Login" />

        <!-- Reset Button -->
        <span class="reset">
          <input type="reset" class="btn btn-danger" value="Clear form!" onclick="history.go(0)" />
        </span>

      </form>
      </div>
      </div> <!-- close span -->


  </div> <!-- ended row -->
</div>

<?php include_once ('footer.php'); ?>
