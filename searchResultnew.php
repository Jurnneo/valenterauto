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

<div class="sidebaropt">
  <div class="closeFilterropo sidebarJScss11closs sidebarJScss11closs4554"> </div>  
  <div class="link">
    <a href="index.php"><div class="sidebartext">ACASĂ</div></a>
  </div>
  <div style="display: none;" class="link">
    <a href="sale.php"><div class="sidebartext">REDUCERI</div></a>
  </div>
  <div class="link">
    <a href="categories/electromotor"><div class="sidebartext">ELECTROMOTOARE</div></a>
  </div>
  <div class="link">
    <a href="categories/alternator/"><div class="sidebartext">ALTERNATOARE</div></a>
  </div>
  <div class="link">
    <a href="about.php"><div class="sidebartext">DESPRE NOI</div></a>
  </div>
  <div class="link">
    <a href="contacts.php"><div class="sidebartext">CONTACTE</div></a>
  </div>
</div>

<header>

  <div class="top1">

    <a class="logimg12" href="../../index.php"><img class="logimg" src="../../img/imgSite/logo.png"></a>

    <div class="top2">

     <div class="navbarButt">
        <a href="index.php">
         <div class="inbutton">
          <p class="buttP" >ACASĂ</p>
         </div>
        </a>
     </div>

      <div style="display: none;" class="navbarButt">
        <a href="sale.php">
         <div class="inbutton">
          <p class="buttP" >REDUCERI</p>
         </div>
        </a>
      </div>

      <div class="navbarButt">
        <a href="categories/electromotor">
         <div class="inbutton">
          <p class="buttP" >ELECTROMOTOARE</p>
         </div>
        </a>
      </div>

      <div class="navbarButt">
        <a href="categories/alternator">
         <div class="inbutton">
          <p class="buttP" >ALTERNATOARE</p>
         </div>
        </a>
      </div>

      <div class="navbarButt">
        <a href="about.php">
         <div class="inbutton">
          <p class="buttP" >DESPRE NOI</p>
         </div>
        </a>
      </div>

      <div class="navbarButt">
        <a href="contacts.php">
         <div class="inbutton">
          <p class="buttP" >CONTACTE</p>
         </div>
        </a>
      </div>

      <div class="navigation123reSearch">
       <div class="boxTextFilter">
        <form action="searchResult.php" method="POST" class="searchFormHeader">
         <input id="valagency" type="text" name="search" required placeholder="CĂUTARE">
         <input id="btnsubmit" type="submit" name="" value=" ">
         <input id="btnsubmit1" type="submit" name="" value=" ">
        </form>        
       </div>
      </div>

      <div style="display: ;" class="navigation123reSearchForSomeTime navigation123reSearch">
        <a href="tel:+40 771 614 934"><div class="headerButtonsForSomeTime1"></div></a>
      </div>

      <div style="display: ;" class="navigation123reSearchForSomeTime1 navigation123reSearchForSomeTime navigation123reSearch">
        <div class="headerButtonsForSomeTime"></div>
      </div>

      <div style="display: ;" class="navigation123456">
        <div class="navigation1234567"></div>
      </div>

      <div style="display: none;" style="display: block;" class="navigation123re">
        <a href="en/index.php"><div class="navigation1234 navigation1234Lang"></div></a>
      </div>

      <div style="display: none;" style="display: block;" class="navigation123re">
        <a href="accounts/login/index.php"><div class="navigation1234User"></div></a>
      </div>

      <div style="display: none;" class="navigation123korzina">
        <div class="navigation123korzinaNrOfProducts"><p>3</p></div>
         <a href="../../cart.php">
          <div class="navigation1234">              
          </div>
         </a>
      </div>

    </div>

  </div>

