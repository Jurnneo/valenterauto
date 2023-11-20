<?php
$connect12 = mysqli_connect("localhost", "root", "", "valenterauto");
$output12 = '';
if(isset($_POST["query12"]))
{
	$search = mysqli_real_escape_string($connect12, $_POST["query12"]);
	$query12 = "
	SELECT alternators.id, alternators.imgsrc, alternators.link, alternators.autovalenter, alternators.psh, alternators.wood, alternators.waiglobal, alternators.category, alternators.voltag, krosstable.linkalternator, krosstable.krosstext, krosstable.where_we_use FROM `alternators` INNER JOIN `krosstable` ON alternators.voltag =krosstable.linkalternator WHERE alternators.id = '1278'	
	  OR alternators.autovalenter LIKE '%".$search."%'
	  OR alternators.link LIKE '%".$search."%'
	  OR alternators.psh LIKE '%".$search."%'
	  OR alternators.wood LIKE '%".$search."%'
	  OR alternators.waiglobal LIKE '%".$search."%'
	  OR krosstable.krosstext LIKE '%".$search."%'
	  OR krosstable.where_we_use LIKE '%".$search."%'
	";

}
else
{
	$query12 = "
	SELECT * FROM alternators ORDER BY id DESC LIMIT 0";
}
$result12 = mysqli_query($connect12, $query12);
if(mysqli_num_rows($result12) > 0)
{
	$output12 .= '';
	while($row = mysqli_fetch_array($result12))
	{

	if ($row['tensiune'] != NULL){
	$tensiune = '<p class="productInf1">vo : '.$row['tensiune'].'</p>';
     }
    else{
     $tensiune = '';
    }

    if ($row['curent'] != NULL){
	$curent = '<p class="productInf1">am : '.$row['curent'].'</p>';
     }
    else{
     $curent = '';
    }

    if ($row['dimensiune_a'] != NULL){
	$dimensiune_a = '<p class="productInf1">a : '.$row['dimensiune_a'].'</p>';
     }
    else{
     $dimensiune_a = '';
    }

    if ($row['dimensiune_b'] != NULL){
	$dimensiune_b = '<p class="productInf1">b : '.$row['dimensiune_b'].'</p>';
     }
    else{
     $dimensiune_b = '';
    }

    if ($row['dimensiune_c'] != NULL){
	$dimensiune_c = '<p class="productInf1">c : '.$row['dimensiune_c'].'</p>';
     }
    else{
     $dimensiune_c = '';
    }

    if ($row['numarul_dintilor'] != NULL){
	$numarul_dintilor = '<p class="productInf1">gr : '.$row['numarul_dintilor'].'</p>';
     }
    else{
     $numarul_dintilor = '';
    }

    if ($row['tip_semnal'] != NULL){
	$tip_semnal = '<p class="productInf1">ss : '.$row['tip_semnal'].'</p>';
     }
    else{
     $tip_semnal = '';
    }

    if ($row['pompa'] != NULL){
	$pompa = '<p class="productInf1">vp : '.$row['pompa'].'</p>';
     }
    else{
     $pompa = '';
    }

    if ($row['tip_de_conector'] != NULL){
	$tip_de_conector = '<p class="productInf1">vr : '.$row['tip_de_conector'].'</p>';
     }
    else{
     $tip_de_conector = '';
    }

    if ($row['bss_lin_ide'] != NULL){
	$bss_lin_ide = '<p class="productInf1">id : '.$row['bss_lin_ide'].'</p>';
     }
    else{
     $bss_lin_ide = '';
    }

		$output12 .= '
		<div class="galleryDivvSearch galleryDivv">
        <div class="galleryDivvImg">
            <img class="galleryDivvImgBckgroundImg" src="../../img/imgSite/backgroundImgPng.png">
            <a href="article.php?id='. $row['id'] .'" target="_blank">
             <div class="IconsNafoto"></div>
             <img src="'.$row["imgsrc"].'" width="100%">
            </a>
        </div>
        <div class="galleryDivvTextSearch galleryDivvText">
            <h3>'.$row["link"].'</h3>
            <p>'.$row["category"].'</p>
        </div>
        <div class="productInf">
           '.$tensiune.'
           '.$curent.'
           '.$dimensiune_a.'
           '.$dimensiune_b.'
           '.$dimensiune_c.'
           '.$numarul_dintilor.'
           '.$tip_semnal.'
           '.$pompa.'
           '.$tip_de_conector.'
           '.$bss_lin_ide.'
        </div>
    </div>

		';
	}
	echo $output12;
}
else
{
	echo '';
}
?>

