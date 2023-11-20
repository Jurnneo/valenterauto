<?php
require "includes/db_connect.php";
?>
<!DOCTYPE html>
<html>
<head>
<title>ValenterAuto : Alternatoare, Electromotoare, Senzoare...</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Compania ValenterAuto activează pe piața Romaniei din anul 2010.
Principalele activități sunt:
– Vanzare de demaroare și generatoare auto
– Vanzare de componente pentru demaroare și alternatoare auto">
<meta name="keywords" content="Alternatoare, Electromotoare, Senzoare">

<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;470;630;723&display=swap" rel="stylesheet">
<link rel="icon" sizes='16x16' type="image/png" href="img/imgSite/ValenterAutoLogo.png"/>
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/stylemobb.css">
<link rel="stylesheet" type="text/css" href="css/optimization.css">
<link rel="shortcut icon" href="" type="image/png">
<link rel="stylesheet" href="css/slick.css">
<link rel="stylesheet" href="css/slick-theme.css">
<link rel="stylesheet" href="css/anim.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="js/onclickqq1.js"></script>
<script src="js/granim.min.js"></script>
<script src="js/slick.js"></script>
<script src="js/slidersSidebarAndShrink.js"></script>
<script src="js/wow.min.js"></script>
<script> new WOW().init(); </script>

</head>

<body>

<div id="prel">
  <div id="imgLoadSearchData1">
    <img id="imgLoadSearchDataimg1" src="../../img/imgSite/loaderValenterAuto.gif">
  </div>
</div>

<?php include "includeSearchProducts1.php"; ?>      

<div class="closeFilterBackground"> </div>  

<div class="closeFilterBackgroundsearch"> </div>    

<?php include "includeheader.php"; ?>   

<div class="displayBlockSlider wow fadeIn slider demo" style="overflow: hidden;" data-wow-duration="2s"> 
 <div class="sliskSlider">
  <a href="categories/alternator/article.php?id=2968"><img src="img/slider/slider2.jpg" style="width: 100%; height: 100%;"></a>
 </div>
 <div class="sliskSlider">
  <a href="#"><img src="img/slider/slider1.jpg" style="width: 100%; height: 100%;"></a>
 </div>
</div> 

<div class="displayNoneSlider wow fadeIn slider demo" style="overflow: hidden;" data-wow-duration="2s"> 
<div class="sliskSlider">
  <a href="categories/alternator/article.php?id=2968"><img src="img/slider/slider2.1.jpg" style="width: 100%; height: 100%;"></a>
 </div>
 <div class="sliskSlider">
  <a href="#"><img src="img/slider/slider1.1.jpg" style="width: 100%; height: 100%;"></a>
 </div>
</div> 

<div class="displayNoneSlider1 wow fadeIn slider demo" style="overflow: hidden;" data-wow-duration="2s"> 
 <div class="sliskSlider">
  <a href="categories/alternator/article.php?id=2968"><img src="img/slider/slider2.2.jpg" style="width: 100%; height: 100%;"></a>
 </div>
 <div class="sliskSlider">
  <a href="#"><img src="img/slider/slider1.2.jpg" style="width: 100%; height: 100%;"></a>
 </div>
</div> 

<div class="wow fadeIn TwoCategories">

  <div class="TwoCategoriesFChangeHeight1 TwoCategoriesF">
    <a href="categories/alternator"><img src="img/imgSite/alternatorPng.png"></a>
    <div class="TwoCategoriesText">
      <a href="categories/alternator">
        <div class="textLink">
          <h2>ALTERNATOR</h2>
          <p>Un generator de automobile este un dispozitiv care transformă energia mecanică de rotație a arborelui cotit al unui motor auto în energie electrică.</p>          
        </div>
      </a>      
    </div>    
  </div>

  <div class="TwoCategoriesFChangeHeight2 TwoCategoriesF">
    <a href="categories/electromotor"><img src="img/imgSite/electromotorPng.png"></a>
     <div class="TwoCategoriesText">
      <a href="categories/electromotor">
        <div class="textLink">
          <h2>ELECTROMOTOR</h2>
          <p>Demarorul este un dispozitiv folosit pentru punerea în funcţiune a unui motor, care poate funcţiona independent, dar nu poate porni singur. Demarorul poate fi un motor electric, pneumatic, hidraulic, cu ardere internă, demaror prin inerţie, sau alte dispozitive.</p>          
        </div>
      </a>      
     </div>    
  </div>  
  
