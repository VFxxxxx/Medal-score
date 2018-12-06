<form class="addMedalForm" action="/addons/add-country.php">
   <h2>Добавить медаль</h2>
   <? $sql = ORM::for_table('medails')->find_many(); ?>

   <select name="medal_type_id" required class="form-control form-control-w">
      <option value="" disabled selected>Тип медали</option>
      <?
         for ($i=0; $i < count($sql); $i++) { 
            echo '
             <option value="'.$sql[$i]["id"].'" ">'.$sql[$i]["name"].'</option>
            ';
         }
         ?>
   </select>

   <? $sql = ORM::for_table('sportsmens')->find_many(); ?>
   <select name="sportsmen_id1" required class="form-control form-control-w">
      <option value="" disabled selected>Спортсмен 1</option>
      <?
         for ($i=0; $i < count($sql); $i++) {
         echo '
             <option value="'.$sql[$i]["id"].'" required>'.$sql[$i]["name"].'  '.$sql[$i]["surname"].'</option>
         ';
         }
      ?>
   </select>
   <select name="sportsmen_id2" class="form-control form-control-w">
      <option value="" disabled selected>Спортсмен 2</option>
      <?
         for ($i=0; $i < count($sql); $i++) {
         echo '
             <option value="'.$sql[$i]["id"].'" required>'.$sql[$i]["name"].'  '.$sql[$i]["surname"].'</option>
         ';
         }
      ?>
   </select>
   <select name="sportsmen_id3" class="form-control form-control-w">
      <option value="" disabled selected>Спортсмен 3</option>
      <?
         for ($i=0; $i < count($sql); $i++) {
         echo '
             <option value="'.$sql[$i]["id"].'" required>'.$sql[$i]["name"].'  '.$sql[$i]["surname"].'</option>
         ';
         }
      ?>
   </select>
   <select name="sportsmen_id4" class="form-control form-control-w">
      <option value="" disabled selected>Спортсмен 4</option>
      <?
         for ($i=0; $i < count($sql); $i++) {
         echo '
             <option value="'.$sql[$i]["id"].'" required>'.$sql[$i]["name"].'  '.$sql[$i]["surname"].'</option>
         ';
         }
      ?>
   </select>
   <select name="sportsmen_id5" class="form-control form-control-w">
      <option value="" disabled selected>Спортсмен 5</option>
      <?
         for ($i=0; $i < count($sql); $i++) {
         echo '
             <option value="'.$sql[$i]["id"].'" required>'.$sql[$i]["name"].'  '.$sql[$i]["surname"].'</option>
         ';
         }
      ?>
   </select>
   <select name="sport_type_id" class="form-control form-control-w">
      <option value="" disabled selected>Вид спорта</option>
      <?
         $sql = ORM::for_table('sport_type')->find_many();
         
         for ($i=0; $i < count($sql); $i++) {
         echo '
             <option value="'.$sql[$i]["id"].'" >'.$sql[$i]["name"].'</option>
         ';
         }
      ?>
   </select>
   <input type="submit" class="btn btn-primary">
   <button type="button" name="button" class="addbtncansle"></button>
</form>