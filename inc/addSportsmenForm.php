<form class="addSportsmenForm" action="/addons/add-country.php">
   <h2>Добавить спортсмена</h2>
   <input type="text" name="name" placeholder="Имя">
   <input type="text" name="surname" placeholder="Фамилия">
   <select name="county_id" required>
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
   <input type="submit">
   <table >
      <?
         $sql = 'SELECT * FROM sportsmens';
         $result = $conn->query($sql);
         while ($row = $result->fetch_assoc()) {
         echo '
         	<tr>
         		<td class="wid">'.$row["name"].'  '.$row["surname"].'<td>
         		<td>
         			<button value="'.$row["id"].'" class="delete-sporsmen">Удалить</button>
         		</td>
         	</tr>
         ';
         }
         ?>
   </table>
   <button type="button" name="button" class="addbtncansle"></button>
</form>