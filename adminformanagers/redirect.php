<?php
require "includes/config.php";
?>
<!DOCTYPE html>
<html>
<head>
<title>test</title>
<meta charset="UTF-8">
<meta http-equiv="refresh" content="0.2; url='indexCatalog.php'" />
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,500" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</head>
<body>

<h1>REDIRECT</h1>

<?php
  $msg = "";

    if (isset($_POST['upload'])) {
    $target = "../img/imgProducts/".basename( time() . $_FILES['image']['name']);
    $image = time() . $_FILES['image']['name'];

    $title = mysqli_real_escape_string($connection, $_POST['title']);

    $linkhref = mysqli_real_escape_string($connection, time() . $_POST['title']);

    $categoryadmin = mysqli_real_escape_string($connection, $_POST['categoryadmin']);

    $articoladmin = mysqli_real_escape_string($connection, $_POST['articoladmin']);
    

    $sql = "INSERT INTO alternators (link, linkhref, imgsrc, category, voltag, product_status) VALUES ('$title', '$linkhref', '/img/imgProducts/$image', '$categoryadmin', '$articoladmin', '1' )";
    mysqli_query($connection, $sql);


    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
      $msg = "Image uploaded successfully";
    }else{
      $msg = "Failed to upload image";
    }
  }
  $result = mysqli_query($connection, "SELECT * FROM alternators ORDER BY id DESC");

?>   

<?php
  $msg = "";
  
    if (isset($_POST['uploaddELArt'])) {
    $idPostArt = $_POST['uploaddELArt'];

    $sql = "DELETE FROM `alternators` WHERE id = '$idPostArt'";
    mysqli_query($connection, $sql);

    $sql1 = "DELETE FROM `alternatorsphoto` WHERE blickhref = '$idPostArt'";
    mysqli_query($connection, $sql1);

    var_dump($sql);

    var_dump($sql1);

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
      $msg = "Image uploaded successfully";
    }else{
      $msg = "Failed to upload image";
    }
  }

  $result = mysqli_query($connection, "SELECT * FROM alternators ORDER BY id DESC");

?>   


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



    if (isset($_POST['upload2132'])) {

    $target = "../img/imgSlick/".basename($_FILES['image']['name']);

    $imageslide123 = $_FILES['image']['name'];

    $sizeee123 = mysqli_real_escape_string($connection, $_POST['sizeee123']);

    $colorrree123 = mysqli_real_escape_string($connection, $_POST['colorrree123']);

    $sup123 = mysqli_real_escape_string($connection, $_POST['sup123']);

    $tip123 = mysqli_real_escape_string($connection, $_POST['tip123']);

    $tex123 = mysqli_real_escape_string($connection, $_POST['tex123']);

    $pri123 = mysqli_real_escape_string($connection, $_POST['pri123']);

    $edi123 = mysqli_real_escape_string($connection, $_POST['edi123']);

    $width123 = mysqli_real_escape_string($connection, $_POST['width123']);

    $height123 = mysqli_real_escape_string($connection, $_POST['height123']);

    $edim2123 = mysqli_real_escape_string($connection, $_POST['edim2123']);

    $edibuc123 = mysqli_real_escape_string($connection, $_POST['edibuc123']);

    $edicomp123 = mysqli_real_escape_string($connection, $_POST['edicomp123']);

    $edicomphowmuch123 = mysqli_real_escape_string($connection, $_POST['edicomphowmuch123']);

    $sql = "INSERT INTO imgslick (denumirea, postId, color, size, suprafata, tip, texture, price, edinitsa, width, height, edinitsam2, edinitsabuc, edinitsamorebuc, edinitsaumnoj, product_status ) VALUES ('$imageslide123', '".$artt['id']."', '$colorrree123', '$sizeee123', '$sup123', '$tip123', '$tex123', '$pri123', '$edi123', '$width123', '$height123', '$edim2123', '$edibuc123', '$edicomp123', '$edicomphowmuch123', '1')";

    mysqli_query($connection, $sql);





    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {

      $msg = "Image uploaded successfully";

    }else{

      $msg = "Failed to upload image";

    }

  }



  $result = mysqli_query($connection, "SELECT * FROM imgslick");



?>    

</body>

</html>