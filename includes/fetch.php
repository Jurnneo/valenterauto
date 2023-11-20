<?php
$connect12 = mysqli_connect("localhost", "root", "", "valenterauto");
$output12 = '';
if(isset($_POST["query12"]))
{
	$search = mysqli_real_escape_string($connect12, $_POST["query12"]);
	$query12 = "
	SELECT alternators.id, alternators.imgsrc, alternators.link, alternators.autovalenter, alternators.psh, alternators.wood, alternators.waiglobal, alternators.category, alternators.voltag, krosstablefilter.ch1_2, krosstablefilter.ch2_2, krosstablefilter.ch3_2, krosstablefilter.ch4_2, krosstablefilter.ch5_2, krosstablefilter.ch6_2, krosstablefilter.ch8_2, krosstablefilter.ch9_2, krosstablefilter.ch10_2, krosstablefilter.ch7_2, krosstablefilter.ch1, krosstablefilter.ch2, krosstablefilter.ch3, krosstablefilter.ch4, krosstablefilter.ch5, krosstablefilter.ch6, krosstablefilter.ch8, krosstablefilter.ch9, krosstablefilter.ch10, krosstablefilter.ch7, krosstable.linkalternator, krosstable.mitsubishi, krosstable.bosch, krosstable.delco, krosstable.renault, krosstable.mercedesbenz, krosstable.ford, krosstable.valeo, krosstable.ass1, krosstable.cas, krosstable.hyundai, krosstable.cargo, krosstable.kia, krosstable.krauf, krosstable.mando, krosstable.messmer, krosstable.motorherz, krosstable.zaufer, krosstable.wai, krosstable.hc_parts, krosstable.hella, krosstable.lucas, krosstable.magnetimarelli, krosstable.wps, krosstable.bcc, krosstable.prestolite, krosstable.volvo, krosstable.yam, krosstable.hbb, krosstable.mazda, krosstable.daewoo, krosstable.gmm, krosstable.maz, krosstable.pmx, krosstable.unipoint, krosstable.citroen, krosstable.nissan, krosstable.reparts, krosstable.bll, krosstable.acdelco, krosstable.generalmotors, krosstable.brillance, krosstable.komatsu, krosstable.nikko, krosstable.wll, krosstable.vag, krosstable.hino, krosstable.sawafuji, krosstable.poong_sung, krosstable.motorola, krosstable.cat, krosstable.hyster, krosstable.skk, krosstable.pee, krosstable.magneton, krosstable.case, krosstable.deutz, krosstable.mahle, krosstable.khd, krosstable.iskra, krosstable.hitachi, krosstable.john_deere, krosstable.vww, krosstable.denso, krosstable.general_motors, krosstable.opel FROM `alternators` INNER JOIN `krosstable` ON alternators.voltag = krosstable.linkalternator INNER JOIN `krosstablefilter` ON krosstablefilter.linkalternator = krosstable.linkalternator WHERE krosstable.linkalternator LIKE '%".$search."%'	
	  OR alternators.autovalenter LIKE '%".$search."%'
	  OR alternators.link LIKE '%".$search."%'
	  OR alternators.psh LIKE '%".$search."%'
	  OR alternators.wood LIKE '%".$search."%'
	  OR alternators.waiglobal LIKE '%".$search."%'
	  OR krosstable.bosch LIKE '%".$search."%'
	  OR krosstable.mitsubishi LIKE '%".$search."%'
	  OR krosstable.delco LIKE '%".$search."%'
	  OR krosstable.renault LIKE '%".$search."%'
	  OR krosstable.mercedesbenz LIKE '%".$search."%'
	  OR krosstable.ford LIKE '%".$search."%'
	  OR krosstable.valeo LIKE '%".$search."%'
	  OR krosstable.ass1 LIKE '%".$search."%'
	  OR krosstable.cas LIKE '%".$search."%'
	  OR krosstable.hyundai LIKE '%".$search."%'
	  OR krosstable.kia LIKE '%".$search."%'
	  OR krosstable.krauf LIKE '%".$search."%'
	  OR krosstable.mando LIKE '%".$search."%'
	  OR krosstable.messmer LIKE '%".$search."%'
	  OR krosstable.motorherz LIKE '%".$search."%'
	  OR krosstable.zaufer LIKE '%".$search."%'
	  OR krosstable.wai LIKE '%".$search."%'
	  OR krosstable.hc_parts LIKE '%".$search."%'
	  OR krosstable.hella LIKE '%".$search."%'
	  OR krosstable.lucas LIKE '%".$search."%'
	  OR krosstable.magnetimarelli LIKE '%".$search."%'
	  OR krosstable.wps LIKE '%".$search."%'
	  OR krosstable.bcc LIKE '%".$search."%'
	  OR krosstable.prestolite LIKE '%".$search."%'
	  OR krosstable.volvo LIKE '%".$search."%'
	  OR krosstable.yam LIKE '%".$search."%'
	  OR krosstable.hbb LIKE '%".$search."%'
	  OR krosstable.mazda LIKE '%".$search."%'
	  OR krosstable.daewoo LIKE '%".$search."%'
	  OR krosstable.gmm LIKE '%".$search."%'
	  OR krosstable.maz LIKE '%".$search."%'
	  OR krosstable.pmx LIKE '%".$search."%'
	  OR krosstable.unipoint LIKE '%".$search."%'
	  OR krosstable.citroen LIKE '%".$search."%'
	  OR krosstable.reparts LIKE '%".$search."%'
	  OR krosstable.bll LIKE '%".$search."%'
	  OR krosstable.acdelco LIKE '%".$search."%'
	  OR krosstable.generalmotors LIKE '%".$search."%'
	  OR krosstable.brillance LIKE '%".$search."%'
	  OR krosstable.komatsu LIKE '%".$search."%'
	  OR krosstable.nikko LIKE '%".$search."%'
	  OR krosstable.wll LIKE '%".$search."%'
	  OR krosstable.vag LIKE '%".$search."%'
	  OR krosstable.hino LIKE '%".$search."%'
	  OR krosstable.sawafuji LIKE '%".$search."%'
	  OR krosstable.poong_sung LIKE '%".$search."%'
	  OR krosstable.motorola LIKE '%".$search."%'
	  OR krosstable.cat LIKE '%".$search."%'
	  OR krosstable.hyster LIKE '%".$search."%'
	  OR krosstable.skk LIKE '%".$search."%'
	  OR krosstable.pee LIKE '%".$search."%'
	  OR krosstable.magneton LIKE '%".$search."%'
	  OR krosstable.case LIKE '%".$search."%'
	  OR krosstable.deutz LIKE '%".$search."%'
	  OR krosstable.mahle LIKE '%".$search."%'
	  OR krosstable.khd LIKE '%".$search."%'
	  OR krosstable.iskra LIKE '%".$search."%'
	  OR krosstable.hitachi LIKE '%".$search."%'
	  OR krosstable.john_deere LIKE '%".$search."%'
	  OR krosstable.vww LIKE '%".$search."%'
	  OR krosstable.denso LIKE '%".$search."%'
	  OR krosstable.general_motors LIKE '%".$search."%'
	  OR krosstable.opel LIKE '%".$search."%'
	  OR krosstable.nissan LIKE '%".$search."%'
	  OR krosstable.cargo LIKE '%".$search."%'
      ORDER BY id DESC LIMIT 12";
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

     if ($row['ch10_2'] != NULL){
    $ch10_2 = '<p class="productInf1">'.$row['ch10'].' : '.$row['ch10_2'].'</p>';
     }else{
      $ch10_2 = '';
     }

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

		$output12 .= '
    <div class="galleryDivvSearch galleryDivv">
        <div class="galleryDivvImg">
            <img style="width: 100%" class="galleryDivvImgBckgroundImg" src="../../img/imgSite/backgroundImgPng.png">
            <a href="article.php?id='. $row['id'] .'" target="_blank">
             <div class="IconsNafoto"></div>
             <img src="'.$row["imgsrc"].'" width="100%">
            </a>
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
           '.$ch7_2.'
           '.$ch8_2.'
           '.$ch9_2.'
           '.$ch10_2.'
        </div>
    </div>

		';
	}
	echo $output12;
}
else
{
	if($output12 = '') {
		echo 'NO DATA';
	}
}
?>

