<?php

class Model
{
	
	/*
		Модель обычно включает методы выборки данных, это могут быть:
			> методы нативных библиотек pgsql или mysql;
			> методы библиотек, реализующих абстракицю данных. Например, методы библиотеки PEAR MDB2;
			> методы ORM;
			> методы для работы с NoSQL;
			> и др.
	*/
	function __construct()
	{
		require_once ("idiorm.php");
		$connect = ORM::configure(array(
		    'connection_string' => 'mysql:host=localhost;dbname=olimp_baze',
		    'username' => 'root',
		    'password' => ''
		));
	}
	
	// метод выборки данных
	public function getData()
	{
		// todo
	}
}