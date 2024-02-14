<?php
check_connected();
function get_data(){
  $db_username = 'root';
  $db_password = '';
  $db_name     = 'pf_test';
  $db_host     = 'localhost';
  $conn = mysqli_connect($db_host, $db_username, $db_password,$db_name)or die('could not connect to database');
  
  $sql = "SELECT c.*, CONCAT(u.Nom,' ',u.Prenom) AS Demandeur FROM  t_conge c ,users u WHERE c.id_user=u.id_user";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
      echo "<tr>
              <td scope='row' style='color: #666666;'>".$row["Demandeur"]."</td>
              <td>".$row["date_demande"]."</td>
              <td>".$row["date_sortie"]."</td>
              <td>".$row["date_reprise"]."</td>
              <td>".$row["nbj"]."</td>
              <td>".$row["interime"]."</td>
              <td><button type='button' class='btn btn-danger btn-sm px-3'>
              <i class='fas fa-times'></i>
            </button>
  
            <button type='button' class='btn btn-success btn-sm px-3 refresher'>
              <i class='fas fa-check'></i>
            </button></td>
              </tr>";
    }
  } else {
    echo "Aucune demande en attente";
  }
  $conn->close();

}


?>
<form action="db_connexion.php" method="POST">
    <div class="gradient-custom-1 h-100">
        <div class="mask d-flex align-items-center h-100">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-12">
                <div class="table-responsive tshadow bg-white">
                    <center><h2 class="title">Validation des Demandes </h2></br></center>
                  <table class="table mb-0 table-striped" id="my_table">
                    <thead>
                      <tr>
                        <th scope="col">Demandeur</th>
                        <th scope="col">Date demande</th>
                        <th scope="col">Date sortie</th>
                        <th scope="col">Date reprise</th>
                        <th scope="col">Nombre de jours</th>
                        <th scope="col">Interime</th>
                        <th scope="col">Validation</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <?php
                        get_data();
                        ?>
                      </tr>
                      
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
</form>
