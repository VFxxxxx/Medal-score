<div class='medails-table'>
<h1>Олимпийские игры</h1>
<h2 class="padding-head">Медальный зачёт</h2>
<table class="">
	<tr>
		<td colspan="2"></td>
		<td class="first">
			<a {$data['gold_href']}>1</a>
		</td>
		<td class="second">
			<a {$data['silver_href']}>2</a>
		</td>
		<td class="third">
			<a {$data['bronze_href']}>3</a>
		</td>
		<td class="all">
			<a {$data['all_href']}>Все</a>
		</td>
	</tr>

{for $i=0 to $data['list']|@count-1}
	<tr>
		<td>
			<a class="tan" {$data['place_href']}>
			{$data['place'][$data['list'][$i]["countriesId"]]}
			</a>
		</td>
	    <td>
	    	<a  class="tan" {$data['country_href']}>
	    		{$data['list'][$i]["name"]}
	    	</a>
	    </td>
	    <td>
	    	<a  class="tan" 
	    		href="/country/detail/{$data['list'][$i]["countriesId"]}/1"> 
	    		{$data['list'][$i]["goldMedalsCount"]}
	    	</a>
	    </td>
	    <td>
	    	<a  class="tan" 
	    		href="/country/detail/{$data['list'][$i]["countriesId"]}/2"> 
	    		{$data['list'][$i]["silverMedalsCount"]}
	    	</a>
	    </td>
	    <td>
	    	<a  class="tan" 
	    		href="/country/detail/{$data['list'][$i]["countriesId"]}/3"> 
	    		{$data['list'][$i]["bronzeMedalsCount"]}
	    	</a>
	    </td>
	    <td class="bold">{$data['sum'][$i]}</td>
	</tr>

{/for}

<div id="content"></div>
</table>

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