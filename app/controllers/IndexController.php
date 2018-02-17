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
		
	}
}


 ?>