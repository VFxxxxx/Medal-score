<?php
/* Smarty version 3.1.33, created on 2018-12-10 16:11:21
  from 'C:\OSPanel\domains\olimp\app\views\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c0e65f93e97a3_43684001',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '681ca97d91fc98e4d89ca6be9f2d2e3df9374b53' => 
    array (
      0 => 'C:\\OSPanel\\domains\\olimp\\app\\views\\main.tpl',
      1 => 1544447475,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:mainView.tpl' => 1,
  ),
),false)) {
function content_5c0e65f93e97a3_43684001 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="/assets/css/style.css">
</head>
<body>

<?php $_smarty_tpl->_subTemplateRender('file:mainView.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<a class="read-more" href="/">Главная </a></br>
<?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/assets/js/main.js"><?php echo '</script'; ?>
>
</body>
</html>

<?php }
}
