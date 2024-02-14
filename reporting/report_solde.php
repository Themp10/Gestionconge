

<?php
require_once('./util/functions.php');

check_connected();
?>

<center><h2 class="title">Solde des employés </h2></br></center>

<center>
  <a href="util/db_toexcel.php" class="btn btn--radius-2 btn--blue btnrpt" name="export" > 
    <span class="fa fa-download"></span> 
    Exporter les données
</a>
</center>

    <div class="gradient-custom-1 h-100">
        <div class="mask d-flex align-items-center h-100">
          <div class="container tab">
            <div class="row justify-content-center">
              <div class="col-12" style="width: 100%;">
                <div class="table-responsive tshadow bg-white">
                    <table class="table mb-0 table-striped" id="my_table">
                    <thead>
                      <tr>
                        <th scope="col">
                            <button type='button' >
                                <i class="fa fa-retweet"  onclick="showtable()" title="Actualiser"></i>
                            </button>
                        </th>
                        <th scope="col">Employé</th>
                        <th scope="col">solde</th>

                      </tr>
                    </thead>
                    <tbody id="liste_solde">

                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
<script>
 window.onload = function () { showtable(); };
function showtable() {

  var param ='<?php 
    $url_array =  explode('=', $_SERVER['REQUEST_URI']) ;
    $action = end($url_array);  
    echo $action;
    ?>';

  var url='db/db_search.php?action='+param;
  var xmlhttp=new XMLHttpRequest(); 
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("liste_solde").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET",url,true);
  xmlhttp.send();
}


</script>






















