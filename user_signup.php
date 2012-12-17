<?php
include_once('functions.php');
include_once('header.php');
?>

<div class="container paddingtop40">
  <div class="row">
    <div class="span12">
      
      <div id="userform">
      <h4>
        <span class="formheader">Sign up Form: </span>
      </h4>

      <form action="user_register.php" method="post">

        <!-- Name -->
        <label for="name"> Name: </label>
        <input type="text" id="name" name="name" value="" required autofocus title="Name: 4-30 chars uppercase/1owercase only!"
        pattern="[a-zA-Z- ][^\/\\]{3,29}" 
        onfocus="nmmsg()" />
        <br />

        <!-- User Name -->
        <label for="username"> User Name: </label>
        <input type="text" id="username" name="username" value="" 
        required title="Username: 4-15 chars basically everything"
        pattern="[^\/\\][a-zA-Z0-9?.!@#$%^*_-]{3,14}"
        onfocus="unmmsg()" />
        <br />

        <!-- Email -->
        <label for="email"> Email Address: </label>
        <input type="text" id="email" name="email" value="" 
        required maxlength="50" title="Email: Enter a valid email!"
        pattern="[^\/\\][a-z0-9.-_$]+@[a-z0-9.-_]+\.[a-z]{2,6}"
        onfocus="emsg()" />
        <br />

        <!-- Password -->
        <label for="password"> Password: </label>
        <input type="password" id="password" name="password" value="" 
        required title="Password: 5-15 characters!"
        pattern="[^\/\\][a-zA-Z0-9?.!@#$%^*-_]{4,14}" 
        onchange="form.reenter.pattern = this.value" 
        onfocus="pmsg()" />
        <br />

        <!-- Reenter -->
        <label for="reenter"> Reenter Password: </label>
        <input type="password" id="reenter" name="reenter" value="" 
        required title ="Reenter Password: has to match password above!"
        onfocus="rpmsg()" />
        <br />

        <!-- Submit Button -->
        <input type ="submit" class="btn btn-success" value="Sign Me Up!" />

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