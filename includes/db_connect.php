

<?php
  
  $db_host = 'localhost';
  $db_user = 'dev';
  $db_pass = 'valenter1960';
  $db_database = 'valenterauto';

  $link = mysqli_connect($db_host,$db_user,$db_pass);

  mysqli_select_db($link, $db_database) or die("NO DATA ");

?>

<?php 
