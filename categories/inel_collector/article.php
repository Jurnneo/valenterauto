<?php
require "../../includes/config.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title>
       <?php
         $query = "SELECT * FROM inelinitial WHERE id = " . (int)$_GET['id'];
         $statement = $connect->prepare($query);
         $statement->execute();
         $result = $statement->fetchAll();
         foreach ($result as $row131) {
       ?>

       <?php echo $row131['category']; ?> <?php echo $row131['link']; ?>, în Iași, Romania.

       <?php
         }
       ?> 
    </title> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php $alternatorg = $row131['voltag']; $query = "SELECT * FROM where_it_use_table WHERE linkalternator =  '$alternatorg'"; $statement = $connect->prepare($query); $statement->execute();
         $result = $statement->fetchAll(); foreach ($result as $rowdescription) { ?><?php echo $row131['category']; ?> pentru <?php echo $rowdescription['where_we_use']; ?>, în Iași, Romania.<?php } ?>">
    <meta name="keywords" content="<?php $alternatorv = $row131['voltag']; $query = "SELECT * FROM inelkrosstable WHERE linkalternator = '$alternatorv'"; $statement = $connect->prepare($query); $statement->execute(); $result = $statement->fetchAll(); foreach ($result as $rowkeywords) { ?><?php if ( $row131['voltag'] != NULL) echo 'VOLTAG - '.$row131['voltag'].',' ?> <?php if ( $rowkeywords['cas'] != NULL) echo 'CAS - '.$rowkeywords['cas'].','
   ?> <?php if ( $rowkeywords['hyundai'] != NULL) echo 'HYUNDAI - '.$rowkeywords['hyundai'].',' ?><?php if ( $rowkeywords['cargo'] != NULL) echo 'CARGO - '.$rowkeywords['cargo'].',' ?> <?php if ( $rowkeywords['kia'] != NULL) echo 'KIA - '.$rowkeywords['kia'].',' ?><?php if ( $rowkeywords['krauf'] != NULL) echo 'KRAUF - '.$rowkeywords['krauf'].',' ?> <?php if ( $rowkeywords['mando'] != NULL) echo 'MANDO - '.$rowkeywords['mando'].',' ?><?php if ( $rowkeywords['messmer'] != NULL) echo 'MESSMER - '.$rowkeywords['messmer'].',' ?> <?php if ( $rowkeywords['motorherz'] != NULL) echo 'MOTORHERZ - '.$rowkeywords['motorherz'].',' ?> <?php if ( $rowkeywords['valeo'] != NULL) echo 'VALEO - '.$rowkeywords['valeo'].',' ?> <?php if ( $rowkeywords['wai'] != NULL) echo 'WAI - '.$rowkeywords['wai'].',' ?> <?php if ( $rowkeywords['mitsubishi'] != NULL) echo 'MITSUBISHI - '.$rowkeywords['mitsubishi'].',' ?> <?php if ( $rowkeywords['bosch'] != NULL) echo 'BOSCH - '.$rowkeywords['bosch'].',' ?> <?php if ( $rowkeywords['delco'] != NULL) echo 'DELCO - '.$rowkeywords['delco'].','
   ?> <?php if ( $rowkeywords['hc_parts'] != NULL) echo 'HC PARTS - '.$rowkeywords['hc_parts'].',' ?> <?php if ( $rowkeywords['hella'] != NULL) echo 'HELLA - '.$rowkeywords['hella'].',' ?> <?php if ( $rowkeywords['lucas'] != NULL) echo 'LUCAS - '.$rowkeywords['lucas'].','?><?php if ( $rowkeywords['magnetimarelli'] != NULL) echo 'MAGNETI MARELLI - '.$rowkeywords['magnetimarelli'].',' ?> <?php if ( $rowkeywords['wps'] != NULL) echo 'WPS - '.$rowkeywords['wps'].',' ?> <?php if ( $rowkeywords['bcc'] != NULL) echo 'BC - '.$rowkeywords['bcc'].',' ?> <?php if ( $rowkeywords['prestolite'] != NULL) echo 'PRESTOLITE - '.$rowkeywords['prestolite'].',' ?> <?php if ( $rowkeywords['volvo'] != NULL) echo 'VOLVO - '.$rowkeywords['volvo'].',' ?> <?php if ( $rowkeywords['yam'] != NULL) echo 'YAM - '.$rowkeywords['yam'].',' ?><?php if ( $rowkeywords['ford'] != NULL) echo 'FORD - '.$rowkeywords['ford'].',' ?> <?php if ( $rowkeywords['hbb'] != NULL) echo 'HB - '.$rowkeywords['hbb'].',' ?> <?php if ( $rowkeywords['mazda'] != NULL) echo 'MAZDA - '.$rowkeywords['mazda'].',' ?> <?php if ( $rowkeywords['daewoo'] != NULL) echo 'DAEWOO - '.$rowkeywords['daewoo'].',' ?> <?php if ( $rowkeywords['gmm'] != NULL) echo 'GM - '.$rowkeywords['gmm'].',' ?> <?php if ( $rowkeywords['maz'] != NULL) echo 'MAZ - '.$rowkeywords['maz'].',' ?> <?php if ( $rowkeywords['pmx'] != NULL) echo 'PMX - '.$rowkeywords['pmx'].',' ?> <?php if ( $rowkeywords['unipoint'] != NULL) echo 'UNIPOINT - '.$rowkeywords['unipoint'].',' ?> <?php if ( $rowkeywords['citroen'] != NULL) echo 'CITROEN - '.$rowkeywords['citroen'].',' ?> <?php if ( $rowkeywords['nissan'] != NULL) echo 'NISSAN - '.$rowkeywords['nissan'].',' ?> <?php if ( $rowkeywords['renault'] != NULL) echo 'RENAULT - '.$rowkeywords['renault'].',' ?> <?php if ( $rowkeywords['reparts'] != NULL) echo 'REPARTS - '.$rowkeywords['reparts'].',' ?> <?php if ( $rowkeywords['bll'] != NULL) echo 'BL - '.$rowkeywords['bll'].',' ?> <?php if ( $rowkeywords['acdelco'] != NULL) echo 'ACDelco - '.$rowkeywords['acdelco'].',' ?> <?php if ( $rowkeywords['generalmotors'] != NULL) echo 'GENERAL MOTORS - '.$rowkeywords['generalmotors'].',' ?> <?php if ( $rowkeywords['brillance'] != NULL) echo 'BRILLIANCE - '.$rowkeywords['brillance'].',' ?> <?php if ( $rowkeywords['mercedesbenz'] != NULL) echo 'MERCEDES BENZ - '.$rowkeywords['mercedesbenz'].',' ?> <?php if ( $rowkeywords['komatsu'] != NULL) echo 'KOMATSU - '.$rowkeywords['komatsu'].',' ?> <?php if ( $rowkeywords['nikko'] != NULL) echo 'NIKKO - '.$rowkeywords['nikko'].',' ?> <?php if ( $rowkeywords['wll'] != NULL) echo 'WL - '.$rowkeywords['wll'].',' ?> <?php if ( $rowkeywords['vag'] != NULL) echo 'VAG - '.$rowkeywords['vag'].',' ?> <?php if ( $rowkeywords['hino'] != NULL) echo 'HINO - '.$rowkeywords['hino'].',' ?> <?php if ( $rowkeywords['sawafuji'] != NULL) echo 'SAWAFUJI - '.$rowkeywords['sawafuji'].',' ?> <?php if ( $rowkeywords['poong_sung'] != NULL) echo 'POONG SUNG - '.$rowkeywords['poong_sung'].',' ?><?php if ( $rowkeywords['motorola'] != NULL) echo 'MOTOROLA - '.$rowkeywords['motorola'].',' ?> <?php if ( $rowkeywords['cat'] != NULL) echo 'CAT - '.$rowkeywords['cat'].',' ?> <?php if ( $rowkeywords['hyster'] != NULL) echo 'HYSTER - '.$rowkeywords['hyster'].',' ?> <?php if ( $rowkeywords['skk'] != NULL) echo 'SK - '.$rowkeywords['skk'].',' ?> <?php if ( $rowkeywords['pee'] != NULL) echo 'PE - '.$rowkeywords['pee'].',' ?> <?php if ( $rowkeywords['magneton'] != NULL) echo 'MAGNETON - '.$rowkeywords['magneton'].',' ?> <?php if ( $rowkeywords['case'] != NULL) echo 'CASE - '.$rowkeywords['case'].',' ?> <?php if ( $rowkeywords['deutz'] != NULL) echo 'DEUTZ - '.$rowkeywords['deutz'].',' ?> <?php if ( $rowkeywords['mahle'] != NULL) echo 'MAHLE - '.$rowkeywords['mahle'].',' ?> <?php if ( $rowkeywords['khd'] != NULL) echo 'KHD - '.$rowkeywords['khd'].',' ?> <?php if ( $rowkeywords['iskra'] != NULL) echo 'ISKRA - '.$rowkeywords['iskra'].',' ?> <?php if ( $rowkeywords['hitachi'] != NULL) echo 'HITACHI - '.$rowkeywords['hitachi'].',' ?> <?php if ( $rowkeywords['john_deere'] != NULL) echo 'JOHN DEERE - '.$rowkeywords['john_deere'].',' ?> <?php if ( $rowkeywords['vww'] != NULL) echo 'VW - '.$rowkeywords['vww'].',' ?> <?php if ( $rowkeywords['denso'] != NULL) echo 'DENSO - '.$rowkeywords['denso'].',' ?> <?php if ( $rowkeywords['opel'] != NULL) echo 'OPEL - '.$rowkeywords['opel'].',' ?> <?php } ?>">

    <link rel="stylesheet" href="../../css/animate.css">
    <link rel="stylesheet" type="text/css" href="../../css/style.css">
    <link rel="stylesheet" type="text/css" href="../../css/stylemobb.css">
    <link rel="stylesheet" type="text/css" href="../../css/optimization.css">
    <link rel="stylesheet" type="text/css" href="../../css/lightbox.css">
    <link rel="icon" sizes='16x16' type="image/png" href="../../img/imgSite/ValenterAutoLogo.png"/>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;470;630;723&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../css/slick.css">
    <link rel="stylesheet" href="../../css/anim.css">
    <link rel="stylesheet" href="../../css/slick-theme.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>    
    <script type="text/javascript" src="../../js/onclickqq1.js"></script>
    <script src="../../js/lightbox-plus-jquery.min.js"></script>
    <script src="../../js/slidersSidebarAndShrink.js"></script>
    <script src="../../js/granim.min.js"></script>
    <script src="../../js/wow.min.js"></script>
    <script src="../../js/slick.js"></script>
    <script>new WOW().init();</script>

</head>

<body>

<div id="prel">
  <div id="imgLoadSearchData1">
    <img id="imgLoadSearchDataimg1" src="../../img/imgSite/loaderValenterAuto.gif">
  </div>
</div>

<?php include "../../includeSearchProducts.php"; ?>  

<div class="closeFilterBackground closeFilterbackground"> </div>

<div class="closeFilterBackgroundsearch"> </div>   

<?php include "../../includeheader.php"; ?>  

