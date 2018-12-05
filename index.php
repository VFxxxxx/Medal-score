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
			$sort = 'ORDER BY goldMedalsCount DESC';
		else if($_GET['gold']=="asc")
			$sort = 'ORDER BY goldMedalsCount ASC';
		else if($_GET['silver']=="desc")
			$sort = 'ORDER BY silverMedalsCount DESC';
		else if($_GET['silver']=="asc")
			$sort = 'ORDER BY silverMedalsCount ASC';
		else if($_GET['bronze']=="desc")
			$sort = 'ORDER BY bronzeMedalsCount DESC';
		else if($_GET['bronze']=="asc")
			$sort = 'ORDER BY bronzeMedalsCount ASC';
		else if($_GET['all']=="desc")
			$sort = 'ORDER BY sumMedals DESC';
		else if($_GET['all']=="asc")
			$sort = 'ORDER BY sumMedals ASC';
		else if($_GET['place']=="desc")
			$sort = 'ORDER BY goldMedalsCount DESC , silverMedalsCount DESC , bronzeMedalsCount DESC';
		else if($_GET['place']=="asc")
			$sort = 'ORDER BY goldMedalsCount ASC , silverMedalsCount ASC , bronzeMedalsCount ASC';
		else if($_GET['country']=="desc")
			$sort = 'ORDER BY country_reduction DESC';
		else if($_GET['country']=="asc")
			$sort = 'ORDER BY country_reduction ASC';
		else
			$sort = 'ORDER BY goldMedalsCount DESC, silverMedalsCount DESC, bronzeMedalsCount DESC';


		/**
		*определяем какое место занимает страна и формируем массив idСтраны - место
		*/
		$sqlPlace = 'SELECT 
					countries.id AS countriesId,
					countries.country_reduction AS name,
					COUNT(medal_type_id=1) AS goldMedalsCount,
					SUM(CASE WHEN medal_type_id=2 THEN 1 ELSE 0 END) AS silverMedalsCount,
					SUM(CASE WHEN medal_type_id=3 THEN 1 ELSE 0 END) AS bronzeMedalsCount,
					COUNT(*) AS sumMedals
				FROM medal_zachet, sportsmens , countries
				WHERE medal_zachet.sportsmen_id = sportsmens.id 
					AND sportsmens.county_id = countries.id			
				GROUP BY countries.country_reduction
				ORDER BY goldMedalsCount DESC, silverMedalsCount DESC, bronzeMedalsCount DESC
				;';

		$resultPlace = $conn->query($sqlPlace);
		$arrayPlace = array();
		$place = 1;
		while($row = $resultPlace->fetch_assoc()) {
			$arrayPlace[$row["countriesId"]] = $place++;
		}


		$sql = 'SELECT 
					countries.id AS countriesId,
					countries.country_reduction AS name,
					-- SUM(CASE WHEN medal_type_id=1 THEN 1 ELSE 0 END) AS goldMedalsCount,
					COUNT(medal_type_id=1) AS goldMedalsCount,
					SUM(CASE WHEN medal_type_id=2 THEN 1 ELSE 0 END) AS silverMedalsCount,
					SUM(CASE WHEN medal_type_id=3 THEN 1 ELSE 0 END) AS bronzeMedalsCount,
					COUNT(*) AS sumMedals
				FROM medal_zachet, sportsmens , countries
				WHERE medal_zachet.sportsmen_id = sportsmens.id 
					AND sportsmens.county_id = countries.id			
				GROUP BY countries.country_reduction
				'.$sort.'
				;';

		$result = $conn->query($sql);
		if ($result->num_rows > 0) {?>
		<table class="">
			<tr>
				<td colspan="2"></td>
				<td class="first">
					<a <?if($_GET['gold']=="desc") echo 'href="/?gold=asc"'; else echo 'href="/?gold=desc"';?>>1</a>
				</td>
				<td class="second">
					<a <?if($_GET['silver']=="desc") echo 'href="/?silver=asc"'; else echo 'href="/?silver=desc"';?>>2</a>
				</td>
				<td class="third">
					<a <?if($_GET['bronze']=="desc") echo 'href="/?bronze=asc"'; else echo 'href="/?bronze=desc"';?>>3</a>
				</td>
				<td class="all">
					<a <?if($_GET['all']=="desc") echo 'href="/?all=asc"'; else echo 'href="/?all=desc"';?>>Все</a>
				</td>
			</tr>
	
		<?	/*if($_GET['place']=="desc") $place_href = 'href="/?place=asc"'; else $place_href = 'href="/?place=desc"';	*/
		  	if($_GET['country']=="desc") $country_href = 'href="/?country=asc"'; else $country_href = 'href="/?country=desc"';

			while($row = $result->fetch_assoc()) {
				$sum = $row["goldMedalsCount"] + $row["silverMedalsCount"] + $row["bronzeMedalsCount"];
		        echo '
		        <tr>
		        	<td>' . $arrayPlace[$row["countriesId"]] . '</td>
			        <td>
			        	<a  class="tan" '.
			        		$country_href.'>' . 
			        		$row["name"] . '
			        	</a>
			        </td>
			        <td>
			        	<a  class="tan" 
			        		href="detail_medails.php/?country='.$row["name"].'&medal_type_id=1">' . 
			        		$row["goldMedalsCount"] . '
			        	</a>
			        </td>
			        <td>
			        	<a  class="tan" 
			        		href="detail_medails.php/?country='.$row["name"].'&medal_type_id=2">' . 
			        		$row["silverMedalsCount"] . '
			        	</a>
			        </td>
			        <td>
			        	<a  class="tan" 
			        		href="detail_medails.php/?country='.$row["name"].'&medal_type_id=3">' . 
			        		$row["bronzeMedalsCount"] . '
			        	</a>
			        </td>
			        <td class="bold">'. $sum .'</td>
		        </tr>';
			}
			echo '<div id="content"></div>';
		?>
		</table>
		<?
		}
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