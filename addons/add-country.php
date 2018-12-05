<?
require_once("../connections/db.php");
require_once("validation.php");

/**
*валидация данных
*/
$_POST["country_reduction"] = filterValue($_POST["country_reduction"]);
$_POST["country_name"] = filterValue($_POST["country_name"]);

/**
*проверка на наличие такой страны
*/
$sql = 'SELECT COUNT(*) AS countCountries
		FROM `countries`
		WHERE countries.country_name = "'.$_POST["country_name"].'" 
			OR countries.country_reduction = "'.$_POST["country_reduction"].'"
		';
$result = $conn->query($sql);
$data = $result->fetch_assoc();

if ($data["countCountries"] == 0) {
	$sql = "INSERT 
			INTO `countries` (`id`, `country_reduction`, `country_name`) 
			VALUES (NULL, '".$_POST["country_reduction"]."', '".$_POST["country_name"]."');";
	$result = $conn->query($sql);
}

require_once("../connections/dbclose.php");
?>