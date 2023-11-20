<?php
require "../../includes/db_connect.php";

$sorting = $_GET["sort"];

$cat = $_GET["cat"];
$cat = strip_tags($cat);
$cat = mysqli_real_escape_string($link, $cat);
$cat = trim($cat);

$category = $_GET["category"];
$category = strip_tags($category);
$category = mysqli_real_escape_string($link, $category);
$category = trim($category);

switch ($sorting) {

  case 'id-asc';
  $sorting = 'id ASC';
  $sort_name = 'ADAUGARE (CRESCATOR)';
  break;

  case 'id-desc';
  $sorting = 'id DESC';
  $sort_name = 'ADAUGARE (DESCRESCATOR)';
  break;

  case 'link-asc';
  $sorting = 'link ASC';
  $sort_name = 'ALFABETIC (A - Z)';
  break;

  case 'link-desc';
  $sorting = 'link DESC';
  $sort_name = 'ALFABETIC (Z - A)';
  break;

  default:
  $sorting = 'id DESC';
  $sort_name = 'ADAUGARE (DESCRESCATOR)';
  break;

}

$sorting1 = $_GET["show"];

switch ($sorting1) {

  case '24prods';
  $sorting1 = 'LIMIT 24';
  $sort_name1 = '24 POZIȚII';
  break;

  case '48prods';
  $sorting1 = 'LIMIT 48';
  $sort_name1 = '48 POZIȚII';
  break;

  case '72prods';
  $sorting1 = 'LIMIT 72';
  $sort_name1 = '72 POZIȚII';
  break;

  default:
  $sorting1 = 'LIMIT 24';
  $sort_name1 = '24 POZIȚII';
  break;

}

?>

<!DOCTYPE html>
<html>

<head>

<title>Rotor electromotor în Iași, Romania.</title>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Compania Autovalenter activează pe piața Romaniei din anul 2010.
Principalele activități sunt:
– Vanzare de demaroare și generatoare auto
– Vanzare de componente pentru demaroare și alternatoare auto">
<meta name="keywords" content="Alternatoare, Electromotoare, Senzoare">

<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;470;630;723&display=swap" rel="stylesheet">
<link rel="icon" sizes='16x16' type="image/png" href="../../img/imgSite/ValenterAutoLogo.png"/>
<link rel="stylesheet" href="../../css/animate.css">
<link rel="stylesheet" type="text/css" href="../../css/style.css">
<link rel="stylesheet" type="text/css" href="../../css/stylemobb.css">
<link rel="stylesheet" type="text/css" href="../../css/optimization.css">
<link rel="stylesheet" href="../../css/slick.css">
<link rel="stylesheet" href="../../css/slick-theme.css">
<link rel="stylesheet" href="../../css/anim.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="../../js/onclickqq1.js"></script>
<script src="../../js/granim.min.js"></script>
<script src="../../js/slick.js"></script>
<script src="../../js/slidersSidebarAndShrink.js"></script>
<script src="../../js/wow.min.js"></script>
<script> new WOW().init(); </script>

</head>

<body>

<div id="prel">
  <div id="imgLoadSearchData11">
    <img id="imgLoadSearchDataimg11" src="../../img/imgSite/loaderValenterAuto.gif">
  </div>
</div>

<?php include "../../includeSearchProducts.php"; ?>  

<div class="closeFilterBackground closeFilterbackground"> </div>

<div class="closeFilterBackgroundsearch"> </div>   

<?php include "../../includeheader.php"; ?>  

<div class="footerrtyInside11erCatalog">
  <a href="../../index.php"><p><img src="/img/imgSite/catalogButton.png" class="footerrtyInside11erCatalogImg">PAGINA PRINCIPALA</p></a>
  <p class="catalogButtons7">/</p>
  <a style="display: none;" href="../index.php"><p><img src="/img/imgSite/catalogButton.png" class="footerrtyInside11erCatalogImg">CATALOG</p></a>
  <p style="display: none;" class="catalogButtons7">/</p>
  <a href="#"><p><img src="/img/imgSite/catalogButton1.png" class="footerrtyInside11erCatalogImg">ROTOR ELECTROMOTOR</p></a>               
</div>

<div class="whyNotWork">
 <h2 class="catTest">ROTOR ELECTROMOTOR <span style="display: none;">1.681 POZIȚII</span></h2>
 <button class="LoadFilter1OpenFilter LoadFilter1">FILTRU</button>
</div>

<div class="CatalogGrid">
 <div class="CatalogGridBackDiv111 CatalogGridBackDiv">

  <div class="CatalogGrid11DisplayBlock CatalogGrid11">
   <button style="display: none;" class="LoadFilter11">CAUTĂ</button>
   <button style="display: none;" class="LoadFilter11">ȘTERGE FILTRUL</button>
   <button style="width: 28px;" class="LoadFilter11CloseFill LoadFilter11"><img class="closeImgFill" src="../../img/imgSite/closeFill.png"></button>
  </div>


  <?php

  $result = mysqli_query($link, "SELECT ch1_1, ch2_1, ch3_1, ch4_1, ch5_1, ch6_1, ch7_1, ch8_1, ch9_1, ch10_1 FROM krosstablefilter_categories WHERE categoryinfilter1 = 'Rotor electromotor'");

  if (mysqli_num_rows($result) > 0) {
    $rowch11 = mysqli_fetch_array($result);

    do{  

      $rowch11echo = $rowch11['ch1_1'];
      $rowch21echo = $rowch11['ch2_1'];
      $rowch31echo = $rowch11['ch3_1'];
      $rowch41echo = $rowch11['ch4_1'];
      $rowch51echo = $rowch11['ch5_1'];
      $rowch61echo = $rowch11['ch6_1'];
      $rowch71echo = $rowch11['ch7_1'];
      $rowch81echo = $rowch11['ch8_1'];
      $rowch91echo = $rowch11['ch9_1'];
      $rowch101echo = $rowch11['ch10_1'];

      }
    while($rowch11 = mysqli_fetch_array($result));
  }

?> 


<form method="GET" action="index.php">

 <div class="CatalogGrid12121 CatalogGrid1">

<div class="CatalogGrid1FiltrationOpenTensiune CatalogGrid1Filtration">
  <div class="openModalSearrchBrend"></div>
  <div class="closeModalSearrchBrend"></div>
   <!--<button style="width: 28px;" class="LoadFilter11ClosegridcontainerOpen LoadFilter11"><img class="closeImgFill" src="img/imgSite/closeFill.png"></button>-->
   <h4>BRAND</h4>

<?php

  $result = mysqli_query($link, "SELECT DISTINCT brend FROM rotorelinitial ORDER BY brend ASC");

  if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_array($result);

    do{

      $stickerfilter = '';

      $checked_button = '';

      if ($_GET["brend"]) {

        $stickerfilter = '<div class="fruit stickerfiltercss"></div>';

      }

     echo 

     ''.$stickerfilter.'';

      }
    while($row = mysqli_fetch_array($result));
  }

?>
   <div class="gridcontainerOpenBrend grid-container">

  <?php

  $result = mysqli_query($link, "SELECT DISTINCT brend FROM rotorelinitial WHERE NOT brend = '' ORDER BY brend ASC");

  if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_array($result);

    do{  

      $checked_button = '';

      if ($_GET["brend"]) {

        if (in_array($row["brend"], $_GET["brend"])){
          $checked_button = 'checked';
        }

      }

     echo 

     '<div class="box">
      <div class="item">
       <div class="checkbox-circle">
        <input '.$checked_button.' type="checkbox" class="common_selector brend" value="'.$row['brend'].'" id="checkbox-circle'.$row['brend'].'brend" name="brend[]">
        <label for="checkbox-circle'.$row['brend'].'brend">'.$row['brend'].'</label>
       </div>
      </div>
     </div>';

      }
    while($row = mysqli_fetch_array($result));
  }

?>

   </div>
  </div> 

  <div class="CatalogGrid1FiltrationOpenTensiune CatalogGrid1Filtration">
  <div class="openModalSearrchTensiune"></div>
  <div class="closeModalSearrchTensiune"></div>
   <!--<button style="width: 28px;" class="LoadFilter11ClosegridcontainerOpen LoadFilter11"><img class="closeImgFill" src="img/imgSite/closeFill.png"></button>-->
   <h4><?php echo $rowch11echo; ?></h4>

<?php

  $result = mysqli_query($link, "SELECT DISTINCT(ch1_2) FROM rotorelinitial INNER JOIN rotorelkrosstablefilter ON rotorelinitial.voltag = rotorelkrosstablefilter.linkalternator WHERE NOT brend = '' AND categoryinfilter = 'Rotor electromotor' ORDER BY ch1_2 ASC");

  if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_array($result);

    do{

      $stickerfilter = '';

      $checked_button = '';

      if ($_GET["ch1_2"]) {

        $stickerfilter = '<div class="fruit1 stickerfiltercss"></div>';

      }

     echo 

     ''.$stickerfilter.'';

      }
    while($row = mysqli_fetch_array($result));
  }

?>
   <div class="gridcontainerOpenTensiune grid-container">

  <?php

  $result = mysqli_query($link, "SELECT DISTINCT(ch1_2) FROM rotorelinitial INNER JOIN rotorelkrosstablefilter ON rotorelinitial.voltag = rotorelkrosstablefilter.linkalternator WHERE NOT ch1_2 = '' AND categoryinfilter = 'Rotor electromotor' ORDER BY ch1_2 ASC");

  if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_array($result);

    do{  

      $checked_button = '';

      if ($_GET["ch1_2"]) {

        if (in_array($row["ch1_2"], $_GET["ch1_2"])){
          $checked_button = 'checked';
          $getdata = $_GET["ch1_2"];
        }

      }

     echo 

     '<div class="box">
      <div class="item">
       <div class="checkbox-circle">
        <input '.$checked_button.' type="checkbox" class="common_selector ch1_2" value="'.$row['ch1_2'].'" id="checkbox-circle'.$row['ch1_2'].'ch1_2" name="ch1_2[]">
        <label for="checkbox-circle'.$row['ch1_2'].'ch1_2">'.$row['ch1_2'].'</label>
       </div>
      </div>
     </div>';

      }
    while($row = mysqli_fetch_array($result));
  }

?>

   </div>
  </div>  


  <div class="CatalogGrid1FiltrationOpenCurent CatalogGrid1Filtration">
  <div class="openModalSearrchCurent"></div>
  <div class="closeModalSearrchCurent"></div>
   <!--<button style="width: 28px;" class="LoadFilter11ClosegridcontainerOpen LoadFilter11"><img class="closeImgFill" src="img/imgSite/closeFill.png"></button>-->
   <h4><?php echo $rowch21echo; ?></h4>

