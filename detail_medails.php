<!DOCTYPE html>
<html>
<head>
	<?if($_GET["medal_type_id"] == '1') $medal_type = "золотые"?>
	<?if($_GET["medal_type_id"] == '2') $medal_type = "серебрянные"?>
	<?if($_GET["medal_type_id"] == '3') $medal_type = "бронзовые"?>
	<title><?=$_GET["country"]?>, <?=$medal_type?> медали</title>
	<meta charset="UTF-8">
</head>
<body>
	<?
	require_once("connections/db.php");

	//Узнаем страну по сокращению
	$sql = 'SELECT country_name , id AS counid from countries WHERE country_reduction = "'.$_GET["country"].'"'; 
	
	$result = $conn->query($sql);
	$result_country = $result->fetch_assoc();
	echo '<h1>' .$result_country['country_name'] . ', ' . $medal_type . ' медали</h1>';
	$country_id = $result_country['counid'];

	//Показываем всех спортсменов этой страны заработавшие ввыбраную медаль
	$sql2= 'SELECT 
				sportsmens.name AS name,
				sportsmens.surname AS surname,
				sport_type.name AS sport
			FROM sportsmens , medal_zachet , sport_type
			WHERE medal_zachet.sportsmen_id = sportsmens.id
				AND medal_zachet.sport_type_id = sport_type.id
				AND sportsmens.county_id = '.$country_id.'
				AND medal_zachet.medal_type_id = "'.$_GET["medal_type_id"].'"
	';
	$result = $conn->query($sql2);
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			echo 
			$row['name'] . ' ' . $row['surname'] . ' - ' . $row['sport'] . '</br>';
			;
		}
	}
	?>
	
	<?require_once("connections/dbclose.php");?>
</body>
</html>