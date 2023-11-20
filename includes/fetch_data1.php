<?php

//fetch_data.php

include('config.php');

if(isset($_POST["action"]))
{

 $query = "
  SELECT * FROM imgslick 
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

     <div data-tilt data-tilt-scale="1.03" data-tilt-glare data-tilt-max-glare="0.5" data-tilt-max="10" data-tilt-speed="4000" class="galleryDivv">
    <a class="aclasspos" href="article1.php?id='. $row['id'] .'" ><div class="galleryDivvImg galleryDivvImg4450">
      <div class="IconsNafoto">
      </div>
      <img src="img/imgSlick/'. $row['denumirea'] .'" width="100%">
    </div></a>
    <div class="galleryDivvText">
      <h3>'. $row['color'] .'</h3>
      <ul>
        <p>DIMENSIUNE : '. $row['size'] .'</p>
        <p>SUPRAFAȚĂ : '. $row['suprafata'] .'</p>
        <p>TEXTURA : '. $row['texture'] .'</p>
        <p>TIP : '. $row['tip'] .'</p>
      </ul>
      <div class="pricePosition">  
        <h2 class="pret">'. $row['price'] .' MDL/'. $row['edinitsa'] .'   <span>'. $row['sale'] .'</span></h2>
      </div>
      <div class="korzinka js-item" data-action="add">
      <span class="item_id" style="display: none;">' . $row['id'] . '</span>
                    <h6>Adauga in cos</h6>
                    <img src="img/korzinka.png">
                </div>
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
<!-- TODO use this to fetch data from database -->