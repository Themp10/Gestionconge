

<?php
require_once('./util/functions.php');

check_connected();
?>

<center><h2 class="title">Rapport Global </h2></br></center>
<div class="row row-space">
    <div class="col-4" >
        <div class="input-group">
                <input class="input--style-4" list="list_usr"   name="nom" placeholder="Nom" style="width:180px;">
                    <datalist id="list_usr">
                        <?php get_list('usr') ?>
                    </datalist>
        </div> 
            
    </div>
    <div class="col-4">
        <div class="input-group">
                <div class="input-group-icon">
                    <input class="input--style-4 js-datepicker" type="text" name="ddebut"  placeholder="Date Début" style="width:180px;">
                    <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                </div>
        </div>
    </div>
    <div class="col-4">
        <div class="input-group">
                <div class="input-group-icon">
                    <input class="input--style-4 js-datepicker" type="text" name="dfin"  placeholder="Date fin" style="width:180px;" >
                    <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                </div>
        </div>
    </div>
    <div class="col-4">
        <div id="search_btn" class="input-group" >
        <span class="fa fa-search"></span> <button  onclick="showtable()">Chercher</button>  
        </div>
    </div>

</div>
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
              <div class="col-12">
                <div class="table-responsive tshadow bg-white">
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
<script>
 window.onload = function () { showtable(); };
function showtable() {

  var param ='<?php 
    $url_array =  explode('=', $_SERVER['REQUEST_URI']) ;
    $action = end($url_array);  
    echo $action;
    ?>';

  var nom=document.getElementsByName('nom')[0].value;
  var datedebut=document.getElementsByName('ddebut')[0].value;
  var datefin=document.getElementsByName('dfin')[0].value;
  var url='db/db_search.php?nom='+nom+'&datedebut='+datedebut+'&datefin='+datefin+'&action='+param;
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






















