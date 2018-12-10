<?php
/* Smarty version 3.1.33, created on 2018-12-10 16:49:01
  from 'C:\OSPanel\domains\olimp\app\views\countryView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c0e6ecd70c625_58096674',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a421a349560b72b36a16a90c96fd12182f77d7fc' => 
    array (
      0 => 'C:\\OSPanel\\domains\\olimp\\app\\views\\countryView.tpl',
      1 => 1544449740,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c0e6ecd70c625_58096674 (Smarty_Internal_Template $_smarty_tpl) {
?><form class="addCountryForm" action="/addons/add-country.php">
   <h2>Добавить страну</h2>
   <input type="text" name="country_reduction" placeholder="RUS" class="form-control form-control-w">
   <input type="text" name="country_name" placeholder="Россия" class="form-control form-control-w">
   <input type="submit" class="btn btn-primary">
   <table>
      
        <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? count($_smarty_tpl->tpl_vars['data']->value)-1+1 - (0) : 0-(count($_smarty_tpl->tpl_vars['data']->value)-1)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
            <tr>
               <td class="wid"><?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['i']->value]["country_name"];?>
<td>
               <td>
                  <button value="<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['i']->value]["id"];?>
" class="delete-countr btn btn-danger btn-sm">Удалить</button>
               </td>
            </tr>
       	<?php }
}
?>
   </table>
   <button type="button" name="button" class="addbtncansle"></button>
</form><?php }
}
