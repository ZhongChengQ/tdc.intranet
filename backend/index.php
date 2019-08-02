<?php 

	session_start();
	if ( empty($_SESSION['userId']) || empty($_SESSION['position']) )
	{
		header("refresh:2;url=../");
		echo "你無管理權限";
		exit();
	}
	
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="icon" href="favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="../css/my.css">
	<link rel="stylesheet" href="../css/text-shadow.css">
	<title>管理介面</title>
</head>
<body class="body-style-2">
	<!--<div class="glass"></div>	毛玻璃效果 --> 
	<?php 

		require 'header.html';

	 ?>
	<!-- main -->
	<div class="container-fluid bg-info">
		<div class="row">
			<div class="col-8 py-2">
				<ul class="nav nav-fill">
					<li class="nav-item">
						<a href="#" class="nav-link text-light">A</a>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link text-light">B</a>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link text-light">C</a>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link text-light">D</a>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link text-light">E</a>
					</li>
				</ul>
			</div>
			<div class="col-1 py-2 px-4">
				<a href="../logout.php?Logout=true" class="nav-link btn btn-warning">登出</a>
			</div>
			<div class="col-3 bg-primary py-2">
				<form class="text-center">
					<div class="form-row">
						<div class="col-xl-9 col-sm-6">
							<input type="text" class="form-control" placeholder="what u want?">
						</div>
						<div class="col-xl-3 col-sm-3">
							<button class="btn btn-success" name="query" type="submit">SEARCH</button>
						</div>
					</div>
				</form>
			</div>	
		</div>
	</div>
	<div class="container bg-light mt-2 h-75">
		<div class="row h-100">
			<section class="col-3 py-3 border-right" style="padding: 0;">
				<h5 class="font-mb text-center border-bottom pb-2" style="margin: 0;">會員審核清單</h5>
				<table class="table table-striped table-hover">
					<thead>
						<tr>
							<th scope="col">#</th>
							<th scope="col">姓名</th>
							<th scope="col">帳號</th>
						</tr>
					</thead>
					<tbody>
						
							<?php include 'member-list-check.php'; ?>
						
					</tbody>
				</table>
			</section>
			<section class="col py-3 text-center">
				<h5 class="font-mb text-center border-bottom pb-2" style="margin: 0;">會員詳細資料</h5>
				<article class="container border-top h-75" style="background: #ccc;">
					
				</article>

			</section>
		</div>
	
		</div>

	<?php 

		require 'footer.html';

	 ?>
</body>
</html>
