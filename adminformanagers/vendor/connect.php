<?php

    $connect = mysqli_connect('localhost', 'root', '', 'valenterauto');

    if (!$connect) {
        die('Error connect to DataBase');
    }