<?php

class ModelCountry extends Model
{
	
	public function getData()
	{	
		$sql = ORM::for_table('countries')->find_many();
		return $sql;
	}

	public function getCountryName()
	{	
		$routes = explode('/', $_SERVER['REQUEST_URI']);
		$id = ucwords(strtolower($routes[3]));
		$sql = ORM::for_table('countries')
		->select('country_name', 'countryName')
		->find_one($id);
		return $sql;
	}	

	public function getSportsmens()
	{	
		$routes = explode('/', $_SERVER['REQUEST_URI']);
		$id = ucwords(strtolower($routes[3]));
		$medal_type_id = ucwords(strtolower($routes[4]));
		$sportsmens = ORM::for_table('medal_zachet')
		->select('sportsmens.name', 'name')
		->select('sportsmens.surname', 'surname')
		->select('sport_type.name', 'sport')
		->join('sportsmens', array('medal_zachet.sportsmen_id', '=', 'sportsmens.id'))
		->join('sport_type', array('medal_zachet.sport_type_id', '=', 'sport_type.id'))
		->where(array(
			"sportsmens.county_id" => $id,
			"medal_zachet.medal_type_id" => $medal_type_id,
		))
		->find_many();
		return $sportsmens;
	}

	public function addCountry($country_reduction,$country_name) 
	{
		/**
		*проверка на наличие такой страны
		*/
		if (!empty($country_reduction) && !empty($country_name)) {
			$countCountry = ORM::for_table('countries')
							->where_any_is(array(
			                 array('country_reduction' => $_POST["country_reduction"]),
			                 array('country_name' => $_POST["country_name"])
			            	))
							->count();

			if ($countCountry == 0) {
				$country = ORM::for_table('countries')->create();
				$country->country_reduction = $_POST["country_reduction"];
				$country->country_name = $_POST["country_name"];
				$country->save();
			}
			else {
				echo "Такое уже существует...";
			}
		}
	}

	public function deleteCountry($country_id) 
	{
		echo $country_id;
		$country = ORM::for_table('countries')->find_one($country_id);
		$country->delete();
	}

}
