<?php
include_once('functions.php');
include_once('header.php');
?>

<!--portfolio slider -->
<div id="welcome">
  <div class="container">
    <div class="welcome_box">
     <h1> Welcome to Qwazzi! </h1>
      <h4> Your number one place to buy contemporary canvas art. </h4>
    </div>
    <!--Slider area with featured artists and shit-->
  </div>
</div>


<!-- main content -->
<div class="container">
  <div class="row">
    <div class="span6">

      <ul class="thumbnails">
        <li class="span6">
          <div class="thumbnail">
          <img src="holder.js/60x60" class="pull-left img-rounded">
            <div class="art-info">
              <h3>Art Title</h3>
              <p>Username</p>
            </div>
              <a href="product_show.php" class="thumbnail">
                <img data-src="holder.js/450x300" alt="artwork thumbnail">
              </a>
          </div>
        </li>
      </ul>      

    </div> <!-- close span6 -->

    <div class="span6">

      <ul class="thumbnails">
        <li class="span6">
          <div class="thumbnail">
          <img src="holder.js/60x60" class="pull-left img-rounded">
            <div class="art-info">
              <h3>Art Title</h3>
              <p>Username</p>
            </div>
              <a href="#" class="thumbnail">
                <img data-src="holder.js/450x300" alt="artwork thumbnail">
              </a>
          </div>
        </li>
      </ul>      

    </div> <!-- close span6 -->



  </div><!-- closed row -->


</div> <!-- closed container -->

<?php include_once ('footer.php'); ?>