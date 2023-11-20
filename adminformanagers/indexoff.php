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
    <title>ADMIN</title>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="img/iconElit.png" type="image/png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="css/stylemob.css">
    <link rel="stylesheet" type="text/css" href="css/stylemobadmin.css">
    <link rel="stylesheet" type="text/css" href="css/optimizationmob.css">
    <link rel="stylesheet" type="text/css" href="css/lightbox.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="icon" sizes='16x16' type="image/png" href="../img/imgSite/ValenterAutoLogo1.png"/>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;470;630;723&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/anim.css">
    <link rel="stylesheet" href="css/slick-theme1.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="js/lightbox-plus-jquery.min.js"></script>
    <script src="js/granim.min.js"></script>
    <script src="js/slick.js"></script>

    <script>
        $(document).ready(function () {
            $('.autoplay').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 1500,
                speed: 1000,
            });
        });
        
    $(document).ready(function(){

      $('.variable-width').slick({

      dots: true,
      infinite: true,
      speed: 700,
      slidesToShow: 1,
      autoplay: true,
      variableWidth: true
     });

    });
    </script>


</head>
<body>


    <div class="userDiv">
        <div class="userDivimg"><img src="<?= $_SESSION['user']['avatar'] ?>" alt=""></div>
        <h2><?= $_SESSION['user']['full_name'] ?></h2>
        <a href="vendor/logout.php" class="logout">Выход</a>
    </div>


  <?php include "includeCatalogProducts1.php"; ?>

  <?php include "includeContentProducts.php"; ?>

  <?php include "includeFilterProducts.php"; ?>



<div class="classButtMenuMobile34">            
</div>

<div class="classButtMenuMobile344">            
</div>

<div style="display: none;" class="menuBarFix">

    <div class="menuBarFix1">
        <a href="#"><img class="logwh1" src="img/lloogg.png"></a>
        <a href="#"><img class="logwh" src="img/logwh.png"></a>
        <div class="classButtMenuMobile">            
        </div>
        <div class="classButtMenuMobile1">
            <div class="classButtMenuMobile1close1">                
        </div>
            <div class="classButtMenuMobile1close">                
        </div>            
        </div>

        <div style="display: none;" class="classButtMenuMobile2">
            <div class="classButtMenuMobile2button">                
            </div>
            <div class="clfirstactive">                
            </div>
            <div class="clfirstactive1">                
            </div>            
        </div>        
    </div>

                <div class="mobversionarticlecontenttt" style="width: 85%; margin-left: 7.5%; margin-top: 5%;">

                <div class="infmobilee">
                    <a href="#"><p>ACASĂ</p></a>
                </div>

                <div class="infmobilee">
                    <a href="#"><p>BLOG</p></a>
                </div>

                <div class="infmobilee">
                    <a href="#"><p>CATALOG</p></a>
                </div>

                <div class="infmobilee">
                    <a href="#"><p>DESPRE NOI</p></a>
                </div>

                <div class="infmobilee">
                    <a href="#"><p>CONTACTE</p></a>
                </div>

                </div>
    
</div>

       <div class="backgroundclose">
                
       </div>

</body>
</html>


<script type="text/javascript" src="js/vanilla.min.js"></script>

<script type="text/javascript" src="js/onclickqq.js"></script>


<script>
                function SmoothScroll() {
                 e.preventDefault();
                 var target = $(this).attr("href");
                 $('html, body').animate({
                     scrollTop: $(""+target).offset().top
                 }, 2000);}
</script>


<style>
#loading151
{
 position: absolute;
 width: 100%;
 margin-top: 15vh; 
 background: url('loader.gif') no-repeat center; 
 height: 150px;
}
</style>

<script>

    function ConfirmDelete()
    {
      var x = confirm("TOCINO?");
      if (x)
          return true;
      else
        return false;
    }

function myFunction() {
    var input, filter, ul, li, a, i, txtValue;
    input = document.getElementById("myInputssh");
    filter = input.value.toUpperCase();
    ul = document.getElementById("myULssh");
    li = ul.getElementsByClassName("contentPost");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("p")[0];
        txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}

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
      var action = 'fetch_datared';
      var ch7_2 = get_filter('ch7_2');
      var ch9_2 = get_filter('ch9_2');
      var ch8_2 = get_filter('ch8_2');
      var ch6_2 = get_filter('ch6_2');
      var ch5_2 = get_filter('ch5_2');
      var ch4_2 = get_filter('ch4_2');
      var ch3_2 = get_filter('ch3_2');
      var ch2_2 = get_filter('ch2_2');
      var ch1_2 = get_filter('ch1_2');
      $.ajax({
          url:"includes1/fetch_dataredoff.php",
          method:"POST",
          beforeSend: function(){
           // Show image container
           $("#imgLoadSearchData1").show();
          },
          data:{
            action:action, 
            offset: offset,
            limit: limit,
            ch7_2:ch7_2,
            ch9_2:ch9_2,
            ch8_2:ch8_2,
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
                $('.filter_data142').append(data);
              } else {
                $('.filter_data142').html(data);
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

