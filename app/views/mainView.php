	<div class='medails-table'>
	<h1>Олимпийские игры</h1>
	<h2 class="padding-head">Медальный зачёт</h2>
<? 
		echo '<table class="">
				<tr>
					<td colspan="2"></td>
					<td class="first">
						<a '.(($_GET['gold']=="desc") ? 'href="/main/index/?gold=asc"' : 'href="/main/index/?gold=desc"').'>1</a>
					</td>
					<td class="second">
						<a '.(($_GET['silver']=="desc") ? 'href="/main/index/?silver=asc"' : 'href="/main/index/?silver=desc"').'>2</a>
					</td>
					<td class="third">
						<a '.(($_GET['bronze']=="desc") ? 'href="/main/index/?bronze=asc"' : 'href="/main/index/?bronze=desc"').'>3</a>
					</td>
					<td class="all">
						<a '.(($_GET['all']=="desc") ? 'href="/main/index/?all=asc"' : 'href="/main/index/?all=desc"').'>Все</a>
					</td>
				</tr>';

		if($_GET['place']=="desc") $place_href = 'href="/main/index/?place=asc"'; else $place_href = 'href="/main/index/?place=desc"';
		if($_GET['country']=="desc") $country_href = 'href="/main/index/?country=asc"'; else $country_href = 'href="/main/index/?country=desc"';

		for ($i=0; $i < count($sql); $i++) { 
			$sum = $sql[$i]["goldMedalsCount"] + $sql[$i]["silverMedalsCount"] + $sql[$i]["bronzeMedalsCount"];
		        echo '<tr>
			        	<td><a class="tan" '.$place_href.' >' . $sql2[$sql[$i]["countriesId"]] . '</a></td>
				        <td>
				        	<a  class="tan" '.
				        		$country_href.'>' . 
				        		$sql[$i]["name"] . '
				        	</a>
				        </td>
				        <td>
				        	<a  class="tan" 
				        		href="/country/detail/'.$sql[$i]["countriesId"].'/1">' . 
				        		$sql[$i]["goldMedalsCount"] . '
				        	</a>
				        </td>
				        <td>
				        	<a  class="tan" 
				        		href="/country/detail/'.$sql[$i]["countriesId"].'/2">' . 
				        		$sql[$i]["silverMedalsCount"] . '
				        	</a>
				        </td>
				        <td>
				        	<a  class="tan" 
				        		href="/country/detail/'.$sql[$i]["countriesId"].'/3">' . 
				        		$sql[$i]["bronzeMedalsCount"] . '
				        	</a>
				        </td>
				        <td class="bold">'. $sum .'</td>
			        </tr>';
		}

		echo '<div id="content"></div>
		</table>';
?>
	<a class="read-more" href="/">Весь медальный зачёт </a>

	<div class="add-list">
		<ul>
			<li>
				<a class="addCountry" href="/country/create">Добавить страну</a>
			</li>
			<li>
				<a class="addMedal" href="/medal/create">Добавить медаль</a>
			</li>
			<li>
				<a class="addSport" href="/sport/create">Добавить вид спорта</a>
			</li>
			<li>
				<a class="addSportsmen" href="/sportsmen/create">Добавить спортсмена</a>
			</li>
		</ul>
	</div>
	</div>