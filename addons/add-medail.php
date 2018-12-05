<?
require_once("../connections/db.php");
echo "medal_type_id - ".$_POST["medal_type_id"]." sportsmen_id1 - ". $_POST["sportsmen_id1"];

if (!empty($_POST["sportsmen_id1"])) {
	$sql = 'INSERT 
			INTO `medal_zachet` (`id`, `medal_type_id`, `sportsmen_id`, `sport_type_id`) 
			VALUES (NULL, "'.$_POST["medal_type_id"].'", "'.$_POST["sportsmen_id1"].'", "'.$_POST["sport_type_id"].'");
	';
	$result = $conn->query($sql);
}

if (!empty($_POST["sportsmen_id2"])) {
	$sql = 'INSERT 
			INTO `medal_zachet` (`id`, `medal_type_id`, `sportsmen_id`, `sport_type_id`) 
			VALUES (NULL, "'.$_POST["medal_type_id"].'", "'.$_POST["sportsmen_id2"].'", "'.$_POST["sport_type_id"].'");
	';
	$result = $conn->query($sql);
}	

if (!empty($_POST["sportsmen_id3"])) {
	$sql = 'INSERT 
			INTO `medal_zachet` (`id`, `medal_type_id`, `sportsmen_id`, `sport_type_id`) 
			VALUES (NULL, "'.$_POST["medal_type_id"].'", "'.$_POST["sportsmen_id3"].'", "'.$_POST["sport_type_id"].'");
	';
	$result = $conn->query($sql);
}	

if (!empty($_POST["sportsmen_id4"])) {
	$sql = 'INSERT 
			INTO `medal_zachet` (`id`, `medal_type_id`, `sportsmen_id`, `sport_type_id`) 
			VALUES (NULL, "'.$_POST["medal_type_id"].'", "'.$_POST["sportsmen_id4"].'", "'.$_POST["sport_type_id"].'");
	';
	$result = $conn->query($sql);
}	

if (!empty($_POST["sportsmen_id5"])) {
	$sql = 'INSERT 
			INTO `medal_zachet` (`id`, `medal_type_id`, `sportsmen_id`, `sport_type_id`) 
			VALUES (NULL, "'.$_POST["medal_type_id"].'", "'.$_POST["sportsmen_id5"].'", "'.$_POST["sport_type_id"].'");
	';
	$result = $conn->query($sql);
}		

require_once("../connections/dbclose.php");
?>