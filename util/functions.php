<?php
use PhpOffice\PhpSpreadsheet\Cell\DataType;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\OAuth;
use League\OAuth2\Client\Provider\Google;
//envoi des mail

function send_mail($mail_to,$mail_to_name,$mail_subject){


    require './libraries/PHPMailer-master/src/Exception.php';
    require './libraries/PHPMailer-master/src/PHPMailer.php';
    require './libraries/PHPMailer-master/src/SMTP.php';

    require './vendor/autoload.php';


    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->Mailer = "smtp";

    $mail->SMTPDebug = 0;
    $mail->SMTPAuth   = TRUE;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port       = 465;
    $mail->Host       = "smtp.gmail.com";
    $mail->AuthType = 'XOAUTH2';

    $clientId="756014322783-hdcnearu2g9s6vktuo4gvg2heghksn6s.apps.googleusercontent.com";
    $clientSecret="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";
    $refreshToken="1//03jzaScmPbFCdCgYIARAAGAMSNwF-L9IrEcmWWsWbmnhgpHp7pijxycU-o2PgjuEY-m_1porq6Yz68y13eB57rDrYhM0D7uWzjCY";
    $email='gkpftest2022@gmail.com';

    $mail->oauthUserEmail = $email;
    $mail->oauthClientId = $clientId;
    $mail->oauthClientSecret = $clientSecret;
    $mail->oauthRefreshToken =$refreshToken;


    $provider = new Google(
        [
            'clientId' => $clientId,
            'clientSecret' => $clientSecret,
        ]
    );
    $mail->setOAuth(
        new OAuth(
            [
                'provider' => $provider,
                'clientId' => $clientId,
                'clientSecret' => $clientSecret,
                'refreshToken' => $refreshToken,
                'userName' => $email,
            ]
        )
    );


        $mail_cc="oussamaaboujaafar@gmail.com";
        $mail_cc_name="Oussama";

        $mail->IsHTML(true);
        $mail->SetFrom("gkpftest2022@gmail.com", "PF Gestion des congés");

        $mail->AddAddress($mail_to, $mail_to_name);
        $mail->AddCC($mail_cc, $mail_cc_name);
        $mail->Subject = $mail_subject;

        if ($mail_subject=="Demande en attente de validation"){
            
            $content = file_get_contents('./tt.php');

        }


        $mail->MsgHTML($content); 
        if(!$mail->Send()) {
        echo "Error while sending Email.";

        } else {
        echo "Email sent successfully";
        }

}


function show_label(){
    $errmsg="";
    $errtype="";
    $errtitle="";

    if(isset($_SESSION['errcode'])){

        if($_SESSION['errcode']<100){
            $errtype="danger";
            $errtitle="Erreur";
        }elseif($_SESSION['errcode']>99 & $_SESSION['errcode']<200 ){
            $errtype="success";  
            $errtitle="Succès";
        }elseif ($_SESSION['errcode']>199 ){
            $errtype="warning"; 
            $errtitle="Alert";
        }

        switch ($_SESSION['errcode']) {
            case 1:
                $errmsg="Ancien mot de passe incorrect";  
                break;
            case 2:
                $errmsg="Merci de saisir le nouveau mot de passe"; 
                break;
            case 100:
                $errmsg="Mot de passe changé";   
                break;
        }
        echo '<div class="alert alert-'.$errtype.'">
        <strong>'.$errtitle.'</strong> : '.$errmsg.' !
    </div>';
    }

}

function update_session(){
    include('./db/db_conn.php');
   $email=$_SESSION['email'] ;
   $requete="SELECT  Nom,prenom,status,solde,superieur,id_user,autoriser_interime,interime from users where  email = '".$email."' ";
   $exec_requete = mysqli_query($db,$requete);
   $reponse= mysqli_fetch_array($exec_requete);

   $_SESSION['Nom']=$reponse['Nom'];
   $_SESSION['prenom']=$reponse['prenom'];
   $_SESSION['solde']=$reponse['solde'];
   $_SESSION['superieur']=$reponse['superieur'];
   $_SESSION['status']=$reponse['status']; 
   $_SESSION['interime']=$reponse['interime']; 
   $_SESSION['autoriser_interime']=$reponse['autoriser_interime']; 
   $_SESSION['id_user']=$reponse['id_user'];
}


function interime_autoriser(){
    if ($_SESSION['autoriser_interime']==1){
        echo 'checked';
    }
}
 //get user solde
function get_solde(){
    include('./db/db_conn.php');
        $id=$_SESSION['id_user'];
        $requete = "SELECT solde FROM  users WHERE id_user='".$id."'";
        $exec_requete = mysqli_query($db,$requete);
        $reponse      = mysqli_fetch_array($exec_requete);
        $_SESSION['solde']= $reponse['solde'];
    mysqli_close($db); 
}

//affiche le nombre de demande a valider en attente

function get_notif() {
    include('./db/db_conn.php');
        $sup=$_SESSION['Nom'] .' '.$_SESSION['prenom'];

    if ($_SESSION['status']=="rh"){
        $requete = "SELECT COUNT(*)  FROM  t_conge c WHERE
        validation_sup='validée' and validation_rh='en attente' ";
        
    }elseif ($_SESSION['status']=="resp"){
        $requete = "SELECT COUNT(*) FROM  t_conge c ,users u WHERE
        c.id_user=u.id_user and u.superieur='".$sup."' 
        AND c.validation_sup='en attente' ";
        
    }elseif ($_SESSION['status']=="drh"){
        $requete = "SELECT COUNT(*)  FROM  t_conge c ,users u WHERE
        c.id_user=u.id_user and u.status='rh' and  c.validation_rh='en attente'";
        
    }
        $exec_requete = mysqli_query($db,$requete);
        $reponse      = mysqli_fetch_array($exec_requete);
        $count = $reponse['COUNT(*)'];
        
    if ($count!=0){
        echo "<span class='badge'>".$count;     
    }
    mysqli_close($db); 
}
//revoi active si la page selectionnée est celle passée en parametre
function active($currect_page){
    $url_array =  explode('=', $_SERVER['REQUEST_URI']) ;
    $url = end($url_array);  
    if($currect_page == $url){
        echo "active"; 
    } 
  }
