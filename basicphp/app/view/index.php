<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Home</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="row">
			
			<div class="col-12">
				<h1><?php echo $title ?></h1>
				<table class="table table-striped">
					<thead>
						<tr>
							<th>ID</th>
							<th>Name</th>
							<th>Address</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($students as $student) { ?>
							<tr>
								<td><?php echo $student['id']; ?></td>
								<td><?php echo $student['name']; ?></td>
								<td><?php echo $student['address']; ?></td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	
</body>
</html>