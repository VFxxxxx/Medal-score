<?php

class ModelMain extends Model
{
	
	public function getData($sort)
	{	
		$sql = ORM::for_table('medal_zachet')
		->select('countries.id', 'countriesId')
		->select('countries.country_reduction', 'name')
		->select_expr('SUM(CASE WHEN medal_type_id=1 THEN 1 ELSE 0 END)', 'goldMedalsCount')
		->select_expr('SUM(CASE WHEN medal_type_id=2 THEN 1 ELSE 0 END)', 'silverMedalsCount')
		->select_expr('SUM(CASE WHEN medal_type_id=3 THEN 1 ELSE 0 END)', 'bronzeMedalsCount')
		->select_expr('COUNT(*)', 'sumMedals')
		->join('sportsmens', array('medal_zachet.sportsmen_id', '=', 'sportsmens.id'))
		->join('countries', array('sportsmens.county_id', '=', 'countries.id'))
		->group_by('countries.country_reduction')
		->order_by_expr($sort)
		->find_many();

		return $sql;
	}

	public function getPlace()
	{	
		/**
		*определяем какое место занимает страна и формируем массив idСтраны - место
		*/
		$sqlPlace = ORM::for_table('medal_zachet')
		->select('countries.id', 'countriesId')
		->select('countries.country_reduction', 'name')
		->select_expr('SUM(CASE WHEN medal_type_id=1 THEN 1 ELSE 0 END)', 'goldMedalsCount')
		->select_expr('SUM(CASE WHEN medal_type_id=2 THEN 1 ELSE 0 END)', 'silverMedalsCount')
		->select_expr('SUM(CASE WHEN medal_type_id=3 THEN 1 ELSE 0 END)', 'bronzeMedalsCount')
		->join('sportsmens', array('medal_zachet.sportsmen_id', '=', 'sportsmens.id'))
		->join('countries', array('sportsmens.county_id', '=', 'countries.id'))
		->group_by('countries.country_reduction')
		->order_by_expr('goldMedalsCount DESC, silverMedalsCount DESC, bronzeMedalsCount DESC')
		->find_many();
		
		/**
		*массив ID страны - место в зачёте
		*/
		for ($i=1; $i < count($sqlPlace) + 1; $i++) { 
			$arrayPlace[$sqlPlace[$i - 1]["countriesId"]] = $i;
		}
		return $arrayPlace;
	}

}
