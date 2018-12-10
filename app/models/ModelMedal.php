<?php

class ModelMedal extends Model
{
	
	public function getMedails()
	{	
		$sql = ORM::for_table('medails')->find_many();
		return $sql;
	}

	public function getSportsmens()
	{	
		$sql = ORM::for_table('sportsmens')->find_many();
		return $sql;
	}

	public function getSportType()
	{	
		$sql = ORM::for_table('sport_type')->find_many();
		return $sql;
	}

	public function addMedail($medal_type_id,$sport_type_id,$sportsmen_id1,$sportsmen_id2,$sportsmen_id3,$sportsmen_id4,$sportsmen_id5)
	{
		echo "$medal_type_id,$sport_type_id,$sportsmen_id1,$sportsmen_id2,$sportsmen_id3,$sportsmen_id4,$sportsmen_id5";
		
		if (!empty($sportsmen_id1)) {
			$medal = ORM::for_table('medal_zachet')->create();
			$medal->medal_type_id = $medal_type_id;
			$medal->sportsmen_id = $sportsmen_id1;
			$medal->sport_type_id = $sport_type_id;
			$medal->save();
		}

		if (!empty($sportsmen_id2)) {
			$medal = ORM::for_table('medal_zachet')->create();
			$medal->medal_type_id = $medal_type_id;
			$medal->sportsmen_id = $sportsmen_id2;
			$medal->sport_type_id = $sport_type_id;
			$medal->save();
		}	

		if (!empty($sportsmen_id3)) {
			$medal = ORM::for_table('medal_zachet')->create();
			$medal->medal_type_id = $medal_type_id;
			$medal->sportsmen_id = $sportsmen_id3;
			$medal->sport_type_id = $sport_type_id;
			$medal->save();
		}	

		if (!empty($sportsmen_id4)) {
			$medal = ORM::for_table('medal_zachet')->create();
			$medal->medal_type_id = $medal_type_id;
			$medal->sportsmen_id = $sportsmen_id4;
			$medal->sport_type_id = $sport_type_id;
			$medal->save();
		}	

		if (!empty($sportsmen_id5)) {
			$medal = ORM::for_table('medal_zachet')->create();
			$medal->medal_type_id = $medal_type_id;
			$medal->sportsmen_id = $sportsmen_id5;
			$medal->sport_type_id = $sport_type_id;
			$medal->save();
		}	
	}
}
