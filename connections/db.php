<?
require_once ("idiorm.php");
$connect = ORM::configure(array(
    'connection_string' => 'mysql:host=localhost;dbname=olimp_baze',
    'username' => 'root',
    'password' => ''
));
?>