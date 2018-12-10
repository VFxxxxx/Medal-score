<?php

class ControllerMain extends Controller
{

	function __construct()
	{
		$this->model = new ModelMain();
		$this->view = new View();
	}
	
	function actionIndex()
	{
		if($_GET['gold']=="desc")
			$sort = 'goldMedalsCount DESC';
		else if($_GET['gold']=="asc")
			$sort = 'goldMedalsCount ASC';
		else if($_GET['silver']=="desc")
			$sort = 'silverMedalsCount DESC';
		else if($_GET['silver']=="asc")
			$sort = 'silverMedalsCount ASC';
		else if($_GET['bronze']=="desc")
			$sort = 'bronzeMedalsCount DESC';
		else if($_GET['bronze']=="asc")
			$sort = 'bronzeMedalsCount ASC';
		else if($_GET['all']=="desc")
			$sort = 'sumMedals DESC, goldMedalsCount DESC , silverMedalsCount DESC , bronzeMedalsCount DESC';
		else if($_GET['all']=="asc")
			$sort = 'sumMedals ASC, goldMedalsCount ASC , silverMedalsCount ASC , bronzeMedalsCount ASC';
		else if($_GET['place']=="desc")
			$sort = 'goldMedalsCount DESC , silverMedalsCount DESC , bronzeMedalsCount DESC';
		else if($_GET['place']=="asc")
			$sort = 'goldMedalsCount ASC , silverMedalsCount ASC , bronzeMedalsCount ASC';
		else if($_GET['country']=="desc")
			$sort = 'country_reduction DESC';
		else if($_GET['country']=="asc")
			$sort = 'country_reduction ASC';
		else
			$sort = 'goldMedalsCount DESC, silverMedalsCount DESC, bronzeMedalsCount DESC';
		
		$place = $this->model->getPlace();
		$data = $this->model->getData($sort);		
		$this->view->generate('mainView.php', 'templateView.php', $data, $place);
	}
}