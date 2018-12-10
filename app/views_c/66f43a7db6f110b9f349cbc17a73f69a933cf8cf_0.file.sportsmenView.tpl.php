<?php
/* Smarty version 3.1.33, created on 2018-12-10 17:12:46
  from 'C:\OSPanel\domains\olimp\app\views\sportsmenView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c0e745e515051_60526551',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '66f43a7db6f110b9f349cbc17a73f69a933cf8cf' => 
    array (
      0 => 'C:\\OSPanel\\domains\\olimp\\app\\views\\sportsmenView.tpl',
      1 => 1544451165,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c0e745e515051_60526551 (Smarty_Internal_Template $_smarty_tpl) {
?><form class="addSportsmenForm" action="/addons/add-country.php">
   <h2>Добавить спортсмена</h2>
   <input type="text" name="name" placeholder="Имя" class="form-control form-control-w">
   <input type="text" name="surname" placeholder="Фамилия" class="form-control form-control-w">
   <select name="county_id" required class="form-control form-control-w">
      <option value="" disabled selected>Страна</option>
      <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? count($_smarty_tpl->tpl_vars['data']->value['countries'])-1+1 - (0) : 0-(count($_smarty_tpl->tpl_vars['data']->value['countries'])-1)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
		<option value="<?php echo $_smarty_tpl->tpl_vars['data']->value['countries'][$_smarty_tpl->tpl_vars['i']->value]['id'];?>
">
			<?php echo $_smarty_tpl->tpl_vars['data']->value['countries'][$_smarty_tpl->tpl_vars['i']->value]["country_name"];?>

		</option>
      <?php }
}
?>
   </select>
   <input type="submit" class="btn btn-primary">
   <table>
      <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? count($_smarty_tpl->tpl_vars['data']->value['sportsmens'])-1+1 - (0) : 0-(count($_smarty_tpl->tpl_vars['data']->value['sportsmens'])-1)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
     	<tr>
     		<td class="wid">
     			<?php echo $_smarty_tpl->tpl_vars['data']->value['sportsmens'][$_smarty_tpl->tpl_vars['i']->value]["name"];?>

     			<?php echo $_smarty_tpl->tpl_vars['data']->value['sportsmens'][$_smarty_tpl->tpl_vars['i']->value]["surname"];?>

   			<td>
     		<td>
     			<button value="<?php echo $_smarty_tpl->tpl_vars['data']->value['sportsmens'][$_smarty_tpl->tpl_vars['i']->value]['id'];?>
" class="delete-sporsmen btn btn-danger btn-sm">Удалить</button>
     		</td>
     	</tr>
      <?php }
}
?>
   </table>
   <button type="button" name="button" class="addbtncansle"></button>
</form><?php }
}