<?php

  $result = mysqli_query($link, "SELECT DISTINCT(ch2_2) FROM redresorinitial INNER JOIN redresorkrosstablefilter ON redresorinitial.voltag = redresorkrosstablefilter.linkalternator WHERE NOT ch2_2 = '' AND categoryinfilter = 'Redresor alternator' ORDER BY ch2_2 ASC");

  if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_array($result);

    do{

      $stickerfilter = '';

      $checked_button = '';

      if ($_GET["ch2_2"]) {

        $stickerfilter = '<div class="fruit2 stickerfiltercss"></div>';

      }

     echo 

     ''.$stickerfilter.'';

      }
    while($row = mysqli_fetch_array($result));
  }

?>
   <div class="gridcontainerOpenCurent grid-container">


  <?php

  $result = mysqli_query($link, "SELECT DISTINCT(ch2_2) FROM rotorelinitial INNER JOIN rotorelkrosstablefilter ON rotorelinitial.voltag = rotorelkrosstablefilter.linkalternator WHERE NOT ch2_2 = '' AND categoryinfilter = 'Rotor electromotor' ORDER BY ch2_2 ASC");

  if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_array($result);

    do{  

      $checked_button = '';

      if ($_GET["ch2_2"]) {

        if (in_array($row["ch2_2"], $_GET["ch2_2"])){
          $checked_button = 'checked';
          $getdata = $_GET["ch2_2"];
        }

      }

     echo 
    '<div class="box">
      <div class="item">
       <div class="checkbox-circle">
        <input '.$checked_button.' type="checkbox" class="common_selector ch2_2" value="'.$row['ch2_2'].'" id="checkbox-circle'.$row['ch2_2'].'ch2_2" name="ch2_2[]">
        <label for="checkbox-circle'.$row['ch2_2'].'ch2_2">'.$row['ch2_2'].'</label>
       </div>
      </div>
     </div>';

      }
    while($row = mysqli_fetch_array($result));
  }

?>       

   </div>
  </div> 

  <div class="CatalogGrid1FiltrationOpenDimensiune_c CatalogGrid1Filtration">
  <div class="openModalSearrchDimensiune_c"></div>
  <div class="closeModalSearrchDimensiune_c"></div>
   <!--<button style="width: 28px;" class="LoadFilter11ClosegridcontainerOpen LoadFilter11"><img class="closeImgFill" src="img/imgSite/closeFill.png"></button>-->
   <h4><?php echo $rowch31echo; ?></h4>

<?php

  $result = mysqli_query($link, "SELECT DISTINCT(ch3_2) FROM rotorelinitial INNER JOIN rotorelkrosstablefilter ON rotorelinitial.voltag = rotorelkrosstablefilter.linkalternator WHERE NOT ch3_2 = '' AND categoryinfilter = 'Rotor electromotor' ORDER BY ch3_2 ASC");

  if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_array($result);

    do{

      $stickerfilter = '';

      $checked_button = '';

      if ($_GET["ch3_2"]) {

        $stickerfilter = '<div class="fruit3 stickerfiltercss"></div>';

      }

     echo 

     ''.$stickerfilter.'';

      }
    while($row = mysqli_fetch_array($result));
  }

?>
   <div class="gridcontainerOpenDimensiune_c grid-container">


  <?php

  $result = mysqli_query($link, "SELECT DISTINCT(ch3_2) FROM rotorelinitial INNER JOIN rotorelkrosstablefilter ON rotorelinitial.voltag = rotorelkrosstablefilter.linkalternator WHERE NOT ch3_2 = '' AND categoryinfilter = 'Rotor electromotor' ORDER BY ch3_2 ASC");

  if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_array($result);

    do{  

      $checked_button = '';

      if ($_GET["ch3_2"]) {

        if (in_array($row["ch3_2"], $_GET["ch3_2"])){
          $checked_button = 'checked';
          $getdata = $_GET["ch3_2"];
        }

      }

     echo 
    '<div class="box">
      <div class="item">
       <div class="checkbox-circle">
        <input '.$checked_button.' type="checkbox" class="common_selector ch3_2" value="'.$row['ch3_2'].'" id="checkbox-circle'.$row['ch3_2'].'ch3_2" name="ch3_2[]">
        <label for="checkbox-circle'.$row['ch3_2'].'ch3_2">'.$row['ch3_2'].'</label>
       </div>
      </div>
     </div>';

      }
    while($row = mysqli_fetch_array($result));
  }

?>       

   </div>
  </div> 

  <div class="CatalogGrid1FiltrationOpenDimensiune_b CatalogGrid1Filtration">
  <div class="openModalSearrchDimensiune_b"></div>
  <div class="closeModalSearrchDimensiune_b"></div>
   <!--<button style="width: 28px;" class="LoadFilter11ClosegridcontainerOpen LoadFilter11"><img class="closeImgFill" src="img/imgSite/closeFill.png"></button>-->
   <h4><?php echo $rowch41echo; ?></h4>

<?php

  $result = mysqli_query($link, "SELECT DISTINCT(ch4_2) FROM rotorelinitial INNER JOIN rotorelkrosstablefilter ON rotorelinitial.voltag = rotorelkrosstablefilter.linkalternator WHERE NOT ch4_2 = '' AND categoryinfilter = 'Rotor electromotor' ORDER BY ch4_2 ASC");

  if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_array($result);

    do{

      $stickerfilter = '';

      $checked_button = '';

      if ($_GET["ch4_2"]) {

        $stickerfilter = '<div class="fruit4 stickerfiltercss"></div>';

      }

     echo 

     ''.$stickerfilter.'';

      }
    while($row = mysqli_fetch_array($result));
  }

?>
   <div class="gridcontainerOpenDimensiune_b grid-container">


  <?php

  $result = mysqli_query($link, "SELECT DISTINCT(ch4_2) FROM rotorelinitial INNER JOIN rotorelkrosstablefilter ON rotorelinitial.voltag = rotorelkrosstablefilter.linkalternator WHERE NOT ch4_2 = '' AND categoryinfilter = 'Rotor electromotor' ORDER BY ch4_2 ASC");

  if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_array($result);

    do{  

      $checked_button = '';

      if ($_GET["ch4_2"]) {

        if (in_array($row["ch4_2"], $_GET["ch4_2"])){
          $checked_button = 'checked';
          $getdata = $_GET["ch4_2"];
        }

      }

     echo 
    '<div class="box">
      <div class="item">
       <div class="checkbox-circle">
        <input '.$checked_button.' type="checkbox" class="common_selector ch4_2" value="'.$row['ch4_2'].'" id="checkbox-circle'.$row['ch4_2'].'ch4_2" name="ch4_2[]">
        <label for="checkbox-circle'.$row['ch4_2'].'ch4_2">'.$row['ch4_2'].'</label>
       </div>
      </div>
     </div>';

      }
    while($row = mysqli_fetch_array($result));
  }

?>       

   </div>
  </div> 

  <div class="CatalogGrid1FiltrationOpenDimensiune_a CatalogGrid1Filtration">
  <div class="openModalSearrchDimensiune_a"></div>
  <div class="closeModalSearrchDimensiune_a"></div>
   <!--<button style="width: 28px;" class="LoadFilter11ClosegridcontainerOpen LoadFilter11"><img class="closeImgFill" src="img/imgSite/closeFill.png"></button>-->
   <h4><?php echo $rowch51echo; ?></h4>

<?php

  $result = mysqli_query($link, "SELECT DISTINCT(ch5_2) FROM rotorelinitial INNER JOIN rotorelkrosstablefilter ON rotorelinitial.voltag = rotorelkrosstablefilter.linkalternator WHERE NOT ch5_2 = '' AND categoryinfilter = 'Rotor electromotor' ORDER BY ch5_2 ASC");

  if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_array($result);

    do{

      $stickerfilter = '';

      $checked_button = '';

      if ($_GET["ch5_2"]) {

        $stickerfilter = '<div class="fruit5 stickerfiltercss"></div>';

      }

     echo 

     ''.$stickerfilter.'';

      }
    while($row = mysqli_fetch_array($result));
  }

?>
   <div class="gridcontainerOpenDimensiune_a grid-container">


  <?php

  $result = mysqli_query($link, "SELECT DISTINCT(ch5_2) FROM rotorelinitial INNER JOIN rotorelkrosstablefilter ON rotorelinitial.voltag = rotorelkrosstablefilter.linkalternator WHERE NOT ch5_2 = '' AND categoryinfilter = 'Rotor electromotor' ORDER BY ch5_2 ASC");

  if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_array($result);

    do{  

      $checked_button = '';

      if ($_GET["ch5_2"]) {

        if (in_array($row["ch5_2"], $_GET["ch5_2"])){
          $checked_button = 'checked';
          $getdata = $_GET["ch5_2"];
        }

      }

     echo 
    '<div class="box">
      <div class="item">
       <div class="checkbox-circle">
        <input '.$checked_button.' type="checkbox" class="common_selector ch5_2" value="'.$row['ch5_2'].'" id="checkbox-circle'.$row['ch5_2'].'ch5_2" name="ch5_2[]">
        <label for="checkbox-circle'.$row['ch5_2'].'ch5_2">'.$row['ch5_2'].'</label>
       </div>
      </div>
     </div>';

      }
    while($row = mysqli_fetch_array($result));
  }

?>       

   </div>
  </div> 

  <div class="CatalogGrid1FiltrationOpenNumarul_dintilor CatalogGrid1Filtration">
  <div class="openModalSearrchNumarul_dintilor"></div>
  <div class="closeModalSearrchNumarul_dintilor"></div>
   <!--<button style="width: 28px;" class="LoadFilter11ClosegridcontainerOpen LoadFilter11"><img class="closeImgFill" src="img/imgSite/closeFill.png"></button>-->
   <h4><?php echo $rowch61echo; ?></h4>

<?php

  $result = mysqli_query($link, "SELECT DISTINCT(ch6_2) FROM rotorelinitial INNER JOIN rotorelkrosstablefilter ON rotorelinitial.voltag = rotorelkrosstablefilter.linkalternator WHERE NOT ch6_2 = '' AND categoryinfilter = 'Rotor electromotor' ORDER BY ch6_2 ASC");

  if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_array($result);

    do{

      $stickerfilter = '';

      $checked_button = '';

      if ($_GET["ch6_2"]) {

        $stickerfilter = '<div class="fruit6 stickerfiltercss"></div>';

      }

     echo 

     ''.$stickerfilter.'';

      }
    while($row = mysqli_fetch_array($result));
  }

