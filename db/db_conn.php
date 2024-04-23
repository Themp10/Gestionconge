<?php

if(session_status()==PHP_SESSION_NONE){
    session_start();
}

// if(empty($_SESSION['connected'])){
//     include('../index.php');
//     exit();
// } 
    // connexion à la base de données
    $db_username = 'sa';
    $db_password = 'MG+P@ssw0rd';
    $db_name     = 'pf_test';
    $db_host     = '172.28.0.22';
    $db = mysqli_connect($db_host, $db_username, $db_password,$db_name)
           or die('could not connect to database');

?>