<?php
require "../../includes/config.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title>
       <?php
         $query = "SELECT * FROM redresorinitial WHERE id = " . (int)$_GET['id'];
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

<div class="sidebaropt">
  <div class="closeFilterropo sidebarJScss11closs sidebarJScss11closs4554"> </div>  
  <div class="link">
    <a href="../../index.php"><div class="sidebartext">ACASĂ</div></a>
  </div>
  <div style="display: none;" class="link">
    <a href="../../sale.php"><div class="sidebartext">REDUCERI</div></a>
  </div>
  <div class="link">
    <a href="index.php"><div class="sidebartext">ELECTROMOTOARE</div></a>
  </div>
  <div class="link">
    <a href="../alternator"><div class="sidebartext">ALTERNATOARE</div></a>
  </div>
  <div class="link">
    <a href="../../about.php"><div class="sidebartext">DESPRE NOI</div></a>
  </div>
  <div class="link">
    <a href="../../contacts.php"><div class="sidebartext">CONTACTE</div></a>
  </div>
</div>

<header>

  <div class="top1">

    <a class="logimg12" href="../../index.php"><img class="logimg" src="../../img/imgSite/logo.png"></a>

    <div class="top2">

     <div class="navbarButt">
        <a href="../../index.php">
         <div class="inbutton">
          <p class="buttP" >ACASĂ</p>
         </div>
        </a>
     </div>

      <div style="display: none;" class="navbarButt">
        <a href="../../sale.php">
         <div class="inbutton">
          <p class="buttP" >REDUCERI</p>
         </div>
        </a>
      </div>

      <div class="navbarButt">
        <a href="../electromotor">
         <div class="inbutton">
          <p class="buttP" >ELECTROMOTOARE</p>
         </div>
        </a>
      </div>

      <div class="navbarButt">
        <a href="../alternator">
         <div class="inbutton">
          <p class="buttP" >ALTERNATOARE</p>
         </div>
        </a>
      </div>

      <div class="navbarButt">
        <a href="../../about.php">
         <div class="inbutton">
          <p class="buttP" >DESPRE NOI</p>
         </div>
        </a>
      </div>

      <div class="navbarButt">
        <a href="../../contacts.php">
         <div class="inbutton">
          <p class="buttP" >CONTACTE</p>
         </div>
        </a>
      </div>

      <div class="navigation123reSearch">
       <div class="boxTextFilter">
        <form action="/searchResult.php" method="POST" class="searchFormHeader">
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

    <div class="imgart1"><img src="/img/imgredresor/<?php echo $row131['voltag']; ?>_1.jpg" data-lightbox="<?php echo $row131['voltag']; ?>"  onerror='this.style.display = "none"' onclick="myFunction(this)" style="display: block;"></div><br>
    <div class="imgart1"><img src="/img/imgredresor/<?php echo $row131['voltag']; ?>_2.jpg" data-lightbox="<?php echo $row131['voltag']; ?>"  onerror='this.style.display = "none"' onclick="myFunction(this)" style="display: block;"></div><br>
    <div class="imgart1"><img src="/img/imgredresor/<?php echo $row131['voltag']; ?>_3.jpg" data-lightbox="<?php echo $row131['voltag']; ?>"  onerror='this.style.display = "none"' onclick="myFunction(this)" style="display: block;"></div><br>
    <div class="imgart1"><img src="/img/imgredresor/<?php echo $row131['voltag']; ?>_4.jpg" data-lightbox="<?php echo $row131['voltag']; ?>"  onerror='this.style.display = "none"' onclick="myFunction(this)" style="display: block;"></div><br>
    <div class="imgart1"><img src="/img/imgredresor/<?php echo $row131['voltag']; ?>_5.jpg" data-lightbox="<?php echo $row131['voltag']; ?>"  onerror='this.style.display = "none"' onclick="myFunction(this)" style="display: block;"></div><br>
  

   </div>
   <div class="productArtImgContainerBig">
    <img id="imageBoxBig" src="../../img/imgredresor/<?php echo $row131['voltag']; ?>_1.jpg">
   </div>               
  </div>
 </div>
 </div>

 <div class="wow fadeIn articleText" data-wow-duration="2.5s">

  <?php if ( $row131['price'] != NULL) echo
  '<p class="priceblock">'.$row131['price'].'</p>'
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

   $query = "SELECT * FROM krosstablefilter WHERE linkalternator = '$alternatorv'";
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