?>
   <div class="gridcontainerOpenNumarul_dintilor grid-container">


  <?php

  $result = mysqli_query($link, "SELECT DISTINCT(ch6_2) FROM rotorelinitial INNER JOIN rotorelkrosstablefilter ON rotorelinitial.voltag = rotorelkrosstablefilter.linkalternator WHERE NOT ch6_2 = '' AND categoryinfilter = 'Rotor electromotor' ORDER BY ch6_2 ASC");

  if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_array($result);

    do{  

      $checked_button = '';

      if ($_GET["ch6_2"]) {

        if (in_array($row["ch6_2"], $_GET["ch6_2"])){
          $checked_button = 'checked';
          $getdata = $_GET["ch6_2"];
        }

      }

     echo 
    '<div class="box">
      <div class="item">
       <div class="checkbox-circle">
        <input '.$checked_button.' type="checkbox" class="common_selector ch6_2" value="'.$row['ch6_2'].'" id="checkbox-circle'.$row['ch6_2'].'ch6_2" name="ch6_2[]">
        <label for="checkbox-circle'.$row['ch6_2'].'ch6_2">'.$row['ch6_2'].'</label>
       </div>
      </div>
     </div>';

      }
    while($row = mysqli_fetch_array($result));
  }

?>       

   </div>
  </div> 

  <div class="CatalogGrid1FiltrationOpenTip_semnal CatalogGrid1Filtration">
  <div class="openModalSearrchTip_semnal"></div>
  <div class="closeModalSearrchTip_semnal"></div>
   <!--<button style="width: 28px;" class="LoadFilter11ClosegridcontainerOpen LoadFilter11"><img class="closeImgFill" src="img/imgSite/closeFill.png"></button>-->
   <h4><?php echo $rowch71echo; ?></h4>

<?php

  $result = mysqli_query($link, "SELECT DISTINCT(ch7_2) FROM rotorelinitial INNER JOIN rotorelkrosstablefilter ON rotorelinitial.voltag = rotorelkrosstablefilter.linkalternator WHERE NOT ch7_2 = '' AND categoryinfilter = 'Rotor electromotor' ORDER BY ch7_2 ASC");

  if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_array($result);

    do{

      $stickerfilter = '';

      $checked_button = '';

      if ($_GET["ch7_2"]) {

        $stickerfilter = '<div class="fruit7 stickerfiltercss"></div>';

      }

     echo 

     ''.$stickerfilter.'';

      }
    while($row = mysqli_fetch_array($result));
  }

?>
   <div class="gridcontainerOpenTip_semnal grid-container">


  <?php

  $result = mysqli_query($link, "SELECT DISTINCT(ch7_2) FROM rotorelinitial INNER JOIN rotorelkrosstablefilter ON rotorelinitial.voltag = rotorelkrosstablefilter.linkalternator WHERE NOT ch7_2 = '' AND categoryinfilter = 'Rotor electromotor' ORDER BY ch7_2 ASC");

  if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_array($result);

    do{  

      $checked_button = '';

      if ($_GET["ch7_2"]) {

        if (in_array($row["ch7_2"], $_GET["ch7_2"])){
          $checked_button = 'checked';
          $getdata = $_GET["ch7_2"];
        }

      }

     echo 
    '<div class="box">
      <div class="item">
       <div class="checkbox-circle">
        <input '.$checked_button.' type="checkbox" class="common_selector ch7_2" value="'.$row['ch7_2'].'" id="checkbox-circle'.$row['ch7_2'].'ch7_2" name="ch7_2[]">
        <label for="checkbox-circle'.$row['ch7_2'].'ch7_2">'.$row['ch7_2'].'</label>
       </div>
      </div>
     </div>';

      }
    while($row = mysqli_fetch_array($result));
  }

?>       

   </div>
  </div> 

  <div class="CatalogGrid1FiltrationOpenPompa CatalogGrid1Filtration">
  <div class="openModalSearrchPompa"></div>
  <div class="closeModalSearrchPompa"></div>
   <!--<button style="width: 28px;" class="LoadFilter11ClosegridcontainerOpen LoadFilter11"><img class="closeImgFill" src="img/imgSite/closeFill.png"></button>-->
   <h4><?php echo $rowch81echo; ?></h4>

<?php

  $result = mysqli_query($link, "SELECT DISTINCT(ch8_2) FROM rotorelinitial INNER JOIN rotorelkrosstablefilter ON rotorelinitial.voltag = rotorelkrosstablefilter.linkalternator WHERE NOT ch8_2 = '' AND categoryinfilter = 'Rotor electromotor' ORDER BY ch8_2 ASC");

  if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_array($result);

    do{

      $stickerfilter = '';

      $checked_button = '';

      if ($_GET["ch8_2"]) {

        $stickerfilter = '<div class="fruit8 stickerfiltercss"></div>';

      }

     echo 

     ''.$stickerfilter.'';

      }
    while($row = mysqli_fetch_array($result));
  }

?>
   <div class="gridcontainerOpenPompa grid-container">


  <?php

  $result = mysqli_query($link, "SELECT DISTINCT(ch8_2) FROM rotorelinitial INNER JOIN rotorelkrosstablefilter ON rotorelinitial.voltag = rotorelkrosstablefilter.linkalternator WHERE NOT ch8_2 = '' AND categoryinfilter = 'Rotor electromotor' ORDER BY ch8_2 ASC");

  if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_array($result);

    do{  

      $checked_button = '';

      if ($_GET["ch8_2"]) {

        if (in_array($row["ch8_2"], $_GET["ch8_2"])){
          $checked_button = 'checked';
          $getdata = $_GET["ch8_2"];
        }

      }

     echo 
    '<div class="box">
      <div class="item">
       <div class="checkbox-circle">
        <input '.$checked_button.' type="checkbox" class="common_selector ch8_2" value="'.$row['ch8_2'].'" id="checkbox-circle'.$row['ch8_2'].'ch8_2" name="ch8_2[]">
        <label for="checkbox-circle'.$row['ch8_2'].'ch8_2">'.$row['ch8_2'].'</label>
       </div>
      </div>
     </div>';

      }
    while($row = mysqli_fetch_array($result));
  }

?>       

   </div>
  </div> 

  <div class="CatalogGrid1FiltrationOpenBss_lin_ide1 CatalogGrid1Filtration">
  <div class="openModalSearrchBss_lin_ide1"></div>
  <div class="closeModalSearrchBss_lin_ide1"></div>
   <!--<button style="width: 28px;" class="LoadFilter11ClosegridcontainerOpen LoadFilter11"><img class="closeImgFill" src="img/imgSite/closeFill.png"></button>-->
   <h4><?php echo $rowch91echo; ?></h4>

<?php

  $result = mysqli_query($link, "SELECT DISTINCT(ch9_2) FROM rotorelinitial INNER JOIN rotorelkrosstablefilter ON rotorelinitial.voltag = rotorelkrosstablefilter.linkalternator WHERE NOT ch9_2 = '' AND categoryinfilter = 'Rotor electromotor' ORDER BY ch9_2 ASC");

  if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_array($result);

    do{

      $stickerfilter = '';

      $checked_button = '';

      if ($_GET["ch9_2"]) {

        $stickerfilter = '<div class="fruit9 stickerfiltercss"></div>';

      }

     echo 

     ''.$stickerfilter.'';

      }
    while($row = mysqli_fetch_array($result));
  }

?>
   <div class="gridcontainerOpenBss_lin_ide1 grid-container">


  <?php

  $result = mysqli_query($link, "SELECT DISTINCT(ch9_2) FROM rotorelinitial INNER JOIN rotorelkrosstablefilter ON rotorelinitial.voltag = rotorelkrosstablefilter.linkalternator WHERE NOT ch9_2 = '' AND categoryinfilter = 'Rotor electromotor' ORDER BY ch9_2 ASC");

  if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_array($result);

    do{  

      $checked_button = '';

      if ($_GET["ch9_2"]) {

        if (in_array($row["ch9_2"], $_GET["ch9_2"])){
          $checked_button = 'checked';
          $getdata = $_GET["ch9_2"];
        }

      }

     echo 
    '<div class="box">
      <div class="item">
       <div class="checkbox-circle">
        <input '.$checked_button.' type="checkbox" class="common_selector ch9_2" value="'.$row['ch9_2'].'" id="checkbox-circle'.$row['ch9_2'].'ch9_2" name="ch9_2[]">
        <label for="checkbox-circle'.$row['ch9_2'].'ch9_2">'.$row['ch9_2'].'</label>
       </div>
      </div>
     </div>';

      }
    while($row = mysqli_fetch_array($result));
  }

?>       

   </div>
  </div> 


 </div>

 <div class="CatalogGrid11">
  <input style="font-family: 'Montserrat', sans-serif;" class="buttonfilterlink" type="submit" name="submit" value="CAUTARE">
  <a href="index.php"><input style="font-family: 'Montserrat', sans-serif; margin-left: 5px; width: 117px; cursor: pointer;" class="buttonfilterlink" value="STERGE FILTRUL"></a>
 </div>

</form>

</div>