<div class="footerrtyInside11erCatalog">
  <a href="../../index.php"><p><img src="/img/imgSite/catalogButton.png" class="footerrtyInside11erCatalogImg">PAGINA PRINCIPALA</p></a>
  <p class="catalogButtons7">/</p>
  <a style="display: none;" href="catalog.html"><p><img src="/img/imgSite/catalogButton.png" class="footerrtyInside11erCatalogImg">CATALOG</p></a>
  <p style="display: none;" class="catalogButtons7">/</p>
  <a href="index.php"><p><img src="/img/imgSite/catalogButton.png" class="footerrtyInside11erCatalogImg"><?php echo mb_strtoupper($row131['category']); ?></p></a>
  <p class="catalogButtons7">/</p>
  <a href="#"><p><img src="/img/imgSite/catalogButton1.png" class="footerrtyInside11erCatalogImg"><?php echo $row131['link']; ?></p></a>                 
</div>

<div class="articleDet">

 <div class="articlePhoto">
  <div class="productArtImg">
   <div class="productArtImgSmall">

    <?php 

        $linkhref = $row131['linkhref'];

    ?>

    <img src="../../img/imginelalternator/<?php echo $row131['voltag']; ?>_1.jpg" onerror='this.style.display = "none"' onclick="myFunction(this)">
    <img src="../../img/imginelalternator/<?php echo $row131['voltag']; ?>_2.jpg" onerror='this.style.display = "none"' onclick="myFunction(this)">   
    <img src="../../img/imginelalternator/<?php echo $row131['voltag']; ?>_3.jpg" onerror='this.style.display = "none"' onclick="myFunction(this)">  

   </div>
   <div class="productArtImgContainerBig">
    <img id="imageBoxBig" src="../../img/imginelalternator/<?php echo $row131['voltag']; ?>_1.jpg">
   </div>               
  </div>
 </div>

 <div class="wow fadeIn articleText" data-wow-duration="2.5s">

  <?php if ( $row131['price'] != NULL) echo
  '<p class="priceblock">'.$row131['price'].'</p>'
  ?>

   <?php
   $linksklad = $row131['link'];
   $titleupakovka = $row131["title"];

        $query = "SELECT SUM(Column_4) AS Column_5sum FROM `inelstock` WHERE `Column_3` = '$titleupakovka' AND (`Column_2` = '$linksklad' OR `Column_1` = '$linksklad')";
        $statement = $connect->prepare($query);
        $statement->execute();
        $result = $statement->fetchAll();
        foreach ($result as $rowpsklad) {

        $totalsum = $rowpsklad['Column_5sum'];

        if ($totalsum > 0){
          $finalinf = '<div class="stockartilce stockondiv"><p class="fruit stockon">IN STOC</p></div>';
        }

        //if (($totalsum > 0) AND ($totalsum < 3)){
        //  $finalinf = '<div class="stockondiv1"><div class="stockonlamp1"></div><p class="fruit stockon1">STOC LIMITAT | '. $rowpsklad['Column_5sum'] .'</p></div>';
        //}

        if ($totalsum == 0){
          $finalinf = '<div class="stockartilce stockondiv2"><p class="fruit stockon2">LA COMANDA</p></div>';
        }

        if ($totalsum == NULL){
          $finalinf = '<div class="stockartilce stockondiv1"><p class="fruit stockon1">SE CONCRETIZEAZA</p></div>';
        }
    ?>

    <?php echo $finalinf; ?>

    <?php
        }
    ?>  

  <div style="display: none;" class="artCart">
   <div class="itemNameBlockPrice itemNameBlock">
    <h2 class="priceChange450">5860 MDL</h2>
    <div class="itemNameBlockStockPrice itemNameBlockStock">
     <p style="color: white" class="itemNameBlockText1">8630</p>                    
    </div>
   </div>
   <div class="containerNumProd">
    <span class="nextProd" onclick="nextNum()"></span>
    <span class="prevProd" onclick="prevNum()"></span>
    <div id="boxNumProd">
     <span>0</span>
    </div>               
   </div>
   <div class="korzinka">
    <img src="/img/imgSite/cartCircleWhite.png">
   </div>                
  </div>

   <div class="itemNameBlock">
    <h2><?php echo $row131['link']; ?> <?php echo $row131['brend']; ?></h2>
    <div style="display: none;" class="itemNameBlockStock">
     <div class="itemNameBlockCircle1"></div>
     <div class="itemNameBlockCircle0"></div>
     <p class="itemNameBlockText1">ÎN STOC</p>
     <p class="itemNameBlockText0">EPUIZAT</p>                    
    </div>                  
   </div>

<div class="articleText2">



<?php

   $alternatorv = $row131['voltag'];

   $query = "SELECT * FROM inelkrosstablefilter WHERE linkalternator = '$alternatorv'";
   $statement = $connect->prepare($query);
   $statement->execute();
   $result = $statement->fetchAll();
   foreach ($result as $row1311) {
 ?>   

  <?php
    }
  ?>  


  <?php

   $alternatorv1 = $row131['category'];

   $query = "SELECT * FROM krosstablefilter_categories WHERE categoryinfilter1 = '$alternatorv1'";
   $statement = $connect->prepare($query);
   $statement->execute();
   $result = $statement->fetchAll();
   foreach ($result as $row13111) {
 ?>   

  <?php
    }
  ?> 


<?php if ( $row1311['ch1_2'] != NULL) echo
  '<div class="articleText22">
    <ul class="categories">
     <li>'.$row13111['ch1_1'].'</li>
    </ul>
   </div>
                
   <div class="articleText222">
    <p class="articleText222TwoDuts">:</p>
     <div class="categoriesDivLi">
      <p>'.$row1311['ch1_2'].'</p>
     </div>
   </div>'
?>

<?php if ( $row1311['ch2_2'] != NULL) echo
  '<div class="articleText22">
    <ul class="categories">
     <li>'.$row13111['ch2_1'].'</li>
    </ul>
   </div>
                
   <div class="articleText222">
    <p class="articleText222TwoDuts">:</p>
     <div class="categoriesDivLi">
      <p>'.$row1311['ch2_2'].'</p>
     </div>
   </div>'
?>

<?php if ( $row1311['ch3_2'] != NULL) echo
  '<div class="articleText22">
    <ul class="categories">
     <li>'.$row13111['ch3_1'].'</li>
    </ul>
   </div>
                
   <div class="articleText222">
    <p class="articleText222TwoDuts">:</p>
     <div class="categoriesDivLi">
      <p>'.$row1311['ch3_2'].'</p>
     </div>
   </div>'
?>

<?php if ( $row1311['ch4_2'] != NULL) echo
  '<div class="articleText22">
    <ul class="categories">
     <li>'.$row13111['ch4_1'].'</li>
    </ul>
   </div>
                
   <div class="articleText222">
    <p class="articleText222TwoDuts">:</p>
     <div class="categoriesDivLi">
      <p>'.$row1311['ch4_2'].'</p>
     </div>
   </div>'
?>

<?php if ( $row1311['ch5_2'] != NULL) echo
  '<div class="articleText22">
    <ul class="categories">
     <li>'.$row13111['ch5_1'].'</li>
    </ul>
   </div>
                
   <div class="articleText222">
    <p class="articleText222TwoDuts">:</p>
     <div class="categoriesDivLi">
      <p>'.$row1311['ch5_2'].'</p>
     </div>
   </div>'
?>

<?php if ( $row1311['ch6_2'] != NULL) echo
  '<div class="articleText22">
    <ul class="categories">
     <li>'.$row13111['ch6_1'].'</li>
    </ul>
   </div>
                
   <div class="articleText222">
    <p class="articleText222TwoDuts">:</p>
     <div class="categoriesDivLi">
      <p>'.$row1311['ch6_2'].'</p>
     </div>
   </div>'
?>

<?php if ( $row1311['ch7_2'] != NULL) echo
  '<div class="articleText22">
    <ul class="categories">
     <li>'.$row13111['ch7_1'].'</li>
    </ul>
   </div>
                
   <div class="articleText222">
    <p class="articleText222TwoDuts">:</p>
     <div class="categoriesDivLi">
      <p>'.$row1311['ch7_2'].'</p>
     </div>
   </div>'
?>

<?php if ( $row1311['ch8_2'] != NULL) echo
  '<div class="articleText22">
    <ul class="categories">
     <li>'.$row13111['ch8_1'].'</li>
    </ul>
   </div>
                
   <div class="articleText222">
    <p class="articleText222TwoDuts">:</p>
     <div class="categoriesDivLi">
      <p>'.$row1311['ch8_2'].'</p>
     </div>
   </div>'
?>

<?php if ( $row1311['ch9_2'] != NULL) echo
  '<div class="articleText22">
    <ul class="categories">
     <li>'.$row13111['ch9_1'].'</li>
    </ul>
   </div>
                
   <div class="articleText222">
    <p class="articleText222TwoDuts">:</p>
     <div class="categoriesDivLi">
      <p>'.$row1311['ch9_2'].'</p>
     </div>
   </div>'
?>

<?php if ( $row1311['ch10_2'] != NULL) echo
  '<div class="articleText22">
    <ul class="categories">
     <li>'.$row13111['ch10_1'].'</li>
    </ul>
   </div>
                
   <div class="articleText222">
    <p class="articleText222TwoDuts">:</p>
     <div class="categoriesDivLi">
      <p>'.$row1311['ch10_2'].'</p>
     </div>
   </div>'
?>

<?php if ( $row1311['ch11_2'] != NULL) echo
  '<div class="articleText22">
    <ul class="categories">
     <li>'.$row13111['ch11_1'].'</li>
    </ul>
   </div>
                
   <div class="articleText222">
    <p class="articleText222TwoDuts">:</p>
     <div class="categoriesDivLi">
      <p>'.$row1311['ch11_2'].'</p>
     </div>
   </div>'
?>

<?php if ( $row1311['ch12_2'] != NULL) echo
  '<div class="articleText22">
    <ul class="categories">
     <li>'.$row13111['ch12_1'].'</li>
    </ul>
   </div>
                
   <div class="articleText222">
    <p class="articleText222TwoDuts">:</p>
     <div class="categoriesDivLi">
      <p>'.$row1311['ch12_2'].'</p>
     </div>
   </div>'
?>

<?php if ( $row1311['ch13_2'] != NULL) echo
  '<div class="articleText22">
    <ul class="categories">
     <li>'.$row13111['ch13_1'].'</li>
    </ul>
   </div>
                
   <div class="articleText222">
    <p class="articleText222TwoDuts">:</p>
     <div class="categoriesDivLi">
      <p>'.$row1311['ch13_2'].'</p>
     </div>
   </div>'
?>

<?php if ( $row1311['ch14_2'] != NULL) echo
  '<div class="articleText22">
    <ul class="categories">
     <li>'.$row13111['ch14_1'].'</li>
    </ul>
   </div>
                
   <div class="articleText222">
    <p class="articleText222TwoDuts">:</p>
     <div class="categoriesDivLi">
      <p>'.$row1311['ch14_2'].'</p>
     </div>
   </div>'
?>


  </div>
 </div>
</div>


