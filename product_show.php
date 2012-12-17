<?php
include_once('functions.php');
include_once('header.php');
?>

<div class="container paddingtop40">
  <div class="row">
    <div class="span6">

      <ul class="thumbnails">
        <li class="span6">
          (breadcrumbs)
          <div class="thumbnail">
            <img src="holder.js/450x300" alt="thumbnail image">
          </div>
          (jquery actions with zoom in to go here)
        </li>
      </ul>      

    </div> <!-- close first span6 -->
    <div class="span6">
      <h1> Title of the art work bro </h1>
        <p>by Artist name</p>
         <img src="holder.js/60x60" class="img-rounded">

      <hr class="soft">

      <div class="row">
        <div class="span6">
          dimensions
          <p> description of this shit </p>
        
       </div>  <!-- close span3 -->
      </div>

      <hr class="soft">
      
      <div class="row">
        <div class="span6">
          Price
        <p> in stock: x</p>

        </div>
      </div> <!-- close nested row -->
      



      <hr class="soft">

      Quantity (box)
      <a hreft="#" class="btn btn-success "><i class="icon-shopping-cart icon-white"></i> Proceed to Checkout</a> 

      <a hreft="#" class="btn "><i class="icon-plus"></i> Add to Cart</a>
      


    </div> <!-- close second span6 -->

  </div><!-- close row -->

  <div class="row">

  </div> <!-- close row -->

</div> <!-- closed container -->


<?php include_once ('footer.php'); ?>