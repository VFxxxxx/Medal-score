<?php

class ControllerSportsmen extends Controller
{

	function __construct()
	{
		$this->model = new ModelSportsmen();
		$this->view = new View();
	}
	
	function actionCreate()
	{
		$data['countries'] = $this->model->getCountries();	
		$data['sportsmens'] = $this->model->getSportsmens();		
		$this->view->generate(
			'sportsmenView.tpl', 
			'templateView.tpl', 
			$data);
	}

	function actionAdd()
	{
		 $this->model->addSportsmens(
		 	$this->filterValue($_POST["sportsmen_name"]),
		 	$this->filterValue($_POST["sportsmen_surname"]),
		 	$this->filterValue($_POST["sportsmen_county_id"])
		 );
	}

	function actionDelete()
	{
		$this->model->deleteSportsmens(
			$this->filterValue($_POST["sportsmen_id"])
		);
	}
}