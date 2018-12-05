<form class="addMedalForm" action="/addons/add-country.php">
   <h2>Добавить медаль</h2>
   <?
      $sql = 'SELECT * FROM medails';
      $result = $conn->query($sql);?>
   <select name="medal_type_id" required>
      <option value="" disabled selected>Тип медали</option>
      <?
         while ($row = $result->fetch_assoc()) {
         echo '
             <option value="'.$row["id"].'" ">'.$row["name"].'</option>
         ';
         }
         ?>
   </select>
  <!-- <select name="county_id" required>
      <option value="" disabled selected>Страна</option>-->
      <?
        /* $sql = 'SELECT * FROM countries';
         $result = $conn->query($sql);
         while ($row = $result->fetch_assoc()) {
         echo '
             <option value="'.$row["id"].'" >'.$row["country_name"].'</option>
         ';
         }*/
         ?>
   <!--</select>-->
   <select name="sportsmen_id1" required>
      <option value="" disabled selected>Спортсмен 1</option>
      <?
         $sql = 'SELECT * FROM sportsmens';
         $result = $conn->query($sql);
         while ($row = $result->fetch_assoc()) {
         echo '
             <option value="'.$row["id"].'" required>'.$row["name"].'  '.$row["surname"].'</option>
         ';
         }
         ?>
   </select>
   <select name="sportsmen_id2">
      <option value="" disabled selected>Спортсмен 2</option>
      <?
         $sql = 'SELECT * FROM sportsmens';
         $result = $conn->query($sql);
         while ($row = $result->fetch_assoc()) {
         echo '
             <option value="'.$row["id"].'" >'.$row["name"].'  '.$row["surname"].'</option>
         ';
         }
         ?>
   </select>
   <select name="sportsmen_id3">
      <option value="" disabled selected>Спортсмен 3</option>
      <?
         $sql = 'SELECT * FROM sportsmens';
         $result = $conn->query($sql);
         while ($row = $result->fetch_assoc()) {
         echo '
             <option value="'.$row["id"].'" >'.$row["name"].'  '.$row["surname"].'</option>
         ';
         }
         ?>
   </select>
   <select name="sportsmen_id4">
      <option value="" disabled selected>Спортсмен 4</option>
      <?
         $sql = 'SELECT * FROM sportsmens';
         $result = $conn->query($sql);
         while ($row = $result->fetch_assoc()) {
         echo '
             <option value="'.$row["id"].'" >'.$row["name"].'  '.$row["surname"].'</option>
         ';
         }
         ?>
   </select>
   <select name="sportsmen_id5">
      <option value="" disabled selected>Спортсмен 5</option>
      <?
         $sql = 'SELECT * FROM sportsmens';
         $result = $conn->query($sql);
         while ($row = $result->fetch_assoc()) {
         echo '
             <option value="'.$row["id"].'" >'.$row["name"].'  '.$row["surname"].'</option>
         ';
         }
         ?>
   </select>
   <select name="sport_type_id">
      <option value="" disabled selected>Вид спорта</option>
      <?
         $sql = 'SELECT * FROM sport_type';
         $result = $conn->query($sql);
         while ($row = $result->fetch_assoc()) {
         echo '
             <option value="'.$row["id"].'" >'.$row["name"].'</option>
         ';
         }
         ?>
   </select>
   <input type="submit">
   <button type="button" name="button" class="addbtncansle"></button>
</form>