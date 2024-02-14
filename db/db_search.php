<?php
require_once('../util/functions.php');
include('db_conn.php');
check_connected();

  $k=1;
  $sql="";
if ($_REQUEST['action']=="report_global"){

    $nom=$_REQUEST['nom'];
    $datedebut=$_REQUEST['datedebut'];
    $datefin=$_REQUEST['datefin'];
    $search_by_nom="";
    $search_by_date="";
    
    if ($_REQUEST['nom']!=""){
      
      $search_by_nom=" and CONCAT(u.Nom,' ',u.Prenom)='".$nom."'";

    }
    if ($_REQUEST['datedebut']!="" and $_REQUEST['datefin']!="" ) {
      
      $search_by_date=" AND (STR_TO_DATE(date_sortie,'%d/%m/%Y') BETWEEN STR_TO_DATE('".$datedebut."','%d/%m/%Y')  and STR_TO_DATE('".$datefin."','%d/%m/%Y') )
                        OR (STR_TO_DATE(date_reprise,'%d/%m/%Y') BETWEEN STR_TO_DATE('".$datefin."','%d/%m/%Y')  and STR_TO_DATE('".$datedebut."','%d/%m/%Y') )
      ";

    }

    $sql = "SELECT  u.id_user ,c.id_demande,CONCAT(u.Nom,' ',u.Prenom) AS Demandeur,c.date_demande,c.date_sortie,c.date_reprise,c.nbj,c.interime,c.validation_sup,c.validation_rh  FROM  t_conge c ,users u 
            WHERE c.id_user=u.id_user ".$search_by_nom.$search_by_date;

    
  $result = $db->query($sql);

  if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
      echo "<tr>
              <td id='id_id_".$k."' style='display:none';> ".$row["id_user"]."</td>
              <td id='tdid_".$k."'>".$row["id_demande"]."</td> 
              <td scope='row' style='color: #666666;vertical-align: middle;'>".$row["Demandeur"]."</td>
              <td style='vertical-align: middle;'>".$row["date_demande"]."</td>
              <td style='vertical-align: middle;'>".$row["date_sortie"]."</td>
              <td style='vertical-align: middle;'>".$row["date_reprise"]."</td>
              <td id='nbj_id_".$k."' style='vertical-align: middle;'>".$row["nbj"]."</td>
              <td style='vertical-align: middle;'>".$row["interime"]."</td>";

      $lbltype="";
      $val_sup=$row["validation_sup"];
      $val_rh=$row["validation_rh"];

      if ($val_sup=="validée"){
        $lbltype="success";
      }elseif($val_sup=="refusée"){
        $lbltype="danger";
      }elseif($val_sup=="en attente"){
        $lbltype="warning";
      }

      echo "<td ><span class='lbl ".$lbltype."'>".ucwords($val_sup)."</span></td>"; 

      if ($val_rh=="validée" & $val_sup!="refusée"){
        $lbltype="success";
        echo "<td><span class='lbl ".$lbltype."'>".ucwords($val_rh)."</span></td>"; 
      }elseif($val_rh=="refusée" & $val_sup!="refusée"){
        $lbltype="danger";
        echo "<td><span class='lbl ".$lbltype."'>".ucwords($val_rh)."</span></td>"; 
      }elseif($val_rh=="en attente" & $val_sup!="refusée"){
        $lbltype="warning";
        echo "<td><span class='lbl ".$lbltype."'>".ucwords($val_rh)."</span></td>"; 
      }
      
      

    
            $k+=1;
    }
  } else {
    echo "aucune donnée à afficher !";
  }

}elseif ($_REQUEST['action']=="report_solde"){
  $sql = "SELECT id_user,CONCAT(NOM,' ',prenom) AS utilisateur,solde FROM users";
  $result = $db->query($sql);
  if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
      echo "<tr>
      <td style='vertical-align: middle;'>".$row["id_user"]."</td>
      <td style='vertical-align: middle;'>".$row["utilisateur"]."</td>
      <td style='vertical-align: middle;'>".$row["solde"]."</td>
      <tr/>";
    }
  }
}
  $_SESSION['requete']=$sql;

  $db->close();


  ?>