</header>

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

    $query = "SELECT alternators.id, alternators.imgsrc, alternators.link, alternators.autovalenter, alternators.psh, alternators.wood, alternators.waiglobal, alternators.category, alternators.voltag, krosstablefilter.ch1_2, krosstablefilter.ch2_2, krosstablefilter.ch3_2, krosstablefilter.ch4_2, krosstablefilter.ch5_2, krosstablefilter.ch6_2, krosstablefilter.ch8_2, krosstablefilter.ch9_2, krosstablefilter.ch10_2, krosstablefilter.ch7_2, krosstablefilter.ch1, krosstablefilter.ch2, krosstablefilter.ch3, krosstablefilter.ch4, krosstablefilter.ch5, krosstablefilter.ch6, krosstablefilter.ch8, krosstablefilter.ch9, krosstablefilter.ch10, krosstablefilter.ch7, krosstable.linkalternator, krosstable.mitsubishi, krosstable.bosch, krosstable.delco, krosstable.renault, krosstable.mercedesbenz, krosstable.ford,krosstable.valeo, krosstable.ass1, krosstable.cas, krosstable.hyundai, krosstable.cargo, krosstable.kia, krosstable.krauf, krosstable.mando, krosstable.messmer, krosstable.motorherz, krosstable.zaufer, krosstable.wai, krosstable.hc_parts, krosstable.hella, krosstable.lucas, krosstable.magnetimarelli, krosstable.wps, krosstable.bcc, krosstable.prestolite, krosstable.volvo, krosstable.yam, krosstable.hbb, krosstable.mazda, krosstable.daewoo, krosstable.gmm, krosstable.maz, krosstable.pmx, krosstable.unipoint, krosstable.citroen, krosstable.nissan, krosstable.reparts, krosstable.bll, krosstable.acdelco, krosstable.generalmotors, krosstable.brillance, krosstable.komatsu, krosstable.nikko, krosstable.wll, krosstable.vag, krosstable.hino, krosstable.sawafuji, krosstable.poong_sung, krosstable.motorola, krosstable.cat, krosstable.hyster, krosstable.skk, krosstable.pee, krosstable.magneton, krosstable.case, krosstable.deutz, krosstable.mahle, krosstable.khd, krosstable.iskra, krosstable.hitachi, krosstable.john_deere, krosstable.vww, krosstable.denso, krosstable.general_motors, krosstable.opel FROM `alternators` INNER JOIN `krosstable` ON alternators.voltag = krosstable.linkalternator INNER JOIN `krosstablefilter` ON krosstablefilter.linkalternator = krosstable.linkalternator WHERE krosstable.linkalternator LIKE '%".$search."%'    
      OR alternators.autovalenter LIKE '%".$search."%'
      OR alternators.link LIKE '%".$search."%'
      OR alternators.psh LIKE '%".$search."%'
      OR alternators.wood LIKE '%".$search."%'
      OR alternators.waiglobal LIKE '%".$search."%'
      OR krosstable.bosch LIKE '%".$search."%'
      OR krosstable.mitsubishi LIKE '%".$search."%'
      OR krosstable.delco LIKE '%".$search."%'
      OR krosstable.renault LIKE '%".$search."%'
      OR krosstable.mercedesbenz LIKE '%".$search."%'
      OR krosstable.ford LIKE '%".$search."%'
      OR krosstable.valeo LIKE '%".$search."%'
      OR krosstable.ass1 LIKE '%".$search."%'
      OR krosstable.cas LIKE '%".$search."%'
      OR krosstable.hyundai LIKE '%".$search."%'
      OR krosstable.kia LIKE '%".$search."%'
      OR krosstable.krauf LIKE '%".$search."%'
      OR krosstable.mando LIKE '%".$search."%'
      OR krosstable.messmer LIKE '%".$search."%'
      OR krosstable.motorherz LIKE '%".$search."%'
      OR krosstable.zaufer LIKE '%".$search."%'
      OR krosstable.wai LIKE '%".$search."%'
      OR krosstable.hc_parts LIKE '%".$search."%'
      OR krosstable.hella LIKE '%".$search."%'
      OR krosstable.lucas LIKE '%".$search."%'
      OR krosstable.magnetimarelli LIKE '%".$search."%'
      OR krosstable.wps LIKE '%".$search."%'
      OR krosstable.bcc LIKE '%".$search."%'
      OR krosstable.prestolite LIKE '%".$search."%'
      OR krosstable.volvo LIKE '%".$search."%'
      OR krosstable.yam LIKE '%".$search."%'
      OR krosstable.hbb LIKE '%".$search."%'
      OR krosstable.mazda LIKE '%".$search."%'
      OR krosstable.daewoo LIKE '%".$search."%'
      OR krosstable.gmm LIKE '%".$search."%'
      OR krosstable.maz LIKE '%".$search."%'
      OR krosstable.pmx LIKE '%".$search."%'
      OR krosstable.unipoint LIKE '%".$search."%'
      OR krosstable.citroen LIKE '%".$search."%'
      OR krosstable.reparts LIKE '%".$search."%'
      OR krosstable.bll LIKE '%".$search."%'
      OR krosstable.acdelco LIKE '%".$search."%'
      OR krosstable.generalmotors LIKE '%".$search."%'
      OR krosstable.brillance LIKE '%".$search."%'
      OR krosstable.komatsu LIKE '%".$search."%'
      OR krosstable.nikko LIKE '%".$search."%'
      OR krosstable.wll LIKE '%".$search."%'
      OR krosstable.vag LIKE '%".$search."%'
      OR krosstable.hino LIKE '%".$search."%'
      OR krosstable.sawafuji LIKE '%".$search."%'
      OR krosstable.poong_sung LIKE '%".$search."%'
      OR krosstable.motorola LIKE '%".$search."%'
      OR krosstable.cat LIKE '%".$search."%'
      OR krosstable.hyster LIKE '%".$search."%'
      OR krosstable.skk LIKE '%".$search."%'
      OR krosstable.pee LIKE '%".$search."%'
      OR krosstable.magneton LIKE '%".$search."%'
      OR krosstable.case LIKE '%".$search."%'
      OR krosstable.deutz LIKE '%".$search."%'
      OR krosstable.mahle LIKE '%".$search."%'
      OR krosstable.khd LIKE '%".$search."%'
      OR krosstable.iskra LIKE '%".$search."%'
      OR krosstable.hitachi LIKE '%".$search."%'
      OR krosstable.john_deere LIKE '%".$search."%'
      OR krosstable.vww LIKE '%".$search."%'
      OR krosstable.denso LIKE '%".$search."%'
      OR krosstable.general_motors LIKE '%".$search."%'
      OR krosstable.opel LIKE '%".$search."%'
      OR krosstable.nissan LIKE '%".$search."%'
      OR krosstable.cargo LIKE '%".$search."%'
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
             <img src="'.$row["imgsrc"].'" width="100%">
             </div>
        <div class="galleryDivvTextSearchh3 galleryDivvTextSearch galleryDivvText">
            <div class="divsearchsmall"></div><h3 class="bigzag">'.$search0.'</h3>
            <h3 class="smallzag">'.$search1.'</h3>
            <h3 class="smallzag1">'.$search2.'</h3>
            <p>'.$row["category"].'</p>
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
        </div>
     </a> 
    </div>
    

   ';
  }
 }
 else
 {
  if ($_POST["offset"] == 0) {
    $output = '<img class="nodatablock datanotfoundimg" src="img/imgSite/notfound2.jpg" alt="DATA NOT FOUND"><img class="nodatanone datanotfoundimg" src="img/imgSite/notfound21.jpg" alt="DATA NOT FOUND">';
  } else {
    $output = '';
  }
 }
 echo $output;

     
    ?> 

