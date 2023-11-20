<?php
require "includes/config.php";
?>
<?php 

 $articless = mysqli_query($connection, "SELECT * FROM rotorelinitial WHERE id = " . (int) $_GET['id']);

if ( mysqli_num_rows($articless) <= 0 )

{
  ?>

    <div id="content">
      <div class="container">
        <div class="row">
          <section class="content__left col-md-8">
            <div class="block">
             <h3>NOT FOUND</h3>
              <div class="block__content">
              </div>
            </div>
          </section>
  <?php
} else
{
   $artt = mysqli_fetch_assoc($articless);
   ?>
<!DOCTYPE html>
<html>
<head>
<title>UPDATE</title>
<meta charset="UTF-8">
<meta http-equiv="refresh" content="0.2; url='articlepos.php?id=<?php echo $artt['id'];?>'" />
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,500" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
<h1><?php echo $artt['link'];?></h1>
   <?php
       }
     ?>
<?php
  $msg = "";
    if (isset($_POST['upload2132upd'])) {
    $title = mysqli_real_escape_string($connection, $_POST['title']);
    $categoryadmin = mysqli_real_escape_string($connection, $_POST['categoryadmin']);
    $articoladmin = mysqli_real_escape_string($connection, $_POST['articoladmin']);
    $boolean = mysqli_real_escape_string($connection, $_POST['boolean']);

    $sql = "UPDATE rotorelinitial SET link = '$title', category = '$categoryadmin', voltag = '$articoladmin', product_status = '$boolean' WHERE id =  '".$artt['id']."'";

    mysqli_query($connection, $sql);

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
      $msg = "Image uploaded successfully";
    }else{
      $msg = "Failed to upload image";
    }
  }


  var_dump($sql);

  $result = mysqli_query($connection, "SELECT * FROM rotorelinitial");

?>

<?php
  $msg = "";
    if (isset($_POST['upload2132updupd'])) {
    $target = "../img/imgProducts/".basename( time() . $_FILES['image']['name']);
    $imageslideInt = time() . $_FILES['image']['name'];
    $sql = "UPDATE rotorelinitial SET imgsrc = '/img/imgProducts/$imageslideInt' WHERE id =  '".$artt['id']."'";
    mysqli_query($connection, $sql);
    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
      $msg = "Image uploaded successfully";
    }else{
      $msg = "Failed to upload image";
    }
  }
  $result = mysqli_query($connection, "SELECT * FROM rotorelinitial");
?>   

</body>
</html>