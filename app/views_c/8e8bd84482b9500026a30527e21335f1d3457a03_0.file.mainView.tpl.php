<?php
/* Smarty version 3.1.33, created on 2018-12-10 16:42:20
  from 'C:\OSPanel\domains\olimp\app\views\mainView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c0e6d3cee9e96_33867595',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8e8bd84482b9500026a30527e21335f1d3457a03' => 
    array (
      0 => 'C:\\OSPanel\\domains\\olimp\\app\\views\\mainView.tpl',
      1 => 1544449325,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c0e6d3cee9e96_33867595 (Smarty_Internal_Template $_smarty_tpl) {
?><div class='medails-table'>
<h1>Олимпийские игры</h1>
<h2 class="padding-head">Медальный зачёт</h2>
<table class="">
	<tr>
		<td colspan="2"></td>
		<td class="first">
			<a <?php echo $_smarty_tpl->tpl_vars['data']->value['gold_href'];?>
>1</a>
		</td>
		<td class="second">
			<a <?php echo $_smarty_tpl->tpl_vars['data']->value['silver_href'];?>
>2</a>
		</td>
		<td class="third">
			<a <?php echo $_smarty_tpl->tpl_vars['data']->value['bronze_href'];?>
>3</a>
		</td>
		<td class="all">
			<a <?php echo $_smarty_tpl->tpl_vars['data']->value['all_href'];?>
>Все</a>
		</td>
	</tr>

<?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? count($_smarty_tpl->tpl_vars['data']->value['list'])-1+1 - (0) : 0-(count($_smarty_tpl->tpl_vars['data']->value['list'])-1)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
	<tr>
		<td>
			<a class="tan" <?php echo $_smarty_tpl->tpl_vars['data']->value['place_href'];?>
>
			<?php echo $_smarty_tpl->tpl_vars['data']->value['place'][$_smarty_tpl->tpl_vars['data']->value['list'][$_smarty_tpl->tpl_vars['i']->value]["countriesId"]];?>

			</a>
		</td>
	    <td>
	    	<a  class="tan" <?php echo $_smarty_tpl->tpl_vars['data']->value['country_href'];?>
>
	    		<?php echo $_smarty_tpl->tpl_vars['data']->value['list'][$_smarty_tpl->tpl_vars['i']->value]["name"];?>

	    	</a>
	    </td>
	    <td>
	    	<a  class="tan" 
	    		href="/country/detail/<?php echo $_smarty_tpl->tpl_vars['data']->value['list'][$_smarty_tpl->tpl_vars['i']->value]["countriesId"];?>
/1"> 
	    		<?php echo $_smarty_tpl->tpl_vars['data']->value['list'][$_smarty_tpl->tpl_vars['i']->value]["goldMedalsCount"];?>

	    	</a>
	    </td>
	    <td>
	    	<a  class="tan" 
	    		href="/country/detail/<?php echo $_smarty_tpl->tpl_vars['data']->value['list'][$_smarty_tpl->tpl_vars['i']->value]["countriesId"];?>
/2"> 
	    		<?php echo $_smarty_tpl->tpl_vars['data']->value['list'][$_smarty_tpl->tpl_vars['i']->value]["silverMedalsCount"];?>

	    	</a>
	    </td>
	    <td>
	    	<a  class="tan" 
	    		href="/country/detail/<?php echo $_smarty_tpl->tpl_vars['data']->value['list'][$_smarty_tpl->tpl_vars['i']->value]["countriesId"];?>
/3"> 
	    		<?php echo $_smarty_tpl->tpl_vars['data']->value['list'][$_smarty_tpl->tpl_vars['i']->value]["bronzeMedalsCount"];?>

	    	</a>
	    </td>
	    <td class="bold"><?php echo $_smarty_tpl->tpl_vars['data']->value['sum'][$_smarty_tpl->tpl_vars['i']->value];?>
</td>
	</tr>

<?php }
}
?>

<div id="content"></div>
</table>

	<a class="read-more" href="/">Весь медальный зачёт </a>

	<div class="add-list">
		<ul>
			<li>
				<a class="addCountry" href="/country/create">Добавить страну</a>
			</li>
			<li>
				<a class="addMedal" href="/medal/create">Добавить медаль</a>
			</li>
			<li>
				<a class="addSport" href="/sport/create">Добавить вид спорта</a>
			</li>
			<li>
				<a class="addSportsmen" href="/sportsmen/create">Добавить спортсмена</a>
			</li>
		</ul>
	</div>
	</div><?php }
}
