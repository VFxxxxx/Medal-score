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
		$data = $this->model->getCountries();	
		$data2 = $this->model->getSportsmens();		
		$this->view->generate('sportsmenView.php', 'templateView.php', $data, $data2);
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