</div>

<div class="wow fadeIn whyNotWork">
  <h2>ALTERNATOR</h2>
  <button onclick="window.location.href='categories/alternator'" class="LoadFilter1">CATALOG</button>
</div>

<div class="wow fadeIn galleryDiv mobileGallDivv">

<?php

  $result = mysqli_query($link, "SELECT alternatorinitial.id, alternatorinitial.link, alternatorinitial.brend, alternatorinitial.title, alternatorinitial.imgsrc, alternatorinitial.price, alternatorinitial.category, alternatorinitial.product_status, alternatorinitial.voltag, alternatorkrosstablefilter.linkalternator, krosstablefilter_categories.ch1, alternatorkrosstablefilter.ch1_2, krosstablefilter_categories.ch2, alternatorkrosstablefilter.ch2_2, krosstablefilter_categories.ch3, alternatorkrosstablefilter.ch3_2, krosstablefilter_categories.ch4, alternatorkrosstablefilter.ch4_2, krosstablefilter_categories.ch5, alternatorkrosstablefilter.ch5_2, krosstablefilter_categories.ch6, alternatorkrosstablefilter.ch6_2, krosstablefilter_categories.ch7, alternatorkrosstablefilter.ch7_2, krosstablefilter_categories.ch8, alternatorkrosstablefilter.ch8_2, krosstablefilter_categories.ch9, alternatorkrosstablefilter.ch9_2, krosstablefilter_categories.ch10, alternatorkrosstablefilter.ch10_2 FROM alternatorinitial
    LEFT JOIN alternatorkrosstablefilter
    ON alternatorinitial.voltag = alternatorkrosstablefilter.linkalternator LEFT JOIN krosstablefilter_categories ON alternatorkrosstablefilter.categoryinfilter = krosstablefilter_categories.categoryinfilter1
    WHERE category = 'Alternator' AND product_status = '1' ORDER BY id DESC LIMIT 8");

  if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_array($result);

    do{

     $linksklad5 = $row["link"];
     $titleupakovka = $row["title"];

 $result1 = mysqli_query($link, "SELECT SUM(Column_4) AS Column_5sum FROM `alternatorstock` WHERE `Column_3` = '$titleupakovka' AND (`Column_2` = '$linksklad5' OR `Column_1` = '$linksklad5')");

  if (mysqli_num_rows($result1) > 0) {
    $rowpsklad = mysqli_fetch_array($result1);

    do{

 $totalsum = $rowpsklad['Column_5sum'];

        if ($totalsum > 0){
          $finalinf = '<div class="stockondivblock stockondiv"><p class="fruit stockon">IN STOC</p></div>';
        }

        //if (($totalsum > 0) AND ($totalsum < 3)){
        //  $finalinf = '<div class="stockondiv1"><div class="stockonlamp1"></div><p class="fruit stockon1">STOC LIMITAT | '. $rowpsklad['Column_5sum'] .'</p></div>';
        //}

        if ($totalsum == 0){
          $finalinf = '<div class="stockondivblock stockondiv2"><p class="fruit stockon2">LA COMANDA</p></div>';
        }

        if ($totalsum == NULL){
          $finalinf = '<div class="stockondivblock stockondiv1"><p class="fruit stockon1">SE CONCRETIZEAZA</p></div>';
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
     $maxchar = 20; // макс длинна
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
      <a href="/categories/alternator/article.php?id='.$row["id"].'" target="_blank">
        <div class="galleryDivvImg">
            <p class="brandpinposition">'.$row["brend"].'</p>
            <img style="width: 100%" class="galleryDivvImgBckgroundImg" src="../../img/imgSite/backgroundImgPng.png">
            <div class="IconsNafoto"></div>
            <img src="/img/product/'.$row["voltag"].'-1.jpg" width="100%">
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
  }

?>

</div>

<div class="wow fadeIn whyNotWork">
  <h2>ELECTROMOTOR</h2>
  <button onclick="window.location.href='categories/electromotor'" class="LoadFilter1">CATALOG</button>
</div>

<div class="wow fadeIn galleryDiv mobileGallDivv">

<?php

  $result = mysqli_query($link, "SELECT electromotorinitial.id, electromotorinitial.link, electromotorinitial.brend, electromotorinitial.title, electromotorinitial.imgsrc, electromotorinitial.price, electromotorinitial.category, electromotorinitial.product_status, electromotorinitial.voltag, electromotorkrosstablefilter.linkalternator, krosstablefilter_categories.ch1, electromotorkrosstablefilter.ch1_2, krosstablefilter_categories.ch2, electromotorkrosstablefilter.ch2_2, krosstablefilter_categories.ch3, electromotorkrosstablefilter.ch3_2, krosstablefilter_categories.ch4, electromotorkrosstablefilter.ch4_2, krosstablefilter_categories.ch5, electromotorkrosstablefilter.ch5_2, krosstablefilter_categories.ch6, electromotorkrosstablefilter.ch6_2, krosstablefilter_categories.ch7, electromotorkrosstablefilter.ch7_2, krosstablefilter_categories.ch8, electromotorkrosstablefilter.ch8_2, krosstablefilter_categories.ch9, electromotorkrosstablefilter.ch9_2, krosstablefilter_categories.ch10, electromotorkrosstablefilter.ch10_2 FROM electromotorinitial
    LEFT JOIN electromotorkrosstablefilter
    ON electromotorinitial.voltag = electromotorkrosstablefilter.linkalternator LEFT JOIN krosstablefilter_categories ON electromotorkrosstablefilter.categoryinfilter = krosstablefilter_categories.categoryinfilter1
    WHERE category = 'Electromotor' AND product_status = '1' ORDER BY id DESC LIMIT 8");

  if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_array($result);

    do{

     $linksklad5 = $row["link"];
     $titleupakovka = $row["title"];

 $result1 = mysqli_query($link, "SELECT SUM(Column_4) AS Column_5sum FROM `electromotorstock` WHERE `Column_3` = '$titleupakovka' AND (`Column_2` = '$linksklad5' OR `Column_1` = '$linksklad5')");

  if (mysqli_num_rows($result1) > 0) {
    $rowpsklad = mysqli_fetch_array($result1);

    do{

 $totalsum = $rowpsklad['Column_5sum'];

        if ($totalsum > 0){
          $finalinf = '<div class="stockondivblock stockondiv"><p class="fruit stockon">IN STOC</p></div>';
        }

        //if (($totalsum > 0) AND ($totalsum < 3)){
        //  $finalinf = '<div class="stockondiv1"><div class="stockonlamp1"></div><p class="fruit stockon1">STOC LIMITAT | '. $rowpsklad['Column_5sum'] .'</p></div>';
        //}

        if ($totalsum == 0){
          $finalinf = '<div class="stockondivblock stockondiv2"><p class="fruit stockon2">LA COMANDA</p></div>';
        }

        if ($totalsum == NULL){
          $finalinf = '<div class="stockondivblock stockondiv1"><p class="fruit stockon1">SE CONCRETIZEAZA</p></div>';
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
     $maxchar = 20; // макс длинна
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
      <a href="/categories/electromotor/article.php?id='.$row["id"].'" target="_blank">
        <div class="galleryDivvImg">
            <p class="brandpinposition">'.$row["brend"].'</p>
            <img style="width: 100%" class="galleryDivvImgBckgroundImg" src="../../img/imgSite/backgroundImgPng.png">
            <div class="IconsNafoto"></div>
            <img src="/img/product/'.$row["voltag"].'-1.jpg" width="100%">
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
  }

?>

</div>

<div class="wow fadeIn whyNotWork">
  <h2>PARTENERII NOȘTRI</h2>
</div>

<div class="ParteneriiNostrii">
  <div class="ParteneriiNostrii1">
    <img src="img/imgSite/logoPartner.jpg">
    <p>Robert Bosch GmbH - grup german de firme, furnizor global de produse și servicii în domeniul tehnologiei auto și industriale, bunuri de larg consum, construcții și tehnologii de ambalare.</p>    
  </div>
  <div class="ParteneriiNostrii1">
    <img src="img/imgSite/logoPartner1.jpg">
    <p>SNR Roulements este unul dintre cei mai importanti producatori și furnizori de rulmenti pentru industria auto europeană. Mai mult de două treimi din producția sa SNR produce în mod special pentru uzine de asamblare auto și piața secundară de piese auto.</p>    
  </div>
  <div class="ParteneriiNostrii1">
    <img src="img/imgSite/logoPartner2.jpg">
    <p>Compania «Auto-Starter» se specializează în vânzarea de componente electromecanice pentru automobile. În prezent, oferă în mod constant mai mult de 6.000 de piese pentru demaroare și alternatoare.</p>    
  </div>
  <div class="ParteneriiNostrii1">
    <img src="img/imgSite/logoPartner3.jpg">
    <p>ERA - distribuitor de produse originale (senzori, relee, switch-uri cu zbaturi, demaroare și alternatoare) atât în Italia cât și în străinătate. Compania oferă un nivel înalt de asigurare a calității în domeniul electronicii pentru automobile și vehicule industriale.</p>    
  </div>
  <div class="ParteneriiNostrii1">
    <img src="img/imgSite/logoPartner4.jpg">
    <p>Mobiletron este unul din liderii mondiali și lider absolut pe piața Asiei care se specializează în producerea componentelor pentru automobile. Portofoliul de produse al companiei cuprinde o nomenclatură mai sus de 1.800 de unitati.</p>    
  </div>
  <div class="ParteneriiNostrii1">
    <img src="img/imgSite/logoPartner5.jpg">
    <p>Compania "WAI global» este specializată în producția de generatoare, demaroare, regulatoare de tensiune pentru automobile și vehicule de diferite tipuri - moto și instalații de apă motorizate.</p>    
  </div>  
</div>



<div class="wow fadeIn whyNotWorkContact whyNotWork">
  <h2>CONTACTE</h2>
</div>


<footer style="bottom: 0px">
  <div id="footGrid" class="footGrid">
    <div class="footMap">
     <div class="footShadowFromRight"></div>
      <div class="footerrty">
        <div class="menuiframe">

         <div class="footerrtyyy0">
          <div class="inflocation000">
            <img src="img/imgSite/contact2.png">
          </div>
          <div class="inflocation0000">
            <img src="img/imgSite/contact1.png">
          </div>
          <div class="inflocation">
            <p class="inflocationp">DN28 116 Iași 707410, România</p>
          <div class="infmobileww">
            <p class="infmobilewwp">LUNI-VINERI : 08:00-18:00</p>
          </div>
          <div class="infmobileww">
            <p class="infmobilewwp">SIMBATA : ÎNCHIS</p>
          </div>
          <div class="infmobileww">
            <p class="infmobilewwp">DUMINICA : ÎNCHIS</p>
          </div>
          </div>
         </div>

        </div>

         <div class="footerrtyiframe"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7452.720758858492!2d27.49910322271918!3d47.1746130046577!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40cae4bf9a0edfd7%3A0x100f624b2f973e69!2zRE4yOCAxMTYsIElhyJlpIDcwNzQxMCwgUm9tw6JuaWE!5e0!3m2!1sro!2s!4v1684906860521!5m2!1sro!2s" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>  

      </div>      
    </div>

    <div class="rightFooterContent">
     <div class="footShadowFromRight"></div>
      <img class="imgLogFoot" src="img/imgSite/logo.png">
       <div class="footerrtyy">

        <a href="tel:+40 771 614 934">
         <div class="footerrtyyy0qqerIndex footerrtyyy0qqer">
          <div class="inflocation000qqer1">
           <img src="img/imgSite/contact6.png">
          </div>
          <div class="inflocation000qqer">
           <img src="img/imgSite/contact7.png">
          </div>
          <div class="inflocationqq334">
           <p class="inflocationpqq334">MIHAIL ALBU</p>
           <div class="infmobilewwqq334">
            <p style="margin: 0px; margin-top: 0px;" class="infmobilewwpqq334">+40 771 614 934</p>
           </div>
          </div>
         </div>
        </a>

        <a href="tel:+40 758 505 355">
         <div class="footerrtyyy0qqerIndex footerrtyyy0qqer">
          <div class="inflocation000qqer1">
           <img src="img/imgSite/contact6.png">
          </div>
          <div class="inflocation000qqer">
           <img src="img/imgSite/contact7.png">
          </div>
          <div class="inflocationqq334">
           <p class="inflocationpqq334">OLEG TURCAN</p>
           <div class="infmobilewwqq334">
            <p style="margin: 0px; margin-top: 0px;" class="infmobilewwpqq334">+40 758 505 355</p>
           </div>
          </div>
         </div>
        </a>
                      
        <a href="tel:+40 744 797 914">
         <div class="footerrtyyy0qqerIndex footerrtyyy0qqer">
          <div class="inflocation000qqer1">
           <img src="img/imgSite/contact6.png">
          </div>
          <div class="inflocation000qqer">
           <img src="img/imgSite/contact7.png">
          </div>
          <div class="inflocationqq334">
           <p class="inflocationpqq334">OXANA POPOVA</p>
           <div class="infmobilewwqq334">
            <p style="margin: 0px; margin-top: 0px;" class="infmobilewwpqq334">+40 744 797 914</p>
           </div>
          </div>
         </div>
        </a>

        <a href="mailto:mihail.albu@valenterauto.ro">
         <div class="footerrtyyy0qqerIndex footerrtyyy0qqer">
          <div class="inflocation000qqer1">
           <img src="img/imgSite/contact5.png">
          </div>
          <div class="inflocation000qqer">
           <img src="img/imgSite/contact8.png">
          </div>
          <div class="inflocationqq334">
           <p class="inflocationpqq334">MIHAIL ALBU</p>
            <div class="infmobilewwqq334">
             <p style="margin: 0px; margin-top: 0px;" class="infmobilewwpqq334">mihail.albu@valenterauto.ro</p>
           </div>
          </div>
         </div>
        </a>

        <a href="mailto:oleg.turcan@valenterauto.ro">
         <div class="footerrtyyy0qqerIndex footerrtyyy0qqer">
          <div class="inflocation000qqer1">
           <img src="img/imgSite/contact5.png">
          </div>
          <div class="inflocation000qqer">
           <img src="img/imgSite/contact8.png">
          </div>
          <div class="inflocationqq334">
           <p class="inflocationpqq334">OLEG TURCAN</p>
           <div class="infmobilewwqq334">
            <p style="margin: 0px; margin-top: 0px;" class="infmobilewwpqq334">oleg.turcan@valenterauto.ro</p>
           </div>
          </div>
         </div>
        </a>

        <a href="mailto:oxana.popova@autovalenter.md">
         <div class="footerrtyyy0qqerIndex footerrtyyy0qqer">
          <div class="inflocation000qqer1">
           <img src="img/imgSite/contact5.png">
          </div>
          <div class="inflocation000qqer">
           <img src="img/imgSite/contact8.png">
          </div>
          <div class="inflocationqq334">
           <p class="inflocationpqq334">OXANA POPOVA</p>
           <div class="infmobilewwqq334">
            <p style="margin: 0px; margin-top: 0px;" class="infmobilewwpqq334">oxana.popova@autovalenter.md</p>
            </div>
          </div>  
         </div>
        </a>
       </div>      
      </div>    
     </div> 
    </footer>

 <center><p style="color: #808080;">© All Rights Reserved. <span style="color: #0088CC; font-weight: 600;">«Valenter Auto SRL»</span></p></center>

</body>

</html>

<script type="text/javascript" src="js/vanilla.min.js"></script>

<script>

  var loader = document.getElementById("prel");
  window.addEventListener("load", function(){
    loader.style.display = "none";
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