<div class="CatalogGrid2">
 <div class="contentCatalog">
  <div id="myULssh" class="row filter_data" >
    <?php

    if($_GET["brend"]){
        $check_ch1_3 = implode("', '",$_GET["brend"]);
    }

    if (!empty($check_ch1_3)) {
        $query_ch1_3 = " AND brend IN ('$check_ch1_3')";
    }

    if($_GET["ch1_2"]){
        $check_ch1_2 = implode("', '",$_GET["ch1_2"]);
    }

    if (!empty($check_ch1_2)) {
        $query_ch1_2 = " AND ch1_2 IN ('$check_ch1_2')";
    }

    if($_GET["ch2_2"]){
        $check_ch1_4 = implode("', '",$_GET["ch2_2"]);
    }

    if (!empty($check_ch1_4)) {
        $query_ch1_4 = " AND ch2_2 IN ('$check_ch1_4')";
    }

    if($_GET["ch3_2"]){
        $check_ch1_5 = implode("', '",$_GET["ch3_2"]);
    }

    if (!empty($check_ch1_5)) {
        $query_ch1_5 = " AND ch3_2 IN ('$check_ch1_5')";
    }

    if($_GET["ch4_2"]){
        $check_ch1_6 = implode("', '",$_GET["ch4_2"]);
    }

    if (!empty($check_ch1_6)) {
        $query_ch1_6 = " AND ch4_2 IN ('$check_ch1_6')";
    }

    if($_GET["ch5_2"]){
        $check_ch1_7 = implode("', '",$_GET["ch5_2"]);
    }

    if (!empty($check_ch1_7)) {
        $query_ch1_7 = " AND ch5_2 IN ('$check_ch1_7')";
    }

    if($_GET["ch6_2"]){
        $check_ch1_8 = implode("', '",$_GET["ch6_2"]);
    }

    if (!empty($check_ch1_8)) {
        $query_ch1_8 = " AND ch6_2 IN ('$check_ch1_8')";
    }

    if($_GET["ch7_2"]){
        $check_ch1_9 = implode("', '",$_GET["ch7_2"]);
    }

    if (!empty($check_ch1_9)) {
        $query_ch1_9 = " AND ch7_2 IN ('$check_ch1_9')";
    }

    if($_GET["ch8_2"]){
        $check_ch1_10 = implode("', '",$_GET["ch8_2"]);
    }

    if (!empty($check_ch1_10)) {
        $query_ch1_10 = " AND ch8_2 IN ('$check_ch1_10')";
    }

    if($_GET["ch9_2"]){
        $check_ch1_11 = implode("', '",$_GET["ch9_2"]);
    }

    if (!empty($check_ch1_11)) {
        $query_ch1_11 = " AND ch9_2 IN ('$check_ch1_11')";
    }

    if($_GET["ch10_2"]){
        $check_ch1_12 = implode("', '",$_GET["ch10_2"]);
    }

    if (!empty($check_ch1_12)) {
        $query_ch1_12 = " AND ch10_2 IN ('$check_ch1_12')";
    }

    $num = 24;
    $page = (int)$_GET['page'];

    $count = mysqli_query($link, "SELECT rotorelinitial.id, rotorelinitial.link, rotorelinitial.brend, rotorelinitial.title, rotorelinitial.imgsrc, rotorelinitial.price, rotorelinitial.category, rotorelinitial.product_status, rotorelinitial.voltag, rotorelkrosstablefilter.linkalternator, krosstablefilter_categories.ch1, rotorelkrosstablefilter.ch1_2, krosstablefilter_categories.ch2, rotorelkrosstablefilter.ch2_2, krosstablefilter_categories.ch3, rotorelkrosstablefilter.ch3_2, krosstablefilter_categories.ch4, rotorelkrosstablefilter.ch4_2, krosstablefilter_categories.ch5, rotorelkrosstablefilter.ch5_2, krosstablefilter_categories.ch6, rotorelkrosstablefilter.ch6_2, krosstablefilter_categories.ch7, rotorelkrosstablefilter.ch7_2, krosstablefilter_categories.ch8, rotorelkrosstablefilter.ch8_2, krosstablefilter_categories.ch9, rotorelkrosstablefilter.ch9_2, krosstablefilter_categories.ch10, rotorelkrosstablefilter.ch10_2 FROM rotorelinitial
    LEFT JOIN rotorelkrosstablefilter
    ON rotorelinitial.voltag = rotorelkrosstablefilter.linkalternator LEFT JOIN krosstablefilter_categories ON rotorelkrosstablefilter.categoryinfilter = krosstablefilter_categories.categoryinfilter1
    WHERE product_status = '1' $query_ch1_2 $query_ch1_3 $query_ch1_4 $query_ch1_5 $query_ch1_6 $query_ch1_7 $query_ch1_8 $query_ch1_9 $query_ch1_10 $query_ch1_11 $query_ch1_12 ORDER BY id DESC $query_start_num");

    $numrows = mysqli_num_rows($count);

    $temp = $numrows;

    if ($temp > 0) {
      $tempcount = $temp;

      $total = (($tempcount - 1) / $num) + 1;
      $total = intval($total);

      $page = intval($page);

      if (empty($page) or $page < 0) $page = 1;
        if($page > $total) $page = $total;

      $start = $page * $num - $num;

      $query_start_num = " LIMIT $start, $num";


    }

  $result = mysqli_query($link, "SELECT rotorelinitial.id, rotorelinitial.link, rotorelinitial.brend, rotorelinitial.title, rotorelinitial.imgsrc, rotorelinitial.price, rotorelinitial.category, rotorelinitial.product_status, rotorelinitial.voltag, rotorelkrosstablefilter.linkalternator, krosstablefilter_categories.ch1, rotorelkrosstablefilter.ch1_2, krosstablefilter_categories.ch2, rotorelkrosstablefilter.ch2_2, krosstablefilter_categories.ch3, rotorelkrosstablefilter.ch3_2, krosstablefilter_categories.ch4, rotorelkrosstablefilter.ch4_2, krosstablefilter_categories.ch5, rotorelkrosstablefilter.ch5_2, krosstablefilter_categories.ch6, rotorelkrosstablefilter.ch6_2, krosstablefilter_categories.ch7, rotorelkrosstablefilter.ch7_2, krosstablefilter_categories.ch8, rotorelkrosstablefilter.ch8_2, krosstablefilter_categories.ch9, rotorelkrosstablefilter.ch9_2, krosstablefilter_categories.ch10, rotorelkrosstablefilter.ch10_2 FROM rotorelinitial
    LEFT JOIN rotorelkrosstablefilter
    ON rotorelinitial.voltag = rotorelkrosstablefilter.linkalternator LEFT JOIN krosstablefilter_categories ON rotorelkrosstablefilter.categoryinfilter = krosstablefilter_categories.categoryinfilter1
    WHERE product_status = '1' $query_ch1_2 $query_ch1_3 $query_ch1_4 $query_ch1_5 $query_ch1_6 $query_ch1_7 $query_ch1_8 $query_ch1_9 $query_ch1_10 $query_ch1_11 $query_ch1_12 ORDER BY id DESC $query_start_num");

  if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_array($result);

    do{

     $linksklad5 = $row["link"];
     $titleupakovka = $row["title"];

 $result1 = mysqli_query($link, "SELECT SUM(Column_4) AS Column_5sum FROM `rotorelstock` WHERE `Column_3` = '$titleupakovka' AND (`Column_2` = '$linksklad5' OR `Column_1` = '$linksklad5')");

  if (mysqli_num_rows($result1) > 0) {
    $rowpsklad = mysqli_fetch_array($result1);

    do{

 $totalsum = $rowpsklad['Column_5sum'];

        if ($totalsum > 0){
          $finalinf = '<div class="stockondivblock stockondiv"><p class="stockon">IN STOC</p></div>';
        }

        //if (($totalsum > 0) AND ($totalsum < 3)){
        //  $finalinf = '<div class="stockondiv1"><div class="stockonlamp1"></div><p class="fruit stockon1">STOC LIMITAT | '. $rowpsklad['Column_5sum'] .'</p></div>';
        //}

        if ($totalsum == 0){
          $finalinf = '<div class="stockondivblock stockondiv2"><p class="stockon2">LA COMANDA</p></div>';
        }

        if ($totalsum == NULL){
          $finalinf = '<div class="stockondivblock stockondiv1"><p class="stockon1">SE CONCRETIZEAZA</p></div>';
        }
      }

    while($rowpsklad = mysqli_fetch_array($result1));
  }

    if ($row['ch9_2'] != NULL){
    $ch9_2 = '<p class="productInf1">'.$row['ch9'].' : '.$row['ch9_2'].'</p>';
     }else{
      $ch9_2 = '';
     }

     if ($row['ch8_2'] != NULL){
    $ch8_2 = '<p class="productInf1">'.$row['ch8'].' : '.$row['ch8_2'].'</p>';
     }else{
      $ch8_2 = '';
     }
     
    if ($row['ch7_2'] != NULL){
    $ch7_2 = '<p class="productInf1">'.$row['ch7'].' : '.$row['ch7_2'].'</p>';
     }else{
      $ch7_2 = '';
     }

     if ($row['ch6_2'] != NULL){
    $ch6_2 = '<p class="productInf1">'.$row['ch6'].' : '.$row['ch6_2'].'</p>';
     }else{
      $ch6_2 = '';
     }

     if ($row['ch5_2'] != NULL){
    $ch5_2 = '<p class="productInf1">'.$row['ch5'].' :  '.$row['ch5_2'].'</p>';
     }else{
      $ch5_2 = '';
     }

     if ($row['ch4_2'] != NULL){
    $ch4_2 = '<p class="productInf1">'.$row['ch4'].' :  '.$row['ch4_2'].'</p>';
     }else{
      $ch4_2 = '';
     }

     if ($row['ch3_2'] != NULL){
    $ch3_2 = '<p class="productInf1">'.$row['ch3'].' :  '.$row['ch3_2'].'</p>';
     }else{
      $ch3_2 = '';
     }

     if ($row['ch2_2'] != NULL){
    $ch2_2 = '<p class="productInf1"><span>'.$row['ch2'].' : </span> '.$row['ch2_2'].'</p>';
     }else{
      $ch2_2 = '';
     }

     if ($row['ch1_2'] != NULL){
      $ch1_2 = '<p class="productInf1"><span>'.$row['ch1'].' : </span> '.$row['ch1_2'].'</p>';
     }else{
      $ch1_2 = '';
     }  

     $textzag = '';
     $textzag = $row["link"];
     $maxchar = 15; // макс длинна
     if ( mb_strlen( $textzag ) > $maxchar ){
     $textzag = mb_substr( $textzag, 0, $maxchar ) .'...';
     }

     $textzag1 = $row["link"];
     $maxchar1 = 16; // макс длинна
     if ( mb_strlen( $textzag1 ) > $maxchar1 ){
     $textzag1 = mb_substr( $textzag1, 0, $maxchar1 ) .'..';
     }

     $textzag2 = $row["link"];
     $maxchar2 = 13; // макс длинна
     if ( mb_strlen( $textzag2 ) > $maxchar2 ){
     $textzag2 = mb_substr( $textzag2, 0, $maxchar2 ) .'..';
     }

      echo '    
      <div class="galleryDivvSearch galleryDivv">
      <a href="article.php?id='.$row["id"].'" target="_blank">
        <div class="galleryDivvImg">
            <p class="brandpinposition">'.$row["brend"].'</p>
            <img style="width: 100%" class="galleryDivvImgBckgroundImg" src="../../img/imgSite/backgroundImgPng.png">
            <div class="IconsNafoto"></div>
            <img src="/img/imgrotorelectromotor/'.$row["voltag"].'_1.jpg" width="100%">
        </div>
        <div class="galleryDivvTextSearch galleryDivvText">
            <div class="brandpinpositionblock">
            <h3 class="bigzag">'.$textzag.'</h3>
            </div>
            <p>'.$row["category"].'</p>
            <p>'.$finalinf.'</p>
        </div>
        <div class="productInf">
           '.$ch1_2.'
           '.$ch2_2.'
           '.$ch3_2.'
           '.$ch4_2.'
           '.$ch5_2.'
           '.$ch6_2.'
           '.$ch8_2.'
           '.$ch9_2.'
           '.$ch10_2.'
           '.$ch7_2.'
        </div>
      </a>
    </div> ';
    }
    while($row = mysqli_fetch_array($result));
  }else{
    echo '<img class="nodatablocknoneblock nodatablock datanotfoundimg" src="../../img/imgSite/notfound2png.png" alt="DATA NOT FOUND"><img class="nodatanone datanotfoundimg" src="../../img/imgSite/notfound21png.png" alt="DATA NOT FOUND">';
  }

  $url =  isset($_SERVER['HTTPS']) && 
    $_SERVER['HTTPS'] === 'on' ? "https://" : "http://";    
  $url .= $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];  
  $url1 = 'search';

  if (strpos($url, '?submit=CAUTARE')) {
  $strurl = str_replace("?submit=CAUTARE", "", $url);
  }else{
  $strurl = str_replace("&submit=CAUTARE", "", $url);
  }

  if (strpos($strurl, '?page=')) {
   $string = $strurl;
   $character = "?page=";
   $position = strpos($string, $character);
   if ($position !== false) {
      $newString = substr($string, 0, $position);
    }
   }

   if (strpos($strurl, '&page=')) {
   $string = $strurl;
   $character = "&page=";
   $position = strpos($string, $character);
   if ($position !== false) {
     $newString = substr($string, 0, $position);
    }
   }

   if ($newString == NULL) {
      $newString = $strurl;
   }

  $urlfin = '';

  if (!empty($url)) {

    if($_GET["brend"] || $_GET["ch1_2"] || $_GET["ch2_2"] || $_GET["ch3_2"] || $_GET["ch4_2"] || $_GET["ch5_2"] || $_GET["ch6_2"] || $_GET["ch7_2"] || $_GET["ch8_2"] || $_GET["ch9_2"] || $_GET["ch10_2"] || $_GET["ch11_2"] || $_GET["ch12_2"]){
        $pagevar = '&page=';
    }else{
        $pagevar = '?page=';
    }

    $urlfin = $newString;
    $pagevar1 = $pagevar;

    if ($page > 0) {
    $pstr_prev = '
    <a href="'.$urlfin.''.$pagevar1.''.($page - 1).'">
    <li style="margin: 0px 5px;
    position: absolute;
    transform: translateY(-50%);
    top: 50%;
    left: 0px;" class="paginationForContencLiButtons">
    <img src="../../img/imgSite/prevSliderButton.png" height="100%" width="100%">
    </li>
    </a>';
    }

    if ($page == 1) {
    $pstr_prev = '
    <a href="#">
    <li style="margin: 0px 5px;
    position: absolute;
    transform: translateY(-50%);
    top: 50%;
    left: 0px;" class="paginationForContencLiButtons">
    <img src="../../img/imgSite/prevSliderButtonoff.png" height="100%" width="100%">
    <p class="lastpagebutton">'.$page.'</p>
    </li>
    </a>';
    }

    if ($page > 0) {
    $pstr_next = '
    <a href="'.$urlfin.''.$pagevar1.''.($page + 1).'">
    <li style="margin: 0px 5px;
    position: absolute;
    transform: translateY(-50%);
    top: 50%;
    right: 0px;" class="paginationForContencLiButtons">
    <img src="../../img/imgSite/nextSliderButton.png" height="100%" width="100%">
    </li>
    </a>';
    }

    if ($page == $total) {
    $pstr_next = '
    <a href="#">
    <li style="margin: 0px 5px;
    position: absolute;
    transform: translateY(-50%);
    top: 50%;
    right: 0px;" class="paginationForContencLiButtons">
    <img src="../../img/imgSite/prevSliderButtonoff.png" height="100%" width="100%">
    <p class="lastpagebutton">'.$page.'</p>
    </li>
    </a>';
    }


    if ($page - 5 > 0) $page5left = '<a href="'.$urlfin.''.$pagevar1.''.($page - 5).'"><li>'.($page - 5).'</li></a>';
    if ($page - 4 > 0) $page4left = '<a href="'.$urlfin.''.$pagevar1.''.($page - 4).'"><li>'.($page - 4).'</li></a>';
    if ($page - 3 > 0) $page3left = '<a href="'.$urlfin.''.$pagevar1.''.($page - 3).'"><li>'.($page - 3).'</li></a>';
    if ($page - 2 > 0) $page2left = '<a href="'.$urlfin.''.$pagevar1.''.($page - 2).'"><li>'.($page - 2).'</li></a>';
    if ($page - 1 > 0) $page1left = '<a href="'.$urlfin.''.$pagevar1.''.($page - 1).'"><li>'.($page - 1).'</li></a>';


    if ($page + 5 <= $total) $page5right = '<a href="'.$urlfin.''.$pagevar1.''.($page + 5).'"><li>'.($page + 5).'</li></a>';
    if ($page + 4 <= $total) $page4right = '<a href="'.$urlfin.''.$pagevar1.''.($page + 4).'"><li>'.($page + 4).'</li></a>';
    if ($page + 3 <= $total) $page3right = '<a href="'.$urlfin.''.$pagevar1.''.($page + 3).'"><li>'.($page + 3).'</li></a>';
    if ($page + 2 <= $total) $page2right = '<a href="'.$urlfin.''.$pagevar1.''.($page + 2).'"><li>'.($page + 2).'</li></a>';
    if ($page + 1 <= $total) $page1right = '<a href="'.$urlfin.''.$pagevar1.''.($page + 1).'"><li>'.($page + 1).'</li></a>';

    $pageplus56 = $page + 6;
    if ($pageplus56 == $total) {
      $lastpageofff = 'none';
    }else{
      $lastpageofff = '';
    }

    $pageplus56mob = $page + 4;
    if ($pageplus56mob == $total) {
      $lastpageofffmob = 'none';
    }else{
      $lastpageofffmob = '';
    }

    $pageplus5 = $page + 5;
    if ($pageplus5 >= $total) {
      $lastpageoff = 'none';
    }else{
      $lastpageoff = '';
    }

    $pageplus5mob = $page + 3;
    if ($pageplus5mob >= $total) {
      $lastpageoffmob = 'none';
    }else{
      $lastpageoffmob = '';
    }

    $page5rightnum = ($page + 5);
    $page5rightnum1 = $total - $page5rightnum;
    $page5rightnum2 = $page5rightnum1 /2;
    $page5rightnum2 = round($page5rightnum2);
    $betwenvarsecond = $total - $page5rightnum2;

    if ($page == $total) {
      $displaypagehere = 'none';
    }

    if ($page == 1) {
      $displaypagehere = 'none';
    }

    if ($page - 3 > 0) {
      $strtotal = '<a style="display: '.$lastpageoff.''.$lastpageofff.';" href="'.$urlfin.''.$pagevar1.''.$betwenvarsecond.'"><li class="">...</li></a><a style="display: '.$lastpageoff.';" href="'.$urlfin.''.$pagevar1.''.$total.'"><li>'.$total.'</li></a>';
    }else{
      $strtotal = "";
    }

    if ($page > 0) {
      $strtotal2 = '<a style="display: '.$lastpageoffmob.''.$lastpageofffmob.';" href="'.$urlfin.''.$pagevar1.''.$betwenvarsecond.'"><li class="">...</li></a><a style="display: '.$lastpageoffmob.';" href="'.$urlfin.''.$pagevar1.''.$total.'"><li>'.$total.'</li></a>';
    }else{
      $strtotal2 = "";
    }

    $strtotal1stvar = $page - 7;
    if ($strtotal1stvar == 0) {
      $strtotal1st = 'none';
    }else{
      $strtotal1st = "";
    }

    $strtotal1stvar = $page - 5;
    if ($strtotal1stvar == 0) {
      $strtotal1stmob = 'none';
    }else{
      $strtotal1stmob = "";
    }

    $page5leftnum = ($page - 5);
    $betwenvarfirst = $page5leftnum / 2;
    $betwenvarfirst = round($betwenvarfirst);

    if ($page - 6 > 0) {
      $strtotal1 = '<a href="'.$urlfin.''.$pagevar1.'1"><li class="">1</li></a><a style="display: '.$strtotal1st.';" href="'.$urlfin.''.$pagevar1.''.$betwenvarfirst.'"><li class="">...</li></a>';
    }else{
      $strtotal1 = "";
    }

    if ($page - 4 > 0) {
      $strtotal1mob = '<a href="'.$urlfin.''.$pagevar1.'1"><li class="">1</li></a><a style="display: '.$strtotal1stmob.';" href="'.$urlfin.''.$pagevar1.''.$betwenvarfirst.'"><li class="">...</li></a>';
    }else{
      $strtotal1mob = "";
    }

    if ($page == $total) {
      $displaypagehere = 'none';
    }

    if ($total > 1) {

      $urlfin1 = 
       '<div class="paginationmob paginationForContenc">
          <ul class="paginationForContencullistyle paginationForContencul">
              '.$strtotal1mob.''.$page3left.''.$page2left.''.$page1left.'<a href="'.$urlfin.''.$pagevar1.''.$page.'"><li style="color: white; background-color: #0088cc;">'.$page.'</li></a>'.$page1right.''.$page2right.''.$page3right.''.$strtotal2.'
          </ul>    
        </div>


        <div class="paginationpc paginationForContenc">
          <ul class="paginationForContencul">
              '.$pstr_prev.''.$strtotal1.''.$page5left.''.$page4left.''.$page3left.''.$page2left.''.$page1left.'<a style="display: '.$displaypagehere.';" href="'.$urlfin.''.$pagevar1.''.$page.'"><li style="color: white; background-color: #0088cc;">'.$page.'</li></a>'.$page1right.''.$page2right.''.$page3right.''.$page4right.''.$page5right.''.$strtotal.''.$pstr_next.'
          </ul>    
        </div>';
      }
    }  
