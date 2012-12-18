<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Qwazzi</title>
    
  <!-- Mobile viewport optimized: h5bp.com/viewport -->
  <meta name="viewport" content="width=device-width">

  <link href="css/stylesheets.css" rel="stylesheet">

  <!-- Google Fonts -->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

  <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

  
  <div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container">
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
      <a class="brand" href=".">Qwazzi</a>
      <div class="nav-collapse">
        <ul class="nav">
<!--           <li><a href="#"><i class="icon-home icon-white"></i> Home</a></li>
 -->          <li><a href="#">Browse</a></li>
              <li><a href="product_upload.php">Upload</a></li>

        </ul>
        <ul class="nav pull-right">
          <?php 
          if (!$_SESSION["loggedin"]) { 
            echo '<li><a href="user_signin.php"> Sign In </a></li>';
            echo '<li><a href="user_signup.php"> Sign Up </a></li>';
          } 
          else {

            echo '<li><a href="shopping_cart.php"'.$_SESSION['user_id'].'><i class="icon-shopping-cart icon-white"></i> My Cart</a></li>';
            echo '<li><a href="#">'. $_SESSION['user_id'] . $_SESSION['name'] .'</a></li>';
            echo '<li><a href="user_logout.php"> Sign Out </a></li>';
          }

          ?>
        </ul>


      </div><!-- /.nav-collapse -->
    </div><!-- /.container -->
  </div><!-- /.navbar-inner -->
</div><!-- /.navbar -->


</head>

<body>
  <div class="white">
  <script src="js/jquery-1.7.2.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/holder.js"></script>
  <script src="js/wysihtml5-0.3.0.js"></script>
  <script src="js/bootstrap-wysihtml5.js"></script>

