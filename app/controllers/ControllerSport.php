<?php

class ControllerSport extends Controller
{

	function __construct()
	{
		$this->model = new ModelSport();
		$this->view = new View();
	}
	
	function actionCreate()
	{
		$data = $this->model->getData();		
		$this->view->generate('sportView.php', 'templateView.php', $data);
	}

	function actionAdd()
	{
		 $this->model->addSport(
		 	$this->filterValue($_POST["sport_name"])
		 );
	}

	function actionDelete()
	{
		$this->model->deleteSport(
			$this->filterValue($_POST["sport_type_id"])
		);
	}
}