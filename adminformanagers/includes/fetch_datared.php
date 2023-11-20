<?php

//fetch_data.php

include('config.php');

if(isset($_POST["action"]))
{

 $query = "
  SELECT * FROM article 
  WHERE product_status = '1'
 ";
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
  foreach($result as $row)
  {


         
   $output .= '

    <div class="mobversioncatalogcontentCollection">

    <a href="articlemobile.php?id='. $row['id'] .' " target="_blank">

    <div class="footerrtyInside11er">

                <h2>'. $row['zagolovok'] .'</h2>

                <p>'. $row['texture'] .'</p> 

                <p>'. $row['tip'] .'</p>

                <p>'. $row['suprafata'] .'</p>


                
              </div>

    <img class="gradd" src="img/gradik.png">

    <img class="mobversioncatalogcontentCollectionh1"  src="img/imgArt/small/'. $row['imgInterier'] .'">

    </a>
    
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

<!-- TODO use this to fetch data from database -->