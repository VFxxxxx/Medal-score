<?
require_once("../connections/db.php");
if (!empty($_POST["sportsmen_id1"])) {
	$sql = "INSERT 
			INTO `medal_zachet` (`id`, `medal_type_id`, `sportsmen_id`, `sport_type_id`, `comand`) 
			VALUES (NULL, '".$_POST["medal_type_id"]."', '".$_POST["sportsmen_id1"]."', '".$_POST["sport_type_id"]."', NULL);";

	$sql = 'INSERT INTO `medal_zachet` (`id`, `medal_type_id`, `sportsmen_id`, `sport_type_id`) VALUES (NULL, '2', '23', '18');'
	$result = $conn->query($sql);
}
if (!empty($_POST["sportsmen_id2"])) {
	$sql = "INSERT 
			INTO `medal_zachet` (`id`, `medal_type_id`, `sportsmen_id`, `sport_type_id`, `comand`) 
			VALUES (NULL, '".$_POST["medal_type_id"]."', '".$_POST["sportsmen_id2"]."', '".$_POST["sport_type_id"]."', NULL);";
	$result = $conn->query($sql);
}
if (!empty($_POST["sportsmen_id3"])) {
	$sql = "INSERT 
			INTO `medal_zachet` (`id`, `medal_type_id`, `sportsmen_id`, `sport_type_id`, `comand`) 
			VALUES (NULL, '".$_POST["medal_type_id"]."', '".$_POST["sportsmen_id3"]."', '".$_POST["sport_type_id"]."', NULL);";
	$result = $conn->query($sql);
}
if (!empty($_POST["sportsmen_id4"])) {
	$sql = "INSERT 
			INTO `medal_zachet` (`id`, `medal_type_id`, `sportsmen_id`, `sport_type_id`, `comand`) 
			VALUES (NULL, '".$_POST["medal_type_id"]."', '".$_POST["sportsmen_id4"]."', '".$_POST["sport_type_id"]."', NULL);";
	$result = $conn->query($sql);
}
if (!empty($_POST["sportsmen_id5"])) {
	$sql = "INSERT 
			INTO `medal_zachet` (`id`, `medal_type_id`, `sportsmen_id`, `sport_type_id`, `comand`) 
			VALUES (NULL, '".$_POST["medal_type_id"]."', '".$_POST["sportsmen_id5"]."', '".$_POST["sport_type_id"]."', NULL);";
	$result = $conn->query($sql);
}
require_once("../connections/dbclose.php");
?>