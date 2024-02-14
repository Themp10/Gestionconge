<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Gestion des congés">
  <meta name="author" content="UniqSystem">
  <link href="css/login.css" rel="stylesheet" media="all">
  <title>Gestion des congés</title>
  <link rel="shortcut icon" href="assets/img/favicon_pf.webp" type="image/png">
  <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
</head>

<body>

  <div class="login-root">
    <div class="box-root flex-flex flex-direction--column" style="min-height: 100vh;flex-grow: 1;">
      <div class="loginbackground box-background--white padding-top--64">
        <div class="loginbackground-gridContainer">
          <div class="box-root flex-flex" style="grid-area: top / start / 8 / end;">
            <div class="box-root" style="background-image: linear-gradient(white 0%, rgb(247, 250, 252) 33%); flex-grow: 1;">
            </div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 4 / 2 / auto / 5;">
            <div class="box-root box-divider--light-all-2 animationLeftRight tans3s" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 6 / start / auto / 2;">
            <div class="box-root box-background--blue800" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 7 / start / auto / 4;">
            <div class="box-root box-background--blue animationLeftRight" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 8 / 4 / auto / 6;">
            <div class="box-root box-background--gray100 animationLeftRight tans3s" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 2 / 15 / auto / end;">
            <div class="box-root box-background--cyan200 animationRightLeft tans4s" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 3 / 14 / auto / end;">
            <div class="box-root box-background--blue animationRightLeft" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 4 / 17 / auto / 20;">
            <div class="box-root box-background--gray100 animationRightLeft tans4s" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 5 / 14 / auto / 17;">
            <div class="box-root box-divider--light-all-2 animationRightLeft tans3s" style="flex-grow: 1;"></div>
          </div>
        </div>
      </div>
      <div class="box-root  flex-flex flex-direction--column" style="flex-grow: 1; z-index: 9;">
        <div class="box-root  flex-flex flex-justifyContent--center">
          <div class="mainscreen">
  <div class="toppart"></div>
  <div class="bottompart">
    <div class="imgpart">
      
<img class="logo" src="assets/img/pfl.png" alt="" width="100%">
  </div>
    <div class="formpart">

      <form action="db/db_login.php" method="POST">
        <center><h2>Gestion des congés</h2></center>
        <div class="text-wrapper">
          <input class="input" type="text" placeholder="Email" name="email" required/>
          <label for="email">EMAIL</label>
        </div>
        <div class="text-wrapper">
          <input class="input" type="password" placeholder="Mot de passe" name="pass" required/>
          <label for="pass">MOT DE PASSE</label>
        </div>
        <center><button class="submitbtn" type="submit">SE CONNECTER</button></center>
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
      </div>
    </div>
  </div>
</body>



    <!-- Main JS-->
    <script src="js/global.js"></script>

</body>

</html>
