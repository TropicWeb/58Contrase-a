<?php 
	

	require_once '../vendor/autoload.php'; //Composer: phproute

	 //Iniciar sesion
 	 session_start();
	
	//RUTA BASE
	$baseDir = str_replace(basename($_SERVER['SCRIPT_NAME']),'',$_SERVER['SCRIPT_NAME']);
	$baseUrl = 'http://' . $_SERVER['HTTP_HOST'] . $baseDir;
	define('BASE_URL', $baseUrl);

	use Phroute\Phroute\RouteCollector; //Importar el phroute
	$router = new RouteCollector();

	$route = $_GET['route'] ?? '/';


	//MIDDLEWARES
	$router->filter('auth',function(){
		if(!isset($_SESSION['user'])){
		    header('Location:' . BASE_URL . 'login');
		    return false;
		}
	});

	//RUTAS
	//LOGIN
	$router->controller('/login', App\Controllers\LoginController::class);

	//OTHERS
	$router->group(['before' => 'auth'], function($router){
		//INDEX
		$router->controller('/', App\Controllers\IndexController::class);
	});


	//Respuesta del server
	$dispatcher = new Phroute\Phroute\Dispatcher($router->getData());
	$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $route);

	echo $response;


?>