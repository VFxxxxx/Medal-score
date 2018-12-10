<?php
/* Smarty version 3.1.33, created on 2018-12-10 16:54:07
  from 'C:\OSPanel\domains\olimp\app\views\detailView.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c0e6fffd7ade2_79188907',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '093fe2511e84810476a983033499f62fa90c5ca3' => 
    array (
      0 => 'C:\\OSPanel\\domains\\olimp\\app\\views\\detailView.php',
      1 => 1544444189,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c0e6fffd7ade2_79188907 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
	<?php echo '<?'; ?>
if($_GET["medal_type_id"] == '1') $medal_type = "золотые"<?php echo '?>';?>
	<?php echo '<?'; ?>
if($_GET["medal_type_id"] == '2') $medal_type = "серебрянные"<?php echo '?>';?>
	<?php echo '<?'; ?>
if($_GET["medal_type_id"] == '3') $medal_type = "бронзовые"<?php echo '?>';?>
	<title><?php echo '<?=';?>$medal_type<?php echo '?>';?> медали</title>
	<meta charset="UTF-8">
</head>
<body>
	<?php echo '<?
	';?>echo '<h1 class="pb">' .$data['country']['countryName'] . ', ' . $medal_type . ' медали</h1>';

	for ($i=0; $i < count($data['sportsmens']); $i++) { 
		echo ($i + 1) . ". " . 
			 $data['sportsmens'][$i]['name'] . ' ' . 
			 $data['sportsmens'][$i]['surname'] . ' - ' . 
			 $data['sportsmens'][$i]['sport'] . '</br>';
	}

	<?php echo '?>';?>
</body>
</html><?php }
}
