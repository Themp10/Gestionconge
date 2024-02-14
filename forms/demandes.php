<?php
require_once('./util/functions.php');

check_connected();
?>
<form action="db_connexion.php" method="POST">
    <div class="gradient-custom-1 h-100">
        <div class="mask d-flex align-items-center h-100">
          <div class="container tab">
            <div class="row justify-content-center">
              <div class="col-12">
                <div class="table-responsive tshadow bg-white">
                    <center><h2 class="title">Mes Demandes </h2></br></center>
                    <table class="table mb-0 table-striped" id="my_table">
                    <thead>
                      <tr>
                        <th scope="col">
                            <button type='button' >
                                <i class="fa fa-retweet"  onclick="showtable()" title="Actualiser"></i>
                            </button>
                        </th>
                        <th scope="col">Demandeur</th>
                        <th scope="col">Date demande</th>
                        <th scope="col">Date sortie</th>
                        <th scope="col">Date reprise</th>
                        <th scope="col">Nb J</th>
                        <th scope="col">Interime</th>
                        <th scope="col">Validation Sup</th>
                        <th scope="col">Validation Rh</th>
                      </tr>
                    </thead>
                    <tbody id="liste_demande">

                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
</form>
<script>
 window.onload = function () { showtable(); };
function showtable() {
    
  var param ='<?php 
    $url_array =  explode('=', $_SERVER['REQUEST_URI']) ;
    $action = end($url_array);  
    echo $action;
    ?>';
  var url='db/db_data.php?action='+param;
  var xmlhttp=new XMLHttpRequest(); 
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("liste_demande").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET",url,true);
  xmlhttp.send();
}


</script>