?>
 
   </div>
   <?php echo $urlfin1; ?>
  </div>
 </div>        
</div>

<?php require "../../footer.php"; ?>

<canvas class="wow fadeIn" data-wow-duration="2s" id="canvas-basic"></canvas>


<script>

  var loader = document.getElementById("prel");
  window.addEventListener("load", function(){
    loader.style.display = "none";
  });

var obj = {};
$('.fruit').each(function(){
    var text = $.trim($(this).text());
    if(obj[text]){
        $(this).remove();
    } else {
        obj[text] = true;
    }
});

var obj = {};
$('.fruit1').each(function(){
    var text = $.trim($(this).text());
    if(obj[text]){
        $(this).remove();
    } else {
        obj[text] = true;
    }
});

var obj = {};
$('.fruit2').each(function(){
    var text = $.trim($(this).text());
    if(obj[text]){
        $(this).remove();
    } else {
        obj[text] = true;
    }
});

var obj = {};
$('.fruit3').each(function(){
    var text = $.trim($(this).text());
    if(obj[text]){
        $(this).remove();
    } else {
        obj[text] = true;
    }
});

var obj = {};
$('.fruit4').each(function(){
    var text = $.trim($(this).text());
    if(obj[text]){
        $(this).remove();
    } else {
        obj[text] = true;
    }
});

