<?php
require "includes1/config.php";

session_start();
if (!$_SESSION['user']) {
    header('Location: index.php');
}
?>

<!DOCTYPE html>
<html>
<head>
<title>
       <?php
         $query = "SELECT * FROM rotorelinitial WHERE id = " . (int)$_GET['id'];
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
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/stylemob.css">
<link rel="stylesheet" type="text/css" href="css/stylemobadmin.css">
<link rel="stylesheet" type="text/css" href="../css/style.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,500" rel="stylesheet">
<link rel="icon" sizes='16x16' type="image/png" href="../img/imgSite/ValenterAutoLogo1.png"/>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;600&display=swap" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="../js/onclickqq1.js"></script>
<script>
function scrollWin(x, y) {
  window.scrollBy(x, y);
}
</script>
</head>
<body>

<div style="margin-top: 15px;" class="footerrtyInside11erCatalog">
  <a href="indexCatalog.php"><p><img src="/img/imgSite/catalogButton.png" class="footerrtyInside11erCatalogImg">PAGINA PRINCIPALA</p></a>
  <p class="catalogButtons7">/</p>
  <a style="display: none;" href="catalog.html"><p><img src="/img/imgSite/catalogButton.png" class="footerrtyInside11erCatalogImg">CATALOG</p></a>
  <p style="display: none;" class="catalogButtons7">/</p>
  <a href="#"><p><img src="/img/imgSite/catalogButton.png" class="footerrtyInside11erCatalogImg"><?php echo mb_strtoupper($row131['category']); ?></p></a>
  <p class="catalogButtons7">/</p>
  <a href="#"><p><img src="/img/imgSite/catalogButton1.png" class="footerrtyInside11erCatalogImg"><?php echo $row131['link']; ?></p></a>                 
</div>

