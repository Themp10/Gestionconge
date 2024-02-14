<?PHP
require_once('../db/db_conn.php');
  function conv(&$str){
    	
    $str=iconv( 'UTF-8' ,'Windows-1252', $str);
  }
  function cleanData(&$str)
  {
    $str = preg_replace("/\t/", "\\t", $str);
    $str = preg_replace("/\r?\n/", "\\n", $str);
    if(strstr($str, '"')) $str = '"' . str_replace('"', '""', $str) . '"';
  }

  // file name for download
  $filename = "export" . date('Ymd') . ".xls";
  $fields = array('N° Utilisateur','N° Demande','Demandeur', 'Date Demande', 'Date Sortie', 'Date reprise','Nombre de jours', 'Interime', 'Validation sup', 'Validation RH'); 
  $excelData = implode("\t", array_values($fields))."\n"; 
  header("Content-Disposition: attachment; filename=\"$filename\"");
  header("Content-Type: application/vnd.ms-excel");

  $sql=$_SESSION['requete'];
$query = $db->query($sql); 

  foreach($query as $row) {
    array_walk($row, '\cleanData');
    array_walk($row, '\conv');
    $excelData .= implode("\t", array_values($row)) . "\r\n";
  }
  echo $excelData;
  exit;
?>