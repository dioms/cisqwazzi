<? include_once('functions.php'); 

$art_id = $_POST['art_id'];
$user_id = $_SESSION['user_id'];
$quantityadded = $_POST['quantityadded'];
$price = $_POST['price'];


  $dbc = mysqli_connect ($dbhost, $dbuser, $dbpass, $dbname)
    or die ('Error connecting to MySQL server.');

  $q = "INSERT INTO cart (user_id, art_id, quantity)
  VALUES ('$user_id', '$art_id', '$quantityadded')";
  mysqli_query($dbc, $q)
  or die('Error connecting to Database');


header("location:index.php");
echo $art_id;
echo '<br />';
echo $quantityadded;
echo '<br />';
echo 'price: $' . $price;

$total = $quantityadded * $price;
echo '<br />';
echo 'total amount:'. $total;


?>
