<?php 

namespace App\Controllers;

class BaseController {
	
	//Render
	public function render($fileName, $params = []){
		ob_start();
		extract($params);
		include $fileName;
		return ob_get_clean();
	}
}

?>