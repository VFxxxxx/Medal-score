<?
require_once("../connections/db.php");
$sql = "DELETE 
		FROM `sport_type` 
		WHERE `sport_type`.`id` = ".$_POST["sport_type_id"]." ;";
$result = $conn->query($sql);
require_once("../connections/dbclose.php");
?>