<!DOCTYPE html>
<html>
<head>
	<?if($_GET["medal_type_id"] == '1') $medal_type = "золотые"?>
	<?if($_GET["medal_type_id"] == '2') $medal_type = "серебрянные"?>
	<?if($_GET["medal_type_id"] == '3') $medal_type = "бронзовые"?>
	<title><?=$medal_type?> медали</title>
	<meta charset="UTF-8">
</head>
<body>
	<?
	require_once("connections/db.php");

	$country = ORM::for_table('countries')
	->select('country_name', 'countryName')
	->find_one($_GET["country"]);

	echo '<h1>' .$country['countryName'] . ', ' . $medal_type . ' медали</h1>';

	$sportsmens = ORM::for_table('medal_zachet')
		->select('sportsmens.name', 'name')
		->select('sportsmens.surname', 'surname')
		->select('sport_type.name', 'sport')
		->join('sportsmens', array('medal_zachet.sportsmen_id', '=', 'sportsmens.id'))
		->join('sport_type', array('medal_zachet.sport_type_id', '=', 'sport_type.id'))
		->where(array(
			"sportsmens.county_id" => $_GET["country"],
			"medal_zachet.medal_type_id" => $_GET["medal_type_id"],
		))
		->find_many();

	for ($i=0; $i < count($sportsmens); $i++) { 
		echo ($i + 1) . ". " . $sportsmens[$i]['name'] . ' ' . $sportsmens[$i]['surname'] . ' - ' . $sportsmens[$i]['sport'] . '</br>';
	}

	require_once("connections/dbclose.php");
	?>
</body>
</html>