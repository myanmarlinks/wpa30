<?php 

class View {
	public static function load($view, $data = null)  {
		$file = DD . "/resources/views/" . $view . ".php";
		if(file_exists($file)) {
			ob_start();
			require $file;
			if($data != null) {
				extract($data);
			}
			ob_end_flush();
		} else {
			trigger_error("View file not found", E_USER_ERROR);
		}
	}
}

