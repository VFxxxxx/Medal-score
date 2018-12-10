<form class="addCountryForm" action="/addons/add-country.php">
   <h2>Добавить страну</h2>
   <input type="text" name="country_reduction" placeholder="RUS" class="form-control form-control-w">
   <input type="text" name="country_name" placeholder="Россия" class="form-control form-control-w">
   <input type="submit" class="btn btn-primary">
   <table>
      <?
         for ($i=0; $i < count($sql); $i++) { 
            echo '
            <tr>
               <td class="wid">'.$sql[$i]["country_name"].'<td>
               <td>
                  <button value="'.$sql[$i]["id"].'" class="delete-countr btn btn-danger btn-sm">Удалить</button>
               </td>
            </tr>
            ';
         }
      ?>
   </table>
   <button type="button" name="button" class="addbtncansle"></button>
</form>