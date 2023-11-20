<?php

//fetch_data.php

include('config.php');

if(isset($_POST["action"]))
{


 $query = "
  SELECT * FROM alternators 
  WHERE product_status = '1'
 ";


if(isset($_POST["bss_lin_ide"]))
 {
  $bss_lin_ide = implode("|", $_POST["bss_lin_ide"]);
  $query .= "
   AND bss_lin_ide REGEXP '" .$bss_lin_ide. "'
  ";
 }

 if(isset($_POST["tip_de_conector"]))
 {
  $tip_de_conector = implode("|", $_POST["tip_de_conector"]);
  $query .= "
   AND tip_de_conector REGEXP '" .$tip_de_conector. "'
  ";
 }

  if(isset($_POST["pompa"]))
 {
  $pompa = implode("|", $_POST["pompa"]);
  $query .= "
   AND pompa REGEXP '" .$pompa. "'
  ";
 }

  if(isset($_POST["tip_semnal"]))
 {
  $tip_semnal = implode("|", $_POST["tip_semnal"]);
  $query .= "
   AND tip_semnal REGEXP '" .$tip_semnal. "'
  ";
 }

  if(isset($_POST["numarul_dintilor"]))
 {
  $numarul_dintilor = implode("|", $_POST["numarul_dintilor"]);
  $query .= "
   AND numarul_dintilor REGEXP '" .$numarul_dintilor. "'
  ";
 }

  if(isset($_POST["dimensiune_a"]))
 {
  $dimensiune_a = implode("|", $_POST["dimensiune_a"]);
  $query .= "
   AND dimensiune_a REGEXP '" .$dimensiune_a. "'
  ";
 }

  if(isset($_POST["dimensiune_b"]))
 {
  $dimensiune_b = implode("|", $_POST["dimensiune_b"]);
  $query .= "
   AND dimensiune_b REGEXP '" .$dimensiune_b. "'
  ";
 }

  if(isset($_POST["dimensiune_c"]))
 {
  $dimensiune_c = implode("|", $_POST["dimensiune_c"]);
  $query .= "
   AND dimensiune_c REGEXP '" .$dimensiune_c. "'
  ";
 }

  if(isset($_POST["curent"]))
 {
  $curent = implode("|", $_POST["curent"]);
  $query .= "
   AND curent REGEXP '" .$curent. "'
  ";
 }

  if(isset($_POST["tensiune"]))
 {
  $tensiune = implode("|", $_POST["tensiune"]);
  $query .= "
   AND tensiune REGEXP '" .$tensiune. "'
  ";
 }


$query .= "ORDER BY id DESC";
$query .= " LIMIT " . $_POST["limit"] . " OFFSET " . $_POST["offset"];
 $statement = $connect->prepare($query);
 $statement->execute();
 $result = $statement->fetchAll();
 $total_row = $statement->rowCount();
 $output = '';
 if($total_row > 0)
 {
  foreach($result as $row)
  {
   $output .= '


    <div class="galleryDivv">
        <div class="galleryDivvImg">
            <img class="galleryDivvImgBckgroundImg" src="../../img/imgSite/backgroundImgPng.png">
            <a href="article.php?id='. $row['id'] .'" target="_blank">
             <div class="IconsNafoto"></div>
             <img src="'.$row["imgsrc"].'" width="100%">
            </a>
        </div>
        <div class="galleryDivvText">
            <h3>'.$row["link"].'</h3>
            <p>'.$row["category"].'</p>
        </div>
        <div class="pricePosition">
            <h2 style="margin: 0;" class="pret">5970 MDL</h2>
        </div>
        <div class="korzinka">
            <img src="/img/imgSite/cartCircle.png">
        </div>
    </div>

   ';
  }
 }
 else
 {
  if ($_POST["offset"] == 0) {
    $output = '<h3>No Data Found</h3>';
  } else {
    $output = '';
  }
 }
 echo $output;
}

?>


