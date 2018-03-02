<?php 

namespace App\Controllers;

class IndexController extends BaseController {

	public function getIndex(){
		return $this->render('../views/main.php');
	}

	public function getLogout(){
		unset($_SESSION['user']);
		header('Location:' . BASE_URL . 'login');
		return null;
	}

	public function getInfo(){
		if($_SESSION['user']!='admin'){
	    	header('Location:' . BASE_URL);
	    	return null;
		}
		$fileEntradas = fopen(dirname(__FILE__) . '/../../Entradas.txt', 'r');
		if($fileEntradas){
			for ($i=0; $i < 3; $i++) { 
				$linea = fgets($fileEntradas);
				$entradas[$i] = $linea; 
			}
		}
		fclose($fileEntradas);
		return $this->render('../views/info.php',['entradas'=> $entradas]);
	}
}


 ?>