<!DOCTYPE html>
<html>
<head>
	<title>Медальный зачёт</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<meta charset="UTF-8">
</head>
<body>
	<div class='medails-table'>
	<h1>Олимпийские игры</h1>
	<h2 class="padding-head">Медальный зачёт</h2>

	<?
	require_once("connections/db.php");

		if($_GET['gold']=="desc")
			$sort = 'goldMedalsCount DESC';
		else if($_GET['gold']=="asc")
			$sort = 'goldMedalsCount ASC';
		else if($_GET['silver']=="desc")
			$sort = 'silverMedalsCount DESC';
		else if($_GET['silver']=="asc")
			$sort = 'silverMedalsCount ASC';
		else if($_GET['bronze']=="desc")
			$sort = 'bronzeMedalsCount DESC';
		else if($_GET['bronze']=="asc")
			$sort = 'bronzeMedalsCount ASC';
		else if($_GET['all']=="desc")
			$sort = 'sumMedals DESC, goldMedalsCount DESC , silverMedalsCount DESC , bronzeMedalsCount DESC';
		else if($_GET['all']=="asc")
			$sort = 'sumMedals ASC, goldMedalsCount ASC , silverMedalsCount ASC , bronzeMedalsCount ASC';
		else if($_GET['place']=="desc")
			$sort = 'goldMedalsCount DESC , silverMedalsCount DESC , bronzeMedalsCount DESC';
		else if($_GET['place']=="asc")
			$sort = 'goldMedalsCount ASC , silverMedalsCount ASC , bronzeMedalsCount ASC';
		else if($_GET['country']=="desc")
			$sort = 'country_reduction DESC';
		else if($_GET['country']=="asc")
			$sort = 'country_reduction ASC';
		else
			$sort = 'goldMedalsCount DESC, silverMedalsCount DESC, bronzeMedalsCount DESC';


		/**
		*определяем какое место занимает страна и формируем массив idСтраны - место
		*/
		$sqlPlace = ORM::for_table('medal_zachet')
		->select('countries.id', 'countriesId')
		->select('countries.country_reduction', 'name')
		->select_expr('SUM(CASE WHEN medal_type_id=1 THEN 1 ELSE 0 END)', 'goldMedalsCount')
		->select_expr('SUM(CASE WHEN medal_type_id=2 THEN 1 ELSE 0 END)', 'silverMedalsCount')
		->select_expr('SUM(CASE WHEN medal_type_id=3 THEN 1 ELSE 0 END)', 'bronzeMedalsCount')
		->join('sportsmens', array('medal_zachet.sportsmen_id', '=', 'sportsmens.id'))
		->join('countries', array('sportsmens.county_id', '=', 'countries.id'))
		->group_by('countries.country_reduction')
		->order_by_expr('goldMedalsCount DESC, silverMedalsCount DESC, bronzeMedalsCount DESC')
		->find_many();
		
		/**
		*массив ID страны - место в зачёте
		*/
		for ($i=1; $i < count($sqlPlace) + 1; $i++) { 
			$arrayPlace[$sqlPlace[$i - 1]["countriesId"]] = $i;
		}


		$sql = ORM::for_table('medal_zachet')
		->select('countries.id', 'countriesId')
		->select('countries.country_reduction', 'name')
		->select_expr('SUM(CASE WHEN medal_type_id=1 THEN 1 ELSE 0 END)', 'goldMedalsCount')
		->select_expr('SUM(CASE WHEN medal_type_id=2 THEN 1 ELSE 0 END)', 'silverMedalsCount')
		->select_expr('SUM(CASE WHEN medal_type_id=3 THEN 1 ELSE 0 END)', 'bronzeMedalsCount')
		->select_expr('COUNT(*)', 'sumMedals')
		->join('sportsmens', array('medal_zachet.sportsmen_id', '=', 'sportsmens.id'))
		->join('countries', array('sportsmens.county_id', '=', 'countries.id'))
		->group_by('countries.country_reduction')
		->order_by_expr($sort)
		->find_many();

		echo '<table class="">
				<tr>
					<td colspan="2"></td>
					<td class="first">
						<a '.(($_GET['gold']=="desc") ? 'href="/?gold=asc"' : 'href="/?gold=desc"').'>1</a>
					</td>
					<td class="second">
						<a '.(($_GET['silver']=="desc") ? 'href="/?silver=asc"' : 'href="/?silver=desc"').'>2</a>
					</td>
					<td class="third">
						<a '.(($_GET['bronze']=="desc") ? 'href="/?bronze=asc"' : 'href="/?bronze=desc"').'>3</a>
					</td>
					<td class="all">
						<a '.(($_GET['all']=="desc") ? 'href="/?all=asc"' : 'href="/?all=desc"').'>Все</a>
					</td>
				</tr>';

		if($_GET['place']=="desc") $place_href = 'href="/?place=asc"'; else $place_href = 'href="/?place=desc"';
		if($_GET['country']=="desc") $country_href = 'href="/?country=asc"'; else $country_href = 'href="/?country=desc"';


		for ($i=0; $i < count($sql); $i++) { 
			$sum = $sql[$i]["goldMedalsCount"] + $sql[$i]["silverMedalsCount"] + $sql[$i]["bronzeMedalsCount"];
		        echo '<tr>
			        	<td><a class="tan" '.$place_href.' >' . $arrayPlace[$sql[$i]["countriesId"]] . '</a></td>
				        <td>
				        	<a  class="tan" '.
				        		$country_href.'>' . 
				        		$sql[$i]["name"] . '
				        	</a>
				        </td>
				        <td>
				        	<a  class="tan" 
				        		href="detail_medails.php/?country='.$sql[$i]["countriesId"].'&medal_type_id=1">' . 
				        		$sql[$i]["goldMedalsCount"] . '
				        	</a>
				        </td>
				        <td>
				        	<a  class="tan" 
				        		href="detail_medails.php/?country='.$sql[$i]["countriesId"].'&medal_type_id=2">' . 
				        		$sql[$i]["silverMedalsCount"] . '
				        	</a>
				        </td>
				        <td>
				        	<a  class="tan" 
				        		href="detail_medails.php/?country='.$sql[$i]["countriesId"].'&medal_type_id=3">' . 
				        		$sql[$i]["bronzeMedalsCount"] . '
				        	</a>
				        </td>
				        <td class="bold">'. $sum .'</td>
			        </tr>';
		}

		echo '<div id="content"></div>
		</table>';
?>

	<a class="read-more" href="#">Весь медальный зачёт </a>

	<div class="add-list">
		<ul>
			<li>
				<a class="addCountry" href="addons/add-country.php">Добавить страну</a>
			</li>
			<li>
				<a class="addMedal" href="addons/add-medail.php">Добавить медаль</a>
			</li>
			<li>
				<a class="addSport" href="addons/add-sport-type.php">Добавить вид спорта</a>
			</li>
			<li>
				<a class="addSportsmen" href="addons/add-sporsmen.php">Добавить спортсмена</a>
			</li>
		</ul>
	</div>
	</div>

	<div class="form-wrapper">
	<div class="test"></div>

	<?include_once("inc/addCountryForm.php");?>

	<?include_once("inc/addMedalForm.php");?>

	<?include_once("inc/addSportForm.php");?>

	<?include_once("inc/addSportsmenForm.php");?>
	</div>

<?require_once("connections/dbclose.php");?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>