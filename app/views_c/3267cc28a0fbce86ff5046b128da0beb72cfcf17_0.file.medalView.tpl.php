<?php
/* Smarty version 3.1.33, created on 2018-12-10 17:21:37
  from 'C:\OSPanel\domains\olimp\app\views\medalView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c0e7671dbe2a1_70956647',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3267cc28a0fbce86ff5046b128da0beb72cfcf17' => 
    array (
      0 => 'C:\\OSPanel\\domains\\olimp\\app\\views\\medalView.tpl',
      1 => 1544451696,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c0e7671dbe2a1_70956647 (Smarty_Internal_Template $_smarty_tpl) {
?><form class="addMedalForm" action="/addons/add-country.php">
   <h2>Добавить медаль</h2>
   <select name="medal_type_id" required class="form-control form-control-w">
      <option value="" disabled selected>Тип медали</option>
      <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? count($_smarty_tpl->tpl_vars['data']->value['medails'])-1+1 - (0) : 0-(count($_smarty_tpl->tpl_vars['data']->value['medails'])-1)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
		<option value="<?php echo $_smarty_tpl->tpl_vars['data']->value['medails'][$_smarty_tpl->tpl_vars['i']->value]["id"];?>
">
			<?php echo $_smarty_tpl->tpl_vars['data']->value['medails'][$_smarty_tpl->tpl_vars['i']->value]["name"];?>

		</option>
      <?php }
}
?>
   </select>

   <select name="sportsmen_id1" required class="form-control form-control-w">
      <option value="" disabled selected>Спортсмен 1</option>
      <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? count($_smarty_tpl->tpl_vars['data']->value['sportsmens'])-1+1 - (0) : 0-(count($_smarty_tpl->tpl_vars['data']->value['sportsmens'])-1)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
		<option value="<?php echo $_smarty_tpl->tpl_vars['data']->value['sportsmens'][$_smarty_tpl->tpl_vars['i']->value]["id"];?>
" required>
			<?php echo $_smarty_tpl->tpl_vars['data']->value['sportsmens'][$_smarty_tpl->tpl_vars['i']->value]["name"];?>
 
			<?php echo $_smarty_tpl->tpl_vars['data']->value['sportsmens'][$_smarty_tpl->tpl_vars['i']->value]["surname"];?>

		</option>
      <?php }
}
?>
   </select>

   <select name="sportsmen_id2" class="form-control form-control-w">
      <option value="" disabled selected>Спортсмен 2</option>
      <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? count($_smarty_tpl->tpl_vars['data']->value['sportsmens'])-1+1 - (0) : 0-(count($_smarty_tpl->tpl_vars['data']->value['sportsmens'])-1)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
		<option value="<?php echo $_smarty_tpl->tpl_vars['data']->value['sportsmens'][$_smarty_tpl->tpl_vars['i']->value]["id"];?>
" required>
			<?php echo $_smarty_tpl->tpl_vars['data']->value['sportsmens'][$_smarty_tpl->tpl_vars['i']->value]["name"];?>
 
			<?php echo $_smarty_tpl->tpl_vars['data']->value['sportsmens'][$_smarty_tpl->tpl_vars['i']->value]["surname"];?>

		</option>
      <?php }
}
?>
   </select>

   <select name="sportsmen_id3" class="form-control form-control-w">
      <option value="" disabled selected>Спортсмен 3</option>
      <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? count($_smarty_tpl->tpl_vars['data']->value['sportsmens'])-1+1 - (0) : 0-(count($_smarty_tpl->tpl_vars['data']->value['sportsmens'])-1)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
		<option value="<?php echo $_smarty_tpl->tpl_vars['data']->value['sportsmens'][$_smarty_tpl->tpl_vars['i']->value]["id"];?>
" required>
			<?php echo $_smarty_tpl->tpl_vars['data']->value['sportsmens'][$_smarty_tpl->tpl_vars['i']->value]["name"];?>
 
			<?php echo $_smarty_tpl->tpl_vars['data']->value['sportsmens'][$_smarty_tpl->tpl_vars['i']->value]["surname"];?>

		</option>
      <?php }
}
?>
   </select>

   <select name="sportsmen_id4" class="form-control form-control-w">
      <option value="" disabled selected>Спортсмен 4</option>
      <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? count($_smarty_tpl->tpl_vars['data']->value['sportsmens'])-1+1 - (0) : 0-(count($_smarty_tpl->tpl_vars['data']->value['sportsmens'])-1)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
		<option value="<?php echo $_smarty_tpl->tpl_vars['data']->value['sportsmens'][$_smarty_tpl->tpl_vars['i']->value]["id"];?>
" required>
			<?php echo $_smarty_tpl->tpl_vars['data']->value['sportsmens'][$_smarty_tpl->tpl_vars['i']->value]["name"];?>
 
			<?php echo $_smarty_tpl->tpl_vars['data']->value['sportsmens'][$_smarty_tpl->tpl_vars['i']->value]["surname"];?>

		</option>
      <?php }
}
?>
   </select>

   <select name="sportsmen_id5" class="form-control form-control-w">
      <option value="" disabled selected>Спортсмен 5</option>
      <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? count($_smarty_tpl->tpl_vars['data']->value['sportsmens'])-1+1 - (0) : 0-(count($_smarty_tpl->tpl_vars['data']->value['sportsmens'])-1)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
		<option value="<?php echo $_smarty_tpl->tpl_vars['data']->value['sportsmens'][$_smarty_tpl->tpl_vars['i']->value]["id"];?>
" required>
			<?php echo $_smarty_tpl->tpl_vars['data']->value['sportsmens'][$_smarty_tpl->tpl_vars['i']->value]["name"];?>
 
			<?php echo $_smarty_tpl->tpl_vars['data']->value['sportsmens'][$_smarty_tpl->tpl_vars['i']->value]["surname"];?>

		</option>
      <?php }
}
?>
   </select>

   <select name="sport_type_id" class="form-control form-control-w">
      <option value="" disabled selected>Вид спорта</option>
      <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? count($_smarty_tpl->tpl_vars['data']->value['sport_type'])-1+1 - (0) : 0-(count($_smarty_tpl->tpl_vars['data']->value['sport_type'])-1)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
		<option value="<?php echo $_smarty_tpl->tpl_vars['data']->value['sport_type'][$_smarty_tpl->tpl_vars['i']->value]["id"];?>
">
			<?php echo $_smarty_tpl->tpl_vars['data']->value['sport_type'][$_smarty_tpl->tpl_vars['i']->value]["name"];?>

         </option>
      <?php }
}
?>
   </select>

   <input type="submit" class="btn btn-primary">
   <button type="button" name="button" class="addbtncansle"></button>
</form><?php }
}