<div class="aplicaridiod tablesArt1ProductCrossesonthesite">
  <ul>   

    

 <?php
 $voltajj = $row131['voltag'];
 $category = $row131['category'];
 $link = $row131['link'];
 $query = "SELECT id, imgsrc, link, title, category, voltag, product_status FROM `inelinitial` WHERE category = '$category' AND product_status = '1' AND link != '$link' AND voltag = '".$voltajj."' ORDER BY id DESC";
 $statement = $connect->prepare($query);
 $statement->execute();
 $result = $statement->fetchAll();
 $total_row = $statement->rowCount();
 $output = '';
 if($voltajj != NULL)
 {
  foreach($result as $row)
  {

 $linksklad5 = $row["link"];
 $titleupakovka = $row["title"];
 
 $query = "SELECT SUM(Column_4) AS Column_5sum FROM `inelstock` WHERE `Column_3` = '$titleupakovka' AND (`Column_2` = '$linksklad5' OR `Column_1` = '$linksklad5')";

 $statement = $connect->prepare($query);
 $statement->execute();
 $result = $statement->fetchAll();
 $total_row = $statement->rowCount();
 foreach ($result as $rowpsklad) {

 $totalsum = $rowpsklad['Column_5sum'];

        if ($totalsum > 0){
          $finalinf = '<div class="stockondivartanalogii stockondiv"><p class="fruit stockon"></p></div>';
        }

        //if (($totalsum > 0) AND ($totalsum < 3)){
        //  $finalinf = '<div class="stockondiv1artanalogii stockondiv1"><p class="fruit stockon1"></p></div>';
        //}

        if ($totalsum == 0){
          $finalinf = '<div class="stockondiv2artanalogii stockondiv2"><p class="fruit stockon2"></p></div>';
        }

        if ($totalsum == NULL){
          $finalinf = '<div class="stockondiv2artanalogii stockondiv1"><p class="fruit stockon1"></p></div>';
        }
      }
     
   $output .= '

  <li class="fruit1 fruit">POZITII SIMILARE : </li>

  <a href="article.php?id='. $row['id'] .'"><li><img class="nodatablock datanotfoundimg1" src="../../img/imginelalternator/'.$row['voltag'].'_1.jpg" alt="0">'.$row['link'].''.$finalinf.'</li></a>

   ';
  }
 }
 else
 {
  if ($voltajj != NULL) {
    $output = '<img style="display: none;" class="nodatablock datanotfoundimg1" src="../../img/imgSite/notfound2.jpg" alt="DATA NOT FOUND"><img style="display: none;" class="nodatanone datanotfoundimg1" src="../../img/imgSite/notfound21.jpg" alt="DATA NOT FOUND">';
  } else {
    $output = '<img style="display: none;" class="nodatablock datanotfoundimg1" src="../../img/imgSite/notfound2.jpg" alt="DATA NOT FOUND"><img style="display: none;" class="nodatanone datanotfoundimg1" src="../../img/imgSite/notfound21.jpg" alt="DATA NOT FOUND">';
  }
 }
 echo $output;

     
    ?> 
 

  </ul>   
 </div>