var obj = {};
$('.fruit5').each(function(){
    var text = $.trim($(this).text());
    if(obj[text]){
        $(this).remove();
    } else {
        obj[text] = true;
    }
});

var obj = {};
$('.fruit6').each(function(){
    var text = $.trim($(this).text());
    if(obj[text]){
        $(this).remove();
    } else {
        obj[text] = true;
    }
});

var obj = {};
$('.fruit7').each(function(){
    var text = $.trim($(this).text());
    if(obj[text]){
        $(this).remove();
    } else {
        obj[text] = true;
    }
});

var obj = {};
$('.fruit8').each(function(){
    var text = $.trim($(this).text());
    if(obj[text]){
        $(this).remove();
    } else {
        obj[text] = true;
    }
});

var obj = {};
$('.fruit9').each(function(){
    var text = $.trim($(this).text());
    if(obj[text]){
        $(this).remove();
    } else {
        obj[text] = true;
    }
});

var obj = {};
$('.fruit10').each(function(){
    var text = $.trim($(this).text());
    if(obj[text]){
        $(this).remove();
    } else {
        obj[text] = true;
    }
});

var obj = {};
$('.fruit11').each(function(){
    var text = $.trim($(this).text());
    if(obj[text]){
        $(this).remove();
    } else {
        obj[text] = true;
    }
});

  $("#btnsubmit").hide();
$("#valagency").keyup(function() {
  if ($(this).val()) {
    $("#btnsubmit").show();
    $("#btnsubmit1").hide();
  } else {
    $("#btnsubmit1").show();
    $("#btnsubmit").hide();
  }
});

    $(".navigation123reSearchForSomeTime1").click(function(){
    $(".blockSearchOpenOnSite").css("display", "block");
  });

    $(".closeModalSearrch").click(function(){
    $(".blockSearchOpenOnSite").css("display", "none");
  });

    $(".closeModalFilterr").click(function(){
    $(".blockFilterrOpenOnSite").css("display", "none");
  });

    $(".LoadFilter11CloseFill").click(function(){
    $(".CatalogGridBackDiv").css("left", "-100%");
    $(".closeFilterBackground").css("right", "-100%");
    $(".closeFilterBackground").css("opacity", "0");  
    $(".LoadFilter1OpenFilter").css("margin-right", "10px");  
 });

    $(".openModalSearrchTensiune").click(function(){
    $(".openModalSearrchTensiune").css("right", "-25px");
    $(".closeModalSearrchTensiune").css("right", "8px");
    $(".gridcontainerOpenTensiune").css("display", "flex");
 });

    $(".closeModalSearrchTensiune").click(function(){
    $(".openModalSearrchTensiune").css("right", "8px");  
    $(".closeModalSearrchTensiune").css("right", "-25px");
    $(".gridcontainerOpenTensiune").css("display", "none");
 });

    $(".openModalSearrchBrend").click(function(){
    $(".openModalSearrchBrend").css("right", "-25px");
    $(".closeModalSearrchBrend").css("right", "8px");
    $(".gridcontainerOpenBrend").css("display", "flex");
 });

    $(".closeModalSearrchBrend").click(function(){
    $(".openModalSearrchBrend").css("right", "8px");  
    $(".closeModalSearrchBrend").css("right", "-25px");
    $(".gridcontainerOpenBrend").css("display", "none");
 });

    $(".openModalSearrchCurent").click(function(){
    $(".openModalSearrchCurent").css("right", "-25px");
    $(".closeModalSearrchCurent").css("right", "8px");
    $(".gridcontainerOpenCurent").css("display", "flex");
 });

    $(".closeModalSearrchCurent").click(function(){
    $(".openModalSearrchCurent").css("right", "8px");  
    $(".closeModalSearrchCurent").css("right", "-25px");
    $(".gridcontainerOpenCurent").css("display", "none");
 });

    $(".openModalSearrchDimensiune_c").click(function(){
    $(".openModalSearrchDimensiune_c").css("right", "-25px");
    $(".closeModalSearrchDimensiune_c").css("right", "8px");
    $(".gridcontainerOpenDimensiune_c").css("display", "flex");
 });

    $(".closeModalSearrchDimensiune_c").click(function(){
    $(".openModalSearrchDimensiune_c").css("right", "8px");  
    $(".closeModalSearrchDimensiune_c").css("right", "-25px");
    $(".gridcontainerOpenDimensiune_c").css("display", "none");
 });

    $(".openModalSearrchDimensiune_b").click(function(){
    $(".openModalSearrchDimensiune_b").css("right", "-25px");
    $(".closeModalSearrchDimensiune_b").css("right", "8px");
    $(".gridcontainerOpenDimensiune_b").css("display", "flex");
 });

    $(".closeModalSearrchDimensiune_b").click(function(){
    $(".openModalSearrchDimensiune_b").css("right", "8px");  
    $(".closeModalSearrchDimensiune_b").css("right", "-25px");
    $(".gridcontainerOpenDimensiune_b").css("display", "none");
 });

    $(".openModalSearrchDimensiune_a").click(function(){
    $(".openModalSearrchDimensiune_a").css("right", "-25px");
    $(".closeModalSearrchDimensiune_a").css("right", "8px");
    $(".gridcontainerOpenDimensiune_a").css("display", "flex");
 });

    $(".closeModalSearrchDimensiune_a").click(function(){
    $(".openModalSearrchDimensiune_a").css("right", "8px");  
    $(".closeModalSearrchDimensiune_a").css("right", "-25px");
    $(".gridcontainerOpenDimensiune_a").css("display", "none");
 });

    $(".openModalSearrchNumarul_dintilor").click(function(){
    $(".openModalSearrchNumarul_dintilor").css("right", "-25px");
    $(".closeModalSearrchNumarul_dintilor").css("right", "8px");
    $(".gridcontainerOpenNumarul_dintilor").css("display", "flex");
 });

    $(".closeModalSearrchNumarul_dintilor").click(function(){
    $(".openModalSearrchNumarul_dintilor").css("right", "8px");  
    $(".closeModalSearrchNumarul_dintilor").css("right", "-25px");
    $(".gridcontainerOpenNumarul_dintilor").css("display", "none");
 });

    $(".openModalSearrchTip_semnal").click(function(){
    $(".openModalSearrchTip_semnal").css("right", "-25px");
    $(".closeModalSearrchTip_semnal").css("right", "8px");
    $(".gridcontainerOpenTip_semnal").css("display", "flex");
 });

    $(".closeModalSearrchTip_semnal").click(function(){
    $(".openModalSearrchTip_semnal").css("right", "8px");  
    $(".closeModalSearrchTip_semnal").css("right", "-25px");
    $(".gridcontainerOpenTip_semnal").css("display", "none");
 });

    $(".openModalSearrchPompa").click(function(){
    $(".openModalSearrchPompa").css("right", "-25px");
    $(".closeModalSearrchPompa").css("right", "8px");
    $(".gridcontainerOpenPompa").css("display", "flex");
 });

    $(".closeModalSearrchPompa").click(function(){
    $(".openModalSearrchPompa").css("right", "8px");  
    $(".closeModalSearrchPompa").css("right", "-25px");
    $(".gridcontainerOpenPompa").css("display", "none");
 });

    $(".openModalSearrchTip_de_conector").click(function(){
    $(".openModalSearrchTip_de_conector").css("right", "-25px");
    $(".closeModalSearrchTip_de_conector").css("right", "8px");
    $(".gridcontainerOpenTip_de_conector").css("display", "flex");
 });

    $(".closeModalSearrchTip_de_conector").click(function(){
    $(".openModalSearrchTip_de_conector").css("right", "8px");  
    $(".closeModalSearrchTip_de_conector").css("right", "-25px");
    $(".gridcontainerOpenTip_de_conector").css("display", "none");
 });

    $(".openModalSearrchBss_lin_ide").click(function(){
    $(".openModalSearrchBss_lin_ide").css("right", "-25px");
    $(".closeModalSearrchBss_lin_ide").css("right", "8px");
    $(".gridcontainerOpenBss_lin_ide").css("display", "flex");
 });

    $(".closeModalSearrchBss_lin_ide").click(function(){
    $(".openModalSearrchBss_lin_ide").css("right", "8px");  
    $(".closeModalSearrchBss_lin_ide").css("right", "-25px");
    $(".gridcontainerOpenBss_lin_ide").css("display", "none");
 });

    $(".openModalSearrchBss_lin_ide1").click(function(){
    $(".openModalSearrchBss_lin_ide1").css("right", "-25px");
    $(".closeModalSearrchBss_lin_ide1").css("right", "8px");
    $(".gridcontainerOpenBss_lin_ide1").css("display", "flex");
 });

    $(".closeModalSearrchBss_lin_ide1").click(function(){
    $(".openModalSearrchBss_lin_ide1").css("right", "8px");  
    $(".closeModalSearrchBss_lin_ide1").css("right", "-25px");
    $(".gridcontainerOpenBss_lin_ide1").css("display", "none");
 });

    $(".openModalSearrchtypetc").click(function(){
    $(".openModalSearrchtypetc").css("right", "-25px");
    $(".closeModalSearrchtypetc").css("right", "8px");
    $(".gridcontainerOpentypetc").css("display", "flex");
 });

    $(".closeModalSearrchtypetc").click(function(){
    $(".openModalSearrchtypetc").css("right", "8px");  
    $(".closeModalSearrchtypetc").css("right", "-25px");
    $(".gridcontainerOpentypetc").css("display", "none");
 });    

    $(".openModalSearrchtypetc").click(function(){
    $(".openModalSearrchtypetc").css("right", "-25px");
    $(".closeModalSearrchtypetc").css("right", "8px");
    $(".gridcontainerOpentypetc").css("display", "flex");
 });

    $(".closeModalSearrchtypetc").click(function(){
    $(".openModalSearrchtypetc").css("right", "8px");  
    $(".closeModalSearrchtypetc").css("right", "-25px");
    $(".gridcontainerOpentypetc").css("display", "none");
 });   


