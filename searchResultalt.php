<?php
require "includes/config.php";
?>

<!DOCTYPE html>
<html>

<head>

    <title>REZULTATUL CAUTARII</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <meta name="description" content="Compania Autovalenter activează pe piața Romaniei din anul 2010.
    Principalele activități sunt:
    – Vanzare de demaroare și generatoare auto
    – Vanzare de componente pentru demaroare și alternatoare auto">
    <meta name="keywords" content="Alternatoare, Electromotoare, Senzoare">

    <link rel="shortcut icon" href="img/iconElit.png" type="image/png">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/stylemobb.css">
    <link rel="stylesheet" type="text/css" href="css/optimization.css">
    <link rel="stylesheet" type="text/css" href="css/lightbox.css">
    <link rel="icon" sizes='16x16' type="image/png" href="img/imgSite/ValenterAutoLogo.png"/>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;470;630;723&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/anim.css">
    <link rel="stylesheet" href="css/slick-theme.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>    
    <script type="text/javascript" src="js/onclickqq1.js"></script>
    <script src="js/lightbox-plus-jquery.min.js"></script>
    <script src="js/slidersSidebarAndShrink.js"></script>
    <script src="js/granim.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/slick.js"></script>
    <script>new WOW().init();</script>

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

<div class="divcatalogunderheader">

  <div class="aplicaridiod aplicaridiodcatalog tablesArt1ProductCrossesonthesite">
  <ul>
  <a href="/categories/alternator/"><li class="licatt"><div class="backgrimgcat"></div><img class="nodatablockcat nodatablock datanotfoundimg1" src="/img/imgSite/alternatorimg.jpg" alt="0">ALTERNATOR</li></a>
  <a href="/categories/rotor_alternator/"><li><img class="nodatablock datanotfoundimg1" src="/img/imgSite/rotorimg.jpeg" alt="0">ROTOR ALTERNATOR</li></a>
  <a href="/categories/stator_alternator/"><li><img class="nodatablock datanotfoundimg1" src="/img/imgSite/statorimg.jpeg" alt="0">STATOR ALTERNATOR</li></a>
  <a href="/categories/redresor_alternator/"><li><img class="nodatablock datanotfoundimg1" src="/img/imgSite/redresorimg.jpeg" alt="0">REDRESOR ALTERNATOR</li></a>
  <a href="/categories/inel_collector/"><li><img class="nodatablock datanotfoundimg1" src="/img/imgSite/inelimg.jpeg" alt="0">INEL COLLECTOR</li></a>
  <a href="/categories/regulator_alternator/"><li><img class="nodatablock datanotfoundimg1" src="/img/imgSite/regulatorimg.jpeg" alt="0">REGULATOR ALTERNATOR</li></a>
  <a href="/categories/fulie_cu_ambreiaj/"><li><img class="nodatablock datanotfoundimg1" src="/img/imgSite/fulieimg.jpeg" alt="0">FULIE CU AMBREIAJ</li></a>
  <a href="/categories/fulie/"><li><img class="nodatablock datanotfoundimg1" src="/img/imgSite/fulie1img.jpeg" alt="0">FULIE</li></a>
  </ul>   
 </div>


  <div style="margin-top: -4px;" class="aplicaridiod aplicaridiodcatalog tablesArt1ProductCrossesonthesite">
  <ul>
  <a href="/categories/electromotor/"><li class="licatt"><div class="backgrimgcat"></div><img class="nodatablockcat nodatablock datanotfoundimg1" src="/img/imgSite/electroimg.jpg" alt="0">ELECTROMOTOR</li></a>
  <a href="/categories/rotor_electromotor/"><li><img class="nodatablock datanotfoundimg1" src="/img/imgSite/rotorelectroimg.jpeg" alt="0">ROTOR ELECTROMOTOR</li></a>
  <a href="/categories/stator_electromotor/"><li><img class="nodatablock datanotfoundimg1" src="/img/imgSite/statorelectroimg1.jpeg" alt="0">STATOR ELECTROMOTOR</li></a>
  <a href="/categories/bendix/"><li><img class="nodatablock datanotfoundimg1" src="/img/imgSite/bendixelectroimg.jpeg" alt="0">BENDIX</li></a>
  </ul>   
 </div>

  