<div class="aplicaridiod tablesArt1ProductCrossesonthesite">
  <ul>  

    <?php
    $voltajj = $row131['voltag'];
    $aplicari = $rowkeywords['aplicari'];
    $query = "SELECT alternatorinitial.id, alternatorinitial.imgsrc, alternatorinitial.title, alternatorinitial.link, alternatorinitial.category, alternatorinitial.voltag, alternatorinitial.product_status, alternatorkrosstable.linkalternator, alternatorkrosstable.mitsubishi, alternatorkrosstable.bosch, alternatorkrosstable.delco, alternatorkrosstable.krauf FROM `alternatorinitial` INNER JOIN `alternatorkrosstable` ON alternatorinitial.voltag = alternatorkrosstable.linkalternator WHERE category = 'Alternator' AND product_status = '1' AND  (alternatorkrosstable.linkalternator REGEXP '$aplicari' OR alternatorkrosstable.delco REGEXP '$aplicari' OR alternatorkrosstable.mitsubishi REGEXP '$aplicari' OR alternatorkrosstable.bosch REGEXP '$aplicari' OR alternatorkrosstable.krauf REGEXP '$aplicari') ORDER BY voltag DESC";   
 $statement = $connect->prepare($query);
 $statement->execute();
 $result = $statement->fetchAll();
 $total_row = $statement->rowCount();
 $output = '';
 if($voltajj != NULL)
 {
  foreach($result as $row)
  {

 $linksklad5 = $row["link"];
 $titleupakovka = $row["title"];
 
 $query = "SELECT SUM(Column_4) AS Column_5sum FROM `alternatorstock` WHERE `Column_3` = '$titleupakovka' AND (`Column_2` = '$linksklad5' OR `Column_1` = '$linksklad5')";

 $statement = $connect->prepare($query);
 $statement->execute();
 $result = $statement->fetchAll();
 $total_row = $statement->rowCount();
 foreach ($result as $rowpsklad) {

 $totalsum = $rowpsklad['Column_5sum'];

        if ($totalsum > 0){
          $finalinf = '<div class="stockondivartanalogii stockondiv"><p class="fruit stockon"></p></div>';
        }

        //if (($totalsum > 0) AND ($totalsum < 3)){
        //  $finalinf = '<div class="stockondiv1artanalogii stockondiv1"><p class="fruit stockon1"></p></div>';
        //}

        if ($totalsum == 0){
          $finalinf = '<div class="stockondiv2artanalogii stockondiv2"><p class="fruit stockon2"></p></div>';
        }

        if ($totalsum == NULL){
          $finalinf = '<div class="stockondiv2artanalogii stockondiv1"><p class="fruit stockon1"></p></div>';
        }
      }



   $output .= '

  <li class="fruit1">SE APLICA PENTRU : </li>

  <a href="../alternator/article.php?id='. $row['id'] .'" target="_blank"><li class="fruit"><img class="nodatablock datanotfoundimg1" src="../../img/product/'.$row['voltag'].'-1.jpg" alt="0">'.$row['link'].''.$finalinf.'</li></a>

   ';
  }
 }
 else
 {
  if ($voltajj != NULL) {
    $output = '<img style="display: none;" class="nodatablock datanotfoundimg1" src="../../img/imgSite/notfound2.jpg" alt="DATA NOT FOUND"><img style="display: none;" class="nodatanone datanotfoundimg1" src="../../img/imgSite/notfound21.jpg" alt="DATA NOT FOUND">';
  } else {
    $output = '<img style="display: none;" class="nodatablock datanotfoundimg1" src="../../img/imgSite/notfound2.jpg" alt="DATA NOT FOUND"><img style="display: none;" class="nodatanone datanotfoundimg1" src="../../img/imgSite/notfound21.jpg" alt="DATA NOT FOUND">';
  }
 }
 echo $output;



     $query = "SELECT alternatorinitial.id, alternatorinitial.imgsrc, alternatorinitial.title, alternatorinitial.link, alternatorinitial.category, alternatorinitial.voltag, alternatorinitial.product_status, alternatorkrosstable.linkalternator, alternatorkrosstable.renault, alternatorkrosstable.mercedesbenz, alternatorkrosstable.ford, alternatorkrosstable.valeo, alternatorkrosstable.ass1 FROM `alternatorinitial` INNER JOIN `alternatorkrosstable` ON alternatorinitial.voltag = alternatorkrosstable.linkalternator WHERE category = 'Alternator' AND product_status = '1' AND (alternatorkrosstable.renault REGEXP '$aplicari' OR alternatorkrosstable.mercedesbenz REGEXP '$aplicari' OR alternatorkrosstable.ford REGEXP '$aplicari' OR alternatorkrosstable.valeo REGEXP '$aplicari' OR alternatorkrosstable.ass1 REGEXP '$aplicari') ORDER BY voltag DESC";   
 $statement = $connect->prepare($query);
 $statement->execute();
 $result = $statement->fetchAll();
 $total_row = $statement->rowCount();
 $output = '';
 if($voltajj != NULL)
 {
  foreach($result as $row1)
  {

 $linksklad5 = $row1["link"];
 $titleupakovka = $row1["title"];
 
 $query = "SELECT SUM(Column_4) AS Column_5sum FROM `alternatorstock` WHERE `Column_3` = '$titleupakovka' AND (`Column_2` = '$linksklad5' OR `Column_1` = '$linksklad5')";

 $statement = $connect->prepare($query);
 $statement->execute();
 $result = $statement->fetchAll();
 $total_row = $statement->rowCount();
 foreach ($result as $rowpsklad) {

 $totalsum = $rowpsklad['Column_5sum'];

        if ($totalsum > 0){
          $finalinf = '<div class="stockondivartanalogii stockondiv"><p class="fruit stockon"></p></div>';
        }

        //if (($totalsum > 0) AND ($totalsum < 3)){
        //  $finalinf = '<div class="stockondiv1artanalogii stockondiv1"><p class="fruit stockon1"></p></div>';
        //}

        if ($totalsum == 0){
          $finalinf = '<div class="stockondiv2artanalogii stockondiv2"><p class="fruit stockon2"></p></div>';
        }

        if ($totalsum == NULL){
          $finalinf = '<div class="stockondiv2artanalogii stockondiv1"><p class="fruit stockon1"></p></div>';
        }
      }

   $output .= '

  <li class="fruit1">SE APLICA PENTRU : </li>

  <a href="../alternator/article.php?id='. $row1['id'] .'" target="_blank"><li class="fruit"><img class="nodatablock datanotfoundimg1" src="../../img/product/'.$row1['voltag'].'-1.jpg" alt="0">'.$row1['link'].''.$finalinf.'</li></a>

   ';
  }
 }
 else
 {
  if ($voltajj != NULL) {
    $output = '<img style="display: none;" class="nodatablock datanotfoundimg1" src="../../img/imgSite/notfound2.jpg" alt="DATA NOT FOUND"><img style="display: none;" class="nodatanone datanotfoundimg1" src="../../img/imgSite/notfound21.jpg" alt="DATA NOT FOUND">';
  } else {
    $output = '<img style="display: none;" class="nodatablock datanotfoundimg1" src="../../img/imgSite/notfound2.jpg" alt="DATA NOT FOUND"><img style="display: none;" class="nodatanone datanotfoundimg1" src="../../img/imgSite/notfound21.jpg" alt="DATA NOT FOUND">';
  }
 }
 echo $output;


      $query = "SELECT alternatorinitial.id, alternatorinitial.imgsrc, alternatorinitial.title, alternatorinitial.link, alternatorinitial.category, alternatorinitial.voltag, alternatorinitial.product_status, alternatorkrosstable.linkalternator, alternatorkrosstable.valeo, alternatorkrosstable.cas, alternatorkrosstable.hyundai, alternatorkrosstable.cargo, alternatorkrosstable.kia FROM `alternatorinitial` INNER JOIN `alternatorkrosstable` ON alternatorinitial.voltag = alternatorkrosstable.linkalternator WHERE category = 'Alternator' AND product_status = '1' AND (alternatorkrosstable.cas REGEXP '$aplicari' OR alternatorkrosstable.hyundai REGEXP '$aplicari' OR alternatorkrosstable.cargo REGEXP '$aplicari' OR alternatorkrosstable.valeo REGEXP '$aplicari' OR alternatorkrosstable.kia REGEXP '$aplicari') ORDER BY voltag DESC";   
 $statement = $connect->prepare($query);
 $statement->execute();
 $result = $statement->fetchAll();
 $total_row = $statement->rowCount();
 $output = '';
 if($voltajj != NULL)
 {
  foreach($result as $row1)
  {

 $linksklad5 = $row1["link"];
 $titleupakovka = $row1["title"];
 
 $query = "SELECT SUM(Column_4) AS Column_5sum FROM `alternatorstock` WHERE `Column_3` = '$titleupakovka' AND (`Column_2` = '$linksklad5' OR `Column_1` = '$linksklad5')";

 $statement = $connect->prepare($query);
 $statement->execute();
 $result = $statement->fetchAll();
 $total_row = $statement->rowCount();
 foreach ($result as $rowpsklad) {

 $totalsum = $rowpsklad['Column_5sum'];

        if ($totalsum > 0){
          $finalinf = '<div class="stockondivartanalogii stockondiv"><p class="fruit stockon"></p></div>';
        }

        //if (($totalsum > 0) AND ($totalsum < 3)){
        //  $finalinf = '<div class="stockondiv1artanalogii stockondiv1"><p class="fruit stockon1"></p></div>';
        //}

        if ($totalsum == 0){
          $finalinf = '<div class="stockondiv2artanalogii stockondiv2"><p class="fruit stockon2"></p></div>';
        }

        if ($totalsum == NULL){
          $finalinf = '<div class="stockondiv2artanalogii stockondiv1"><p class="fruit stockon1"></p></div>';
        }
      }

   $output .= '

  <li class="fruit1">SE APLICA PENTRU : </li>

  <a href="../alternator/article.php?id='. $row1['id'] .'" target="_blank"><li class="fruit"><img class="nodatablock datanotfoundimg1" src="../../img/product/'.$row1['voltag'].'-1.jpg" alt="0">'.$row1['link'].''.$finalinf.'</li></a>

   ';
  }
 }
 else
 {
  if ($voltajj != NULL) {
    $output = '<img style="display: none;" class="nodatablock datanotfoundimg1" src="../../img/imgSite/notfound2.jpg" alt="DATA NOT FOUND"><img style="display: none;" class="nodatanone datanotfoundimg1" src="../../img/imgSite/notfound21.jpg" alt="DATA NOT FOUND">';
  } else {
    $output = '<img style="display: none;" class="nodatablock datanotfoundimg1" src="../../img/imgSite/notfound2.jpg" alt="DATA NOT FOUND"><img style="display: none;" class="nodatanone datanotfoundimg1" src="../../img/imgSite/notfound21.jpg" alt="DATA NOT FOUND">';
  }
 }
 echo $output;


       $query = "SELECT alternatorinitial.id, alternatorinitial.imgsrc, alternatorinitial.title, alternatorinitial.link, alternatorinitial.category, alternatorinitial.voltag, alternatorinitial.product_status, alternatorkrosstable.linkalternator,alternatorkrosstable.mando, alternatorkrosstable.messmer, alternatorkrosstable.motorherz, alternatorkrosstable.zaufer, alternatorkrosstable.wai FROM `alternatorinitial` INNER JOIN `alternatorkrosstable` ON alternatorinitial.voltag = alternatorkrosstable.linkalternator WHERE category = 'Alternator' AND product_status = '1' AND (alternatorkrosstable.mando REGEXP '$aplicari' OR alternatorkrosstable.messmer REGEXP '$aplicari' OR alternatorkrosstable.motorherz REGEXP '$aplicari' OR alternatorkrosstable.zaufer REGEXP '$aplicari' OR alternatorkrosstable.wai REGEXP '$aplicari') ORDER BY voltag DESC";   
 $statement = $connect->prepare($query);
 $statement->execute();
 $result = $statement->fetchAll();
 $total_row = $statement->rowCount();
 $output = '';
 if($voltajj != NULL)
 {
  foreach($result as $row1)
  {

 $linksklad5 = $row1["link"];
 $titleupakovka = $row1["title"];
 
 $query = "SELECT SUM(Column_4) AS Column_5sum FROM `alternatorstock` WHERE `Column_3` = '$titleupakovka' AND (`Column_2` = '$linksklad5' OR `Column_1` = '$linksklad5')";

 $statement = $connect->prepare($query);
 $statement->execute();
 $result = $statement->fetchAll();
 $total_row = $statement->rowCount();
 foreach ($result as $rowpsklad) {

 $totalsum = $rowpsklad['Column_5sum'];

        if ($totalsum > 0){
          $finalinf = '<div class="stockondivartanalogii stockondiv"><p class="fruit stockon"></p></div>';
        }

        //if (($totalsum > 0) AND ($totalsum < 3)){
        //  $finalinf = '<div class="stockondiv1artanalogii stockondiv1"><p class="fruit stockon1"></p></div>';
        //}

        if ($totalsum == 0){
          $finalinf = '<div class="stockondiv2artanalogii stockondiv2"><p class="fruit stockon2"></p></div>';
        }

        if ($totalsum == NULL){
          $finalinf = '<div class="stockondiv2artanalogii stockondiv1"><p class="fruit stockon1"></p></div>';
        }
      }

   $output .= '

  <li class="fruit1">SE APLICA PENTRU : </li>

  <a href="../alternator/article.php?id='. $row1['id'] .'" target="_blank"><li class="fruit"><img class="nodatablock datanotfoundimg1" src="../../img/product/'.$row1['voltag'].'-1.jpg" alt="0">'.$row1['link'].''.$finalinf.'</li></a>

   ';
  }
 }
 else
 {
  if ($voltajj != NULL) {
    $output = '<img style="display: none;" class="nodatablock datanotfoundimg1" src="../../img/imgSite/notfound2.jpg" alt="DATA NOT FOUND"><img style="display: none;" class="nodatanone datanotfoundimg1" src="../../img/imgSite/notfound21.jpg" alt="DATA NOT FOUND">';
  } else {
    $output = '<img style="display: none;" class="nodatablock datanotfoundimg1" src="../../img/imgSite/notfound2.jpg" alt="DATA NOT FOUND"><img style="display: none;" class="nodatanone datanotfoundimg1" src="../../img/imgSite/notfound21.jpg" alt="DATA NOT FOUND">';
  }
 }
 echo $output;


       $query = "SELECT alternatorinitial.id, alternatorinitial.imgsrc, alternatorinitial.title, alternatorinitial.link, alternatorinitial.category, alternatorinitial.voltag, alternatorinitial.product_status, alternatorkrosstable.linkalternator,alternatorkrosstable.hc_parts, alternatorkrosstable.hella, alternatorkrosstable.lucas, alternatorkrosstable.magnetimarelli, alternatorkrosstable.wps FROM `alternatorinitial` INNER JOIN `alternatorkrosstable` ON alternatorinitial.voltag = alternatorkrosstable.linkalternator WHERE category = 'Alternator' AND product_status = '1' AND (alternatorkrosstable.hc_parts REGEXP '$aplicari' OR alternatorkrosstable.hella REGEXP '$aplicari' OR alternatorkrosstable.lucas REGEXP '$aplicari' OR alternatorkrosstable.magnetimarelli REGEXP '$aplicari' OR alternatorkrosstable.wps REGEXP '$aplicari') ORDER BY voltag DESC";   
 $statement = $connect->prepare($query);
 $statement->execute();
 $result = $statement->fetchAll();
 $total_row = $statement->rowCount();
 $output = '';
 if($voltajj != NULL)
 {
  foreach($result as $row1)
  {

 $linksklad5 = $row1["link"];
 $titleupakovka = $row1["title"];
 
 $query = "SELECT SUM(Column_4) AS Column_5sum FROM `alternatorstock` WHERE `Column_3` = '$titleupakovka' AND (`Column_2` = '$linksklad5' OR `Column_1` = '$linksklad5')";

 $statement = $connect->prepare($query);
 $statement->execute();
 $result = $statement->fetchAll();
 $total_row = $statement->rowCount();
 foreach ($result as $rowpsklad) {

 $totalsum = $rowpsklad['Column_5sum'];

        if ($totalsum > 0){
          $finalinf = '<div class="stockondivartanalogii stockondiv"><p class="fruit stockon"></p></div>';
        }

        //if (($totalsum > 0) AND ($totalsum < 3)){
        //  $finalinf = '<div class="stockondiv1artanalogii stockondiv1"><p class="fruit stockon1"></p></div>';
        //}

        if ($totalsum == 0){
          $finalinf = '<div class="stockondiv2artanalogii stockondiv2"><p class="fruit stockon2"></p></div>';
        }

        if ($totalsum == NULL){
          $finalinf = '<div class="stockondiv2artanalogii stockondiv1"><p class="fruit stockon1"></p></div>';
        }
      }

   $output .= '

  <li class="fruit1">SE APLICA PENTRU : </li>

  <a href="../alternator/article.php?id='. $row1['id'] .'" target="_blank"><li class="fruit"><img class="nodatablock datanotfoundimg1" src="../../img/product/'.$row1['voltag'].'-1.jpg" alt="0">'.$row1['link'].''.$finalinf.'</li></a>

   ';
  }
 }
 else
 {
  if ($voltajj != NULL) {
    $output = '<img style="display: none;" class="nodatablock datanotfoundimg1" src="../../img/imgSite/notfound2.jpg" alt="DATA NOT FOUND"><img style="display: none;" class="nodatanone datanotfoundimg1" src="../../img/imgSite/notfound21.jpg" alt="DATA NOT FOUND">';
  } else {
    $output = '<img style="display: none;" class="nodatablock datanotfoundimg1" src="../../img/imgSite/notfound2.jpg" alt="DATA NOT FOUND"><img style="display: none;" class="nodatanone datanotfoundimg1" src="../../img/imgSite/notfound21.jpg" alt="DATA NOT FOUND">';
  }
 }
 echo $output;



       $query = "SELECT alternatorinitial.id, alternatorinitial.imgsrc, alternatorinitial.title, alternatorinitial.link, alternatorinitial.category, alternatorinitial.voltag, alternatorinitial.product_status, alternatorkrosstable.linkalternator, alternatorkrosstable.bcc, alternatorkrosstable.prestolite, alternatorkrosstable.volvo, alternatorkrosstable.yam, alternatorkrosstable.hbb FROM `alternatorinitial` INNER JOIN `alternatorkrosstable` ON alternatorinitial.voltag = alternatorkrosstable.linkalternator WHERE category = 'Alternator' AND product_status = '1' AND (alternatorkrosstable.bcc REGEXP '$aplicari' OR alternatorkrosstable.prestolite REGEXP '$aplicari' OR alternatorkrosstable.volvo REGEXP '$aplicari' OR alternatorkrosstable.yam REGEXP '$aplicari' OR alternatorkrosstable.hbb REGEXP '$aplicari') ORDER BY voltag DESC";   
 $statement = $connect->prepare($query);
 $statement->execute();
 $result = $statement->fetchAll();
 $total_row = $statement->rowCount();
 $output = '';
 if($voltajj != NULL)
 {
  foreach($result as $row1)
  {

 $linksklad5 = $row1["link"];
 $titleupakovka = $row1["title"];
 
 $query = "SELECT SUM(Column_4) AS Column_5sum FROM `alternatorstock` WHERE `Column_3` = '$titleupakovka' AND (`Column_2` = '$linksklad5' OR `Column_1` = '$linksklad5')";

 $statement = $connect->prepare($query);
 $statement->execute();
 $result = $statement->fetchAll();
 $total_row = $statement->rowCount();
 foreach ($result as $rowpsklad) {

 $totalsum = $rowpsklad['Column_5sum'];

        if ($totalsum > 0){
          $finalinf = '<div class="stockondivartanalogii stockondiv"><p class="fruit stockon"></p></div>';
        }

        //if (($totalsum > 0) AND ($totalsum < 3)){
        //  $finalinf = '<div class="stockondiv1artanalogii stockondiv1"><p class="fruit stockon1"></p></div>';
        //}

        if ($totalsum == 0){
          $finalinf = '<div class="stockondiv2artanalogii stockondiv2"><p class="fruit stockon2"></p></div>';
        }

        if ($totalsum == NULL){
          $finalinf = '<div class="stockondiv2artanalogii stockondiv1"><p class="fruit stockon1"></p></div>';
        }
      }

   $output .= '

  <li class="fruit1">SE APLICA PENTRU : </li>

  <a href="../alternator/article.php?id='. $row1['id'] .'" target="_blank"><li class="fruit"><img class="nodatablock datanotfoundimg1" src="../../img/product/'.$row1['voltag'].'-1.jpg" alt="0">'.$row1['link'].''.$finalinf.'</li></a>

   ';
  }
 }
 else
 {
  if ($voltajj != NULL) {
    $output = '<img style="display: none;" class="nodatablock datanotfoundimg1" src="../../img/imgSite/notfound2.jpg" alt="DATA NOT FOUND"><img style="display: none;" class="nodatanone datanotfoundimg1" src="../../img/imgSite/notfound21.jpg" alt="DATA NOT FOUND">';
  } else {
    $output = '<img style="display: none;" class="nodatablock datanotfoundimg1" src="../../img/imgSite/notfound2.jpg" alt="DATA NOT FOUND"><img style="display: none;" class="nodatanone datanotfoundimg1" src="../../img/imgSite/notfound21.jpg" alt="DATA NOT FOUND">';
  }
 }
 echo $output;

        $query = "SELECT alternatorinitial.id, alternatorinitial.imgsrc, alternatorinitial.title, alternatorinitial.link, alternatorinitial.category, alternatorinitial.voltag, alternatorinitial.product_status, alternatorkrosstable.linkalternator, alternatorkrosstable.mazda, alternatorkrosstable.daewoo, alternatorkrosstable.gmm, alternatorkrosstable.maz, alternatorkrosstable.pmx FROM `alternatorinitial` INNER JOIN `alternatorkrosstable` ON alternatorinitial.voltag = alternatorkrosstable.linkalternator WHERE category = 'Alternator' AND product_status = '1' AND (alternatorkrosstable.mazda REGEXP '$aplicari' OR alternatorkrosstable.daewoo REGEXP '$aplicari' OR alternatorkrosstable.gmm REGEXP '$aplicari' OR alternatorkrosstable.maz REGEXP '$aplicari' OR alternatorkrosstable.pmx REGEXP '$aplicari') ORDER BY voltag DESC";   
 $statement = $connect->prepare($query);
 $statement->execute();
 $result = $statement->fetchAll();
 $total_row = $statement->rowCount();
 $output = '';
 if($voltajj != NULL)
 {
  foreach($result as $row1)
  {

 $linksklad5 = $row1["link"];
 $titleupakovka = $row1["title"];
 
 $query = "SELECT SUM(Column_4) AS Column_5sum FROM `alternatorstock` WHERE `Column_3` = '$titleupakovka' AND (`Column_2` = '$linksklad5' OR `Column_1` = '$linksklad5')";

 $statement = $connect->prepare($query);
 $statement->execute();
 $result = $statement->fetchAll();
 $total_row = $statement->rowCount();
 foreach ($result as $rowpsklad) {

 $totalsum = $rowpsklad['Column_5sum'];

        if ($totalsum > 0){
          $finalinf = '<div class="stockondivartanalogii stockondiv"><p class="fruit stockon"></p></div>';
        }

        //if (($totalsum > 0) AND ($totalsum < 3)){
        //  $finalinf = '<div class="stockondiv1artanalogii stockondiv1"><p class="fruit stockon1"></p></div>';
        //}

        if ($totalsum == 0){
          $finalinf = '<div class="stockondiv2artanalogii stockondiv2"><p class="fruit stockon2"></p></div>';
        }

        if ($totalsum == NULL){
          $finalinf = '<div class="stockondiv2artanalogii stockondiv1"><p class="fruit stockon1"></p></div>';
        }
      }

   $output .= '

  <li class="fruit1">SE APLICA PENTRU : </li>

  <a href="../alternator/article.php?id='. $row1['id'] .'" target="_blank"><li class="fruit"><img class="nodatablock datanotfoundimg1" src="../../img/product/'.$row1['voltag'].'-1.jpg" alt="0">'.$row1['link'].''.$finalinf.'</li></a>

   ';
  }
 }
 else
 {
  if ($voltajj != NULL) {
    $output = '<img style="display: none;" class="nodatablock datanotfoundimg1" src="../../img/imgSite/notfound2.jpg" alt="DATA NOT FOUND"><img style="display: none;" class="nodatanone datanotfoundimg1" src="../../img/imgSite/notfound21.jpg" alt="DATA NOT FOUND">';
  } else {
    $output = '<img style="display: none;" class="nodatablock datanotfoundimg1" src="../../img/imgSite/notfound2.jpg" alt="DATA NOT FOUND"><img style="display: none;" class="nodatanone datanotfoundimg1" src="../../img/imgSite/notfound21.jpg" alt="DATA NOT FOUND">';
  }
 }
 echo $output;

        $query = "SELECT alternatorinitial.id, alternatorinitial.imgsrc, alternatorinitial.title, alternatorinitial.link, alternatorinitial.category, alternatorinitial.voltag, alternatorinitial.product_status, alternatorkrosstable.linkalternator, alternatorkrosstable.unipoint, alternatorkrosstable.citroen, alternatorkrosstable.nissan, alternatorkrosstable.reparts, alternatorkrosstable.bll FROM `alternatorinitial` INNER JOIN `alternatorkrosstable` ON alternatorinitial.voltag = alternatorkrosstable.linkalternator WHERE category = 'Alternator' AND product_status = '1' AND (alternatorkrosstable.unipoint REGEXP '$aplicari' OR alternatorkrosstable.citroen REGEXP '$aplicari' OR alternatorkrosstable.nissan REGEXP '$aplicari' OR alternatorkrosstable.reparts REGEXP '$aplicari' OR alternatorkrosstable.bll REGEXP '$aplicari') ORDER BY voltag DESC";   
 $statement = $connect->prepare($query);
 $statement->execute();
 $result = $statement->fetchAll();
 $total_row = $statement->rowCount();
 $output = '';
 if($voltajj != NULL)
 {
  foreach($result as $row1)
  {

 $linksklad5 = $row1["link"];
 $titleupakovka = $row1["title"];
 
 $query = "SELECT SUM(Column_4) AS Column_5sum FROM `alternatorstock` WHERE `Column_3` = '$titleupakovka' AND (`Column_2` = '$linksklad5' OR `Column_1` = '$linksklad5')";

 $statement = $connect->prepare($query);
 $statement->execute();
 $result = $statement->fetchAll();
 $total_row = $statement->rowCount();
 foreach ($result as $rowpsklad) {

 $totalsum = $rowpsklad['Column_5sum'];

        if ($totalsum > 0){
          $finalinf = '<div class="stockondivartanalogii stockondiv"><p class="fruit stockon"></p></div>';
        }

        //if (($totalsum > 0) AND ($totalsum < 3)){
        //  $finalinf = '<div class="stockondiv1artanalogii stockondiv1"><p class="fruit stockon1"></p></div>';
        //}

        if ($totalsum == 0){
          $finalinf = '<div class="stockondiv2artanalogii stockondiv2"><p class="fruit stockon2"></p></div>';
        }

        if ($totalsum == NULL){
          $finalinf = '<div class="stockondiv2artanalogii stockondiv1"><p class="fruit stockon1"></p></div>';
        }
      }

   $output .= '

  <li class="fruit1">SE APLICA PENTRU : </li>

  <a href="../alternator/article.php?id='. $row1['id'] .'" target="_blank"><li class="fruit"><img class="nodatablock datanotfoundimg1" src="../../img/product/'.$row1['voltag'].'-1.jpg" alt="0">'.$row1['link'].''.$finalinf.'</li></a>

   ';
  }
 }
 else
 {
  if ($voltajj != NULL) {
    $output = '<img style="display: none;" class="nodatablock datanotfoundimg1" src="../../img/imgSite/notfound2.jpg" alt="DATA NOT FOUND"><img style="display: none;" class="nodatanone datanotfoundimg1" src="../../img/imgSite/notfound21.jpg" alt="DATA NOT FOUND">';
  } else {
    $output = '<img style="display: none;" class="nodatablock datanotfoundimg1" src="../../img/imgSite/notfound2.jpg" alt="DATA NOT FOUND"><img style="display: none;" class="nodatanone datanotfoundimg1" src="../../img/imgSite/notfound21.jpg" alt="DATA NOT FOUND">';
  }
 }
 echo $output;

        $query = "SELECT alternatorinitial.id, alternatorinitial.imgsrc, alternatorinitial.title, alternatorinitial.link, alternatorinitial.category, alternatorinitial.voltag, alternatorinitial.product_status, alternatorkrosstable.linkalternator, alternatorkrosstable.acdelco, alternatorkrosstable.generalmotors, alternatorkrosstable.brillance, alternatorkrosstable.komatsu, alternatorkrosstable.nikko FROM `alternatorinitial` INNER JOIN `alternatorkrosstable` ON alternatorinitial.voltag = alternatorkrosstable.linkalternator WHERE category = 'Alternator' AND product_status = '1' AND (alternatorkrosstable.acdelco REGEXP '$aplicari' OR alternatorkrosstable.generalmotors REGEXP '$aplicari' OR alternatorkrosstable.brillance REGEXP '$aplicari' OR alternatorkrosstable.komatsu REGEXP '$aplicari' OR alternatorkrosstable.nikko REGEXP '$aplicari') ORDER BY voltag DESC";   
 $statement = $connect->prepare($query);
 $statement->execute();
 $result = $statement->fetchAll();
 $total_row = $statement->rowCount();
 $output = '';
 if($voltajj != NULL)
 {
  foreach($result as $row1)
  {

 $linksklad5 = $row1["link"];
 $titleupakovka = $row1["title"];
 
 $query = "SELECT SUM(Column_4) AS Column_5sum FROM `alternatorstock` WHERE `Column_3` = '$titleupakovka' AND (`Column_2` = '$linksklad5' OR `Column_1` = '$linksklad5')";

 $statement = $connect->prepare($query);
 $statement->execute();
 $result = $statement->fetchAll();
 $total_row = $statement->rowCount();
 foreach ($result as $rowpsklad) {

 $totalsum = $rowpsklad['Column_5sum'];

        if ($totalsum > 0){
          $finalinf = '<div class="stockondivartanalogii stockondiv"><p class="fruit stockon"></p></div>';
        }

        //if (($totalsum > 0) AND ($totalsum < 3)){
        //  $finalinf = '<div class="stockondiv1artanalogii stockondiv1"><p class="fruit stockon1"></p></div>';
        //}

        if ($totalsum == 0){
          $finalinf = '<div class="stockondiv2artanalogii stockondiv2"><p class="fruit stockon2"></p></div>';
        }

        if ($totalsum == NULL){
          $finalinf = '<div class="stockondiv2artanalogii stockondiv1"><p class="fruit stockon1"></p></div>';
        }
      }

   $output .= '

  <li class="fruit1">SE APLICA PENTRU : </li>

  <a href="../alternator/article.php?id='. $row1['id'] .'" target="_blank"><li class="fruit"><img class="nodatablock datanotfoundimg1" src="../../img/product/'.$row1['voltag'].'-1.jpg" alt="0">'.$row1['link'].''.$finalinf.'</li></a>

   ';
  }
 }
 else
 {
  if ($voltajj != NULL) {
    $output = '<img style="display: none;" class="nodatablock datanotfoundimg1" src="../../img/imgSite/notfound2.jpg" alt="DATA NOT FOUND"><img style="display: none;" class="nodatanone datanotfoundimg1" src="../../img/imgSite/notfound21.jpg" alt="DATA NOT FOUND">';
  } else {
    $output = '<img style="display: none;" class="nodatablock datanotfoundimg1" src="../../img/imgSite/notfound2.jpg" alt="DATA NOT FOUND"><img style="display: none;" class="nodatanone datanotfoundimg1" src="../../img/imgSite/notfound21.jpg" alt="DATA NOT FOUND">';
  }
 }
 echo $output;


         $query = "SELECT alternatorinitial.id, alternatorinitial.imgsrc, alternatorinitial.title, alternatorinitial.link, alternatorinitial.category, alternatorinitial.voltag, alternatorinitial.product_status, alternatorkrosstable.linkalternator, alternatorkrosstable.wll, alternatorkrosstable.vag, alternatorkrosstable.hino, alternatorkrosstable.sawafuji, alternatorkrosstable.poong_sung FROM `alternatorinitial` INNER JOIN `alternatorkrosstable` ON alternatorinitial.voltag = alternatorkrosstable.linkalternator WHERE category = 'Alternator' AND product_status = '1' AND (alternatorkrosstable.wll REGEXP '$aplicari' OR alternatorkrosstable.vag REGEXP '$aplicari' OR alternatorkrosstable.hino REGEXP '$aplicari' OR alternatorkrosstable.sawafuji REGEXP '$aplicari' OR alternatorkrosstable.poong_sung REGEXP '$aplicari') ORDER BY voltag DESC";   
 $statement = $connect->prepare($query);
 $statement->execute();
 $result = $statement->fetchAll();
 $total_row = $statement->rowCount();
 $output = '';
 if($voltajj != NULL)
 {
  foreach($result as $row1)
  {

 $linksklad5 = $row1["link"];
 $titleupakovka = $row1["title"];
 
 $query = "SELECT SUM(Column_4) AS Column_5sum FROM `alternatorstock` WHERE `Column_3` = '$titleupakovka' AND (`Column_2` = '$linksklad5' OR `Column_1` = '$linksklad5')";

 $statement = $connect->prepare($query);
 $statement->execute();
 $result = $statement->fetchAll();
 $total_row = $statement->rowCount();
 foreach ($result as $rowpsklad) {

 $totalsum = $rowpsklad['Column_5sum'];

        if ($totalsum > 0){
          $finalinf = '<div class="stockondivartanalogii stockondiv"><p class="fruit stockon"></p></div>';
        }

        //if (($totalsum > 0) AND ($totalsum < 3)){
        //  $finalinf = '<div class="stockondiv1artanalogii stockondiv1"><p class="fruit stockon1"></p></div>';
        //}

        if ($totalsum == 0){
          $finalinf = '<div class="stockondiv2artanalogii stockondiv2"><p class="fruit stockon2"></p></div>';
        }

        if ($totalsum == NULL){
          $finalinf = '<div class="stockondiv2artanalogii stockondiv1"><p class="fruit stockon1"></p></div>';
        }
      }

   $output .= '

  <li class="fruit1">SE APLICA PENTRU : </li>

  <a href="../alternator/article.php?id='. $row1['id'] .'" target="_blank"><li class="fruit"><img class="nodatablock datanotfoundimg1" src="../../img/product/'.$row1['voltag'].'-1.jpg" alt="0">'.$row1['link'].''.$finalinf.'</li></a>

   ';
  }
 }
 else
 {
  if ($voltajj != NULL) {
    $output = '<img style="display: none;" class="nodatablock datanotfoundimg1" src="../../img/imgSite/notfound2.jpg" alt="DATA NOT FOUND"><img style="display: none;" class="nodatanone datanotfoundimg1" src="../../img/imgSite/notfound21.jpg" alt="DATA NOT FOUND">';
  } else {
    $output = '<img style="display: none;" class="nodatablock datanotfoundimg1" src="../../img/imgSite/notfound2.jpg" alt="DATA NOT FOUND"><img style="display: none;" class="nodatanone datanotfoundimg1" src="../../img/imgSite/notfound21.jpg" alt="DATA NOT FOUND">';
  }
 }
 echo $output;


         $query = "SELECT alternatorinitial.id, alternatorinitial.imgsrc, alternatorinitial.title, alternatorinitial.link, alternatorinitial.category, alternatorinitial.voltag, alternatorinitial.product_status, alternatorkrosstable.linkalternator, alternatorkrosstable.motorola, alternatorkrosstable.hyster, alternatorkrosstable.skk, alternatorkrosstable.pee, alternatorkrosstable.magneton FROM `alternatorinitial` INNER JOIN `alternatorkrosstable` ON alternatorinitial.voltag = alternatorkrosstable.linkalternator WHERE category = 'Alternator' AND product_status = '1' AND (alternatorkrosstable.motorola REGEXP '$aplicari' OR alternatorkrosstable.hyster REGEXP '$aplicari' OR alternatorkrosstable.skk REGEXP '$aplicari' OR alternatorkrosstable.pee REGEXP '$aplicari' OR alternatorkrosstable.magneton REGEXP '$aplicari') ORDER BY voltag DESC";   
 $statement = $connect->prepare($query);
 $statement->execute();
 $result = $statement->fetchAll();
 $total_row = $statement->rowCount();
 $output = '';
 if($voltajj != NULL)
 {
  foreach($result as $row1)
  {

 $linksklad5 = $row1["link"];
 $titleupakovka = $row1["title"];
 
 $query = "SELECT SUM(Column_4) AS Column_5sum FROM `alternatorstock` WHERE `Column_3` = '$titleupakovka' AND (`Column_2` = '$linksklad5' OR `Column_1` = '$linksklad5')";

 $statement = $connect->prepare($query);
 $statement->execute();
 $result = $statement->fetchAll();
 $total_row = $statement->rowCount();
 foreach ($result as $rowpsklad) {

 $totalsum = $rowpsklad['Column_5sum'];

        if ($totalsum > 0){
          $finalinf = '<div class="stockondivartanalogii stockondiv"><p class="fruit stockon"></p></div>';
        }

        //if (($totalsum > 0) AND ($totalsum < 3)){
        //  $finalinf = '<div class="stockondiv1artanalogii stockondiv1"><p class="fruit stockon1"></p></div>';
        //}

        if ($totalsum == 0){
          $finalinf = '<div class="stockondiv2artanalogii stockondiv2"><p class="fruit stockon2"></p></div>';
        }

        if ($totalsum == NULL){
          $finalinf = '<div class="stockondiv2artanalogii stockondiv1"><p class="fruit stockon1"></p></div>';
        }
      }

   $output .= '

  <li class="fruit1">SE APLICA PENTRU : </li>

  <a href="../alternator/article.php?id='. $row1['id'] .'" target="_blank"><li class="fruit"><img class="nodatablock datanotfoundimg1" src="../../img/product/'.$row1['voltag'].'-1.jpg" alt="0">'.$row1['link'].''.$finalinf.'</li></a>

   ';
  }
 }
 else
 {
  if ($voltajj != NULL) {
    $output = '<img style="display: none;" class="nodatablock datanotfoundimg1" src="../../img/imgSite/notfound2.jpg" alt="DATA NOT FOUND"><img style="display: none;" class="nodatanone datanotfoundimg1" src="../../img/imgSite/notfound21.jpg" alt="DATA NOT FOUND">';
  } else {
    $output = '<img style="display: none;" class="nodatablock datanotfoundimg1" src="../../img/imgSite/notfound2.jpg" alt="DATA NOT FOUND"><img style="display: none;" class="nodatanone datanotfoundimg1" src="../../img/imgSite/notfound21.jpg" alt="DATA NOT FOUND">';
  }
 }
 echo $output;


         $query = "SELECT alternatorinitial.id, alternatorinitial.imgsrc, alternatorinitial.title, alternatorinitial.link, alternatorinitial.category, alternatorinitial.voltag, alternatorinitial.product_status, alternatorkrosstable.linkalternator, alternatorkrosstable.case, alternatorkrosstable.deutz, alternatorkrosstable.mahle, alternatorkrosstable.khd, alternatorkrosstable.iskra FROM `alternatorinitial` INNER JOIN `alternatorkrosstable` ON alternatorinitial.voltag = alternatorkrosstable.linkalternator WHERE category = 'Alternator' AND product_status = '1' AND (alternatorkrosstable.case REGEXP '$aplicari' OR alternatorkrosstable.deutz REGEXP '$aplicari' OR alternatorkrosstable.mahle REGEXP '$aplicari' OR alternatorkrosstable.khd REGEXP '$aplicari' OR alternatorkrosstable.iskra REGEXP '$aplicari') ORDER BY voltag DESC";   
 $statement = $connect->prepare($query);
 $statement->execute();
 $result = $statement->fetchAll();
 $total_row = $statement->rowCount();
 $output = '';
 if($voltajj != NULL)
 {
  foreach($result as $row1)
  {

 $linksklad5 = $row1["link"];
 $titleupakovka = $row1["title"];
 
 $query = "SELECT SUM(Column_4) AS Column_5sum FROM `alternatorstock` WHERE `Column_3` = '$titleupakovka' AND (`Column_2` = '$linksklad5' OR `Column_1` = '$linksklad5')";

 $statement = $connect->prepare($query);
 $statement->execute();
 $result = $statement->fetchAll();
 $total_row = $statement->rowCount();
 foreach ($result as $rowpsklad) {

 $totalsum = $rowpsklad['Column_5sum'];

        if ($totalsum > 0){
          $finalinf = '<div class="stockondivartanalogii stockondiv"><p class="fruit stockon"></p></div>';
        }

        //if (($totalsum > 0) AND ($totalsum < 3)){
        //  $finalinf = '<div class="stockondiv1artanalogii stockondiv1"><p class="fruit stockon1"></p></div>';
        //}

        if ($totalsum == 0){
          $finalinf = '<div class="stockondiv2artanalogii stockondiv2"><p class="fruit stockon2"></p></div>';
        }

        if ($totalsum == NULL){
          $finalinf = '<div class="stockondiv2artanalogii stockondiv1"><p class="fruit stockon1"></p></div>';
        }
      }

   $output .= '

  <li class="fruit1">SE APLICA PENTRU : </li>

  <a href="../alternator/article.php?id='. $row1['id'] .'" target="_blank"><li class="fruit"><img class="nodatablock datanotfoundimg1" src="../../img/product/'.$row1['voltag'].'-1.jpg" alt="0">'.$row1['link'].''.$finalinf.'</li></a>

   ';
  }
 }
 else
 {
  if ($voltajj != NULL) {
    $output = '<img style="display: none;" class="nodatablock datanotfoundimg1" src="../../img/imgSite/notfound2.jpg" alt="DATA NOT FOUND"><img style="display: none;" class="nodatanone datanotfoundimg1" src="../../img/imgSite/notfound21.jpg" alt="DATA NOT FOUND">';
  } else {
    $output = '<img style="display: none;" class="nodatablock datanotfoundimg1" src="../../img/imgSite/notfound2.jpg" alt="DATA NOT FOUND"><img style="display: none;" class="nodatanone datanotfoundimg1" src="../../img/imgSite/notfound21.jpg" alt="DATA NOT FOUND">';
  }
 }
 echo $output;


         $query = "SELECT alternatorinitial.id, alternatorinitial.imgsrc, alternatorinitial.title, alternatorinitial.link, alternatorinitial.category, alternatorinitial.voltag, alternatorinitial.product_status, alternatorkrosstable.linkalternator, alternatorkrosstable.hitachi, alternatorkrosstable.john_deere, alternatorkrosstable.vww, alternatorkrosstable.denso, alternatorkrosstable.general_motors FROM `alternatorinitial` INNER JOIN `alternatorkrosstable` ON alternatorinitial.voltag = alternatorkrosstable.linkalternator WHERE category = 'Alternator' AND product_status = '1' AND (alternatorkrosstable.hitachi REGEXP '$aplicari' OR alternatorkrosstable.john_deere REGEXP '$aplicari' OR alternatorkrosstable.vww REGEXP '$aplicari' OR alternatorkrosstable.denso REGEXP '$aplicari' OR alternatorkrosstable.general_motors REGEXP '$aplicari') ORDER BY voltag DESC";   
 $statement = $connect->prepare($query);
 $statement->execute();
 $result = $statement->fetchAll();
 $total_row = $statement->rowCount();
 $output = '';
 if($voltajj != NULL)
 {
  foreach($result as $row1)
  {

 $linksklad5 = $row1["link"];
 $titleupakovka = $row1["title"];
 
 $query = "SELECT SUM(Column_4) AS Column_5sum FROM `alternatorstock` WHERE `Column_3` = '$titleupakovka' AND (`Column_2` = '$linksklad5' OR `Column_1` = '$linksklad5')";

 $statement = $connect->prepare($query);
 $statement->execute();
 $result = $statement->fetchAll();
 $total_row = $statement->rowCount();
 foreach ($result as $rowpsklad) {

 $totalsum = $rowpsklad['Column_5sum'];

        if ($totalsum > 0){
          $finalinf = '<div class="stockondivartanalogii stockondiv"><p class="fruit stockon"></p></div>';
        }

        //if (($totalsum > 0) AND ($totalsum < 3)){
        //  $finalinf = '<div class="stockondiv1artanalogii stockondiv1"><p class="fruit stockon1"></p></div>';
        //}

        if ($totalsum == 0){
          $finalinf = '<div class="stockondiv2artanalogii stockondiv2"><p class="fruit stockon2"></p></div>';
        }

        if ($totalsum == NULL){
          $finalinf = '<div class="stockondiv2artanalogii stockondiv1"><p class="fruit stockon1"></p></div>';
        }
      }

   $output .= '

  <li class="fruit1">SE APLICA PENTRU : </li>

  <a href="../alternator/article.php?id='. $row1['id'] .'" target="_blank"><li class="fruit"><img class="nodatablock datanotfoundimg1" src="../../img/product/'.$row1['voltag'].'-1.jpg" alt="0">'.$row1['link'].''.$finalinf.'</li></a>

   ';
  }
 }
 else
 {
  if ($voltajj != NULL) {
    $output = '<img style="display: none;" class="nodatablock datanotfoundimg1" src="../../img/imgSite/notfound2.jpg" alt="DATA NOT FOUND"><img style="display: none;" class="nodatanone datanotfoundimg1" src="../../img/imgSite/notfound21.jpg" alt="DATA NOT FOUND">';
  } else {
    $output = '<img style="display: none;" class="nodatablock datanotfoundimg1" src="../../img/imgSite/notfound2.jpg" alt="DATA NOT FOUND"><img style="display: none;" class="nodatanone datanotfoundimg1" src="../../img/imgSite/notfound21.jpg" alt="DATA NOT FOUND">';
  }
 }
 echo $output;


         $query = "SELECT alternatorinitial.id, alternatorinitial.imgsrc, alternatorinitial.title, alternatorinitial.link, alternatorinitial.category, alternatorinitial.voltag, alternatorinitial.product_status, alternatorkrosstable.linkalternator, alternatorkrosstable.opel, alternatorkrosstable.generalmotors, alternatorkrosstable.brillance, alternatorkrosstable.komatsu, alternatorkrosstable.nikko FROM `alternatorinitial` INNER JOIN `alternatorkrosstable` ON alternatorinitial.voltag = alternatorkrosstable.linkalternator WHERE category = 'Alternator' AND product_status = '1' AND (alternatorkrosstable.opel REGEXP '$aplicari' OR alternatorkrosstable.generalmotors REGEXP '$aplicari' OR alternatorkrosstable.brillance REGEXP '$aplicari' OR alternatorkrosstable.komatsu REGEXP '$aplicari' OR alternatorkrosstable.nikko REGEXP '$aplicari') ORDER BY voltag DESC";   
 $statement = $connect->prepare($query);
 $statement->execute();
 $result = $statement->fetchAll();
 $total_row = $statement->rowCount();
 $output = '';
 if($voltajj != NULL)
 {
  foreach($result as $row1)
  {

 $linksklad5 = $row1["link"];
 $titleupakovka = $row1["title"];
 
 $query = "SELECT SUM(Column_4) AS Column_5sum FROM `alternatorstock` WHERE `Column_3` = '$titleupakovka' AND (`Column_2` = '$linksklad5' OR `Column_1` = '$linksklad5')";

 $statement = $connect->prepare($query);
 $statement->execute();
 $result = $statement->fetchAll();
 $total_row = $statement->rowCount();
 foreach ($result as $rowpsklad) {

 $totalsum = $rowpsklad['Column_5sum'];

        if ($totalsum > 0){
          $finalinf = '<div class="stockondivartanalogii stockondiv"><p class="fruit stockon"></p></div>';
        }

        //if (($totalsum > 0) AND ($totalsum < 3)){
        //  $finalinf = '<div class="stockondiv1artanalogii stockondiv1"><p class="fruit stockon1"></p></div>';
        //}

        if ($totalsum == 0){
          $finalinf = '<div class="stockondiv2artanalogii stockondiv2"><p class="fruit stockon2"></p></div>';
        }

        if ($totalsum == NULL){
          $finalinf = '<div class="stockondiv2artanalogii stockondiv1"><p class="fruit stockon1"></p></div>';
        }
      }

   $output .= '

  <li class="fruit1">SE APLICA PENTRU : </li>

  <a href="../alternator/article.php?id='. $row1['id'] .'" target="_blank"><li class="fruit"><img class="nodatablock datanotfoundimg1" src="../../img/product/'.$row1['voltag'].'-1.jpg" alt="0">'.$row1['link'].''.$finalinf.'</li></a>

   ';
  }
 }
 else
 {
  if ($voltajj != NULL) {
    $output = '<img style="display: none;" class="nodatablock datanotfoundimg1" src="../../img/imgSite/notfound2.jpg" alt="DATA NOT FOUND"><img style="display: none;" class="nodatanone datanotfoundimg1" src="../../img/imgSite/notfound21.jpg" alt="DATA NOT FOUND">';
  } else {
    $output = '<img style="display: none;" class="nodatablock datanotfoundimg1" src="../../img/imgSite/notfound2.jpg" alt="DATA NOT FOUND"><img style="display: none;" class="nodatanone datanotfoundimg1" src="../../img/imgSite/notfound21.jpg" alt="DATA NOT FOUND">';
  }
 }
 echo $output;
     
    ?> 

  </ul>   
 </div>


