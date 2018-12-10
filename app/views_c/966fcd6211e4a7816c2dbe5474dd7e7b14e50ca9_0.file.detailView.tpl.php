<?php
/* Smarty version 3.1.33, created on 2018-12-10 17:06:13
  from 'C:\OSPanel\domains\olimp\app\views\detailView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c0e72d55bd311_88377054',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '966fcd6211e4a7816c2dbe5474dd7e7b14e50ca9' => 
    array (
      0 => 'C:\\OSPanel\\domains\\olimp\\app\\views\\detailView.tpl',
      1 => 1544450772,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c0e72d55bd311_88377054 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
	<title><?php echo $_smarty_tpl->tpl_vars['data']->value['medal_type'];?>
 медали</title>
	<meta charset="UTF-8">
</head>
<body>
	<h1 class="pb">
		<?php echo $_smarty_tpl->tpl_vars['data']->value['country']['countryName'];?>
 ,  
		<?php echo $_smarty_tpl->tpl_vars['data']->value['medal_type'];?>
 медали</h1>

	<?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? count($_smarty_tpl->tpl_vars['data']->value['sportsmens'])-1+1 - (0) : 0-(count($_smarty_tpl->tpl_vars['data']->value['sportsmens'])-1)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
		<?php echo $_smarty_tpl->tpl_vars['i']->value+1;?>
 . <?php echo $_smarty_tpl->tpl_vars['data']->value['sportsmens'][$_smarty_tpl->tpl_vars['i']->value]['name'];?>

		<?php echo $_smarty_tpl->tpl_vars['data']->value['sportsmens'][$_smarty_tpl->tpl_vars['i']->value]['surname'];?>
 - 
		<?php echo $_smarty_tpl->tpl_vars['data']->value['sportsmens'][$_smarty_tpl->tpl_vars['i']->value]['sport'];?>
 </br>
	<?php }
}
?>

</body>
</html><?php }
}
