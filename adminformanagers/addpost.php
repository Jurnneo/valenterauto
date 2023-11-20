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
<title>ADD</title>
<meta charset="UTF-8">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="icon" sizes='16x16' type="image/png" href="../img/imgSite/ValenterAutoLogo1.png"/>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/stylemobadmin.css">
<link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,500" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</head>
<body>

<div id="photo" class="w3modaladmin w3-modal w3-animate-opacity" style="display: block;">
  <div class="w3modalcontentadmin w3-modal-content" style="padding:32px">
    <div class="w3-container w3-white">

     <form method="POST" enctype="multipart/form-data" action="redirect.php" >      

        <label for="images" class="drop-container" id="dropcontainer">
         <span class="drop-title">Drop 1 file here</span>
         or
         <input type="file" id="images" accept="image/*" name="image">
        </label>

<div>

<p><input class="w3inputtextadmin w3-input w3-border" required name="title" placeholder="Titlu"></p>

<p><input class="w3inputtextadmin w3-input w3-border" required list="categoryadmin" name="categoryadmin" placeholder="CATEGORIA"></p>
  <datalist id="categoryadmin">
    <?php
      $query2267size = "SELECT DISTINCT(category) FROM alternators ORDER BY category ";
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

  <p><input class="w3inputtextadmin w3-input w3-border" required list="articoladmin" name="articoladmin" placeholder="ARTICOL"></p>
  <datalist id="articoladmin">
    <?php
      $query2267size = "SELECT DISTINCT(voltag) FROM alternators ORDER BY voltag ";
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

      <button class="w3btnadmin w3-btn w3-section" name="upload" type="submit">ADAUGA POZITIA</button>

    </form>
   </div>
  </div>
</div>


         


<div class="content" style="display: none;">



<?php
   



     $articles = mysqli_query($connection, "SELECT * FROM article ORDER BY zagolovok ASC");


    if (mysqli_num_rows($articles) <= 0 ) 
    {
      echo "THIS PAGE IS WITHOUT POSTS";
    }




    ?>


    <?php
     while ($art = mysqli_fetch_assoc($articles))
     {
    ?>




  <div class="post">
  <a style="position: absolute; width: 100%; height: 100%; margin-top: 0px;" href="articlepos1.php?id=<?php echo $art['id']; ?>" target="_blank">
    <div class="postImg" style="height: 100%; background-image: url(../img/imgArt/small/<?php echo $art['imgInterier'];?> ); background-size: cover; background-position: center;">
      <form method="POST" enctype="multipart/form-data" action="redirect.php" >

      <p><button style="top: 250px; left: 0px; font-size: 18px;" onclick="return ConfirmDelete();" class="dellbtn" name="uploaddELArt" value="<?php echo $art['id'];?>" type="submit">DELETE</button></p>

    </form>
    </div>
    </a>
    <p>
      <?php echo $art['zagolovok']; ?>
    </p>
  </div>


    <?php
       }
     ?>

 
</div>



</div>


<script>
    function ConfirmDelete()
    {
      var x = confirm("TOCINO?");
      if (x)
          return true;
      else
        return false;
    }


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
</script> 

</body>

</html>