<div class="tablesArt">

 <div class="tablesArtButtons">
  <button class="buttonArtTables1">ANALOGII</button>
  <button style="display: none;" class="buttonArtTables2">PRODUCT REPLACEMENTS</button>
  <button class="buttonArtTables3">SE APLICĂ PENTRU AUTOMOBILELE</button>
 </div>

 <div class="tablesArt1ProductCrosses">
  <ul>   
  <?php
   $alternatorv = $row131['voltag'];
   $query = "SELECT * FROM inelkrosstable WHERE '$alternatorv' = linkalternator";
   $statement = $connect->prepare($query);
   $statement->execute();
   $result = $statement->fetchAll();
   foreach ($result as $row1311) {
 ?>   
    <?php if ( $row131['voltag'] != NULL) echo
  '<li>VOLTAG - '.$row131['voltag'].'</li>'
   ?> 

  <?php if ( $row1311['ass1'] != NULL) echo
  '<li>AS - '.$row1311['ass1'].'</li>'
   ?> 

   <?php if ( $row1311['zaufer'] != NULL) echo
  '<li>ZAUFER - '.$row1311['zaufer'].'</li>'
   ?> 

   <?php if ( $row1311['cas'] != NULL) echo
  '<li>CAS - '.$row1311['cas'].'</li>'
   ?>    

   <?php if ( $row1311['hyundai'] != NULL) echo
  '<li>HYUNDAI - '.$row1311['hyundai'].'</li>'
   ?>    

   <?php if ( $row1311['cargo'] != NULL) echo
  '<li>CARGO - '.$row1311['cargo'].'</li>'
   ?>  

      <?php if ( $row1311['kia'] != NULL) echo
  '<li>KIA - '.$row1311['kia'].'</li>'
   ?>    

   <?php if ( $row1311['krauf'] != NULL) echo
  '<li>KRAUF - '.$row1311['krauf'].'</li>'
   ?>    

   <?php if ( $row1311['mando'] != NULL) echo
  '<li>MANDO - '.$row1311['mando'].'</li>'
   ?>    

   <?php if ( $row1311['messmer'] != NULL) echo
  '<li>MESSMER - '.$row1311['messmer'].'</li>'
   ?>  

      <?php if ( $row1311['motorherz'] != NULL) echo
  '<li>MOTORHERZ - '.$row1311['motorherz'].'</li>'
   ?>    

   <?php if ( $row1311['valeo'] != NULL) echo
  '<li>VALEO - '.$row1311['valeo'].'</li>'
   ?>    

   <?php if ( $row1311['wai'] != NULL) echo
  '<li>WAI - '.$row1311['wai'].'</li>'
   ?>    

   <?php if ( $row1311['mitsubishi'] != NULL) echo
  '<li>MITSUBISHI - '.$row1311['mitsubishi'].'</li>'
   ?>  

   <?php if ( $row1311['bosch'] != NULL) echo
  '<li>BOSCH - '.$row1311['bosch'].'</li>'
   ?>    

   <?php if ( $row1311['delco'] != NULL) echo
  '<li>DELCO - '.$row1311['delco'].'</li>'
   ?>    

   <?php if ( $row1311['hc_parts'] != NULL) echo
  '<li>HC PARTS - '.$row1311['hc_parts'].'</li>'
   ?>    

   <?php if ( $row1311['hella'] != NULL) echo
  '<li>HELLA - '.$row1311['hella'].'</li>'
   ?>  

      <?php if ( $row1311['lucas'] != NULL) echo
  '<li>LUCAS - '.$row1311['lucas'].'</li>'
   ?>    

   <?php if ( $row1311['magnetimarelli'] != NULL) echo
  '<li>MAGNETI MARELLI - '.$row1311['magnetimarelli'].'</li>'
   ?>    

   <?php if ( $row1311['wps'] != NULL) echo
  '<li>WPS - '.$row1311['wps'].'</li>'
   ?>    

   <?php if ( $row1311['bcc'] != NULL) echo
  '<li>BC - '.$row1311['bcc'].'</li>'
   ?>  

   <?php if ( $row1311['prestolite'] != NULL) echo
  '<li>PRESTOLITE - '.$row1311['prestolite'].'</li>'
   ?>    

   <?php if ( $row1311['volvo'] != NULL) echo
  '<li>VOLVO - '.$row1311['volvo'].'</li>'
   ?>    

   <?php if ( $row1311['yam'] != NULL) echo
  '<li>YAM - '.$row1311['yam'].'</li>'
   ?>    

   <?php if ( $row1311['ford'] != NULL) echo
  '<li>FORD - '.$row1311['ford'].'</li>'
   ?>  

   <?php if ( $row1311['hbb'] != NULL) echo
  '<li>HB - '.$row1311['hbb'].'</li>'
   ?>    

   <?php if ( $row1311['mazda'] != NULL) echo
  '<li>MAZDA - '.$row1311['mazda'].'</li>'
   ?>    

   <?php if ( $row1311['daewoo'] != NULL) echo
  '<li>DAEWOO - '.$row1311['daewoo'].'</li>'
   ?>    

   <?php if ( $row1311['gmm'] != NULL) echo
  '<li>GM - '.$row1311['gmm'].'</li>'
   ?>  

      <?php if ( $row1311['maz'] != NULL) echo
  '<li>MAZ - '.$row1311['maz'].'</li>'
   ?>    

   <?php if ( $row1311['pmx'] != NULL) echo
  '<li>PMX - '.$row1311['pmx'].'</li>'
   ?>    

   <?php if ( $row1311['unipoint'] != NULL) echo
  '<li>UNIPOINT - '.$row1311['unipoint'].'</li>'
   ?>    

   <?php if ( $row1311['citroen'] != NULL) echo
  '<li>CITROEN - '.$row1311['citroen'].'</li>'
   ?>  

      <?php if ( $row1311['nissan'] != NULL) echo
  '<li>NISSAN - '.$row1311['nissan'].'</li>'
   ?>    

   <?php if ( $row1311['renault'] != NULL) echo
  '<li>RENAULT - '.$row1311['renault'].'</li>'
   ?>    

   <?php if ( $row1311['reparts'] != NULL) echo
  '<li>REPARTS - '.$row1311['reparts'].'</li>'
   ?>    

   <?php if ( $row1311['bll'] != NULL) echo
  '<li>BL - '.$row1311['bll'].'</li>'
   ?>  

      <?php if ( $row1311['acdelco'] != NULL) echo
  '<li>ACDelco - '.$row1311['acdelco'].'</li>'
   ?>    

   <?php if ( $row1311['generalmotors'] != NULL) echo
  '<li>GENERAL MOTORS - '.$row1311['generalmotors'].'</li>'
   ?>    

   <?php if ( $row1311['brillance'] != NULL) echo
  '<li>BRILLIANCE - '.$row1311['brillance'].'</li>'
   ?>    

   <?php if ( $row1311['mercedesbenz'] != NULL) echo
  '<li>MERCEDES BENZ - '.$row1311['mercedesbenz'].'</li>'
   ?>  

      <?php if ( $row1311['komatsu'] != NULL) echo
  '<li>KOMATSU - '.$row1311['komatsu'].'</li>'
   ?>    

   <?php if ( $row1311['nikko'] != NULL) echo
  '<li>NIKKO - '.$row1311['nikko'].'</li>'
   ?>    

   <?php if ( $row1311['wll'] != NULL) echo
  '<li>WL - '.$row1311['wll'].'</li>'
   ?>    

   <?php if ( $row1311['vag'] != NULL) echo
  '<li>VAG - '.$row1311['vag'].'</li>'
   ?>  

      <?php if ( $row1311['hino'] != NULL) echo
  '<li>HINO - '.$row1311['hino'].'</li>'
   ?>    

   <?php if ( $row1311['sawafuji'] != NULL) echo
  '<li>SAWAFUJI - '.$row1311['sawafuji'].'</li>'
   ?>    

   <?php if ( $row1311['poong_sung'] != NULL) echo
  '<li>POONG SUNG - '.$row1311['poong_sung'].'</li>'
   ?>    

   <?php if ( $row1311['motorola'] != NULL) echo
  '<li>MOTOROLA - '.$row1311['motorola'].'</li>'
   ?>  

      <?php if ( $row1311['cat'] != NULL) echo
  '<li>CAT - '.$row1311['cat'].'</li>'
   ?>    

   <?php if ( $row1311['hyster'] != NULL) echo
  '<li>HYSTER - '.$row1311['hyster'].'</li>'
   ?>    

   <?php if ( $row1311['skk'] != NULL) echo
  '<li>SK - '.$row1311['skk'].'</li>'
   ?>    

   <?php if ( $row1311['pee'] != NULL) echo
  '<li>PE - '.$row1311['pee'].'</li>'
   ?>  

      <?php if ( $row1311['magneton'] != NULL) echo
  '<li>MAGNETON - '.$row1311['magneton'].'</li>'
   ?>    

   <?php if ( $row1311['case'] != NULL) echo
  '<li>CASE - '.$row1311['case'].'</li>'
   ?>    

   <?php if ( $row1311['deutz'] != NULL) echo
  '<li>DEUTZ - '.$row1311['deutz'].'</li>'
   ?>    

   <?php if ( $row1311['mahle'] != NULL) echo
  '<li>MAHLE - '.$row1311['mahle'].'</li>'
   ?>  

      <?php if ( $row1311['khd'] != NULL) echo
  '<li>KHD - '.$row1311['khd'].'</li>'
   ?>    

   <?php if ( $row1311['iskra'] != NULL) echo
  '<li>ISKRA - '.$row1311['iskra'].'</li>'
   ?>    

   <?php if ( $row1311['hitachi'] != NULL) echo
  '<li>HITACHI - '.$row1311['hitachi'].'</li>'
   ?>    

   <?php if ( $row1311['john_deere'] != NULL) echo
  '<li>JOHN DEERE - '.$row1311['john_deere'].'</li>'
   ?>  

      <?php if ( $row1311['vww'] != NULL) echo
  '<li>VW - '.$row1311['vww'].'</li>'
   ?>    

   <?php if ( $row1311['denso'] != NULL) echo
  '<li>DENSO - '.$row1311['denso'].'</li>'
   ?>    

   <?php if ( $row1311['opel'] != NULL) echo
  '<li>OPEL - '.$row1311['opel'].'</li>'
   ?>    
  <?php
    }
  ?>    

  </ul>   
 </div>
       

 <div class="tablesArt1 tablesArt1ProductCrosses">
  <?php
   $alternatorv = $row131['voltag'];
   $query = "SELECT * FROM where_it_use_table WHERE linkalternator = '$alternatorv'";
   $statement = $connect->prepare($query);
   $statement->execute();
   $result = $statement->fetchAll();
   foreach ($result as $rowApplies) {
 ?>   
  <?php
    }
  ?>      

  <?php if ( $rowApplies['where_we_use'] != NULL) echo
  '<p>'.$rowApplies['where_we_use'].'</p>'
   ?>        
        </div>        
    </div><br>

