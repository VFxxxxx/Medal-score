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
$countSportsmen = ORM::for_table('sportsmens')
				->where(array(
                 'name' => $_POST["sportsmen_name"],
                 'surname' => $_POST["sportsmen_surname"],
                 'county_id' => $_POST["sportsmen_county_id"]
            	))
				->count();

if ($countSportsmen == 0) {
	$sportsmen = ORM::for_table('sportsmens')->create();
	$sportsmen->name = $_POST["sportsmen_name"];
	$sportsmen->surname = $_POST["sportsmen_surname"];
	$sportsmen->county_id = $_POST["sportsmen_county_id"];
	$sportsmen->save();
}
else {
	echo "Такое уже существует...";
}

require_once("../connections/dbclose.php");
?>