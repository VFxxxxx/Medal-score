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
		
		$data['place'] = $this->model->getPlace();
		$data['list'] = $this->model->getData($sort);

		// sort href
		$data['gold_href'] = (($_GET['gold']=="desc") ? 
			'href="/main/index/?gold=asc"' : 
			'href="/main/index/?gold=desc"');

		$data['silver_href'] = (($_GET['silver']=="desc") ? 
			'href="/main/index/?silver=asc"' : 
			'href="/main/index/?silver=desc"');

		$data['bronze_href'] = (($_GET['bronze']=="desc") ? 
			'href="/main/index/?bronze=asc"' : 
			'href="/main/index/?bronze=desc"');

		$data['all_href'] = (($_GET['all']=="desc") ? 
			'href="/main/index/?all=asc"' : 
			'href="/main/index/?all=desc"');

		$data['place_href'] = ($_GET['place']=="desc") ? 
		'href="/main/index/?place=asc"' : 
		'href="/main/index/?place=desc"';

		$data['country_href'] = (($_GET['country']=="desc") ?  
			'href="/main/index/?country=asc"' : 
			'href="/main/index/?country=desc"');

		for ($i=0; $i < count($data['list']); $i++) { 
			$sum[$i] = $data['list'][$i]["goldMedalsCount"] + $data['list'][$i]["silverMedalsCount"] + $data['list'][$i]["bronzeMedalsCount"];
		}
		$data['sum'] = $sum;

		$this->view->generate('mainView.tpl', 'templateView.tpl', $data);
	}
}