<?php require "../../footer.php"; ?>

 <canvas class="wow fadeIn" data-wow-duration="2s" id="canvas-basic"></canvas>

</body>

</html>

<script type="text/javascript" src="js/vanilla.min.js"></script>

<script>

  var loader = document.getElementById("prel");

  window.addEventListener("load", function(){
    loader.style.display = "none";
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

    $("#btnsubmit").click(function(){
    $("#btnsubmit").css("background-image", "url(/img/imgSite/loaderValenterAuto.gif)");
    $("#btnsubmit").css("background-color", "white");
    $("#btnsubmit").css("border", "2px solid #0088CC");
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

  function myFunction(smallImg){
      var fullImg = document.getElementById("imageBoxBig");
      fullImg.src = smallImg.src;
  }

    $(".navigation123reSearchForSomeTime1").click(function(){
    $(".blockSearchOpenOnSite").css("display", "block");
  });

    $(".closeModalSearrch").click(function(){
    $(".blockSearchOpenOnSite").css("display", "none");
  });

    $(".closeModalFilterr").click(function(){
    $(".blockFilterrOpenOnSite").css("display", "none");
  });

    // Get the modal
    var modal = document.getElementById('myModal');

    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks the button, open the modal
    btn.onclick = function () {
        if (modal !== null) {
            modal.style.display = "block";
        }
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function () {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>

<script type="text/javascript">
    var granimInstance = new Granim({
        element: '#canvas-interactive',
        name: 'interactive-gradient',
        elToSetClassOn: '.canvas-interactive-wrapper',
        direction: 'diagonal',
        isPausedWhenNotInView: true,
        stateTransitionSpeed: 500,
        states: {
            "default-state": {
                gradients: [
                    ['#705548', '#4D3B31'],
                    ['#2B2A29', '#705548'],
                    ['#705548', '#2B2A29']
                ],
                transitionSpeed: 10000
            }
        }
    });
</script>

<script>
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
    $(document).ready(function () {
        // Add smooth scrolling to all links
        $("a").on('click', function (event) {
            // Make sure this.hash has a value before overriding default behavior
            if (this.hash !== "") {
                // Prevent default anchor click behavior
                event.preventDefault();
                // Store hash
                var hash = this.hash;
                // Using jQuery's animate() method to add smooth page scroll
                // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                $('html, body').animate({
                    scrollTop: $(hash).offset().top
                }, 800, function () {
                    // Add hash (#) to URL when done scrolling (default click behavior)
                    window.location.hash = hash;
                });
            } // End if
        });

        var items = {};
        $(".js-item").on("click", function (event) {
            event.preventDefault();
            var form_data = new FormData;
            type = $(this).data("action");
            item_id = $(this).parent().find('.item_id').text();
            form_data.append("type", type);
            form_data.append("item_id", item_id);
            // $.ajax({
            //     url: 'to_cart.php',
            //     async: false,
            //     data: form_data,
            //     type: 'post',
            //     processData: false,
            //     success: function(msg) {
            //       alert(msg);
            //         if (msg != "no") {
            //             cart_update(msg);
            //         }
            //     }
            // });
            $.ajax({
                url: 'to_cart.php',
                type: 'POST',
                data: jQuery.param({type: type, item_id: item_id}),
                contentType: 'application/x-www-form-urlencoded; charset=UTF-8',
                success: function (response) {
                    window.location.reload();
                },
                error: function () {
                    alert("error");
                }
            });
        });

        function getItems() {
            form_data = new FormData;
            form_data.append("type", "get");

            $.ajax({
                url: 'to_cart.php',
                async: false,
                data: form_data,
                type: 'post',
                processData: false,
                success: function (msg) {
                    if (msg != "no") {
                        cart_update(msg);
                    }
                }
            });
        }

        function cart_update(items) {
            alert(items);
        }
    });
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