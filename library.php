<?php 
function h($value){
  return htmlspecialchars($value , ENT_QUOTES);

}
function dbconnect(){
  	$db = new mysqli('' , '' ,'' ,'' , );
	if ($db->connect_error) {
		die('Connect error' .$db->connect_error);
	}
  return $db;
}


?>

