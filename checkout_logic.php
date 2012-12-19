<? include_once('functions.php'); 

session_start()

//get the art_id and quantity from shopping_cart.php
$products = $_SESSION['products']

foreach ($products as $product) {

echo 'quantity added: ' .$product[2] . '<br />'; 
echo 'quantity remaining: ' . $product[1] . '<br />';
echo 'art id: ' . $product[0];

}




?>



