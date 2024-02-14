<?php
require_once('functions.php');
check_connected();
get_solde();

?>


<!DOCTYPE html>
<html lang="en">

<header>

      <!-- Required meta tags-->
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="Gestion des congés">
      <meta name="author" content="UniqSystem">
    



      <script src="js/jquery.min.js"></script>
     
      <!-- <link href="css/css.css" rel="stylesheet" media="all"> -->
      
      
      <script src="js/all.js"></script>
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <script src="js/bootstrap.min.js"></script>

      <!-- Title Page-->
      <title>Gestion des congés</title>
      <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
      <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
      <!-- Font special for pages-->
      <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

      <!-- Vendor CSS-->
      <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
      <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

      <!-- Main CSS-->
      <link href="css/main.css" rel="stylesheet" media="all">
      <link href="css/bg.css" rel="stylesheet" media="all">
      <!-- Main JS-->
      <!-- <script src="vendor/jquery/jquery.min.js"></script> -->
      <script src="vendor/select2/select2.min.js"></script>
      <!-- <script src="vendor/datepicker/moment.min.js"></script>
      <script src="vendor/datepicker/daterangepicker.js"></script> -->
      <script src="js/myjs.js"></script>
</header>

<head>

  <nav class="navbar navbar-fixed-top bg-dark "  style="background-color: white;border-bottom-width: 5px;border-color: black;border-style: ridge;">

     <div class="navbar-header">
      <a >
              <img src="./assets/img/logo.png" >
        </a>
      </div>

        <ul class="nav navbar-nav" >
          <li class="<?php active("saisie")?>"><a href="app.php?action=saisie">Saisir congé</a></li>
        </ul>
        <ul class="nav navbar-nav">
          <li class="<?php active("demandes")?>"><a href="app.php?action=demandes">Mes demandes </span></a></li>
        </ul>
        <!-- <ul class="nav navbar-nav">
          <li class="<?php active("demandes")?>"><a href="app.php?action=demandes">Demandes retournées</span></a></li>
        </ul> -->

        <?php if($_SESSION['status']=="resp" or $_SESSION['status']=="rh" or $_SESSION['status']=="drh")  : ?>
        <ul class="nav navbar-nav">
          <li class="<?php active("validation")?>"><a href="app.php?action=validation">Validation <?php get_notif()?></a></li>
        </ul>
        <?php endif; ?>
        <?php if($_SESSION['status']=="rh" or $_SESSION['status']=="drh")  : ?>
        <ul class="nav navbar-nav">
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Reporting
            <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="app.php?action=report_global">Rapport global</a></li>
                <li><a href="app.php?action=report_solde">Solde des employés</a></li>
              </ul>
          </li>
          <!-- <li class="<?php active("report");?>"><a >Reporting</a></li> -->
        </ul>
        <ul class="nav navbar-nav">
          <li class="<?php active("adduser");?>"><a href="app.php?action=adduser">Ajouter utlisateur</a></li>
        </ul>
      <?php endif; ?>

      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown"  class="fa fa-user-circle"><?php echo $_SESSION['Nom'].' '.$_SESSION['prenom']; ?>
            <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="app.php?action=profil"><span class="fa fa-user-circle"></span> Profil </a></li>
                <li class="divider"></li>
                <li><a href="deco.php"><span class="glyphicon glyphicon-log-out"></span> Deconnexion </a></li>
              </ul>
        </li>
      </ul> 

      <ul class=' nav navbar-nav navbar-right' >
        <li><a style="font-size: 3rem;"><span id="nbjsolde">Solde : <?php echo $_SESSION['solde'];echo  ($_SESSION['solde']==1) ? ' jour' : ' jours'; ?></span> </a></li>
      </ul> 
          
  

    </div>
  </nav>
</head>
