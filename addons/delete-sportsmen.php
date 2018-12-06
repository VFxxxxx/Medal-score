<?
require_once("../connections/db.php");
$sportsmen = ORM::for_table('sportsmens')->find_one($_POST["sportsmen_id"]);
$sportsmen->delete();
require_once("../connections/dbclose.php");
?>