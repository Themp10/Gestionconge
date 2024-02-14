<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="Gestion des congés">
      <meta name="author" content="UniqSystem">
    

    <!-- Title Page-->
    <title>Gestion des congés</title>
    
    <link rel="shortcut icon" href="assets/img/favicon_pf.webp" type="image/png">

    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-02 p-t-10 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">

                    <center><h2 class="title">Gestion desb congés</h2></center>

                        
                    <img src="images/avatar-01.jpg" alt="AVATAR">


                    <form action="db/db_login.php" method="POST">
                        <div class="row row-space">

                            <div class="col-1">
                            <div class="input-group">
                                    <label class="label">Email</label>
                                    <input class="input--style-4" type="email" name="email" >
                                </div>
                            </div>
                            
                        </div>
                        <div class="row row-space">
                            <div class="col-1">
                                <div class="input-group">
                                    <label class="label">Mot de passe</label>
                                    <input class="input--style-4" type="password" name="pass">
                                </div>
                            </div>
                        </div>
                        <div class="p-t-15">
                            <center>
                                <button class="btn btn--radius-2 btn--blue" type="submit" style="width: 200px !important;height: 50px !important;">Se connecter</button>
                            </center>
                        </div>
                        
                        <?php
               			 if(isset($_GET['erreur'])){
                    		$err = $_GET['erreur'];
                    		if($err==1 || $err==2)
                        	echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                		}
                	?>
                    </form>
                </div>
            </div>
        </div>
    </div>


</body>

</html>
<!-- end document-->