</div>


<div style="display: none" class="paginationForContenc">
    <ul>
        <a href=""><li class="paginationForContencLiButtons">
            <img src="img/imgSite/prevSliderButton.png" height="100%" width="100%">
        </li></a>

        <a href=""><li class="">
            1
        </li></a>

        <a href=""><li class="pageWhereAreYou">
            2
        </li></a>

        <a href=""><li class="">
            3
        </li></a>

        <a href=""><li class="">
            ...
        </li></a>

        <a class="hideTo370" href=""><li class="">
            390
        </li></a>

        <a href=""><li class="">
            391
        </li></a>

        <a href=""><li class="paginationForContencLiButtons">
            <img src="img/imgSite/nextSliderButton.png" height="100%" width="100%">
        </li></a>
    </ul>    
</div>


<footer class="footSmall">

 <div class="footSmall1">
  <img src="img/imgSite/logo.png">
  <p>Compania <span>Valenterauto</span> activează pe piața <span>Romaniei</span> din anul 2010.</p>
  <p>Principalele activități sunt:</p>
  <p>– Vanzare de demaroare și generatoare auto</p>
  <p>– Vanzare de componente pentru demaroare și alternatoare auto</p>       
 </div>

 <div class="footSmall2">

  <a href="mailto:mihail.albu@valenterauto.ro">
   <div class="footerrtyyy0qqerOther footerrtyyy0qqer">
    <div class="inflocation000qqer1">
     <img src="img/imgSite/contact6.png">
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
     <img src="img/imgSite/contact6.png">
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
     <img src="img/imgSite/contact6.png">
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