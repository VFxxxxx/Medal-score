<?
require_once("../connections/db.php");
require_once("validation.php");

/**
*валидация данных
*/
$_POST["sport_name"] = filterValue($_POST["sport_name"]);

/**
*проверка на наличие такого спорта
*/
$sql = 'SELECT COUNT(*) AS countSportType 
		FROM `olimp_baze`.`sport_type` 
		WHERE `name` = "'.$_POST["sport_name"].'"
		';
$result = $conn->query($sql);
$data = $result->fetch_assoc();

if ($data["countSportType"] == 0) {
	$sql = "INSERT 
			INTO `sport_type` (`id`, `name`, `command_type`) 
			VALUES (NULL, '".$_POST["sport_name"]."', NULL);";
	$result = $conn->query($sql);
}

require_once("../connections/dbclose.php");
?>