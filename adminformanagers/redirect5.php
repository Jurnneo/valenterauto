<?php
require "includes/config.php";
?>
<?php 
 $articless = mysqli_query($connection, "SELECT * FROM alternatorsphoto WHERE id = " . (int) $_GET['id']);
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
                <img src="/media/images/post-image.jpg">
                <div class="full-text">
                   NOT FOUND
                </div>
              </div>
            </div>
          </section>
  <?php
} else
{
   $artt = mysqli_fetch_assoc($articless);
   ?>

      <?php
       }
     ?>


 <?php 
 $articless1 = mysqli_query($connection, "SELECT * FROM alternators WHERE linkhref = '".$artt['blickhref']."'");
if ( mysqli_num_rows($articless1) <= 0 )
{
  ?>
     <div id="content">
      <div class="container">
        <div class="row">
          <section class="content__left col-md-8">
            <div class="block">
              <h3>NOT FOUND</h3>
              <div class="block__content">
                <img src="/media/images/post-image.jpg">
                <div class="full-text">
                   NOT FOUND
                </div>
              </div>
            </div>
          </section>
  <?php
} else
{
   $artt1 = mysqli_fetch_assoc($articless1);
   ?>

      <?php
       }
     ?>    
<!DOCTYPE html>
<html>
<head>
<title>test</title>
<meta charset="UTF-8">
<meta http-equiv="refresh" content="0.2; url='articlepos.php?id=<?php echo $artt1['id']; ?>'" />
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,500" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
<h1><?php echo $artt['id'];?></h1>
<h1><?php echo $artt1['id'];?></h1>


<?php
  $msg = "";
   // $target = "img/".basename($_FILES['image']['name']);
   // $input_image =$_FILES['image']['name'];
   // $output_image="image_out.jpg";
   // $width = 200;
   // $height = 200;
   // $org_info = getimagesize($input_image);
  //  $resource_org=imagecreatefromjpeg($input_image);
  //  $scaled=imagescale($resource_org,$width,$height);
  //  imagejpeg($scaled,$output_image);
  //  imagedestroy($resource_org);
  //  imagedestroy($scaled);
    if (isset($_POST['uploaddEL'])) {
    $idPost = $_POST['uploaddEL'];
    $sql = "DELETE FROM `alternatorsphoto` WHERE id = '".$artt['id']."'";
    mysqli_query($connection, $sql);
    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
      $msg = "Image uploaded successfully";
    }else{
      $msg = "Failed to upload image";
    }
  }
  var_dump($sql);
  $result = mysqli_query($connection, "SELECT * FROM alternatorsphoto");
?>   
</body>
</html>