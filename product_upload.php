<?php
include_once ('functions.php');
include_once ('header.php');
?>



<div class="container paddingtop40">
  <div class="row">
    <div class="span12">

<?php
  if($_SESSION["loggedin"])
  {
   

    if($_SERVER['REQUEST_METHOD'] != 'POST') {
    echo '
      <h1> Upload Canvas Artwork </h1>
      <br />
      
      <form enctype="multipart/form-data" method="post" action="">
        <input type="hidden" name="MAX_FILE_SIZE" value="32768" />

        photo:
        <input type="file" id="photo" name="photo" required title="Please upload an image file" />
        <br />

        <label for="title"> Title: </label>
        <input type="text" id="title" name="title" rows="1" class="span12" placeholder="Title of contemporary canvas artwork" title="Title: 2~50 characters please"
        pattern="[a-zA-Z- ][^\/]{2,50}"  autofocus required >
        </textarea>

        <label for="description"> Description: </label>
        <textarea name="description" id="product-description" rows="3" class="span12" maxlength="300"
        title="Description: 10~300 characters please"
        placeholder="Description of artwork" required 
        onfocus="cmsg()">
        </textarea>

        <label for="price"> Price </label>
        <input type="text" id="price" name="price" value="" required title="Price: Preferably round up to only integers only!" class="span1"
        pattern="[0-9.]{1,10}" 
        onfocus="nmmsg()" 
        placeholder="Price"/><span class="help-inline">U.S. dollars</span>

        <br />

        <label for="quantity"> Quantity in stock: </label>
        <input type="text" id="quantity" name="quantity" value="1" required title="Quantity: Only integers!" class="span1" pattern="[0-9]{1,10}" placeholder="Quantity" />


        <br />
        <input type ="submit" class="btn" value="Submit" />

      </form>';
   
    }
    else {
      //insert into database
      $title = $_POST['title'];
      $description = $_POST['description'];
      $price = $_POST['price'];
      $quantity = $_POST['quantity'];
      $user_id = $_SESSION['user_id'];
      $photo = $_FILES['photo']['name'];


      if(!empty($title) && !empty($description) && !empty($price) && !empty($quantity)) {

//        $target = GW_UPLOADPATH.$photo;
//        move_uploaded_file($_FILES['photo']['tmp_name'], $target);


        $dbc = mysqli_connect ($dbhost, $dbuser, $dbpass, $dbname)
          or die ('Error connecting to MySQL server.');

        $q = "INSERT INTO art (title, description, price, quantity, user_id, photo)
        VALUES ('$title', '$description', '$price', '$quantity', '$user_id', '$photo')";
        mysqli_query($dbc, $q)
        or die('Error connecting to Database');

        $query = "SELECT art_id FROM art WHERE title='$title' and description='$description' and user_id ='$user_id' and photo = '$photo'";
        $result = mysqli_query($dbc,$query);
        $rows=mysqli_fetch_array($result);

        header("location:product_show.php?art_id=".$rows['art_id']);
        
      }

    }


  }
  else {
    
    echo 'Please <a href="user_signin.php">login</a> to upload.';

  //WHY DOESNT THIS WORK!!!!!!!//
    //header('Location:user_signin.php?lerror=3');
  }

?>

    </div>
  </div>
</div>



<?
include_once('footer.php');
?>


<script type="text/javascript">
  $('#product-description').wysihtml5();

  $('#product-title').wysihtml5({
  "font-styles": false, //Font styling, e.g. h1, h2, etc. Default true
  "emphasis": false, //Italics, bold, etc. Default true
  "lists": false, //(Un)ordered lists, e.g. Bullets, Numbers. Default true
  "html": false, //Button which allows you to edit the generated HTML. Default false
  "link": false, //Button to insert a link. Default true
  "image": false, //Button to insert an image. Default true,
  "color": false //Button to change color of font  
});
</script>

