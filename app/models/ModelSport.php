<?php

class ModelSport extends Model
{
	
	public function getData()
	{	
		$sql = ORM::for_table('sport_type')->find_many(); 
		return $sql;
	}

	public function addSport($name)
	{	
		if (!empty($name)) {
			/**
			*проверка на наличие такого спорта
			*/
			$sportTypeCount = ORM::for_table('sport_type')
								->where('name' , $name)
								->count();

			if ($sportTypeCount == 0) {
				$country = ORM::for_table('sport_type')->create();
				$country->name = $name;
				$country->save();
			}
			else {
				echo "Такое уже существует...";
			}
		}
	}

	public function deleteSport($id)
	{	
		$sportType = ORM::for_table('sport_type')->find_one($id);
		$sportType->delete();
	}

}
