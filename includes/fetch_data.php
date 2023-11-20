<?php

//fetch_data.php

include('config.php');

if(isset($_POST["action"]))
{


 $query = "
  SELECT alternators.id, alternators.link, alternators.imgsrc, alternators.price, alternators.category, alternators.product_status, alternators.voltag, krosstablefilter.linkalternator, krosstablefilter_categories.ch1, krosstablefilter.ch1_2, krosstablefilter_categories.ch2, krosstablefilter.ch2_2, krosstablefilter_categories.ch3, krosstablefilter.ch3_2, krosstablefilter_categories.ch4, krosstablefilter.ch4_2, krosstablefilter_categories.ch5, krosstablefilter.ch5_2, krosstablefilter_categories.ch6, krosstablefilter.ch6_2, krosstablefilter_categories.ch7, krosstablefilter.ch7_2, krosstablefilter_categories.ch8, krosstablefilter.ch8_2, krosstablefilter_categories.ch9, krosstablefilter.ch9_2, krosstablefilter_categories.ch10, krosstablefilter.ch10_2 FROM alternators
    LEFT JOIN krosstablefilter
    ON alternators.voltag = krosstablefilter.linkalternator LEFT JOIN krosstablefilter_categories ON krosstablefilter.categoryinfilter = krosstablefilter_categories.categoryinfilter1
    WHERE category = 'Alternator' AND product_status = '1'
 ";

  if(isset($_POST["ch9_2"]))
 {
  $ch9_2 = implode("|", $_POST["ch9_2"]);
  $query .= "
   AND ch9_2 REGEXP '" .$ch9_2. "'
  ";
 }

  if(isset($_POST["ch8_2"]))
 {
  $ch8_2 = implode("|", $_POST["ch8_2"]);
  $query .= "
   AND ch8_2 = '" .$ch8_2. "'
  ";
 }

 if(isset($_POST["ch7_2"]))
 {
  $ch7_2 = implode("|", $_POST["ch7_2"]);
  $query .= "
   AND ch7_2 REGEXP '" .$ch7_2. "'
  ";
 }

  if(isset($_POST["ch6_2"]))
 {
  $ch6_2 = implode("|", $_POST["ch6_2"]);
  $query .= "
   AND ch6_2 REGEXP '" .$ch6_2. "'
  ";
 }

  if(isset($_POST["ch5_2"]))
 {
  $ch5_2 = implode("|", $_POST["ch5_2"]);
  $query .= "
   AND ch5_2 REGEXP '" .$ch5_2. "'
  ";
 }

   if(isset($_POST["ch4_2"]))
 {
  $ch4_2 = implode("|", $_POST["ch4_2"]);
  $query .= "
   AND ch4_2 REGEXP '" .$ch4_2. "'
  ";
 }

  if(isset($_POST["ch3_2"]))
 {
  $avalue = implode("|", $_POST["ch3_2"]);
  $query .= "
   AND ch3_2 REGEXP '" .$avalue. "'
  ";
 }

  if(isset($_POST["ch2_2"]))
 {
  $ch2_2 = implode("|", $_POST["ch2_2"]);
  $query .= "
   AND ch2_2 REGEXP '" .$ch2_2. "'
  ";
 }

  if(isset($_POST["ch1_2"]))
 {
  $ch1_2 = implode("|", $_POST["ch1_2"]);
  $query .= "
   AND ch1_2 REGEXP '" .$ch1_2. "'
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

     $textzag = $row["link"];
     $maxchar = 20; // макс длинна
     if ( mb_strlen( $textzag ) > $maxchar ){
     $textzag = mb_substr( $textzag, 0, $maxchar ) .'...';
     }

     $textzag1 = $row["link"];
     $maxchar1 = 16; // макс длинна
     if ( mb_strlen( $textzag1 ) > $maxchar1 ){
     $textzag1 = mb_substr( $textzag1, 0, $maxchar1 ) .'..';
     }

     $textzag2 = $row["link"];
     $maxchar2 = 13; // макс длинна
     if ( mb_strlen( $textzag2 ) > $maxchar2 ){
     $textzag2 = mb_substr( $textzag2, 0, $maxchar2 ) .'..';
     }
     
   $output .= '


    <div class="galleryDivvSearch galleryDivv">
      <a href="article.php?id='. $row['id'] .'" target="_blank">
        <div class="galleryDivvImg">
            <img style="width: 100%" class="galleryDivvImgBckgroundImg" src="../../img/imgSite/backgroundImgPng.png">
             <div class="IconsNafoto"></div>
             <img src="'.$row["imgsrc"].'" width="100%">
        </div>
        <div class="galleryDivvTextSearch galleryDivvText">
            <h3 class="bigzag">'.$textzag.'</h3>
            <h3 class="smallzag">'.$textzag1.'</h3>
            <h3 class="smallzag1">'.$textzag2.'</h3>
            <p>'.$row["category"].'</p>
        </div>
        <div class="productInf">
           '.$ch1_2.'
           '.$ch2_2.'
           '.$ch3_2.'
           '.$ch4_2.'
           '.$ch5_2.'
           '.$ch6_2.'
           '.$ch8_2.'
           '.$ch9_2.'
           '.$ch10_2.'
           '.$ch7_2.'
        </div>
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

