<?php 
if(isset($_GET['page'])) {
	$page = htmlspecialchars($_GET['page']);
	$file = "../app/view/" . $page . ".php";
	if(file_exists($file)) {
		require $file;
	} else {
		require "../app/view/404.php";
	}
} else {
	require "../app/view/index.php";
}
 ?>

 