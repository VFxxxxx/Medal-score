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
	echo '<h1 class="pb">' .$data['country']['countryName'] . ', ' . $medal_type . ' медали</h1>';

	for ($i=0; $i < count($data['sportsmens']); $i++) { 
		echo ($i + 1) . ". " . 
			 $data['sportsmens'][$i]['name'] . ' ' . 
			 $data['sportsmens'][$i]['surname'] . ' - ' . 
			 $data['sportsmens'][$i]['sport'] . '</br>';
	}

	?>
</body>
</html>