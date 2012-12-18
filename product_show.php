<?php
include_once('functions.php');
include_once('header.php');


$tbl_name ="art";
$art_id=$_GET['art_id'];

$query="SELECT * FROM  $tbl_name WHERE art_id='$art_id'";
$result=mysqli_query($dbc,$query);

$rows=mysqli_fetch_array($result);

$user_id = $rows['user_id'];

$query2= "SELECT name FROM user WHERE user_id='$user_id'";
$result2 = mysqli_query($dbc,$query2);
$rows2 = mysqli_fetch_array($result2);
$username = $rows2['name'];

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
      <h1> <? echo $rows['title'];?> </h1>
        <p>by <? echo $username; ?></p>
         <img src="holder.js/60x60" class="img-rounded">

      <hr class="soft">

      <div class="row">
        <div class="span6">
          <b>ADD Dimensions to Database</b>
          <p> <? echo $rows['description']; ?></p>
        
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