$(document).ready(function(){
    function get_filter(class_name)
    {
        var filter = [];
        $('.'+class_name+':checked').each(function(){
            filter.push($(this).val());
        });
        return filter;
    }

    $('.common_selector').click(function(){
      offset = 0;
      filter_data();
    });

    $('#price_range').slider({
        range:true,
        min:1000,
        max:65000,
        values:[1000, 65000],
        step:500,
        stop:function(event, ui)
        {
            $('#price_show').html(ui.values[0] + ' - ' + ui.values[1]);
            $('#hidden_minimum_price').val(ui.values[0]);
            $('#hidden_maximum_price').val(ui.values[1]);
            filter_data();
        }
    });

});
</script>

</body>
</html>

<script type="text/javascript" src="js/vanilla.min.js"></script>

<script type="text/javascript">

    $(".navbarButtcat1").click(function(){
    $(".navbarButtcat1").css("display", "none");
    $(".navbarButtcat").css("display", "block");
    $(".divcatalogunderheader").css("display", "block");
  });  

    $(".navbarButtcat").click(function(){
    $(".navbarButtcat").css("display", "none");
    $(".navbarButtcat1").css("display", "block");
    $(".divcatalogunderheader").css("display", "none");
  });  

    $(".closeFilterBackground").click(function(){
    $(".navbarButtcat").css("display", "none");
    $(".navbarButtcat1").css("display", "block");
    $(".divcatalogunderheader").css("display", "none");
  });

    $("#btnsubmit").click(function(){
    $("#btnsubmit").css("background-image", "url(/img/imgSite/loaderValenterAuto.gif)");
    $("#btnsubmit").css("background-color", "white");
    $("#btnsubmit").css("border", "2px solid #0088CC");
  });

    var granimInstance = new Granim({
    element: '#canvas-basic',
    direction: 'left-right',
    isPausedWhenNotInView: true,
    stateTransitionSpeed: 500,
    states : {
        "default-state": {
            gradients: [
                ['#ffffff', '#eaeaea'],
                ['#eaeaea', '#eaeaea'],
                ['#ffffff', '#ffffff']
            ]
        }
    }
});

   $(document).ready(function(){
  $(".sidebarJScss2").click(function(){
    $(".sidebarJScss12").css("height", "1725px");
    $(".sidebarJScss12").css("border-radius", "20px");
    $(".sidebarJScss2").css("top", "-35px");
    $(".sidebarJScssClose2").css("right", "12px");
  });
});

   $(document).ready(function(){
  $(".sidebarJScssClose2").click(function(){
    $(".sidebarJScss12").css("height", "60px");
    $(".sidebarJScss12").css("border-radius", "10px");
    $(".sidebarJScssClose2").css("right", "-35px");
    $(".sidebarJScss2").css("top", "15px");
  });
});


   $(document).ready(function(){
  $(".sidebarJScss1").click(function(){
    $(".sidebarJScss11").css("height", "auto");
    $(".sidebarJScss1").css("top", "-35px");
    $(".sidebarJScssClose1").css("right", "12px");
  });
});

   $(document).ready(function(){
  $(".sidebarJScssClose1").click(function(){
    $(".sidebarJScss11").css("height", "60px");
    $(".sidebarJScssClose1").css("right", "-35px");
    $(".sidebarJScss1").css("top", "15px");
  });
});

    $(document).ready(function(){
  $(".sidebarJScss7").click(function(){
    $(".sidebarJScss77").css("height", "299px");
    $(".sidebarJScss77").css("border-radius", "20px");
    $(".sidebarJScss7").css("top", "-35px");
    $(".sidebarJScssClose7").css("right", "12px");
  });
});

   $(document).ready(function(){
  $(".sidebarJScssClose7").click(function(){
    $(".sidebarJScss77").css("height", "60px");
    $(".sidebarJScss77").css("border-radius", "10px");
    $(".sidebarJScssClose7").css("right", "-35px");
    $(".sidebarJScss7").css("top", "15px");
  });
});

   $(document).ready(function(){
  $(".sidebarJScss3").click(function(){
    $(".sidebarJScss33").css("height", "900px");
    $(".sidebarJScss33").css("border-radius", "20px");
    $(".sidebarJScss3").css("top", "-35px");
    $(".sidebarJScssClose3").css("right", "12px");
  });
});

   $(document).ready(function(){
  $(".sidebarJScssClose3").click(function(){
    $(".sidebarJScss33").css("height", "60px");
    $(".sidebarJScss33").css("border-radius", "10px");
    $(".sidebarJScssClose3").css("right", "-35px");
    $(".sidebarJScss3").css("top", "15px");
  });
});


      $(document).ready(function(){
  $(".sidebarJScss315").click(function(){
    $(".sidebarJScss3315").css("height", "440px");
    $(".sidebarJScss3315").css("border-radius", "20px");
    $(".sidebarJScss315").css("top", "-35px");
    $(".sidebarJScssClose315").css("right", "12px");
  });
});

   $(document).ready(function(){
  $(".sidebarJScssClose315").click(function(){
    $(".sidebarJScss3315").css("height", "60px");
    $(".sidebarJScss3315").css("border-radius", "10px");
    $(".sidebarJScssClose315").css("right", "-35px");
    $(".sidebarJScss315").css("top", "15px");
  });
});


    $(document).ready(function(){
  $(".sidebarJScss4").click(function(){
    $(".sidebarJScss44").css("height", "210px");
    $(".sidebarJScss44").css("border-radius", "20px");
    $(".sidebarJScss4").css("top", "-35px");
    $(".sidebarJScssClose4").css("right", "12px");
  });
});

   $(document).ready(function(){
  $(".sidebarJScssClose4").click(function(){
    $(".sidebarJScss44").css("height", "60px");
    $(".sidebarJScss44").css("border-radius", "10px");
    $(".sidebarJScssClose4").css("right", "-35px");
    $(".sidebarJScss4").css("top", "15px");
  });
});


    $(document).ready(function(){
  $(".sidebarJScss5").click(function(){
    $(".sidebarJScss55").css("height", "auto");
    $(".sidebarJScss5").css("top", "-35px");
    $(".sidebarJScssClose5").css("right", "12px");
  });
});

   $(document).ready(function(){
  $(".sidebarJScssClose5").click(function(){
    $(".sidebarJScss55").css("height", "60px");
    $(".sidebarJScssClose5").css("right", "-35px");
    $(".sidebarJScss5").css("top", "15px");
  });
});

    $(document).ready(function(){
  $(".sidebarJScss6").click(function(){
    $(".sidebarJScss66").css("height", "auto");
    $(".sidebarJScss6").css("top", "-35px");
    $(".sidebarJScssClose6").css("right", "12px");
  });
});

   $(document).ready(function(){
  $(".sidebarJScssClose6").click(function(){
    $(".sidebarJScss66").css("height", "60px");
    $(".sidebarJScssClose6").css("right", "-35px");
    $(".sidebarJScss6").css("top", "15px");
  });
});

    $(document).ready(function(){
  $(".slideOpen").click(function(){
    $(".sidebarFilter1350768").css("left", "-5px");
    $(".closeFilterBackground").css("right", "0%");
    $(".closeFilterBackground").css("opacity", "0.5");
    $(".closeFilterr").css("transform", "rotate(360deg)");
  });
});

    $(document).ready(function(){
  $(".sidebarJScss11closs").click(function(){
    $(".sidebarFilter1350768").css("left", "-320px");
    $(".closeFilterBackground").css("right", "-100%");
    $(".closeFilterBackground").css("opacity", "0.5");
    $(".closeFilterr").css("transform", "rotate(-360deg)");
  });
});


        $(document).ready(function(){
  $(".closeFilterbackground").click(function(){
    $(".sidebarFilter1350768").css("left", "-320px");
    $(".closeFilterBackground").css("right", "-100%");
    $(".closeFilterBackground").css("opacity", "0");
    $(".closeFilterr").css("transform", "rotate(-360deg)");
  });
});
</script>

<script type="text/javascript">
  function show1(value) {
    document.querySelector(".text-box1").value = value;
  }
  let dropdown1 = document.querySelector(".dropdown1")
  dropdown1.onclick = function() {
      dropdown1.classList.toggle("active")
  }
  function show(value) {
    document.querySelector(".text-box").value = value;
  }  
  let dropdown = document.querySelector(".dropdown")
  dropdown.onclick = function() {
      dropdown.classList.toggle("active")
  }
</script>

<script>

$("#btnsubmit").hide();
$("#valagency").keyup(function() {
  if ($(this).val()) {
    $("#btnsubmit").show();
    $("#btnsubmit1").hide();
  } else {
    $("#btnsubmit1").show();
    $("#btnsubmit").hide();
  }
});

$("#btnsubmit23").hide();
$("#valagency23").keyup(function() {
  if ($(this).val()) {
    $("#btnsubmit23").show();
    $("#btnsubmit123").hide();
  } else {
    $("#btnsubmit123").show();
    $("#btnsubmit23").hide();
  }
});

$("#btnsubmit3").hide();
$("#valagency3").keyup(function() {
  if ($(this).val()) {
    $("#btnsubmit3").show();
    $("#btnsubmit13").hide();
  } else {
    $("#btnsubmit13").show();
    $("#btnsubmit3").hide();
  }
});

$("#btnsubmit4").hide();
$("#valagency4").keyup(function() {
  if ($(this).val()) {
    $("#btnsubmit4").show();
    $("#btnsubmit14").hide();
  } else {
    $("#btnsubmit14").show();
    $("#btnsubmit4").hide();
  }
});

$("#btnsubmit5").hide();
$("#valagency5").keyup(function() {
  if ($(this).val()) {
    $("#btnsubmit5").show();
    $("#btnsubmit15").hide();
  } else {
    $("#btnsubmit15").show();
    $("#btnsubmit5").hide();
  }
});

$("#btnsubmit6").hide();
$("#valagency6").keyup(function() {
  if ($(this).val()) {
    $("#btnsubmit6").show();
    $("#btnsubmit16").hide();
  } else {
    $("#btnsubmit16").show();
    $("#btnsubmit6").hide();
  }
});

$("#btnsubmit7").hide();
$("#valagency7").keyup(function() {
  if ($(this).val()) {
    $("#btnsubmit7").show();
    $("#btnsubmit17").hide();
  } else {
    $("#btnsubmit17").show();
    $("#btnsubmit7").hide();
  }
});

$("#btnsubmit8").hide();
$("#valagency8").keyup(function() {
  if ($(this).val()) {
    $("#btnsubmit8").show();
    $("#btnsubmit18").hide();
  } else {
    $("#btnsubmit18").show();
    $("#btnsubmit8").hide();
  }
});