</div>

<?php 
    $search = trim($_POST['search']); 
?>

<div class="footerrtyInside11erCatalog">
  <a href="index.php"><p><img src="/img/imgSite/catalogButton.png" class="footerrtyInside11erCatalogImg">PAGINA PRINCIPALA</p></a>
  <p class="catalogButtons7">/</p>
  <a href="#"><p><img src="/img/imgSite/catalogButton1.png" class="footerrtyInside11erCatalogImg"><? echo $search ?></p></a>                
</div>



<div class="wow fadeIn searchGallDivv galleryDiv mobileGallDivv">

    <?php

    $query = "SELECT alternatorinitial.id, alternatorinitial.imgsrc, alternatorinitial.link, alternatorinitial.autovalenter, alternatorinitial.psh, alternatorinitial.wood, alternatorinitial.waiglobal, alternatorinitial.category, alternatorinitial.voltag, alternatorkrosstablefilter.ch1_2, alternatorkrosstablefilter.ch2_2, alternatorkrosstablefilter.ch3_2, alternatorkrosstablefilter.ch4_2, alternatorkrosstablefilter.ch5_2, alternatorkrosstablefilter.ch6_2, alternatorkrosstablefilter.ch8_2, alternatorkrosstablefilter.ch9_2, alternatorkrosstablefilter.ch10_2, alternatorkrosstablefilter.ch7_2, alternatorkrosstablefilter.ch11_2, alternatorkrosstablefilter.ch12_2, alternatorkrosstablefilter.ch13_2, alternatorkrosstablefilter.ch14_2, alternatorkrosstablefilter.ch1, alternatorkrosstablefilter.ch2, alternatorkrosstablefilter.ch3, alternatorkrosstablefilter.ch4, alternatorkrosstablefilter.ch5, alternatorkrosstablefilter.ch6, alternatorkrosstablefilter.ch8, alternatorkrosstablefilter.ch9, alternatorkrosstablefilter.ch10, alternatorkrosstablefilter.ch7, alternatorkrosstable.linkalternator, alternatorkrosstable.mitsubishi, alternatorkrosstable.bosch, alternatorkrosstable.delco, alternatorkrosstable.renault, alternatorkrosstable.mercedesbenz, alternatorkrosstable.ford, alternatorkrosstable.valeo, alternatorkrosstable.ass1, alternatorkrosstable.cas, alternatorkrosstable.hyundai, alternatorkrosstable.cargo, alternatorkrosstable.kia, alternatorkrosstable.krauf, alternatorkrosstable.mando, alternatorkrosstable.messmer, alternatorkrosstable.motorherz, alternatorkrosstable.zaufer, alternatorkrosstable.wai, alternatorkrosstable.hc_parts, alternatorkrosstable.hella, alternatorkrosstable.lucas, alternatorkrosstable.magnetimarelli, alternatorkrosstable.wps, alternatorkrosstable.bcc, alternatorkrosstable.prestolite, alternatorkrosstable.volvo, alternatorkrosstable.yam, alternatorkrosstable.hbb, alternatorkrosstable.mazda, alternatorkrosstable.daewoo, alternatorkrosstable.gmm, alternatorkrosstable.maz, alternatorkrosstable.pmx, alternatorkrosstable.unipoint, alternatorkrosstable.citroen, alternatorkrosstable.nissan, alternatorkrosstable.reparts, alternatorkrosstable.bll, alternatorkrosstable.acdelco, alternatorkrosstable.generalmotors, alternatorkrosstable.brillance, alternatorkrosstable.komatsu, alternatorkrosstable.nikko, alternatorkrosstable.wll, alternatorkrosstable.vag, alternatorkrosstable.hino, alternatorkrosstable.sawafuji, alternatorkrosstable.poong_sung, alternatorkrosstable.motorola, alternatorkrosstable.cat, alternatorkrosstable.hyster, alternatorkrosstable.skk, alternatorkrosstable.pee, alternatorkrosstable.magneton, alternatorkrosstable.case, alternatorkrosstable.deutz, alternatorkrosstable.mahle, alternatorkrosstable.khd, alternatorkrosstable.iskra, alternatorkrosstable.hitachi, alternatorkrosstable.john_deere, alternatorkrosstable.vww, alternatorkrosstable.denso, alternatorkrosstable.general_motors, alternatorkrosstable.opel FROM `alternatorinitial` INNER JOIN `alternatorkrosstable` ON alternatorinitial.voltag = alternatorkrosstable.linkalternator INNER JOIN `alternatorkrosstablefilter` ON alternatorkrosstablefilter.linkalternator = alternatorkrosstable.linkalternator WHERE product_status = '1' AND (alternatorkrosstable.linkalternator LIKE '%".$search."%'    
      OR alternatorinitial.autovalenter LIKE '%".$search."%'
      OR alternatorinitial.link LIKE '%".$search."%'
      OR alternatorinitial.category LIKE '%".$search."%'
      OR alternatorinitial.psh LIKE '%".$search."%'
      OR alternatorinitial.wood LIKE '%".$search."%'
      OR alternatorinitial.waiglobal LIKE '%".$search."%'
      OR alternatorkrosstable.bosch LIKE '%".$search."%'
      OR alternatorkrosstable.mitsubishi LIKE '%".$search."%'
      OR alternatorkrosstable.delco LIKE '%".$search."%'
      OR alternatorkrosstable.renault LIKE '%".$search."%'
      OR alternatorkrosstable.mercedesbenz LIKE '%".$search."%'
      OR alternatorkrosstable.ford LIKE '%".$search."%'
      OR alternatorkrosstable.valeo LIKE '%".$search."%'
      OR alternatorkrosstable.ass1 LIKE '%".$search."%'
      OR alternatorkrosstable.cas LIKE '%".$search."%'
      OR alternatorkrosstable.hyundai LIKE '%".$search."%'
      OR alternatorkrosstable.kia LIKE '%".$search."%'
      OR alternatorkrosstable.krauf LIKE '%".$search."%'
      OR alternatorkrosstable.mando LIKE '%".$search."%'
      OR alternatorkrosstable.messmer LIKE '%".$search."%'
      OR alternatorkrosstable.motorherz LIKE '%".$search."%'
      OR alternatorkrosstable.zaufer LIKE '%".$search."%'
      OR alternatorkrosstable.wai LIKE '%".$search."%'
      OR alternatorkrosstable.hc_parts LIKE '%".$search."%'
      OR alternatorkrosstable.hella LIKE '%".$search."%'
      OR alternatorkrosstable.lucas LIKE '%".$search."%'
      OR alternatorkrosstable.magnetimarelli LIKE '%".$search."%'
      OR alternatorkrosstable.wps LIKE '%".$search."%'
      OR alternatorkrosstable.bcc LIKE '%".$search."%'
      OR alternatorkrosstable.prestolite LIKE '%".$search."%'
      OR alternatorkrosstable.volvo LIKE '%".$search."%'
      OR alternatorkrosstable.yam LIKE '%".$search."%'
      OR alternatorkrosstable.hbb LIKE '%".$search."%'
      OR alternatorkrosstable.mazda LIKE '%".$search."%'
      OR alternatorkrosstable.daewoo LIKE '%".$search."%'
      OR alternatorkrosstable.gmm LIKE '%".$search."%'
      OR alternatorkrosstable.maz LIKE '%".$search."%'
      OR alternatorkrosstable.pmx LIKE '%".$search."%'
      OR alternatorkrosstable.unipoint LIKE '%".$search."%'
      OR alternatorkrosstable.citroen LIKE '%".$search."%'
      OR alternatorkrosstable.reparts LIKE '%".$search."%'
      OR alternatorkrosstable.bll LIKE '%".$search."%'
      OR alternatorkrosstable.acdelco LIKE '%".$search."%'
      OR alternatorkrosstable.generalmotors LIKE '%".$search."%'
      OR alternatorkrosstable.brillance LIKE '%".$search."%'
      OR alternatorkrosstable.komatsu LIKE '%".$search."%'
      OR alternatorkrosstable.nikko LIKE '%".$search."%'
      OR alternatorkrosstable.wll LIKE '%".$search."%'
      OR alternatorkrosstable.vag LIKE '%".$search."%'
      OR alternatorkrosstable.hino LIKE '%".$search."%'
      OR alternatorkrosstable.sawafuji LIKE '%".$search."%'
      OR alternatorkrosstable.poong_sung LIKE '%".$search."%'
      OR alternatorkrosstable.motorola LIKE '%".$search."%'
      OR alternatorkrosstable.cat LIKE '%".$search."%'
      OR alternatorkrosstable.hyster LIKE '%".$search."%'
      OR alternatorkrosstable.skk LIKE '%".$search."%'
      OR alternatorkrosstable.pee LIKE '%".$search."%'
      OR alternatorkrosstable.magneton LIKE '%".$search."%'
      OR alternatorkrosstable.case LIKE '%".$search."%'
      OR alternatorkrosstable.deutz LIKE '%".$search."%'
      OR alternatorkrosstable.mahle LIKE '%".$search."%'
      OR alternatorkrosstable.khd LIKE '%".$search."%'
      OR alternatorkrosstable.iskra LIKE '%".$search."%'
      OR alternatorkrosstable.hitachi LIKE '%".$search."%'
      OR alternatorkrosstable.john_deere LIKE '%".$search."%'
      OR alternatorkrosstable.vww LIKE '%".$search."%'
      OR alternatorkrosstable.denso LIKE '%".$search."%'
      OR alternatorkrosstable.general_motors LIKE '%".$search."%'
      OR alternatorkrosstable.opel LIKE '%".$search."%'
      OR alternatorkrosstable.nissan LIKE '%".$search."%'
      OR alternatorkrosstable.cargo LIKE '%".$search."%')
      ORDER BY id DESC";

 $statement = $connect->prepare($query);
 $statement->execute();
 $result = $statement->fetchAll();
 $total_row = $statement->rowCount();
 $output = '';
 if($total_row > 0)
 {
  foreach($result as $row)
  {

     if ($row['ch14_2'] != NULL){
    $ch14_2 = '<p class="productInf1">'.$row['ch14'].' : '.$row['ch14_2'].'</p>';
     }else{
      $ch14_2 = '';
     }

      if ($row['ch13_2'] != NULL){
    $ch13_2 = '<p class="productInf1">'.$row['ch13'].' : '.$row['ch13_2'].'</p>';
     }else{
      $ch13_2 = '';
     }

      if ($row['ch12_2'] != NULL){
    $ch12_2 = '<p class="productInf1">'.$row['ch12'].' : '.$row['ch12_2'].'</p>';
     }else{
      $ch12_2 = '';
     }

      if ($row['ch11_2'] != NULL){
    $ch11_2 = '<p class="productInf1">'.$row['ch11'].' : '.$row['ch11_2'].'</p>';
     }else{
      $ch11_2 = '';
     }

      if ($row['ch10_2'] != NULL){
    $ch10_2 = '<p class="productInf1">'.$row['ch10'].' : '.$row['ch10_2'].'</p>';
     }else{
      $ch10_2 = '';
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

     $search0 = $search;
     $maxchar = 20; // макс длинна
     if ( mb_strlen( $search0 ) > $maxchar ){
     $search0 = mb_substr( $search0, 0, $maxchar ) .'...';
     }

     $search1 = $search;
     $maxchar1 = 16; // макс длинна
     if ( mb_strlen( $search1 ) > $maxchar1 ){
     $search1 = mb_substr( $search1, 0, $maxchar1 ) .'..';
     }

     $search2 = $search;
     $maxchar2 = 10; // макс длинна
     if ( mb_strlen( $search2 ) > $maxchar2 ){
     $search2 = mb_substr( $search2, 0, $maxchar2 ) .'...';
     }

     $categorylink = mb_strtolower($row["category"]);

     $categoryreplaced = str_replace(' ','_',$categorylink);
     
   $output .= '


    <div class="fruit galleryDivvSearch galleryDivv">
     <a href="categories/'.$categoryreplaced.'/article.php?id='. $row['id'] .'" target="_blank">
        <div class="galleryDivvImg">
            <img style="width: 100%" class="galleryDivvImgBckgroundImg" src="../../img/imgSite/backgroundImgPng.png">
             <div class="IconsNafoto"></div>
             <img src="/img/product/'.$row["voltag"].'-1.jpg" width="100%">
             </div>
        <div class="galleryDivvTextSearchh3 galleryDivvTextSearch galleryDivvText">
            <div style="margin-top: initial !important;" class="divsearchsmall"></div><h3 class="bigzag">'.$search0.'</h3>
            <p style="margin-top: 29px;">'.$row["category"].'</p>
        </div>
        <div class="productInf">
           '.$ch1_2.'
           '.$ch2_2.'
           '.$ch3_2.'
           '.$ch4_2.'
           '.$ch5_2.'
           '.$ch6_2.'
           '.$ch7_2.'
           '.$ch8_2.'
           '.$ch9_2.'
           '.$ch10_2.'
           '.$ch11_2.'
           '.$ch12_2.'
           '.$ch13_2.'
           '.$ch14_2.'
        </div>
     </a> 
    </div>
    

   ';
  }
 }
 else
 {
  if ($_POST["offset"] == 0) {
    $output = '<img class="nodatablocknoneblock nodatablock datanotfoundimg" src="img/imgSite/notfound2.jpg" alt="DATA NOT FOUND"><img class="nodatablocknoneblockres nodatanone datanotfoundimg" src="img/imgSite/notfound21.jpg" alt="DATA NOT FOUND">';
  } else {
    $output = '';
  }
 }
 echo $output;

     
    ?> 

</div>

<?php require "footer.php" ?>

</body>

</html>

<script type="text/javascript" src="js/vanilla.min.js"></script>

<script type="text/javascript">

var loader = document.getElementById("prel");
  window.addEventListener("load", function(){
    loader.style.display = "none";
  });

    $("#btnsubmit").click(function(){
    $("#btnsubmit").css("background-image", "url(/img/imgSite/loaderValenterAuto.gif)");
    $("#btnsubmit").css("background-color", "white");
    $("#btnsubmit").css("border", "2px solid #0088CC");
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

    var obj = {};
    $('.fruit').each(function(){
      var text = $.trim($(this).text());
      if(obj[text]){
          $(this).remove();
      } else {
          obj[text] = true;
      }
    });

        var numbers = document.getElementById('boxNumProd');
        for(i=1;i<1000;i++){
            var span = document.createElement('span');
            span.textContent = i;
            numbers.appendChild(span);
        }
        var num = numbers.getElementsByTagName('span');
        var index11 = 0;
        function nextNum(){
            num[index11].style.display = 'none';
            index11 = (index11 + 1) % num.length;
            num[index11].style.display = 'initial';
        }

        function prevNum(){
            num[index11].style.display = 'none';
            index11 = (index11 - 1 + num.length) % num.length;
            num[index11].style.display = 'initial';
        }

        function myFunction(smallImg){
            var fullImg = document.getElementById("imageBoxBig");
            fullImg.src = smallImg.src;
        }



$(document).ready(function(){
  var offset1 = 0;
  var limit1 = 12;

  load_data();

  $(".js-load1").click(function(){
  offset1 = offset1 + 12;
  load_data();
  });

  function load_data(query12)
  { 
    $.ajax({
      url:"searchResult.php",
      method:"post",
      beforeSend: function(){
       // Show image container
       $("#imgLoadSearchData").show();
      },
      data:{
        query12:query12,
        offset1: offset1,
        limit1: limit1
      },
      success:function(data){
      if (data !== '') {
        if (offset1 > 0) {
          $('.galleryDiv').append(data);
        } else {
          $('.galleryDiv').html(data);
        }
      } else {
        //TODO: Change button style
      }
      },
      complete:function(data){
      // Hide image container
      $("#imgLoadSearchData").hide();
     }
    });
  }
  
  $('#searchResulttext').keyup(function(){
    var search = $(this).val();
    if(search != '')
    {
      load_data(search);
    }
    else
    {
      load_data();      
    }
  });
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