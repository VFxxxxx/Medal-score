<form class="addSportsmenForm" action="/addons/add-country.php">
   <h2>Добавить спортсмена</h2>
   <input type="text" name="name" placeholder="Имя" class="form-control form-control-w">
   <input type="text" name="surname" placeholder="Фамилия" class="form-control form-control-w">
   <select name="county_id" required class="form-control form-control-w">
      <option value="" disabled selected>Страна</option>
      <?
         $sql = 'SELECT * FROM countries';
         $result = $conn->query($sql);
         while ($row = $result->fetch_assoc()) {
         echo '
             <option value="'.$row["id"].'" >'.$row["country_name"].'</option>
         ';
         }
         ?>
   </select>
   <input type="submit" class="btn btn-primary">
   <table >
      <?
         $sql = 'SELECT * FROM sportsmens';
         $result = $conn->query($sql);
         while ($row = $result->fetch_assoc()) {
         echo '
         	<tr>
         		<td class="wid">'.$row["name"].'  '.$row["surname"].'<td>
         		<td>
         			<button value="'.$row["id"].'" class="delete-sporsmen btn btn-danger btn-sm">Удалить</button>
         		</td>
         	</tr>
         ';
         }
         ?>
   </table>
   <button type="button" name="button" class="addbtncansle"></button>
</form>