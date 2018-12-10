<?php

class Controller404 extends Controller
{
	function actionIndex()
	{	
		$this->view->generate('404.tpl', 'templateView.tpl', $data);
	}
}