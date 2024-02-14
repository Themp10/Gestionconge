<?php
 $db_username = 'root';
 $db_password = '';
 $db_name     = 'pf_test';
 $db_host     = 'localhost';
 $db = mysqli_connect($db_host, $db_username, $db_password,$db_name)
        or die('could not connect to database');


        $id_user =  $_SESSION['id_user'];
        $depart = $_POST['depart'];
        $reprise =  $_POST['reprise'];
        $nbj =  $_POST['nbj'];
        $interime =  $_POST['interime'];
        //CALCUL DE LA DIFF
        $inter = date_diff($depart,$reprise);
        $inter->format('%R%a jours');
    // SI LA DIFF EST NULLE AUCUN CHANGEMENT AU NIVEAU DU SOLDE
        if($inter<=0){
            $nbj=$nbj;
        }
    // SINON ON CHANGE LE SOLDE PAR CETTE OPERATION
        else{
            $nbj=$nbj;
        }

        $sql = "INSERT INTO t_conge (id_user,date_sortie,date_reprise,nbj,interime) 
                 VALUES('$id_user','$depart','$reprise','$nbj','$interime')";

         if(mysqli_query($db, $sql)){
             echo '<script type="text/javascript">
                    window.onload = function () { alert("Votre demande de congé a été enregistrée "); } 
             </script>'; 

         } else{
             echo "ERROR: Hush! Sorry $sql. "
                 . mysqli_error($db);
         }
 mysqli_close($db); // fermer la connexion

?>