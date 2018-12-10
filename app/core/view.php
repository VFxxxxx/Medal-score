<?php
//Подключаем класс Smarty
require_once ("lib/Smarty.class.php");

class View
{
	function __construct() 
	{
		//Создадим объект класса Smarty
		$this->smarty = new Smarty();

		$this->smarty->template_dir = 'app/views/';
		$this->smarty->compile_dir = 'app/views_c/';
		$this->smarty->config_dir = 'app/configs/';
		$this->smarty->cache_dir = 'app/cache/';
	}
	//public $template_view; // здесь можно указать общий вид по умолчанию.
	
	/*
	$content_file - виды отображающие контент страниц;
	$template_file - общий для всех страниц шаблон;
	$data - массив, содержащий элементы контента страницы. Обычно заполняется в модели.
	*/
	function generate($content_view, $template_view, $data = null)
	{
		/*$this->smarty->assign('file',$content_view);
		$this->smarty->assign('data',$data);
		$this->smarty->display('main.tpl');*/
		include 'app/views/'.$template_view;
	}
}
