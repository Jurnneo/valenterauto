

<script type="text/javascript" src="js/onclickqq1.js"></script>


  <div class="blockSearchOpenOnSite">

  <div class="blockSearchOpenOnSiteAuto">

    <div class="blockSearchForWrite">

    <div class="blockSearchForWrite12123">

    <div class="closeModalSearrch"></div>

          <span class="form-control-span">CAUTARE</span>
          <input style="border-radius: 15px;" type="text" name="search_text" id="search_text" placeholder="SPRE EXEMPLU : DRA3296N" class="form-control" />

    </div>      
      
    </div>

    <div class="resClass">

      <div id="imgLoadSearchData">
        <img id="imgLoadSearchDataimg" src="../../img/imgSite/loaderValenterAuto.gif">
      </div>  

      <div class="resultSearch" id="result">        
      </div>

       <center style="display: none;"><button class="js-load1">MAI MULT</button></center>

      </div>

    <div style="clear:both"></div>

  </div>

  </div>

<div class="blockSearch">

</div>

<script>
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
      url:"../../includes/fetchanother.php",
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
          $('#result').append(data);
        } else {
          $('#result').html(data);
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
  
  $('#search_text').keyup(function(){
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