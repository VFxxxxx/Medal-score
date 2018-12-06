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
$sportTypeCount = ORM::for_table('sport_type')
					->where('name' , $_POST["sport_name"])
					->count();

if ($sportTypeCount == 0) {
	$country = ORM::for_table('sport_type')->create();
	$country->name = $_POST["sport_name"];
	$country->save();
}
else {
	echo "Такое уже существует...";
}

require_once("../connections/dbclose.php");
?>