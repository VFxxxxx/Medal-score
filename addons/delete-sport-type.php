<?
require_once("../connections/db.php");
$sportType = ORM::for_table('sport_type')->find_one($_POST["sport_type_id"]);
$sportType->delete();
require_once("../connections/dbclose.php");
?>