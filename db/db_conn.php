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
    $db_password = 'Thethepo06+';
    $db_name     = 'pf_test';
    $db_host     = '127.0.0.1';
    $db = mysqli_connect($db_host, $db_username, $db_password,$db_name)
           or die('could not connect to database');

?>