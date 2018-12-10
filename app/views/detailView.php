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

	echo '<h1 class="pb">' .$sql['countryName'] . ', ' . $medal_type . ' медали</h1>';

	for ($i=0; $i < count($sql2); $i++) { 
		echo ($i + 1) . ". " . $sql2[$i]['name'] . ' ' . $sql2[$i]['surname'] . ' - ' . $sql2[$i]['sport'] . '</br>';
	}

	?>
</body>
</html>