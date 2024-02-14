<?php
include('db_conn.php');
session_start();

if(isset($_POST['email']) && isset($_POST['pass']))
{

    $email = mysqli_real_escape_string($db,htmlspecialchars($_POST['email'])); 
    $pass = mysqli_real_escape_string($db,htmlspecialchars($_POST['pass']));
    
    if($email !== "" && $pass !== "")
    {
        $requete = "SELECT count(*) FROM users where email = '".$email."' and pwd = '".$pass."' ";
        $exec_requete = mysqli_query($db,$requete);
        $reponse      = mysqli_fetch_array($exec_requete);
        $count = $reponse['count(*)'];

        if($count!=0) // nom d'utilisateur et mot de passe correctes
        {
           $_SESSION['email'] = $email;
           $requete="SELECT  Nom,prenom,status,solde,superieur,id_user,autoriser_interime,interime from users where  email = '".$email."' ";
           $exec_requete = mysqli_query($db,$requete);
           $reponse= mysqli_fetch_array($exec_requete);

           $_SESSION['conn']=$db;
           $_SESSION['Nom']=$reponse['Nom'];
           $_SESSION['prenom']=$reponse['prenom'];
           $_SESSION['solde']=$reponse['solde'];
           $_SESSION['superieur']=$reponse['superieur'];
           $_SESSION['id_user']=$reponse['id_user'];
           $_SESSION['status']=$reponse['status']; 
           $_SESSION['interime']=$reponse['interime']; 
           $_SESSION['autoriser_interime']=$reponse['autoriser_interime']; 
           $_SESSION['connected']=1; 

           $requete="SELECT email FROM users WHERE concat(nom,' ',prenom)=(SELECT  superieur from users where  id_user=".$_SESSION['id_user'].")";
           $exec_requete = mysqli_query($db,$requete);
           $reponse= mysqli_fetch_array($exec_requete);
           $_SESSION['email_sup']=$reponse['email']; 
           
           if($_SESSION['status']=='usr'){
            header('Location: ../app.php?action=saisie');
           }elseif($_SESSION['status']=='resp'){
            header('Location: ../app.php?action=saisie');
           }else{
            header('Location: ../app.php?action=saisie');
           }
           
        }
        else
        {
           header('Location: ../connect.php?erreur=1'); // utilisateur ou mot de passe incorrect
        }
    }
    else
    {
       header('Location: ../connect.php?erreur=2'); // utilisateur ou mot de passe vide
    }
}
else
{
   header('Location: ../index.php');
}
mysqli_close($db); // fermer la connexion
?>