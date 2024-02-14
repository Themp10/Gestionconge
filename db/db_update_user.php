<?php
require_once('../util/functions.php');
include('db_conn.php');
check_connected();

$sql_mdp="SELECT pwd from users where id_user='".$_SESSION['id_user']."'";
$exec_requete = mysqli_query($db,$sql_mdp);
$reponse      = mysqli_fetch_array($exec_requete);
$reponse['pwd'];

if (isset($_POST['oldpass'])){

    if ($_POST['newpass']==$reponse['pwd']){
        if (isset($_POST['newpass'])){

        }
    }else{
        echo "mot de passe incorrect !";
    }


}

if (isset($_POST['interime'])){

}
?>