<div class="articleDet">
 <div class="articlePhoto">
  <div class="productArtImg">
   <div class="productArtImgSmall">

    <div class="imgadminlist">
     <form class="delformimg" method="POST" enctype="multipart/form-data" action="redirect5.php?id=<?php echo $rowphoto['id']; ?>">
      <button style="top: 0px; left: 0px;" onclick="return ConfirmDelete();" class="dellbtn" name="uploaddEL" value="" type="submit"></button>
     </form>
         <img src="/img/imgbendix/<?php echo $row131['voltag']; ?>_1.jpg" onerror='this.style.display = "none"' onclick="myFunction(this)">   

    <img src="/img/imgbendix/<?php echo $row131['voltag']; ?>_2.jpg" onerror='this.style.display = "none"' onclick="myFunction(this)">  

    <img src="/img/imgbendix/<?php echo $row131['voltag']; ?>_3.jpg" onerror='this.style.display = "none"' onclick="myFunction(this)"> 
    </div>

    <div onclick="document.getElementById('slideIneriorr').style.display='block'" class="headerButtonsForSomeTime1admin headerButtonsForSomeTime1"></div>

   </div>
   <div class="productArtImgContainerBig">
    <img id="imageBoxBig" src="/img/imgbendix/<?php echo $row131['voltag']; ?>_1.jpg">
   </div>               
  </div>
 </div>

 <div class="wow fadeIn articleText" data-wow-duration="2.5s">

     <?php
   $linksklad = $row131['link'];
        $query = "SELECT SUM(Column_5) AS Column_5sum FROM `stock` WHERE `Column_2` = '$linksklad' OR `Column_1` = '$linksklad'";
        $statement = $connect->prepare($query);
        $statement->execute();
        $result = $statement->fetchAll();
        foreach ($result as $rowpsklad) {

        $totalsum = $rowpsklad['Column_5sum'];

        if ($totalsum > 0){
          $finalinf = '<div class="stockondivart stockondiv"><div class="stockonlamp"></div><p class="fruit stockon">IN STOC | '. $rowpsklad['Column_5sum'] .'</p></div>';
        }

        //if (($totalsum > 0) AND ($totalsum < 3)){
        //$finalinf = '<div class="stockondiv1art stockondiv1"><div class="stockonlamp1"></div><p class="fruit stockon1">STOC LIMITAT | '. $rowpsklad['Column_5sum'] .'</p></div>';
        //}

        if ($totalsum == 0){
          $finalinf = '<div class="stockondiv2art stockondiv2"><div class="stockonlamp2"></div><p class="fruit stockon2">LA COMANDA | '. $rowpsklad['Column_5sum'] .'</p></div>';
        }

        if ($totalsum == NULL){
          $finalinf = '<div class="stockondiv2art stockondiv2"><div class="stockonlamp2"></div><p class="fruit stockon2">SE CONCRETIZEAZA | NULL</p></div>';
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
    <h2><?php echo $row131['link']; ?></h2>
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

   $query = "SELECT * FROM alternatorkrosstablefilter WHERE linkalternator =  '$alternatorv'";
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

   $query = "SELECT * FROM krosstablefilter_categories WHERE categoryinfilter1 =  '$alternatorv1'";
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

<div class="tablesArt">

 <div class="tablesArtButtons">
  <button class="buttonArtTables1">ANALOGII</button>
  <button style="display: none;" class="buttonArtTables2">PRODUCT REPLACEMENTS</button>
  <button class="buttonArtTables3">SE APLICĂ PENTRU</button>
 </div>

 <div class="tablesArt1ProductCrossesonthesite tablesArt1ProductCrosses">
  <ul>   


    <?php
    $voltajj = $row131['voltag'];
    $category = $row131['category'];
    $autovalenter = $row131['autovalenter'];
    $psh = $row131['psh'];
    $wood = $row131['wood'];
    $waiglobal = $row131['waiglobal'];
    $mitsubishi = $row1311['mitsubishi'];
    $delco = $row1311['delco'];
    $renault = $row1311['renault'];
    $mercedesbenz = $row1311['mercedesbenz'];
    $ford = $row1311['ford'];
    $valeo = $row1311['valeo'];
    $ass1 = $row1311['ass1'];
    $cas = $row1311['cas'];
    $hyundai = $row1311['hyundai'];
    $cargo = $row1311['cargo'];
    $kia = $row1311['kia'];
    $krauf = $row1311['krauf'];
    $mando = $row1311['mando'];
    $messmer = $row1311['messmer'];
    $motorherz = $row1311['motorherz'];
    $zaufer = $row1311['zaufer'];
    $wai = $row1311['wai'];
    $hc_parts = $row1311['hc_parts'];
    $hella = $row1311['hella'];
    $lucas = $row1311['lucas'];
    $magnetimarelli = $row1311['magnetimarelli'];
    $wps = $row1311['wps'];
    $bcc = $row1311['bcc'];
    $prestolite = $row1311['prestolite'];
    $volvo = $row1311['volvo'];
    $yam = $row1311['yam'];
    $hbb = $row1311['hbb'];
    $mazda = $row1311['mazda'];
    $daewoo = $row1311['daewoo'];
    $gmm = $row1311['gmm'];
    $maz = $row1311['maz'];
    $pmx = $row1311['pmx'];
    $unipoint = $row1311['unipoint'];
    $citroen = $row1311['citroen'];
    $nissan = $row1311['nissan'];
    $reparts = $row1311['reparts'];
    $bll = $row1311['bll'];
    $acdelco = $row1311['acdelco'];
    $generalmotors = $row1311['generalmotors'];
    $brillance = $row1311['brillance'];
    $komatsu = $row1311['komatsu'];
    $nikko = $row1311['nikko'];
    $wll = $row1311['wll'];
    $vag = $row1311['vag'];
    $hino = $row1311['hino'];
    $sawafuji = $row1311['sawafuji'];
    $poong_sung = $row1311['poong_sung'];
    $motorola = $row1311['motorola'];
    $hyster = $row1311['hyster'];
    $skk = $row1311['skk'];
    $pee = $row1311['pee'];
    $magneton = $row1311['magneton'];
    $case = $row1311['case'];
    $deutz = $row1311['deutz'];
    $mahle = $row1311['mahle'];
    $khd = $row1311['khd'];
    $iskra = $row1311['iskra'];
    $hitachi = $row1311['hitachi'];
    $john_deere = $row1311['john_deere'];
    $vww = $row1311['vww'];
    $denso = $row1311['denso'];
    $general_motors = $row1311['general_motors'];
    $opel = $row1311['opel'];
    $ffin = array("$voltajj", "$mitsubishi", "$cas");
    $link = $row131['link'];
    $query = "SELECT rotorelinitial.id, rotorelinitial.imgsrc, rotorelinitial.link, rotorelinitial.autovalenter, rotorelinitial.psh, rotorelinitial.wood, rotorelinitial.waiglobal, rotorelinitial.category, rotorelinitial.voltag, rotorelinitial.product_status, alternatorkrosstablefilter.ch1_2, alternatorkrosstablefilter.ch2_2, alternatorkrosstablefilter.ch3_2, alternatorkrosstablefilter.ch4_2, alternatorkrosstablefilter.ch5_2, alternatorkrosstablefilter.ch6_2, alternatorkrosstablefilter.ch8_2, alternatorkrosstablefilter.ch9_2, alternatorkrosstablefilter.ch10_2, alternatorkrosstablefilter.ch7_2, alternatorkrosstablefilter.ch1, alternatorkrosstablefilter.ch2, alternatorkrosstablefilter.ch3, alternatorkrosstablefilter.ch4, alternatorkrosstablefilter.ch5, alternatorkrosstablefilter.ch6, alternatorkrosstablefilter.ch8, alternatorkrosstablefilter.ch9, alternatorkrosstablefilter.ch10, alternatorkrosstablefilter.ch7, alternatorkrosstable.linkalternator, alternatorkrosstable.mitsubishi, alternatorkrosstable.bosch, alternatorkrosstable.delco, alternatorkrosstable.renault, alternatorkrosstable.mercedesbenz, alternatorkrosstable.ford, alternatorkrosstable.valeo, alternatorkrosstable.ass1, alternatorkrosstable.cas, alternatorkrosstable.hyundai, alternatorkrosstable.cargo, alternatorkrosstable.kia, alternatorkrosstable.krauf, alternatorkrosstable.mando, alternatorkrosstable.messmer, alternatorkrosstable.motorherz, alternatorkrosstable.zaufer, alternatorkrosstable.wai, alternatorkrosstable.hc_parts, alternatorkrosstable.hella, alternatorkrosstable.lucas, alternatorkrosstable.magnetimarelli, alternatorkrosstable.wps, alternatorkrosstable.bcc, alternatorkrosstable.prestolite, alternatorkrosstable.volvo, alternatorkrosstable.yam, alternatorkrosstable.hbb, alternatorkrosstable.mazda, alternatorkrosstable.daewoo, alternatorkrosstable.gmm, alternatorkrosstable.maz, alternatorkrosstable.pmx, alternatorkrosstable.unipoint, alternatorkrosstable.citroen, alternatorkrosstable.nissan, alternatorkrosstable.reparts, alternatorkrosstable.bll, alternatorkrosstable.acdelco, alternatorkrosstable.generalmotors, alternatorkrosstable.brillance, alternatorkrosstable.komatsu, alternatorkrosstable.nikko, alternatorkrosstable.wll, alternatorkrosstable.vag, alternatorkrosstable.hino, alternatorkrosstable.sawafuji, alternatorkrosstable.poong_sung, alternatorkrosstable.motorola, alternatorkrosstable.cat, alternatorkrosstable.hyster, alternatorkrosstable.skk, alternatorkrosstable.pee, alternatorkrosstable.magneton, alternatorkrosstable.case, alternatorkrosstable.deutz, alternatorkrosstable.mahle, alternatorkrosstable.khd, alternatorkrosstable.iskra, alternatorkrosstable.hitachi, alternatorkrosstable.john_deere, alternatorkrosstable.vww, alternatorkrosstable.denso, alternatorkrosstable.general_motors, alternatorkrosstable.opel FROM `rotorelinitial` INNER JOIN `alternatorkrosstable` ON rotorelinitial.voltag = alternatorkrosstable.linkalternator INNER JOIN `alternatorkrosstablefilter` ON alternatorkrosstablefilter.linkalternator = alternatorkrosstable.linkalternator WHERE category = '$category' AND product_status = '1' AND link != '$link' AND voltag LIKE '%".$voltajj."%' AND mitsubishi LIKE '%".$mitsubishi."%' AND cas LIKE '%".$cas."%' ORDER BY id DESC";
 $statement = $connect->prepare($query);
 $statement->execute();
 $result = $statement->fetchAll();
 $total_row = $statement->rowCount();
 $output = '';
 if($voltajj != NULL)
 {
  foreach($result as $row)
  {

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
     
   $output .= '

  <a href="articlepos.php?id='. $row['id'] .'"><li><img class="nodatablock datanotfoundimg1" src="'.$row['imgsrc'].'" alt="DATA NOT FOUND">'.$row['link'].'</li></a>

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

 <div class="tablesArt1ProductCrosses">
  <ul>   

  <?php if ( $row131['voltag'] != NULL) echo
  '<li>VOLTAG - '.$row131['voltag'].'</li>'
   ?> 

  <?php
   $alternatorv = $row131['voltag'];
   $query = "SELECT * FROM alternatorkrosstable WHERE linkalternator =  '$alternatorv'";
   $statement = $connect->prepare($query);
   $statement->execute();
   $result = $statement->fetchAll();
   foreach ($result as $row1311) {
 ?>   

   <?php if ( $row1311['cas'] != NULL) echo
  '<li>CAS - '.$row1311['cas'].'</li>'
   ?>    

   <?php if ( $row1311['ass1'] != NULL) echo
  '<li>AS - '.$row1311['ass1'].'</li>'
   ?> 

   <?php if ( $row1311['zaufer'] != NULL) echo
  '<li>ZAUFER - '.$row1311['zaufer'].'</li>'
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
   $alternatorv565 = $row131['voltag'];
   $query = "SELECT * FROM where_it_use_table WHERE linkalternator =  '$alternatorv565'";
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
    </div>

<div style="top: 51px;" onclick="document.getElementById('slideupd').style.display='block'" class="bbt">
  <p>UPDATE</p>
</div>

<div onclick="document.getElementById('slideupdupd').style.display='block'" class="bbt">
  <p>UPDATE PHOTO</p>
</div>

<form class="dellbtnadminnform" method="POST" enctype="multipart/form-data" action="redirect.php" >
      <p><button  onclick="return ConfirmDelete();" class="dellbtnadminn" name="uploaddELArt" value="<?php echo $row131['id']; ?>" type="submit">DELETE</button></p>
</form>

</div>

<div id="slideIneriorr" class="w3-modal w3-animate-opacity">
  <div class="w3modalcontentadmin1 w3-modal-content" style="padding-top:37px !important; width: 600px;">
    <div class="w3-container w3-white">
      <i style="position: absolute; right: 30px; margin: 0px; top: 10px;" onclick="document.getElementById('slideIneriorr').style.display='none'" class="w3buttonadmin fa fa-remove w3-button w3-transparent w3-xlarge">CLOSE</i>
        <form method="POST" enctype="multipart/form-data" action="redirect4.php?id=<?php echo $row131['id']; ?> " > 
        <label for="images" class="drop-container" id="dropcontainer">
         <span class="drop-title">Drop 1 file here</span>
         or
         <input type="file" id="images" accept="image/*" required name="image">
        </label>
        <button style="margin-bottom: 8px!important;" class="w3btnadmin w3-btn w3-section" name="upload2212" type="submit">ADAUGA IMAGINEA</button>
        </form>
    </div>
  </div>
</div>

<div id="slideupdupd" class="w3-modal w3-animate-opacity">
  <div class="w3modalcontentadmin1 w3-modal-content" style="padding-top:37px !important; width: 600px;">
    <div class="w3-container w3-white">
      <i style="position: absolute; right: 30px; margin: 0px; top: 10px;" onclick="document.getElementById('slideupdupd').style.display='none'" class="w3buttonadmin fa fa-remove w3-button w3-transparent w3-xlarge">CLOSE</i>
        <form method="POST" enctype="multipart/form-data" action="redirect1.php?id=<?php echo $row131['id']; ?>"> 
        <label for="images" class="drop-container" id="dropcontainer">
         <span class="drop-title">Drop 1 file here</span>
         or
         <input type="file" id="images" accept="image/*" required name="image">
        </label>
        <button style="margin-bottom: 8px!important;" class="w3btnadmin w3-btn w3-section" name="upload2132updupd" type="submit">REDACTEAZA</button>
        </form>
    </div>
  </div>
</div>

<div id="slideupd" class="w3-modal w3-animate-opacity">
  <div class="w3modalcontentadmin1 w3-modal-content" style="width: 600px;">
    <div class="w3-container w3-white">
      <i onclick="document.getElementById('slideupd').style.display='none'" class="w3buttonadmin fa fa-remove w3-xlarge w3-button w3-transparent w3-right w3-xlarge">CLOSE</i>
       <form method="POST" enctype="multipart/form-data" action="redirect1.php?id=<?php echo $row131['id']; ?>" >
        <div>

         <p><input style="border: 2px solid #0088CC !important;" class="w3inputtextadmin w3-input w3-border" required name="title" value="<?php echo $row131['link']; ?>" placeholder="Titlu"></p>

         <p><input style="border: 2px solid #0088CC !important;" class="w3inputtextadmin w3-input w3-border" required list="categoryadmin" value="<?php echo $row131['category']; ?>" name="categoryadmin" placeholder="CATEGORIA"></p>

         <datalist id="categoryadmin">
          <?php
          $query2267size = "SELECT DISTINCT(category) FROM rotorelinitial ORDER BY category ";
          $statement = $connect->prepare($query2267size);
          $statement->execute();
          $result = $statement->fetchAll();
          foreach ($result as $row2167size) {
          ?>  
          <option value="<?php echo $row2167size['category'];?>">
          <?php
            }
          ?>
          </datalist>

          <p><input style="border: 2px solid #0088CC !important;" class="w3inputtextadmin w3-input w3-border" required list="articoladmin" value="<?php echo $row131['voltag']; ?>" name="articoladmin" placeholder="ARTICOL"></p>

          <datalist id="articoladmin">
          <?php
            $query2267size = "SELECT DISTINCT(voltag) FROM rotorelinitial ORDER BY voltag ";
            $statement = $connect->prepare($query2267size);
            $statement->execute();
            $result = $statement->fetchAll();
            foreach ($result as $row2167size) {
                ?>  
          <option value="<?php echo $row2167size['voltag'];?>">
          <?php
              }
          ?>
          </datalist> 

          </div>

          <?php
            $query2267size = "SELECT * FROM rotorelinitial WHERE id = " . (int)$_GET['id'];
            $statement = $connect->prepare($query2267size);
            $statement->execute();
            $result = $statement->fetchAll();
            foreach ($result as $row2167size) {

                 $checkvalue = $row2167size['product_status'];

                 if ($checkvalue == TRUE){
                  $checkhide = 'checked';
                  }else{
                  $checkhide = '';
                  }

                  if ($checkvalue == FALSE){
                  $checkshow = 'checked';
                  }else{
                  $checkshow = '';
                  }
            
                ?>  

          <input type="radio" id="boolean0" name="boolean" value="0" <?php echo $checkshow; ?>>
          <label for="boolean0">ASCUNS</label><br>
          <input type="radio" id="boolean1" name="boolean" value="1" <?php echo $checkhide; ?>>
          <label for="boolean1">VIZIBIL</label>

          <?php
              }
          ?>

          <p><button  style="margin-top: 5px !important; margin-bottom: 0px !important; background-color: #0088cc !important;" class="w3btnadmin w3-btn w3-dark-grey w3-section" name="upload2132upd" type="submit">UPDATE</button></p>
       </form>
    </div>
  </div>
</div>
</body>
</html>

<script type="text/javascript" src="../js/vanilla.min.js"></script>

<script>

    function ConfirmDelete()
    {
      var x = confirm("TOCINO?");
      if (x)
          return true;
      else
        return false;
    }

</script> 

<script>

const dropContainer = document.getElementById("dropcontainer");
const fileInput = document.getElementById("images");

dropContainer.addEventListener("dragover", e => {
  // prevent default to allow drop
  e.preventDefault();
}, false);

dropContainer.addEventListener("dragenter", () => {
  dropContainer.classList.add("drag-active");
});

dropContainer.addEventListener("dragleave", () => {
  dropContainer.classList.remove("drag-active");
});

dropContainer.addEventListener("drop", e => {
  e.preventDefault();
  dropContainer.classList.remove("drag-active");
  fileInput.files = e.dataTransfer.files;
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
