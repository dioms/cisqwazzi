<?php
include_once ('functions.php');
include_once ('header.php');


$user_id = $_SESSION['user_id'];


$query="SELECT * FROM  cart WHERE user_id='$user_id'";
$result=mysqli_query($dbc,$query);
$rows=mysqli_fetch_array($result);



?>

<div class="container paddingtop40"><div class="row"><div class="span12">

<?

while($rows=mysqli_fetch_array($result)){ 
$art_id = $rows['art_id'];
$q2 = "SELECT * FROM art WHERE art_id='$art_id'";
$r2 = mysqli_query($dbc, $q2);
$rows2 = mysqli_fetch_array($r2);
$subtotal = $rows['quantity']*$rows2['price'];


echo $rows2['title'] . '||| quantity: ' . $rows['quantity']. '(times price)' .$rows2['price']. '==='. $subtotal .'<br />';

}


?>


</div></div></div>
<?
include_once('footer.php');
?>