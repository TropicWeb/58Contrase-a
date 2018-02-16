<?php 

namespace App\Controllers;

class LoginController extends BaseController {

	public function getIndex(){
		return $this->render('../views/login.php', [ 'error' => false]);
	}

	public function postIndex(){

		$success = false;
		$users = ['user1', 'user2', 'user3'];
		$passwords = ['Waraira Repano', 'Araguaney', 'Auyantepuy'];

		//Check if password is correct
		foreach ($passwords as  $key => $value) {
			if($value == $_POST['password']){
				$success = true;
				$_SESSION['user'] = $users[$key];
				break;
			}
		}

		if($success){
			header('Location:' . BASE_URL);
            return null;		
		}else{
			return $this->render('../views/login.php', [ 'error' => true]);	
		}	
	}
}


 ?>