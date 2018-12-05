<?
require_once("../connections/db.php");
$sql = "DELETE 
		FROM `countries` 
		WHERE `countries`.`id` = ".$_POST["countries_id"]." ;";
$result = $conn->query($sql);
require_once("../connections/dbclose.php");
?>