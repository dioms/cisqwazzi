<?php
include_once ('functions.php');
include_once ('header.php');


$user_id = $_SESSION['user_id'];

$query="SELECT * FROM  cart WHERE user_id='$user_id'";
$result=mysqli_query($dbc,$query);

echo $rows['art_id'];



?>

<div class="container paddingtop40">

  <div class="row"><div class="span12">

<?

$mess = isset($_REQUEST['mess']) ? $_REQUEST['mess'] : null;
if($mess == 1) {
  echo '<div class="alert alert-success">You have successfully updated your shopping cart!</div>'; }

while($rows=mysqli_fetch_array($result)){ 
$art_id = $rows['art_id'];
$q2 = "SELECT * FROM art WHERE art_id='$art_id'";
$r2 = mysqli_query($dbc, $q2);
$rows2 = mysqli_fetch_array($r2);


$subtotal = $rows['quantity']*$rows2['price'];
$total = $total + $subtotal;

echo $rows2['title'] . '||| quantity: ' . $rows['quantity']. '(times price)' .$rows2['price']. '==='. $subtotal . ' actual remaining---'. $rows2['quantity'] .'<br />';

}

echo $total;

?>
<br />
<btn class="btn">Proceed to Checkout</btn>

  </div></div>

</div>
<?
include_once('footer.php');
?>