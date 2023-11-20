
<img class="filterProodImgJpg121" src="../img/closse.png">

  <h2 class="blockSearchh2">CĂUTARE</h2>

  <div class="blockSearchOpen">

    <div class="blockSearchForWrite">

          <span class="form-control-span">CAUTARE</span>
          <input type="text" name="search_text" id="search_text" placeholder="SPRE EXEMPLU : MARMURA" class="form-control" />
      
    </div>

      <div style="display: grid; grid-template-columns: 1fr 1fr 1fr;" class="resultSearch" id="result"></div>

    <div style="clear:both"></div>



  </div>

<div class="blockSearch">

</div>

<script>
$(document).ready(function(){
  load_data();
  function load_data(query12)
  {
    $.ajax({
      url:"includes1/fetch.php",
      method:"post",
      data:{query12:query12},
      success:function(data)
      {
        $('#result').html(data);
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