$("#btnsubmit9").hide();
$("#valagency9").keyup(function() {
  if ($(this).val()) {
    $("#btnsubmit9").show();
    $("#btnsubmit19").hide();
  } else {
    $("#btnsubmit19").show();
    $("#btnsubmit9").hide();
  }
});

$("#btnsubmit10").hide();
$("#valagency10").keyup(function() {
  if ($(this).val()) {
    $("#btnsubmit10").show();
    $("#btnsubmit110").hide();
  } else {
    $("#btnsubmit110").show();
    $("#btnsubmit10").hide();
  }
});

$("#btnsubmit11").hide();
$("#valagency11").keyup(function() {
  if ($(this).val()) {
    $("#btnsubmit11").show();
    $("#btnsubmit111").hide();
  } else {
    $("#btnsubmit111").show();
    $("#btnsubmit11").hide();
  }
});

$("#btnsubmit12").hide();
$("#valagency12").keyup(function() {
  if ($(this).val()) {
    $("#btnsubmit12").show();
    $("#btnsubmit112").hide();
  } else {
    $("#btnsubmit112").show();
    $("#btnsubmit12").hide();
  }
});

    $(".rotoralternatorbutton").click(function(){
    $(".aplicaridiodbutton").css("display", "none");
    $(".whatyoutrytofind").css("display", "none");
    $(".formssearchrotoralt").css("display", "block");
  });

    $(".formssearchrotoralttextlink").click(function(){
    $(".aplicaridiodbutton").css("display", "flex");
    $(".whatyoutrytofind").css("display", "block");
    $(".formssearchrotoralt").css("display", "none");
  });

    $(".statoralternatorbutton").click(function(){
    $(".aplicaridiodbutton").css("display", "none");
    $(".whatyoutrytofind").css("display", "none");
    $(".formssearchstatoralt").css("display", "block");
  });

    $(".formssearchrotoralttextlink").click(function(){
    $(".aplicaridiodbutton").css("display", "flex");
    $(".whatyoutrytofind").css("display", "block");
    $(".formssearchstatoralt").css("display", "none");
  });

    $(".alternatorbutton").click(function(){
    $(".aplicaridiodbutton").css("display", "none");
    $(".whatyoutrytofind").css("display", "none");
    $(".formssearchalt").css("display", "block");
  });

    $(".formssearchrotoralttextlink").click(function(){
    $(".aplicaridiodbutton").css("display", "flex");
    $(".whatyoutrytofind").css("display", "block");
    $(".formssearchalt").css("display", "none");
  });

    $(".redresoralternatorbutton").click(function(){
    $(".aplicaridiodbutton").css("display", "none");
    $(".whatyoutrytofind").css("display", "none");
    $(".formssearchredresoralt").css("display", "block");
  });

    $(".formssearchrotoralttextlink").click(function(){
    $(".aplicaridiodbutton").css("display", "flex");
    $(".whatyoutrytofind").css("display", "block");
    $(".formssearchredresoralt").css("display", "none");
  });

    $(".inelalternatorbutton").click(function(){
    $(".aplicaridiodbutton").css("display", "none");
    $(".whatyoutrytofind").css("display", "none");
    $(".formssearchinelalt").css("display", "block");
  });

    $(".regulatoralternatorbutton").click(function(){
    $(".aplicaridiodbutton").css("display", "none");
    $(".whatyoutrytofind").css("display", "none");
    $(".formssearchregulatoralt").css("display", "block");
  });

    $(".fulie1alternatorbutton").click(function(){
    $(".aplicaridiodbutton").css("display", "none");
    $(".whatyoutrytofind").css("display", "none");
    $(".formssearchfulie1alt").css("display", "block");
  });

    $(".fuliealternatorbutton").click(function(){
    $(".aplicaridiodbutton").css("display", "none");
    $(".whatyoutrytofind").css("display", "none");
    $(".formssearchfuliealt").css("display", "block");
  });

    $(".elalternatorbutton").click(function(){
    $(".aplicaridiodbutton").css("display", "none");
    $(".whatyoutrytofind").css("display", "none");
    $(".formssearchelalt").css("display", "block");
  });

    $(".rotorelalternatorbutton").click(function(){
    $(".aplicaridiodbutton").css("display", "none");
    $(".whatyoutrytofind").css("display", "none");
    $(".formssearchrotorelalt").css("display", "block");
  });

    $(".statorelalternatorbutton").click(function(){
    $(".aplicaridiodbutton").css("display", "none");
    $(".whatyoutrytofind").css("display", "none");
    $(".formssearchstatorelalt").css("display", "block");
  });

    $(".bendixalternatorbutton").click(function(){
    $(".aplicaridiodbutton").css("display", "none");
    $(".whatyoutrytofind").css("display", "none");
    $(".formssearchbendixalt").css("display", "block");
  });

    $(".closesearch").click(function(){
    $(".divcatalogunderheadersearch").css("display", "none");
    $(".closeFilterBackgroundsearch").css("display", "none");
    $(".aplicaridiodbutton").css("display", "flex");
    $(".whatyoutrytofind").css("display", "block");
    $(".formssearchclose").css("display", "none");
  });

    $(".closeFilterBackgroundsearch").click(function(){
    $(".divcatalogunderheadersearch").css("display", "none");
    $(".closeFilterBackgroundsearch").css("display", "none");
    $(".aplicaridiodbutton").css("display", "flex");
    $(".whatyoutrytofind").css("display", "block");
    $(".formssearchclose").css("display", "none");
  });

    $(".headerButtonSsearch").click(function(){
    $(".divcatalogunderheadersearch").css("display", "block");
    $(".closeFilterBackgroundsearch").css("display", "block");
  });

    $(".formssearchrotoralttextlink").click(function(){
    $(".aplicaridiodbutton").css("display", "flex");
    $(".whatyoutrytofind").css("display", "block");
    $(".formssearchinelalt").css("display", "none");
  });

    $(".formssearchrotoralttextlink").click(function(){
    $(".aplicaridiodbutton").css("display", "flex");
    $(".whatyoutrytofind").css("display", "block");
    $(".formssearchclose").css("display", "none");
  });

    $("#btnsubmit").click(function(){
    $("#btnsubmit").css("background-image", "url(/img/imgSite/loaderValenterAuto.gif)");
    $("#btnsubmit").css("background-color", "white");
    $("#btnsubmit").css("border", "2px solid #0088CC");
  });

    $("#btnsubmit23").click(function(){
    $("#btnsubmit23").css("background-image", "url(/img/imgSite/loaderValenterAuto.gif)");
    $("#btnsubmit23").css("background-color", "white");
    $("#btnsubmit23").css("border", "2px solid #0088CC");
  });

    $("#btnsubmit3").click(function(){
    $("#btnsubmit3").css("background-image", "url(/img/imgSite/loaderValenterAuto.gif)");
    $("#btnsubmit3").css("background-color", "white");
    $("#btnsubmit3").css("border", "2px solid #0088CC");
  });

    $("#btnsubmit4").click(function(){
    $("#btnsubmit4").css("background-image", "url(/img/imgSite/loaderValenterAuto.gif)");
    $("#btnsubmit4").css("background-color", "white");
    $("#btnsubmit4").css("border", "2px solid #0088CC");
  });

    $("#btnsubmit5").click(function(){
    $("#btnsubmit5").css("background-image", "url(/img/imgSite/loaderValenterAuto.gif)");
    $("#btnsubmit5").css("background-color", "white");
    $("#btnsubmit5").css("border", "2px solid #0088CC");
  });

    $("#btnsubmit6").click(function(){
    $("#btnsubmit6").css("background-image", "url(/img/imgSite/loaderValenterAuto.gif)");
    $("#btnsubmit6").css("background-color", "white");
    $("#btnsubmit6").css("border", "2px solid #0088CC");
  });

    $("#btnsubmit7").click(function(){
    $("#btnsubmit7").css("background-image", "url(/img/imgSite/loaderValenterAuto.gif)");
    $("#btnsubmit7").css("background-color", "white");
    $("#btnsubmit7").css("border", "2px solid #0088CC");
  });

    $("#btnsubmit8").click(function(){
    $("#btnsubmit8").css("background-image", "url(/img/imgSite/loaderValenterAuto.gif)");
    $("#btnsubmit8").css("background-color", "white");
    $("#btnsubmit8").css("border", "2px solid #0088CC");
  });

    $("#btnsubmit9").click(function(){
    $("#btnsubmit9").css("background-image", "url(/img/imgSite/loaderValenterAuto.gif)");
    $("#btnsubmit9").css("background-color", "white");
    $("#btnsubmit9").css("border", "2px solid #0088CC");
  });

    $("#btnsubmit10").click(function(){
    $("#btnsubmit10").css("background-image", "url(/img/imgSite/loaderValenterAuto.gif)");
    $("#btnsubmit10").css("background-color", "white");
    $("#btnsubmit10").css("border", "2px solid #0088CC");
  });

    $("#btnsubmit11").click(function(){
    $("#btnsubmit11").css("background-image", "url(/img/imgSite/loaderValenterAuto.gif)");
    $("#btnsubmit11").css("background-color", "white");
    $("#btnsubmit11").css("border", "2px solid #0088CC");
  });

    $("#btnsubmit12").click(function(){
    $("#btnsubmit12").css("background-image", "url(/img/imgSite/loaderValenterAuto.gif)");
    $("#btnsubmit12").css("background-color", "white");
    $("#btnsubmit12").css("border", "2px solid #0088CC");
  });

    $(".navigation123reSearchForSomeTime1").click(function(){
    $(".blockSearchOpenOnSite").css("display", "block");
  });

    $(".closeModalSearrch").click(function(){
    $(".blockSearchOpenOnSite").css("display", "none");
  });

    $(".closeModalFilterr").click(function(){
    $(".blockFilterrOpenOnSite").css("display", "none");
  });

    $(".navbarButtcat1").click(function(){
    $(".navbarButtcat1").css("display", "none");
    $(".navbarButtcat").css("display", "block");
    $(".divcatalogunderheader").css("display", "block");
  });  

    $(".navbarButtcat").click(function(){
    $(".navbarButtcat").css("display", "none");
    $(".navbarButtcat1").css("display", "block");
    $(".divcatalogunderheader").css("display", "none");
  });  

    $(".closeFilterBackground").click(function(){
    $(".navbarButtcat").css("display", "none");
    $(".navbarButtcat1").css("display", "block");
    $(".divcatalogunderheader").css("display", "none");
  });

    $(".closeFilterropo").click(function(){
    $(".navbarButtcat").css("display", "none");
    $(".navbarButtcat1").css("display", "block");
    $(".divcatalogunderheader").css("display", "none");
  });
</script>