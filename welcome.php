<?php 
	//判斷是否登入
	session_start();
	// if( !isset($_GET['un']) ){
	// 	header("refresh:2;url=index.php");
	// 	echo "<h1 style='color:dark; text-align:center; line-height:100vh;'>不要想偷雞拉</h1>";
	// 	exit();
	// }
	if( !isset($_SESSION['userId']) || !isset($_SESSION['userName']) ){
		header("refresh:2;url=index.php");
		echo "<h1 style='color:red; text-align:center; line-height:100vh;'>沒登入想幹嘛??</h1>";
		exit();
	}
 ?>

<!DOCTYPE html>
<html lang="zh-TW">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0,  shrink-to-fit=no">
	<link rel="icon" href="images/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="css/text-shadow.css">
    <link rel="stylesheet" href="css/my.css">
	<title>員工介面</title>
</head>
<body class="body-style-1">
	<?php 

		include 'header.html';

	 ?>
	<div class="container shadow-lg">
		<div class="row">
			<div class="col-xl-9 bg-info col-sm-6">
				<ul class="nav">
					<li class="nav-item py-2">
						<a onclick="history.back()" class="nav-link">
							<img src="images/left-arrow.png" width="40" alt="backtopreviouspage">
						</a>
					</li>
					<li class="nav-item">	
						<a href="index.php" class="nav-link">
							<h1 class="text-logo text-shadow-multiple"><b>TDC</b></h1>
						</a>
					</li>
				</ul>
			</div>
			<div class="col-xl-3 bg-info col-sm-6">
				<span class="text-white float-right mt-3">
					<a href="logout.php?Logout" class="btn btn-primary">登出</a>	
				</span>
			</div>
		</div>
		<div class="column  py-3">
			<div class="col">
				<ul class="list-group list-group-flush">
					<li class="list-group-item list-group-item-action">個人資料</li>
					<li class="list-group-item list-group-item-action">出缺勤紀錄</li>
					<li class="list-group-item list-group-item-action">薪資報表</li>
					<li class="list-group-item list-group-item-action">信息接收</li>
					<li class="list-group-item list-group-item-action">意見調查</li>
				</ul>
			</div>
			<div class="col mt-5">
				<nav aria-label="換頁">
				  <ul class="pagination">
				    <li class="page-item disabled">
				      <a class="page-link" href="#" aria-label="Previous">
				        <span aria-hidden="true">&laquo;</span>
				      </a>
				    </li>
				    <li class="page-item active"><a class="page-link" href="#">1</a></li>
				    <li class="page-item"><a class="page-link" href="#">2</a></li>
				    <li class="page-item"><a class="page-link" href="#">3</a></li>
				    <li class="page-item">
				      <a class="page-link" href="#" aria-label="Next">
				        <span aria-hidden="true">&raquo;</span>
				      </a>
				    </li>
				  </ul>
				</nav>
			</div>
			<div class="col">
				<div class="progress">
					<div class="progress-bar bg-danger" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<button id="showtoast" class="btn btn-primary">Show Toast</button>
			</div>
		</div>
		<div class="column">	
			<div class="col-12">
				<div class="toast" data-autohide="false">
					<div class="toast-header">
						<img src="images/lambourus.jpg" class="rounded mr-2" alt="..." style="width: 20px;height: 20px;">
						<strong class="mr-auto">BS4</strong>
						<small>10 mins ago</small>
						<button type="button" class="ml-2 mb-1 close" data-dismiss="toast">&times;</button>
					</div>
					<div class="toast-body">
						Hello, this is a toast message.
					</div>
				</div>
			</div>
			<div class="col-12">
				<div class="toast" data-autohide="false">
					<div class="toast-header">
						<img src="images/lambourus.jpg" class="rounded mr-2" alt="..." style="width: 20px;height: 20px;">
						<strong class="mr-auto">BS4</strong>
						<small>12 mins ago</small>
						<button type="button" class="ml-2 mb-1 close" data-dismiss="toast">&times;</button>
					</div>
					<div class="toast-body">
						Hello, this is a lambo urus.
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php 

		include 'footer.html';

	 ?>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
	<script>
		$(document).ready(function() {
			$('#showtoast').dblclick(function() {
				$('.toast').toast('show');
			})
		});
	</script>
</body>
</html>