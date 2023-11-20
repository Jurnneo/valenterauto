<?php
require "../../includes/config.php";
?>

<!DOCTYPE html>
<html>

<head>

<title>Fulie în Iași, Romania.</title>

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
  <a href="#"><p><img src="/img/imgSite/catalogButton1.png" class="footerrtyInside11erCatalogImg">FULIE</p></a>               
</div>

<div class="whyNotWork">
 <h2 class="catTest">FULIE<span style="display: none;">1.681 POZIȚII</span></h2>
 <button class="LoadFilter1OpenFilter LoadFilter1">FILTRU</button>
</div>

<div style="display: none;" class="whyNotWorkDropdown whyNotWork">

  <div class="dropdown1">
    <input class="boxProd text-box1" type="text" placeholder="ARATA" readonly>
    <div class="options">
      <div onclick="show1('24 POZIȚII')">24 POZIȚII</div>
      <div onclick="show1('48 POZIȚII')">48 POZIȚII</div>
    </div>
  </div>

  <div class="dropdown">
    <input class="boxProd text-box" type="text" placeholder="SORTAREA PRODUSELOR" readonly>
    <div class="options">
      <div onclick="show('PRET CRASCATOR')">PRET CRASCATOR</div>
      <div onclick="show('PRET DESCRESCATOR')">PRET DESCRESCATOR</div>
      <div onclick="show('ORDINE ALFABETICA')">ORDINE ALFABETICA</div>
      <div onclick="show('PRODUSE NOI')">PRODUSE NOI</div>
    </div>
  </div>
</div>

<div class="CatalogGrid">
 <div class="CatalogGridBackDiv111 CatalogGridBackDiv">

  <div class="CatalogGrid11DisplayBlock CatalogGrid11">
   <button style="display: none;" class="LoadFilter11">CAUTĂ</button>
   <button style="display: none;" class="LoadFilter11">ȘTERGE FILTRUL</button>
   <button style="width: 28px;" class="LoadFilter11CloseFill LoadFilter11"><img class="closeImgFill" src="../../img/imgSite/closeFill.png"></button>
  </div>

  <div class="CatalogGrid12121 CatalogGrid1">

  <?php
   $query = "SELECT ch1_1, ch2_1, ch3_1, ch4_1, ch5_1, ch6_1 FROM krosstablefilter_categories WHERE categoryinfilter1 = 'Fulie'";
   $statement = $connect->prepare($query);
   $statement->execute();
   $result = $statement->fetchAll();
   foreach ($result as $rowbch11) {
 ?>   

  <?php
   }
 ?>   


