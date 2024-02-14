<?php
require_once('./util/functions.php');
//check_connected();
include('./util/header.php');
//update_session();
if($_SESSION['id_user'] !== ""){
    $Nom = $_SESSION['Nom'];
    $prenom=$_SESSION['prenom'] ;
    $solde=$_SESSION['solde'] ;
    $superieur=$_SESSION['superieur'] ;
    $id_user=$_SESSION['id_user'] ;
    $status=$_SESSION['status'] ;

}

    if($_SERVER['REQUEST_METHOD']=='POST'){


        if ($_GET['action']=="adduser"){
            insert_user();        
        }elseif($_GET['action']=="saisie"){
            insert_data();
            
        }elseif($_GET['action']=="profil"){
            udpate_user();
            
        }
        
        
    }
                
?>

<body>


    <div class="page-wrapper bg-gra-01 p-t-30 p-b-100 font-poppins" >    
        <div class="wrapper wrapper--w960" >          
            <div class="card card-4" >
                <div class="card-body" >
                    <?php show_label();?>    
                    <?php show_page();?>                  
                </div>
            </div>
        </div> 
    </div>


</body>

</html>

