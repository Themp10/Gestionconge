<!DOCTYPE html>
<html lang="en">


<?php
function insert_data(){

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
}
?>
<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Au Register Forms by Colorlib</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    Main CSS -->
    <link href="css/main.css" rel="stylesheet" media="all">


    <nav class="navbar navbar-inverse navbar-fixed-top">

<div class="navbar-header">
    <a class="navbar-brand" href="#">PF Maroc </a>
  </div>
  <ul class="nav navbar-nav">
    <li class="active"><a href="#">Saisir congé</a></li>
  </ul>
  <ul class="nav navbar-nav">
    <li ><a href="#">Validation</a></li>
  </ul>
  <ul class="nav navbar-nav">
    <li ><a href="#">Reporting</a></li>
  </ul>
  <ul class="nav navbar-nav navbar-right">
    <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Deconnexion </a></li>
  </ul>
</div>
</nav>
</head>

<?php
                session_start();
                if($_SESSION['id_user'] !== ""){
                    $Nom = $_SESSION['Nom'];
                    $prenom=$_SESSION['prenom'] ;
                    $solde=$_SESSION['solde'] ;
                    $superieur=$_SESSION['superieur'] ;
                    $id_user=$_SESSION['id_user'] ;
                }
                // if($_SERVER['REQUEST_METHOD']=='POST'){
                //     insert_data();
                // }
                // if(isset($_POST['envoyer'])) {
                //     insert_data();
                // }
                // if(isset($_POST['disconnect'])) {
                //     echo "This is Button2 that is selected";
                // }

?>

<body>



<div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins" style="margin-top: 0px;border-top-width: 5px;border-top-style: solid;padding-top: 130px;">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Demande de congé</h2>
                    <form method="POST" >
                        <div class="row row-space">

                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Nom</label>
                                    <input class="input--style-4" type="text" name="Nom" value="<?php echo $Nom; ?>" disabled>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Prenom</label>
                                    <input class="input--style-4" type="text" name="Prenom" value="<?php echo $prenom; ?>" disabled>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Supérieur</label>
                                    <input class="input--style-4" type="text" name="superieur" value="<?php echo $superieur; ?>" disabled>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Solde</label>
                                    <input class="input--style-4" type="text" name="solde" value="<?php echo "$solde Jours"; ?>" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Date Départ</label>
                                    <div class="input-group-icon">
                                        <input class="input--style-4 js-datepicker" type="text" name="depart" required>
                                        <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Date Reprise</label>
                                    <div class="input-group-icon">
                                        <input class="input--style-4 js-datepicker" type="text" name="reprise" required>
                                        <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row row-space">
                        <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Nombre de jours</label>
                                    <input class="input--style-4" type="text" name="nbj" required>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Interime</label>
                                    <input class="input--style-4" type="text" name="interime" >
                                </div>
                            </div>
                        </div>
                    
                        <div class="p-t-15">
                            <button class="btn btn--radius-2 btn--green" type="submit" >Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


   

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->