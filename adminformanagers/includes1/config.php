<?php 


if(session_id() == '') {
    session_start();
}
//database_connection.php



$connect = new PDO("mysql:host=localhost;dbname=valenterauto", "root", "");



?>