<?
require_once("../connections/db.php");
require_once("validation.php");

/**
*валидация данных
*/
$_POST["sportsmen_name"] = filterValue($_POST["sportsmen_name"]);
$_POST["sportsmen_surname"] = filterValue($_POST["sportsmen_surname"]);
$_POST["sportsmen_county_id"] = filterValue($_POST["sportsmen_county_id"]);

/**
*проверка на наличие такого спортсмена
*/
$sql = 'SELECT COUNT(*) AS countSpoersmens
		FROM sportsmens 
		WHERE name = "'.$_POST["sportsmen_name"].'"
		AND surname = "'.$_POST["sportsmen_surname"].'"
		AND county_id = "'.$_POST["sportsmen_county_id"].'"
		';
$result = $conn->query($sql);
$data = $result->fetch_assoc();

if ($data["countSpoersmens"] == 0) {
$sql = "INSERT 
		INTO `sportsmens` (`id`, `name`, `surname`, `county_id`) 
		VALUES (NULL, '".$_POST["sportsmen_name"]."', '".$_POST["sportsmen_surname"]."', '".$_POST["sportsmen_county_id"]."');";
$result = $conn->query($sql);
}

require_once("../connections/dbclose.php");
?>