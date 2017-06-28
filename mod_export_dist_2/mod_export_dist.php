<?php
defined('_JEXEC') or die;

require_once dirname(__FILE__) . '/helper.php';

$db = JFactory::getDbo();

$filter = null;

if (isset($_GET['filter'])) {
  $filter = @mysql_escape_string($_GET['filter']);
}

generateReport($filter);
   
function generateReport($filter){
  
  $db = JFactory::getDBO();
  
  if ($filter !== null) {
    $sql = sprintf('SELECT %s FROM distributors', $filter);
  } else {
    $sql = 'SELECT * FROM distributors';
  }
  
  $db->setQuery($sql);
  $rows = $db->loadAssocList();
  
  $data = "" ;
  $sep = "\t"; 
  
  $fields = (array_keys($rows[0]));
  
  $columns = count($fields);
  for ($i = 0; $i < $columns; $i++) {
    $data .= $fields[$i].$sep;
  }
  
  $data .= "\n";
  
  for($k=0; $k < count( $rows ); $k++) {
     $row = $rows[$k];
     $line = '';
     
     foreach ($row as $value) {
       $value = str_replace('"', '""', $value);
       $line .= '"' . $value . '"' . "\t";
     }
     $data .= trim($line)."\n";
  }
  
  $data = str_replace("\r","",$data);
  
  if (count( $rows ) == 0) {
    $data .= "\n(0) Records Found!\n";
  }
  
  ## Push the report now!
  $name = 'export-invoices';
  header("Content-type: application/octet-stream");
  header("Content-Disposition: attachment; filename=".$name.".xls");
  header("Pragma: no-cache");
  header("Expires: 0");
  header("Lacation: excel.htm?id=yes");
  print $data ;
  die();   
}
