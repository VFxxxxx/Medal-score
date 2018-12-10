<form class="addMedalForm" action="/addons/add-country.php">
   <h2>Добавить медаль</h2>
   <select name="medal_type_id" required class="form-control form-control-w">
      <option value="" disabled selected>Тип медали</option>
      {for $i=0 to $data['medails']|@count-1}
		<option value="{$data['medails'][$i]["id"]}">
			{$data['medails'][$i]["name"]}
		</option>
      {/for}
   </select>

   <select name="sportsmen_id1" required class="form-control form-control-w">
      <option value="" disabled selected>Спортсмен 1</option>
      {for $i=0 to $data['sportsmens']|@count-1}
		<option value="{$data['sportsmens'][$i]["id"]}" required>
			{$data['sportsmens'][$i]["name"]} 
			{$data['sportsmens'][$i]["surname"]}
		</option>
      {/for}
   </select>

   <select name="sportsmen_id2" class="form-control form-control-w">
      <option value="" disabled selected>Спортсмен 2</option>
      {for $i=0 to $data['sportsmens']|@count-1}
		<option value="{$data['sportsmens'][$i]["id"]}" required>
			{$data['sportsmens'][$i]["name"]} 
			{$data['sportsmens'][$i]["surname"]}
		</option>
      {/for}
   </select>

   <select name="sportsmen_id3" class="form-control form-control-w">
      <option value="" disabled selected>Спортсмен 3</option>
      {for $i=0 to $data['sportsmens']|@count-1}
		<option value="{$data['sportsmens'][$i]["id"]}" required>
			{$data['sportsmens'][$i]["name"]} 
			{$data['sportsmens'][$i]["surname"]}
		</option>
      {/for}
   </select>

   <select name="sportsmen_id4" class="form-control form-control-w">
      <option value="" disabled selected>Спортсмен 4</option>
      {for $i=0 to $data['sportsmens']|@count-1}
		<option value="{$data['sportsmens'][$i]["id"]}" required>
			{$data['sportsmens'][$i]["name"]} 
			{$data['sportsmens'][$i]["surname"]}
		</option>
      {/for}
   </select>

   <select name="sportsmen_id5" class="form-control form-control-w">
      <option value="" disabled selected>Спортсмен 5</option>
      {for $i=0 to $data['sportsmens']|@count-1}
		<option value="{$data['sportsmens'][$i]["id"]}" required>
			{$data['sportsmens'][$i]["name"]} 
			{$data['sportsmens'][$i]["surname"]}
		</option>
      {/for}
   </select>

   <select name="sport_type_id" class="form-control form-control-w">
      <option value="" disabled selected>Вид спорта</option>
      {for $i=0 to $data['sport_type']|@count-1}
		<option value="{$data['sport_type'][$i]["id"]}">
			{$data['sport_type'][$i]["name"]}
         </option>
      {/for}
   </select>

   <input type="submit" class="btn btn-primary">
   <button type="button" name="button" class="addbtncansle"></button>
</form>