<form class="addSportsmenForm" action="/addons/add-country.php">
   <h2>Добавить спортсмена</h2>
   <input type="text" name="name" placeholder="Имя" class="form-control form-control-w">
   <input type="text" name="surname" placeholder="Фамилия" class="form-control form-control-w">
   <select name="county_id" required class="form-control form-control-w">
      <option value="" disabled selected>Страна</option>
      {for $i=0 to $data['countries']|@count-1}
		<option value="{$data['countries'][$i]['id']}">
			{$data['countries'][$i]["country_name"]}
		</option>
      {/for}
   </select>
   <input type="submit" class="btn btn-primary">
   <table>
      {for $i=0 to $data['sportsmens']|@count-1}
     	<tr>
     		<td class="wid">
     			{$data['sportsmens'][$i]["name"]}
     			{$data['sportsmens'][$i]["surname"]}
   			<td>
     		<td>
     			<button value="{$data['sportsmens'][$i]['id']}" class="delete-sporsmen btn btn-danger btn-sm">Удалить</button>
     		</td>
     	</tr>
      {/for}
   </table>
   <button type="button" name="button" class="addbtncansle"></button>
</form>