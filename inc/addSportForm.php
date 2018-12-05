<form class="addSportForm" action="/addons/add-country.php">
   <h2>Добавить вид спорта</h2>
   <input type="text" name="sport_name" placeholder="Вид спорта">
   <input type="submit">
   <table>
      <?
         $sql = 'SELECT * FROM sport_type';
         $result = $conn->query($sql);
         while ($row = $result->fetch_assoc()) {
         echo '
         	<tr>
         		<td class="wid">'.$row["name"].'<td>
         		<td>
         			<button value="'.$row["id"].'" class="delete-sport-type">Удалить</button>
         		</td>
         	</tr>
         ';
         }
         ?>
   </table>
   <button type="button" name="button" class="addbtncansle"></button>
</form>