// verifier la session
function check_connected(){
    if(session_status()==PHP_SESSION_NONE){
        session_start();
    }
    
    if(empty($_SESSION['connected'])){
        include('./connect.php');
        exit();
    } 

}
  //choix de la page a afficher en fonction du parametre action
function show_page(){

    switch ($_GET["action"]) {
        case "validation":
            include("./forms/val.php");  
            break;
        case "profil":
            include("./forms/profil.php");  
            break;
        case "saisie":
            include("./forms/saisie.php");  
            break;
        case "adduser":
            include("./forms/adduser.php");  
            break;
        case "demandes":
            include("./forms/demandes.php");  
            break;
        case "deco":
            header('Location: ../connect.php');  
            break;
        case "report_global":
            include("./reporting/report_global.php");  
            break;   
        case "report_solde":
            include("./reporting/report_solde.php");  
        break; 
        case "test":
            include("../test.php");  
        break;     
    }
}

//update/insert user data

function udpate_user(){

    include('./db/db_conn.php');
    unset($_SESSION['errcode']);
    $sql_mdp="SELECT pwd from users where id_user='".$_SESSION['id_user']."'";
    $exec_requete = mysqli_query($db,$sql_mdp);
    $reponse      = mysqli_fetch_array($exec_requete);
    // $reponse['pwd'];
    // $_SESSION['autoriser_interime'];
    echo "<script> alert('".isset($_POST['oldpass'])."')</script>";
    if (isset($_POST['oldpass'])){
       
        if (isset($_POST['newpass'])){

            if ($_POST['oldpass']==$reponse['pwd']){

                $sql_mdp="UPDATE   users set pwd='".$_POST['newpass']."' where id_user='".$_SESSION['id_user']."'";
                $exec_requete = mysqli_query($db,$sql_mdp);
                $_SESSION['errcode']=100;//mdp changé succes
                
            }else{
                $_SESSION['errcode']=1;//mot de passe incorrect
                
            }         
        }else{
            $_SESSION['errcode']=2;//new pass non saisi
        } 
    }

    if (isset($_POST['interime'])){
    
    }

}



// inserer un congé
function insert_data(){

    include('./db/db_conn.php');

           $id_user =  $_SESSION['id_user'];
           $depart = $_POST['depart'];
           $reprise =  $_POST['reprise'];
           $nbj =  $_POST['nbj'];
           $interime =  $_SESSION['interime'];
            
           $sql = "INSERT INTO t_conge (id_user,date_sortie,date_reprise,nbj,interime) 
                    VALUES('$id_user','$depart','$reprise','$nbj','$interime')";

            if(mysqli_query($db, $sql)){
                echo '<script type="text/javascript">
                       window.onload = function () { alert("Votre demande de congé a été envoyé à '.$_SESSION['superieur'].'"); } 
                       </script>'; 

            } 
    mysqli_close($db); 

    send_mail($_SESSION['email_sup'],$_SESSION['superieur'],"Demande en attente de validation");
}


// ajouter un utilsiateur
function insert_user(){

    include('./db/db_conn.php');

           $nom = $_POST['nom'];
           $prenom =  $_POST['prenom'];
           $email =  $_POST['email'];
            $pass=randomPassword();
           $superieur =  $_POST['superieur'];
           $solde =  $_POST['solde'];
           $status =  $_POST['status'];
           $interime =  $_POST['interime'];

           $sql = "INSERT INTO users  (nom,prenom,email,superieur,pwd,status,solde,interime)
                    VALUES('$nom','$prenom','$email','$superieur','$pass','$status','$solde','$interime')";

            if(mysqli_query($db, $sql)){
                echo '<script type="text/javascript">
                        var a= '.$status.';
                       window.onload = function () { alert("Utilisateur ajouter :"+a); } 
                </script>'; 

            } else{
                echo "ERROR: Hush! Sorry $sql. "
                    . mysqli_error($db);
            }

           
    mysqli_close($db); // fermer la connexion
}


// obtenier list des superieur pendant l'ajout d un user
function get_list($DataType){

    include('db/db_conn.php');
    if ($DataType=='sup'){
        $sql = "SELECT CONCAT(Nom,' ',Prenom) AS myrow  FROM users WHERE STATUS='resp'" ;
    }elseif($DataType=='usr'){
        $sql = "SELECT CONCAT(Nom,' ',Prenom) AS myrow  FROM users" ;
    }

    $result = $db->query($sql);
  
    if ($result->num_rows > 0) {
  
      while($row = $result->fetch_assoc()) {
        echo "<option>".$row["myrow"]."</option>";
      }
    }
    $db->close();
  
}

function randomPassword() {
    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $pass = array(); //déclarer sous forme de tableau de chaine de caractères 
    $alphaLength = strlen($alphabet) - 1; 
    for ($i = 0; $i < 8; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass); //rendre le tableau sous forme de chaine de caractères 
}


?>