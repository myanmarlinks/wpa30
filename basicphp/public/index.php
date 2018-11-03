<?php 
if(isset($_GET['page'])) {
	$page = htmlspecialchars($_GET['page']);
	echo $page;
} else {
echo <<<EOD
<!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Home</title>
 </head>
 <body>
 	<h1>Hello World</h1>
 </body>
 </html>
EOD;
}

 ?>

 