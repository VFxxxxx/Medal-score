<?
require_once("../connections/db.php");
$country = ORM::for_table('countries')->find_one($_POST["countries_id"]);
$country->delete();
require_once("../connections/dbclose.php");
?>