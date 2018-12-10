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
		$this->view->generate('countryView.php', 'templateView.php', $data);
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
		$data = $this->model->getCountryName();	
		$sportsmens = $this->model->getSportsmens();		
		$this->view->generate('detailView.php', 'templateView.php', $data, $sportsmens);
	}
}