<div class="CatalogGrid1FiltrationOpenTensiune CatalogGrid1Filtration">
  <div class="openModalSearrchTensiune"></div>
  <div class="closeModalSearrchTensiune"></div>
   <!--<button style="width: 28px;" class="LoadFilter11ClosegridcontainerOpen LoadFilter11"><img class="closeImgFill" src="img/imgSite/closeFill.png"></button>-->
   <h4><?php echo $rowbch11['ch1_1']; ?></h4>
   <div class="gridcontainerOpenTensiune grid-container">


 <?php
   $query = "SELECT DISTINCT(ch1_2) FROM fulieinitial INNER JOIN fuliekrosstablefilter ON fulieinitial.voltag = fuliekrosstablefilter.linkalternator WHERE categoryinfilter = 'Fulie' ORDER BY ch1_2 ASC";
   $statement = $connect->prepare($query);
   $statement->execute();
   $result = $statement->fetchAll();
   foreach ($result as $rowbss) {
 ?>   

<?php if ( $rowbss['ch1_2'] != NULL) echo
    '<div class="box">
      <div class="item">
       <div class="checkbox-circle">
        <input type="checkbox" class="common_selector ch1_2" value="'.$rowbss['ch1_2'].'" id="checkbox-circle'.$rowbss['ch1_2'].'ch1_2" name="check">
        <label for="checkbox-circle'.$rowbss['ch1_2'].'ch1_2">'.$rowbss['ch1_2'].'</label>
       </div>
      </div>
     </div>'
?>  

  <?php
   }
 ?>           

   </div>
  </div>    

  <div class="CatalogGrid1FiltrationOpenCurent CatalogGrid1Filtration">
  <div class="openModalSearrchCurent"></div>
  <div class="closeModalSearrchCurent"></div>
   <!--<button style="width: 28px;" class="LoadFilter11ClosegridcontainerOpen LoadFilter11"><img class="closeImgFill" src="img/imgSite/closeFill.png"></button>-->
   <h4><?php echo $rowbch11['ch2_1']; ?></h4>
   <div class="gridcontainerOpenCurent grid-container">


 <?php
   $query = "SELECT DISTINCT(ch2_2) FROM fulieinitial INNER JOIN fuliekrosstablefilter ON fulieinitial.voltag = fuliekrosstablefilter.linkalternator WHERE categoryinfilter = 'Fulie' ORDER BY ch2_2 ASC"; 
   $query .= "";
   $statement = $connect->prepare($query);
   $statement->execute();
   $result = $statement->fetchAll();
   foreach ($result as $rowbss) {
 ?>   

<?php if ( $rowbss['ch2_2'] != NULL) echo
    '<div class="box">
      <div class="item">
       <div class="checkbox-circle">
        <input type="checkbox" class="common_selector ch2_2" value="'.$rowbss['ch2_2'].'" id="checkbox-circle'.$rowbss['ch2_2'].'ch2_2" name="check">
        <label for="checkbox-circle'.$rowbss['ch2_2'].'ch2_2">'.$rowbss['ch2_2'].'</label>
       </div>
      </div>
     </div>'
?>  

  <?php
   }
 ?>           

   </div>
  </div>  

  <div class="CatalogGrid1FiltrationOpenDimensiune_c CatalogGrid1Filtration">
  <div class="openModalSearrchDimensiune_c"></div>
  <div class="closeModalSearrchDimensiune_c"></div>
   <!--<button style="width: 28px;" class="LoadFilter11ClosegridcontainerOpen LoadFilter11"><img class="closeImgFill" src="img/imgSite/closeFill.png"></button>-->
   <h4><?php echo $rowbch11['ch3_1']; ?></h4>
   <div class="gridcontainerOpenDimensiune_c grid-container">


 <?php
   $query = "SELECT DISTINCT(ch3_2) FROM fulieinitial INNER JOIN fuliekrosstablefilter ON fulieinitial.voltag = fuliekrosstablefilter.linkalternator WHERE categoryinfilter = 'Fulie' ORDER BY ch3_2 ASC";
   $statement = $connect->prepare($query);
   $statement->execute();
   $result = $statement->fetchAll();
   foreach ($result as $rowbss) {
 ?>   

<?php if ( $rowbss['ch3_2'] != NULL) echo
    '<div class="box">
      <div class="item">
       <div class="checkbox-circle">
        <input type="checkbox" class="common_selector ch3_2" value="'.$rowbss['ch3_2'].'" id="checkbox-circle'.$rowbss['ch3_2'].'a" name="check">
        <label for="checkbox-circle'.$rowbss['ch3_2'].'a">'.$rowbss['ch3_2'].'</label>
       </div>
      </div>
     </div>'
?>  

  <?php
   }
 ?>           

   </div>
  </div>  

  <div class="CatalogGrid1FiltrationOpenDimensiune_b CatalogGrid1Filtration">
  <div class="openModalSearrchDimensiune_b"></div>
  <div class="closeModalSearrchDimensiune_b"></div>
   <!--<button style="width: 28px;" class="LoadFilter11ClosegridcontainerOpen LoadFilter11"><img class="closeImgFill" src="img/imgSite/closeFill.png"></button>-->
   <h4><?php echo $rowbch11['ch4_1']; ?></h4>
   <div class="gridcontainerOpenDimensiune_b grid-container">


 <?php
   $query = "SELECT DISTINCT(ch4_2) FROM fulieinitial INNER JOIN fuliekrosstablefilter ON fulieinitial.voltag = fuliekrosstablefilter.linkalternator WHERE categoryinfilter = 'Fulie' ORDER BY ch4_2 ASC";
   $statement = $connect->prepare($query);
   $statement->execute();
   $result = $statement->fetchAll();
   foreach ($result as $rowbss) {
 ?>   

<?php if ( $rowbss['ch4_2'] != NULL) echo
    '<div class="box">
      <div class="item">
       <div class="checkbox-circle">
        <input type="checkbox" class="common_selector ch4_2" value="'.$rowbss['ch4_2'].'" id="checkbox-circle'.$rowbss['ch4_2'].'b" name="check">
        <label for="checkbox-circle'.$rowbss['ch4_2'].'b">'.$rowbss['ch4_2'].'</label>
       </div>
      </div>
     </div>'
?>  

  <?php
   }
 ?>           

   </div>
  </div>  

  <div class="CatalogGrid1FiltrationOpenDimensiune_a CatalogGrid1Filtration">
  <div class="openModalSearrchDimensiune_a"></div>
  <div class="closeModalSearrchDimensiune_a"></div>
   <!--<button style="width: 28px;" class="LoadFilter11ClosegridcontainerOpen LoadFilter11"><img class="closeImgFill" src="img/imgSite/closeFill.png"></button>-->
   <h4><?php echo $rowbch11['ch5_1']; ?></h4>
   <div class="gridcontainerOpenDimensiune_a grid-container">


 <?php
   $query = "SELECT DISTINCT(ch5_2) FROM fulieinitial INNER JOIN fuliekrosstablefilter ON fulieinitial.voltag = fuliekrosstablefilter.linkalternator WHERE categoryinfilter = 'Fulie' ORDER BY ch5_2 ASC";
   $statement = $connect->prepare($query);
   $statement->execute();
   $result = $statement->fetchAll();
   foreach ($result as $rowbss) {
 ?>   

<?php if ( $rowbss['ch5_2'] != NULL) echo
    '<div class="box">
      <div class="item">
       <div class="checkbox-circle">
        <input type="checkbox" class="common_selector ch5_2" value="'.$rowbss['ch5_2'].'" id="checkbox-circle'.$rowbss['ch5_2'].'c" name="check">
        <label for="checkbox-circle'.$rowbss['ch5_2'].'c">'.$rowbss['ch5_2'].'</label>
       </div>
      </div>
     </div>'
?>  

  <?php
   }
 ?>           

   </div>
  </div>  

  <div class="CatalogGrid1FiltrationOpenNumarul_dintilor CatalogGrid1Filtration">
  <div class="openModalSearrchNumarul_dintilor"></div>
  <div class="closeModalSearrchNumarul_dintilor"></div>
   <!--<button style="width: 28px;" class="LoadFilter11ClosegridcontainerOpen LoadFilter11"><img class="closeImgFill" src="img/imgSite/closeFill.png"></button>-->
   <h4><?php echo $rowbch11['ch6_1']; ?></h4>
   <div class="gridcontainerOpenNumarul_dintilor grid-container">


 <?php
   $query = "SELECT DISTINCT(ch6_2) FROM fulieinitial INNER JOIN fuliekrosstablefilter ON fulieinitial.voltag = fuliekrosstablefilter.linkalternator WHERE categoryinfilter = 'Fulie' ORDER BY ch6_2 ASC";
   $statement = $connect->prepare($query);
   $statement->execute();
   $result = $statement->fetchAll();
   foreach ($result as $rowbss) {
 ?>   

<?php if ( $rowbss['ch6_2'] != NULL) echo
    '<div class="box">
      <div class="item">
       <div class="checkbox-circle">
        <input type="checkbox" class="common_selector ch6_2" value="'.$rowbss['ch6_2'].'" id="checkbox-circle'.$rowbss['ch6_2'].'ch6_2" name="check">
        <label for="checkbox-circle'.$rowbss['ch6_2'].'ch6_2">'.$rowbss['ch6_2'].'</label>
       </div>
      </div>
     </div>'
?>  

  <?php
   }
 ?>           

   </div>
  </div>
   
 </div>

 <div style="display: none;" class="CatalogGrid11">
  <button class="LoadFilter11">CAUTĂ</button>
  <button class="LoadFilter11">ȘTERGE FILTRUL</button>
  <button style="width: 28px;" class="LoadFilter11CloseFill LoadFilter11"><img class="closeImgFill" src="img/imgSite/closeFill.png"></button>
 </div>

