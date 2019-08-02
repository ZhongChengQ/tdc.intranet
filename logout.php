<?php 
	session_start();
	if( isset($_GET['Logout']) ){
		session_unset();
		session_destroy();
		//reset($_SESSION['user']);
		//sleep(3); header("location:index.php");
		//header("Refresh: 2;url=index.php");
		header("location:index.php");
	}else{
		echo "你幹嘛??";
		header("Refresh: 1;url=index.php");
	}
 ?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title>Logout..</title>
</head>
<body style="background-color: #CCC;">
	<div class="container">
		<div class="row">
			<div class="col-xl-4 m-auto">
				<div class="card bg-light mt-5">
					<div class="card-title bg-info text-center py-3">
						<h3>Logout</h3>
					</div>
					<div class="card-body">
						<h5>畫面跳轉中..</h5>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html> -->