<?php 

namespace App\Controllers;

class LoginController extends BaseController {

	public function getIndex(){
		return $this->render('../views/login.php', [ 'error' => false]);
	}

	public function postIndex(){

		$success = false;
		$users = ['admin','user1', 'user2', 'user3'];
		$passwords = ['Forbes2020','Waraira Repano', 'Araguaney', 'Auyantepuy'];

		//Check if password is correct
		foreach ($passwords as  $key => $value) {
			if($value == $_POST['password']){
				$success = true;
				$_SESSION['user'] = $users[$key];
				$pos = $key-1;
				break;
			}
		}

		if($success){
			if($pos >= 0){
				$fileEntradas = fopen(dirname(__FILE__) . '/../../Entradas.txt', 'rb');
				if($fileEntradas){
					for ($i=0; $i < 3; $i++) { 
						$linea = fgets($fileEntradas);
						$entradas[$i] = $linea; 
					}
				}
				fclose($fileEntradas);
				$entradas[$pos] = (string)((int) $entradas[$pos] + 1) . "\n";
				$fileSalidas = fopen(dirname(__FILE__) . '/../../Entradas.txt', 'wb');
				if($fileSalidas){
					for ($i=0; $i < 3; $i++) { 
						fputs($fileSalidas, $entradas[$i]);
					}
				}
				fclose($fileSalidas);
			}
			//return $this->render('../views/login.php');
			header('Location:' . BASE_URL);
            return null;		
		}else{
			return $this->render('../views/login.php', [ 'error' => true]);	
		}	
	}
}


 ?>