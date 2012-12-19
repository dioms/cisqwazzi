<?php
include_once ('functions.php');
include_once ('header.php');


$user_id = $_SESSION['user_id'];

//find the associated artwork ids that the user has added in shopping cart
$query="SELECT * FROM cart WHERE user_id='$user_id'";
$result=mysqli_query($dbc,$query);

?>

<div class="container paddingtop40">
  <div class="row">
    <div class="span12">  
      <h2> My Shopping Cart </h2>
      <?php $mess = isset($_REQUEST['mess']) ? $_REQUEST['mess'] : null;
      if($mess == 1) {
       echo '<div class="alert alert-success">You have successfully updated your shopping cart!</div>'; } ?> 
    </div>

    <div class="span8"></div>
    <div class="span1">Price</div>
    <div class="span1">Quantity</div>
    <div class="span2">Sub Total </div>
  </div>   
<hr class="soft">

<div class="row">
<div class="span12">
<?php 
//for all the art_ids, fetch the title, quantity remaining, and price 
  

while($rows=mysqli_fetch_array($result)){ 
  $art_id = $rows['art_id'];
  $q2 = "SELECT * FROM art WHERE art_id='$art_id'";
  $r2 = mysqli_query($dbc, $q2);
  //rows = cart table, rows2 = art table
  $rows2 = mysqli_fetch_array($r2);
  //quantity that was added in cart
  $qadded = $rows['quantity'];
  $qremaining = $rows2['quantity'];


  $subtotal = $qadded * $rows2['price'];
  $total = $total + $subtotal;

  echo
  '<div class="span8"><a href="product_show.php?art_id='.$rows2['art_id'].'"><span class="cart-art-title">'
    .$rows2['title'].'</span></a><br />';

  //check to see if cart quantity exceeds remaining stock    
  if ($qadded>$qremaining){
    echo '<span class="alert-error italic small"> Not enough stock. Please reduce your cart. ('. $qremaining .' items in stock)</span>';
    $notenough = $notenough+1;

  } 
  else {
    echo '<span class="alert-success italic small">In Stock. ('. $qremaining .' items in stock)</span>';
  }
  echo '</div>';

  echo '<div class="span1">
    $'. $rows2['price'] .
  '</div>';

?>
  
  <!-- create small form for updating quantity in cart-->
  <div class="span1">
    <form method="post" class="form-inline" action="add_to_cart.php">
      <input type="hidden" name="art_id" value="<? echo $art_id; ?>" />
      <select name="quantityadded" class="span1">
        <option selected> <? echo $qadded ?> </option>
        <? for ($i=0; $i<=$qremaining; $i++) { ?>
        <option value="<? echo $i; ?>"><? echo $i; ?>
        </option>  

        <? } ?>
      </select>
      <input type="submit" class="btn btn-mini" value="update" />
    </form>
  </div>




<?
  echo '<div class="span1">$'
    .$subtotal. 
  '</div>';

}


?>
</div></div>

<hr class="soft">
<div class="row">
  <div class="span12">
    <div class="well">
    <form class="form-inline" method="post" action="checkout_logic.php">
        <span class="total-price pull-right">Total Price: $<? echo $total; ?></span>
          <br /><br />

        <? while($rows=mysqli_fetch_array($result)){ 
          $art_id = $rows['art_id'];
          $q2 = "SELECT * FROM art WHERE art_id='$art_id'";
          $r2 = mysqli_query($dbc, $q2);
          //rows = cart table, rows2 = art table
          $rows2 = mysqli_fetch_array($r2);
          //quantity that was added in cart
          $qadded = $rows['quantity'];
          $qremaining = $rows2['quantity'];?>

        <input type="hidden" name="total" value="<? echo $total; ?>" />
        <input type="hidden" name="qadded" value="<? echo $qadded; ?>" />
        <input type="hidden" name="qremaining" value="<? echo $qremaining; ?>" />
        <!-- save quantity for each --> 
        <input type="hidden" name="art_id" value="<? echo $art_id; ?>" />
        <?
      } ?>
  
  <? //check to see if cart quantity exceeds remaining stock    
  if ($notenough>0){
    echo '<span class="pull-right red">There are some items in your cart that are not available. Please update the quantity to continue checking out.</span>';
  } else {
    echo '<button type="submit" class="btn pull-right"><i class="icon-ok"></i> Proceed to Checkout </button>';
  } ?>


    </form>
    </div>

  </div>

</div><!-- close row -->
</div>

<?
include_once('footer.php');
?>