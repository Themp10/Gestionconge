<?php
require_once('../util/functions.php');
check_connected();
  $db_username = 'root';
  $db_password = '';
  $db_name     = 'pf_test';
  $db_host     = 'localhost';
  $conn = mysqli_connect($db_host, $db_username, $db_password,$db_name)or die('could not connect to database');
  

  $id=$_REQUEST['id_demande'];
  $id_demandeur=$_REQUEST['id_demandeur'];
  $status=$_SESSION['status'];
  $modification=$_REQUEST['modification'];
  $n_solde=(int)$_SESSION['solde']-(int)$_REQUEST['nbj'];

    if ($status=='rh'){
      
      $sql_update = "UPDATE t_conge SET validation_rh='$modification' WHERE id_demande='$id'";
      $sql_update_solde = "UPDATE users SET solde='$n_solde' WHERE id_user='$id_demandeur'";
    }elseif ($status=='resp'){
        $sql_update = "UPDATE t_conge SET validation_sup='$modification' WHERE id_demande='$id'";
    }elseif ($status=='drh'){
      $sql_update = "UPDATE t_conge SET validation_sup='$modification',validation_rh='$modification' WHERE id_demande='$id'";
  }


  if(mysqli_query($conn, $sql_update)){
    if(mysqli_query($conn, $sql_update_solde) and $status=='resp'){
      echo "Congé validé";
} else{
    echo "ERROR: Hush! Sorry $sql. "
        . mysqli_error($db);
}
} else{
    echo "ERROR: Hush! Sorry $sql. "
        . mysqli_error($db);
}
  $conn->close();
