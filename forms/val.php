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
                    <center><h2 class="title">Validation des Demandes </h2></br></center>
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
                        <th scope="col">Nbe de jours</th>
                        <th scope="col">Interime</th>
                        <th scope="col" style="text-align:center;">Validation</th>
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




 function update_demande(id,etat,nbj,id_demandeur) {

var http = new XMLHttpRequest();
var url = './db/db_send.php';
var params = 'id_demande='+id+'&modification='+etat+'&nbj='+nbj+'&id_demandeur='+id_demandeur;
 http.open('POST', url, true);
//Send the proper header information along with the request
http.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
http.onreadystatechange = function() {//Call a function when the state changes.
    if(http.readyState == 4 && http.status == 200) {
      }
}
http.send(params);

showtable();
}

function update_data(rowid,etat){

var id_demande= parseInt(document.getElementById('tdid_'+rowid).innerHTML);
var nbj= parseInt(document.getElementById('nbj_id_'+rowid).innerHTML);
var id_demandeur= parseInt(document.getElementById('id_id_'+rowid).innerHTML);
update_demande(id_demande,etat,nbj,id_demandeur) ;
alert("Demande "+etat +" avec succés !");
if(document.getElementsByClassName('badge')[0].textContent=="1"){
  const e = document.querySelector(".badge");
            e.parentElement.removeChild(e);
}else{
  document.getElementsByClassName('badge')[0].textContent=document.getElementsByClassName('badge')[0].textContent-1 
}

}
</script>