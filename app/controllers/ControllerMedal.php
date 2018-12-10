<?php

class ControllerMedal extends Controller
{

	function __construct()
	{
		$this->model = new ModelMedal();
		$this->view = new View();
	}
	
	function actionCreate()
	{
		$data['medails'] = $this->model->getMedails();		
		$data['sportsmens'] = $this->model->getSportsmens();		
		$data['sport_type'] = $this->model->getSportType();		
		$this->view->generate('medalView.php', 'templateView.php', $data);
	}

	function actionAdd()
	{
		$this->model->addMedail(
			$_POST["medal_type_id"],
			$_POST["sport_type_id"],
			$_POST["sportsmen_id1"],
			$_POST["sportsmen_id2"],
			$_POST["sportsmen_id3"],
			$_POST["sportsmen_id4"],
			$_POST["sportsmen_id5"]
		);
	}
}