</div>

<div class="CatalogGrid2">
 <div class="contentCatalog">
  <div id="imgLoadSearchData1">
    <img id="imgLoadSearchDataimg1" src="../../img/imgSite/loaderValenterAuto.gif">
  </div>
  <div id="myULssh" class="row filter_data" >
  </div>
  <center><button class="js-load">MAI MULT</button></center>
 </div>
 </div>        
</div>

<footer style="margin-top: 10px;" class="footSmall">

 <div class="footSmall1">
  <img src="../../img/imgSite/logo.png">
  <p>Compania <span>Valenterauto</span> activează pe piața <span>Romaniei</span> din anul 2010.</p>
  <p>Principalele activități sunt:</p>
  <p>– Vanzare de demaroare și generatoare auto</p>
  <p>– Vanzare de componente pentru demaroare și alternatoare auto</p>       
 </div>

 <div class="footSmall2">

  <a href="mailto:mihail.albu@valenterauto.ro">
   <div class="footerrtyyy0qqerOther footerrtyyy0qqer">
    <div class="inflocation000qqer1">
     <img src="../../img/imgSite/contact6.png">
    </div>
    <div class="inflocationqq334">
     <p class="inflocationpqq334">MIHAIL ALBU</p>
     <div class="infmobilewwqq334">
      <p style="font-size: 14px !important; margin: 0px; margin-top: 0px;" class="infmobilewwpqq334">mihail.albu@valenterauto.ro</p>
     </div>
    </div>
   </div>
  </a>    

  <a href="mailto:oleg.turcan@valenterauto.ro">
   <div class="footerrtyyy0qqerOther footerrtyyy0qqer">
    <div class="inflocation000qqer1">
     <img src="../../img/imgSite/contact6.png">
    </div>
    <div class="inflocationqq334">
     <p class="inflocationpqq334">OLEG TURCAN</p>
     <div class="infmobilewwqq334">
      <p style="font-size: 14px !important; margin: 0px; margin-top: 0px;" class="infmobilewwpqq334">oleg.turcan@valenterauto.ro</p>
     </div>
    </div>
   </div>
  </a>

  <a href="mailto:oxana.popova@autovalenter.md">
   <div class="footerrtyyy0qqerOther footerrtyyy0qqer">
    <div class="inflocation000qqer1">
     <img src="../../img/imgSite/contact6.png">
    </div>
    <div class="inflocationqq334">
     <p class="inflocationpqq334">OXANA POPOVA</p>
     <div class="infmobilewwqq334">
      <p style="font-size: 14px !important; margin: 0px; margin-top: 0px;" class="infmobilewwpqq334">oxana.popova@autovalenter.md</p>
     </div>
    </div>
   </div>
  </a>

 </div>

  <div class="footSmall3">
   <div class="footSmall31">
    <p>Valea Lupului Dn28 nr116 707410 <span>Iasi</span></p>
   </div>
   <div class="footSmall32">
    <ul>
     <li>tel: +40 771 614 934</li>
     <li>tel: +40 758 505 355</li>
     <li>tel: +40 744 797 914</li>
    </ul>
   </div>
  </div>
 
 </footer>

 <center><p style="color: #808080;">© All Rights Reserved. <span style="color: #0088CC; font-weight: 600;">«Valenter Auto SRL»</span></p></center>

