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
            <img src="http://www.artbylt.com/Images/contemporary-art-45500.jpg" width="450" height="300" alt="thumbnail image">
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
          <p> <? echo $rows['description']; ?></p>
        
       </div>  <!-- close span3 -->
      </div>

      <hr class="soft">
      
      <div class="row">
        <div class="span6">
        <p>Price: <? echo $rows['price']; ?></p>
        <p>In Stock: <? echo $rows['quantity']; ?> </p>

        </div>
      </div> <!-- close nested row -->
      



      <hr class="soft">

      <form class="well form-inline" method="post" action="add_to_cart.php"> 
        <input type="hidden" name="price" value="<? echo $rows['price']; ?>" />
        <input type="hidden" name="art_id" value="<? echo $art_id; ?>" />
        How many do you want to buy?<br /> 
        <? 
        // if quantity > 0 
        if ($rows['quantity']>0) {
          //for loop to go from 1 to existing stock.
         echo '<select name="quantityadded" class="span1">';
          for($i=1; $i<=$rows['quantity']; $i++) 
          { ?>

              <option value="<? echo $i; ?>"><? echo $i; ?>
              </option>
            <?
          } 
          echo '</select>';
        echo '<button type="submit" class="btn btn-success "><i class="icon-shopping-cart icon-white"></i> Add to Cart</button>';
            
        } //else report 'out of stock'  
        else {
          echo '<span class="red">Sorry... We are currently out of stock and therefore you can not add this to your cart.</span>';
        } 
          ?>


      </form>

<!-- 
      <a hreft="#" class="btn "><i class="icon-plus"></i> Add to Cart</a> -->
      


    </div> <!-- close second span6 -->

  </div><!-- close row -->

  <div class="row">

  </div> <!-- close row -->

</div> <!-- closed container -->


<?php include_once ('footer.php'); ?>