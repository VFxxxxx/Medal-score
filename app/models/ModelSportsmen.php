<?php

class ModelSportsmen extends Model
{
	
	public function getCountries()
	{	
		$sql = ORM::for_table('countries')->find_many();
		return $sql;
	}	

	public function getSportsmens()
	{	
		$sql = ORM::for_table('sportsmens')->find_many();
		return $sql;
	}

	public function addSportsmens($sportsmen_name,$sportsmen_surname,$sportsmen_county_id)
	{	
		if (!empty($sportsmen_name)) {
			/**
			*проверка на наличие такого спортсмена
			*/
			$countSportsmen = ORM::for_table('sportsmens')
							->where(array(
			                 'name' => $sportsmen_name,
			                 'surname' => $sportsmen_surname,
			                 'county_id' => $sportsmen_county_id
			            	))
							->count();

			if ($countSportsmen == 0) {
				$sportsmen = ORM::for_table('sportsmens')->create();
				$sportsmen->name = $sportsmen_name;
				$sportsmen->surname = $sportsmen_surname;
				$sportsmen->county_id = $sportsmen_county_id;
				$sportsmen->save();
			}
			else {
				echo "Такое уже существует...";
			}
		}

	}

	public function deleteSportsmens($id)
	{	
		$sportsmen = ORM::for_table('sportsmens')->find_one($id);
		$sportsmen->delete();
	}
}
