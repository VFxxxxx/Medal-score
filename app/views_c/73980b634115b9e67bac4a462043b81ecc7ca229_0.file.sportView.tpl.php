<?php
/* Smarty version 3.1.33, created on 2018-12-10 17:15:22
  from 'C:\OSPanel\domains\olimp\app\views\sportView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c0e74fa1a3680_24424465',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '73980b634115b9e67bac4a462043b81ecc7ca229' => 
    array (
      0 => 'C:\\OSPanel\\domains\\olimp\\app\\views\\sportView.tpl',
      1 => 1544451320,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c0e74fa1a3680_24424465 (Smarty_Internal_Template $_smarty_tpl) {
?><form class="addSportForm" action="/addons/add-country.php">
   <h2>Добавить вид спорта</h2>
   <input type="text" name="sport_name" placeholder="Вид спорта" class="form-control form-control-w">
   <input type="submit" class="btn btn-primary">
   <table>
   	<?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? count($_smarty_tpl->tpl_vars['data']->value)-1+1 - (0) : 0-(count($_smarty_tpl->tpl_vars['data']->value)-1)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
	    <tr>
	       <td class="wid"><?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['i']->value]["name"];?>
<td>
	       <td>
	          <button value="<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['i']->value]["id"];?>
" class="delete-sport-type btn btn-danger btn-sm">Удалить</button>
	       </td>
	    </tr>
   	<?php }
}
?>
   </table>
   <button type="button" name="button" class="addbtncansle"></button>
</form><?php }
}