<canvas class="wow fadeIn" data-wow-duration="2s" id="canvas-basic"></canvas>


<script>

  var loader = document.getElementById("prel");
  window.addEventListener("load", function(){
    loader.style.display = "none";
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

    $(".openModalSearrchBss_lin_idech11").click(function(){
    $(".openModalSearrchBss_lin_idech11").css("right", "-25px");
    $(".closeModalSearrchBss_lin_idech11").css("right", "8px");
    $(".gridcontainerOpenBss_lin_idech11").css("display", "flex");
 });

    $(".closeModalSearrchBss_lin_idech11").click(function(){
    $(".openModalSearrchBss_lin_idech11").css("right", "8px");  
    $(".closeModalSearrchBss_lin_idech11").css("right", "-25px");
    $(".gridcontainerOpenBss_lin_idech11").css("display", "none");
 });

    $(".openModalSearrchBss_lin_idech12").click(function(){
    $(".openModalSearrchBss_lin_idech12").css("right", "-25px");
    $(".closeModalSearrchBss_lin_idech12").css("right", "8px");
    $(".gridcontainerOpenBss_lin_idech12").css("display", "flex");
 });

    $(".closeModalSearrchBss_lin_idech12").click(function(){
    $(".openModalSearrchBss_lin_idech12").css("right", "8px");  
    $(".closeModalSearrchBss_lin_idech12").css("right", "-25px");
    $(".gridcontainerOpenBss_lin_idech12").css("display", "none");
 });

    $(".openModalSearrchBss_lin_idech13").click(function(){
    $(".openModalSearrchBss_lin_idech13").css("right", "-25px");
    $(".closeModalSearrchBss_lin_idech13").css("right", "8px");
    $(".gridcontainerOpenBss_lin_idech13").css("display", "flex");
 });

    $(".closeModalSearrchBss_lin_idech13").click(function(){
    $(".openModalSearrchBss_lin_idech13").css("right", "8px");  
    $(".closeModalSearrchBss_lin_idech13").css("right", "-25px");
    $(".gridcontainerOpenBss_lin_idech13").css("display", "none");
 });

    $(".openModalSearrchBss_lin_idech14").click(function(){
    $(".openModalSearrchBss_lin_idech14").css("right", "-25px");
    $(".closeModalSearrchBss_lin_idech14").css("right", "8px");
    $(".gridcontainerOpenBss_lin_idech14").css("display", "flex");
 });

    $(".closeModalSearrchBss_lin_idech14").click(function(){
    $(".openModalSearrchBss_lin_idech14").css("right", "8px");  
    $(".closeModalSearrchBss_lin_idech14").css("right", "-25px");
    $(".gridcontainerOpenBss_lin_idech14").css("display", "none");
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
  var offset = 0;
  var limit = 36;
  
  filter_data();

  $(".js-load").click(function(){
    offset = offset + 36;
    filter_data();
  });

  function filter_data()
  {
      var action = 'fetch_data';
      var ch14_2 = get_filter('ch14_2');
      var ch13_2 = get_filter('ch13_2');
      var ch12_2 = get_filter('ch12_2');
      var ch11_2 = get_filter('ch11_2');
      var ch10_2 = get_filter('ch10_2');
      var ch9_2 = get_filter('ch9_2');
      var ch8_2 = get_filter('ch8_2');
      var ch7_2 = get_filter('ch7_2');
      var ch6_2 = get_filter('ch6_2');
      var ch5_2 = get_filter('ch5_2');
      var ch4_2 = get_filter('ch4_2');
      var ch3_2 = get_filter('ch3_2');
      var ch2_2 = get_filter('ch2_2');
      var ch1_2 = get_filter('ch1_2');
      $.ajax({
          url:"../../includes/products/fetch_fulie1.php",
          method:"POST",
          beforeSend: function(){
           // Show image container
           $("#imgLoadSearchData1").show();
          },
          data:{
            action:action, 
            offset: offset,
            limit: limit,
            ch14_2:ch14_2,
            ch13_2:ch13_2,
            ch12_2:ch12_2,
            ch11_2:ch11_2,
            ch10_2:ch10_2,
            ch9_2:ch9_2,
            ch8_2:ch8_2,
            ch7_2:ch7_2,
            ch6_2:ch6_2,
            ch3_2:ch3_2,
            ch4_2:ch4_2,
            ch5_2:ch5_2,
            ch2_2:ch2_2,
            ch1_2:ch1_2
          },
          success:function(data){
            if (data !== '') {
              if (offset > 0) {
                $('.filter_data').append(data);
              } else {
                $('.filter_data').html(data);
              }
            } else {
              //TODO: Change button style
            }          
          },
          complete:function(data){
           // Hide image container
           $("#imgLoadSearchData1").hide();
          }
      });
  }

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