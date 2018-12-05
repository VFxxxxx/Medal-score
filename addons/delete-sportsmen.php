<?
require_once("../connections/db.php");
$sql = "DELETE 
		FROM `sportsmens` 
		WHERE `sportsmens`.`id` = ".$_POST["sportsmen_id"]." ;";
$result = $conn->query($sql);
require_once("../connections/dbclose.php");
?>