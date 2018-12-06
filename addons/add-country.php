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
$countCountry = ORM::for_table('countries')
				->where_any_is(array(
                 array('country_reduction' => $_POST["country_reduction"]),
                 array('country_name' => $_POST["country_name"])
            	))
				->count();

if ($countCountry == 0) {
	$country = ORM::for_table('countries')->create();
	$country->country_reduction = $_POST["country_reduction"];
	$country->country_name = $_POST["country_name"];
	$country->save();
}
else {
	echo "Такое уже существует...";
}

require_once("../connections/dbclose.php");
?>