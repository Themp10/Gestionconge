<?php
require_once('../util/functions.php');
include('db_conn.php');
check_connected();

  $k=1;
  $sup=$_SESSION['Nom'] .' '.$_SESSION['prenom'];
  
 $sql="";

  if ($_REQUEST['action']=="demandes"){
    
    $sql = "SELECT c.*, CONCAT(u.Nom,' ',u.Prenom) AS Demandeur FROM  t_conge c ,users u WHERE
    c.id_user=u.id_user and c.id_user='".$_SESSION['id_user']."'";

  }else{
    if ($_SESSION['status']=="resp"){
      $sql = "SELECT c.*, CONCAT(u.Nom,' ',u.Prenom) AS Demandeur FROM  t_conge c ,users u WHERE
      c.id_user=u.id_user and c.validation_sup='en attente' and u.superieur='$sup'";
    }elseif($_SESSION['status']=="rh"){
      $sql = "SELECT c.*, CONCAT(u.Nom,' ',u.Prenom) AS Demandeur FROM  t_conge c ,users u WHERE
      c.id_user=u.id_user and c.validation_sup='validée' and  c.validation_rh='en attente'";
    }else{
      $sql = "SELECT c.*, CONCAT(u.Nom,' ',u.Prenom) AS Demandeur FROM  t_conge c ,users u WHERE
      c.id_user=u.id_user and u.status='rh' and  c.validation_rh='en attente'";
    }
  }



  
  $result = $db->query($sql);

  if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
      echo "<tr>
              <td id='id_id_".$k."' style='display:none';> ".$row["id_user"]."</td>
              <td style='vertical-align: middle;' id='tdid_".$k."'>".$row["id_demande"]."</td> 
              <td scope='row' style='color: #666666;vertical-align: middle;'>".$row["Demandeur"]."</td>
              <td style='vertical-align: middle;'>".$row["date_demande"]."</td>
              <td style='vertical-align: middle;'>".$row["date_sortie"]."</td>
              <td style='vertical-align: middle;'>".$row["date_reprise"]."</td>
              <td id='nbj_id_".$k."' style='vertical-align: middle;'>".$row["nbj"]."</td>
              <td style='vertical-align: middle;'>".$row["interime"]."</td>";



  if ($_REQUEST['action']=="demandes" ){

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

      if ($val_rh=="validée"){
        $lbltype="success";
        echo "<td><span class='lbl ".$lbltype."'>".ucwords($val_rh)."</span></td>"; 
      }elseif($val_rh=="refusée"){
        $lbltype="danger";
        echo "<td><span class='lbl ".$lbltype."'>".ucwords($val_rh)."</span></td>"; 
      }
      elseif($val_rh=="en attente"){
        $lbltype="warning";
        if ($val_sup=="validée"){
          echo "<td><span class='lbl ".$lbltype."'>".ucwords($val_rh)."</span></td>"; 
        }else{
          
          echo "<td></td>";
        }
      }

  }else{

        echo " <td><button type='button' class='btn btn-danger btn-sm px-3 btn-val' onclick='update_data(this.parentNode.parentNode.rowIndex,\"refusée\")'>
                <i class='fas fa-times'></i>
              </button>
              <button type='button' class='btn btn-warning btn-sm px-3 btn-val'  onclick='update_data(this.parentNode.parentNode.rowIndex,\"retournée\")'>
                <i class='fas fa-undo'></i>
              </button>
              <button type='button' class='btn btn-success btn-sm px-3 btn-val'  onclick='update_data(this.parentNode.parentNode.rowIndex,\"validée\")'>
                <i class='fas fa-check'></i>
              </button></td>
              </tr>";


  }
     
            $k+=1;
    }
  } else {

  }
  $db->close();


  ?>

