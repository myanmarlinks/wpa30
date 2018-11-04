<?php 

function _load_view($view, $data = null) {
	$file = DD . "app/view/" . $view . ".php";
	if(file_exists($file)) {
		ob_start();
		if($data != null) {
			extract($data);	
		}
		require $file;
		ob_end_flush();
	} else {
		trigger_error("View File ထည့္ရမယ္ဆိုတာ မသိဘူးလား ခ်ီးထုတ္", E_USER_ERROR);
	}

}

 ?>