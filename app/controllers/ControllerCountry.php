<?php

class ControllerCountry extends Controller
{

	function __construct()
	{
		$this->model = new ModelCountry();
		$this->view = new View();
	}
	
	function actionCreate()
	{
		$data = $this->model->getData();		
		$this->view->generate(
			'countryView.tpl', 
			'templateView.tpl', 
			$data
		);
	}

	function actionAdd()
	{
		$this->model->addCountry(
			$this->filterValue($_POST["country_reduction"]),
			$this->filterValue($_POST["country_name"])
		);
	}

	function actionDelete()
	{
		$this->model->deleteCountry(
			$this->filterValue($_POST["countries_id"])
		);
	}

	function actionDetail()
	{
		$routes = explode('/', $_SERVER['REQUEST_URI']);

		// получаем имя медали
		if (!empty($routes[4]) )
		{	
			$data['medal_type_id'] = ucwords(strtolower($routes[4]));
		}
		
		if($data["medal_type_id"] == '1') 
			$data['medal_type'] = "золотые";
		if($data["medal_type_id"] == '2') 
			$data['medal_type'] = "серебрянные";
		if($data["medal_type_id"] == '3') 
			$data['medal_type'] = "бронзовые";

		$data['country'] = $this->model->getCountryName();	
		$data['sportsmens'] = $this->model->getSportsmens();	
		$this->view->generate(
			'detailView.tpl', 
			'templateView.tpl', 
			$data
		);
	}
}