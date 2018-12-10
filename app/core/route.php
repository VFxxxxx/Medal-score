<?php

/*
Класс-маршрутизатор для определения запрашиваемой страницы.
> цепляет классы контроллеров и моделей;
> создает экземпляры контролеров страниц и вызывает действия этих контроллеров.
*/
class Route
{

	static function start()
	{
		$controllerName = 'Main';
		$actionName = 'Index';
		
		$routes = explode('/', $_SERVER['REQUEST_URI']);

		// получаем имя контроллера
		if ( !empty($routes[1]) )
		{	
			$controllerName = ucwords(strtolower($routes[1]));
		}
		
		// получаем имя экшена
		if ( !empty($routes[2]) )
		{
			$actionName = ucwords(strtolower($routes[2]));
		}

		$modelName = 'Model'.$controllerName;
		$controllerName = 'Controller'.$controllerName;
		$actionName = 'action'.$actionName;

/*
		echo "Model: $modelName <br>";
		echo "Controller: $controllerName <br>";
		echo "Action: $actionName <br>";
*/	

		$modelPath = "app/models/".$modelName.".php";
		$controllerPath = "app/controllers/".$controllerName.".php";




		if (file_exists($controllerPath)) 
		{
			// подключаем основную модель + модель запроса
			include_once "app/models/ModelMain.php";
			if (file_exists($modelPath)) 
			{
				include_once $modelPath;
			}

			include $controllerPath; // подцепляем файл с классом контроллера

			$controller = new $controllerName; // создаем контроллер
			$action = $actionName;
			
			if(method_exists($controller, $action))
			{
				$controller->$action(); // вызываем действие контроллера
			}
		} 
		else
		{
			// если контроллеры не найдены , вызываем 404 контроллер
			include "app/controllers/Controller404.php";
			$controller = new Controller404();
			$controller->actionIndex();
		}
	} 
}
