<?
require_once("../connections/db.php");
echo "medal_type_id - ".$_POST["medal_type_id"]." sportsmen_id1 - ". $_POST["sportsmen_id1"];

if (!empty($_POST["sportsmen_id1"])) {
	$medal = ORM::for_table('medal_zachet')->create();
	$medal->medal_type_id = $_POST["medal_type_id"];
	$medal->sportsmen_id = $_POST["sportsmen_id1"];
	$medal->sport_type_id = $_POST["sport_type_id"];
	$medal->save();
}

if (!empty($_POST["sportsmen_id2"])) {
	$medal = ORM::for_table('medal_zachet')->create();
	$medal->medal_type_id = $_POST["medal_type_id"];
	$medal->sportsmen_id = $_POST["sportsmen_id2"];
	$medal->sport_type_id = $_POST["sport_type_id"];
	$medal->save();
}	

if (!empty($_POST["sportsmen_id3"])) {
	$medal = ORM::for_table('medal_zachet')->create();
	$medal->medal_type_id = $_POST["medal_type_id"];
	$medal->sportsmen_id = $_POST["sportsmen_id3"];
	$medal->sport_type_id = $_POST["sport_type_id"];
	$medal->save();
}	

if (!empty($_POST["sportsmen_id4"])) {
	$medal = ORM::for_table('medal_zachet')->create();
	$medal->medal_type_id = $_POST["medal_type_id"];
	$medal->sportsmen_id = $_POST["sportsmen_id4"];
	$medal->sport_type_id = $_POST["sport_type_id"];
	$medal->save();
}	

if (!empty($_POST["sportsmen_id5"])) {
	$medal = ORM::for_table('medal_zachet')->create();
	$medal->medal_type_id = $_POST["medal_type_id"];
	$medal->sportsmen_id = $_POST["sportsmen_id5"];
	$medal->sport_type_id = $_POST["sport_type_id"];
	$medal->save();
}		

require_once("../connections/dbclose.php");
?>