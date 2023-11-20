<?php

//fetch_data.php

include('config.php');

if(isset($_POST["action"]))
{


 $query = "
  SELECT * FROM verix3dgibs_f0f6ab84390e06ca92a57b5397c72d2";

  if(isset($_POST["producator"]))
 {
  $producator_filter = implode("','", $_POST["producator"]);
  $query .= "
   AND producator IN('".$producator_filter."')
  ";
 }
 if(isset($_POST["size"]))
 {
  $size_filter = implode("|", $_POST["size"]);
  $query .= "
   AND size REGEXP '" .$size_filter. "'
  ";
 }
 if(isset($_POST["color"]))
 {
  $color_filter = implode("|", $_POST["color"]);
  $query .= "
   AND color REGEXP '"  .$color_filter. "'
  ";
 }
  if(isset($_POST["suprafata"]))
 {
  $suprafata = implode("|", $_POST["suprafata"]);
  $query .= "
   AND suprafata REGEXP '" .$suprafata. "'
  ";
 }
   if(isset($_POST["tip"]))
 {
  $tip = implode("|", $_POST["tip"]);
  $query .= "
   AND tip REGEXP '" .$tip. "'
  ";
 }

    if(isset($_POST["texture"]))
 {
  $texture = implode("|", $_POST["texture"]);
  $query .= "
   AND texture REGEXP '" .$texture. "'
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
  foreach($result as $row3d)
  {
   $output .= '
   <div data-tilt data-tilt-scale="1.03" data-tilt-glare data-tilt-max-glare="0.5" data-tilt-max="10" data-tilt-speed="4000 " style="background-image: url(img/backpost.png);" class="contentPost '. $row3d['naznacenie'] .'">
    <a href="article.php?id='. $row3d['id'] .'" target="_blank" >
     <div style="background-image: url(img/imgArt/small/'. $row3d['img-src'] .'");" class="contentPostImg">

     </div>
    </a>

    <p>'. $row3d['zagolovok'] .'</p>

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


