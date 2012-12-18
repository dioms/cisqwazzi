<? include_once('functions.php'); 

$art_id = $_POST['art_id'];
$user_id = $_SESSION['user_id'];
$quantityadded = $_POST['quantityadded'];
$price = $_POST['price'];


  $dbc = mysqli_connect ($dbhost, $dbuser, $dbpass, $dbname)
    or die ('Error connecting to MySQL server.');

  //if user already has art in cart, update that number 
  $checkquery = "SELECT * FROM cart WHERE user_id = '$user_id' AND art_id ='$art_id'";
  $result= mysqli_query($dbc,$checkquery) or die('Unable to connect to MySQL Server! Process aborted...');

  if(mysqli_num_rows($result)==0)
  {
    $q = "INSERT INTO cart (user_id, art_id, quantity)
    VALUES ('$user_id', '$art_id', '$quantityadded')";
    mysqli_query($dbc, $q)
    or die('Error connecting to Database'); 
   header("location:shopping_cart.php?mess=1");
  }
  else {
    //update existing table
    $q = "UPDATE cart SET quantity = $quantityadded WHERE user_id = '$user_id' AND art_id ='$art_id'";
    mysqli_query($dbc,$q)
    or die('Error connecting to Database');
    header("location:shopping_cart.php?mess=1");
  }



?>
