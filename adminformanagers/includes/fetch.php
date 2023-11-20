<?php
$connect12 = mysqli_connect("localhost", "root", "", "relati02_ElitNameHost");
$output12 = '';
if(isset($_POST["query12"]))
{
	$search = mysqli_real_escape_string($connect12, $_POST["query12"]);
	$query12 = "
	SELECT * FROM article 
	WHERE size LIKE '%".$search."%'
	OR zagolovok LIKE '".$search."%' 
	OR suprafata LIKE '%".$search."%' 
	OR producator LIKE '".$search."%' 
	OR tip LIKE '%".$search."%' 
	OR texture LIKE '%".$search."%'
	ORDER BY id DESC
	";
}
else
{
	$query12 = "
	SELECT * FROM article ORDER BY id DESC LIMIT 0";
}
$result12 = mysqli_query($connect12, $query12);
if(mysqli_num_rows($result12) > 0)
{
	$output12 .= '';
	while($row = mysqli_fetch_array($result12))
	{
		$output12 .= '
		    <div style="height: auto; margin-left: 0px; margin-right: 0px;" class="mobversioncatalogcontentCollection">

              <a href="articlemobile.php?id='. $row['id'] .' " target="_blank">

              <div class="footerrtyInside11er">

                          <h2>'.$row["zagolovok"].'</h2>

                          <p>'.$row["suprafata"].'</p> 

                          <p>'. $row['tip'] .'</p>

                          <p>'. $row['texture'] .'</p>


                
                        </div>

              <img class="gradd" src="img/gradik.png">

              <img class="mobversioncatalogcontentCollectionh1"  src="img/imgArt/small/'. $row['imgInterier'] .'">

              </a>
    
            </div>


		';
	}
	echo $output12;
}
else
{
	echo 'Nimic nu a fost gasit';
}
?>

