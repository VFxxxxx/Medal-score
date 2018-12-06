<form class="addSportsmenForm" action="/addons/add-country.php">
   <h2>Добавить спортсмена</h2>
   <input type="text" name="name" placeholder="Имя" class="form-control form-control-w">
   <input type="text" name="surname" placeholder="Фамилия" class="form-control form-control-w">
   <select name="county_id" required class="form-control form-control-w">
      <option value="" disabled selected>Страна</option>
      <?
         $sql = ORM::for_table('countries')->find_many();
         for ($i=0; $i < count($sql); $i++) {
         echo '
             <option value="'.$sql[$i]["id"].'" >'.$sql[$i]["country_name"].'</option>
         ';
         }
         ?>
   </select>
   <input type="submit" class="btn btn-primary">
   <table >
      <?
         $sql = ORM::for_table('sportsmens')->find_many();
         for ($i=0; $i < count($sql); $i++) {
         echo '
         	<tr>
         		<td class="wid">'.$sql[$i]["name"].'  '.$sql[$i]["surname"].'<td>
         		<td>
         			<button value="'.$sql[$i]["id"].'" class="delete-sporsmen btn btn-danger btn-sm">Удалить</button>
         		</td>
         	</tr>
         ';
         }
         ?>
   </table>
   <button type="button" name="button" class="addbtncansle"></button>
</form>