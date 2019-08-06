<?php 
	session_start();
 ?>
<!DOCTYPE html>
<html lang="zh-TW">
<head>
	<!-- Required meta tages -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0,  shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <!-- <div>Icons made by <a href="https://www.flaticon.com/authors/freepik" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/"                 title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/"                 title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div> -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/my.css">
    <link rel="stylesheet" href="css/text-shadow.css">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<title>TDC inc.</title>
</head>
<body class="body-style-1">
	<?php 

		include 'header.html';

	 ?>
	<!-- content-->
	<div class="container bg-light shadow-lg">
		<div class="row">
			<div class="col-xl-9 bg-info col-sm-9">
				<ul class="nav py-2">
					<li class="nav-item">
						<a href="." class="nav-link">
							<img src="images/manufacturing.png" width="48" alt="logotohomepage">
						</a>
					</li>
					<li class="nav-item">
						<a href="." class="nav-link">
							<h2 class="text-logo text-shadow-multiple"><b>TDC</b></h2>
						</a>
					</li>
					<li class="nav-item ml-2 pt-3">
						<a href="#" class="nav-link">
							<h5 class="text-white">Intro.</h5>
						</a>
					</li>
					<li class="nav-item pt-3">
						<a href="#" class="nav-link">
							<h5 class="text-white">History</h5>
						</a>
					</li>
				</ul>
			</div>
			<div class="col-xl-3 bg-info text-center col-sm-3">
				<span class="d-block text-white p-1">目前用戶</span>
				<span class="d-block text-white p-1">
					<?php 
						if ( !empty($_SESSION['userId']) && !empty($_SESSION['userName']) )
						{
							if ( isset($_SESSION['position']) ) {
								echo "<a href='backend/?p=".$_SESSION['position']."'><img src='images/settings.png' /></a>";
							} else {
								echo "<img src='images/employee.png' />";
								echo "<a href='welcome.php?un=".$_SESSION['userName']."' class='text-white ml-2'>".$_SESSION['userName']."</a>";
							}
						}
						else
						{
							echo "<a href='index.php?loginError=no_login' class='text-warning'>尚未登入</a>";
						}
					 ?>
				</span>
			</div>
		</div>
		<!-- banner block-->
		<div class="row">
			<div class="col-xl-12 bg-light">
				<div class="jumbotron mt-3">
					<h1 class="display-4">TDC . intranet</h1>
					<hr class="my-3">
					<p class="text-warning">
						廣告輪播尚未設定
					</p>
				</div>
			</div>
		</div>
		<!-- main block-->
		<div class="row justify-content-around pb-3">
			<!-- 註冊 -->
			<div class="col-xl-7 col-lg-8 col-md-10" id="regis_area" style="display: none;">
				<div class="card shadow-sm">
					<div class="card-header bg-primary text-white text-center py-2">
						<h3 class="text-shadow">註冊 Signup</h3>
					</div>
					<div class="card-body">
						<form action="includes/signup.inc.php" method="post">

							<?php 
								if( isset($_GET['error']) ){
									if( $_GET['error'] == "emptyfields" ){
										echo "<p class='card-subtitle text-danger text-center mb-1'>不可留空</p>";
									}elseif ( $_GET['error'] == "invaliduseracc" ) {
										echo "<p class='card-subtitle text-danger text-center mb-1'>帳號只能用小英&數字</p>";
									}elseif ( $_GET['error'] == "invalidmail" ) {
										echo "<p class='card-subtitle text-danger text-center mb-1'>信箱格式錯誤</p>";
									}elseif ( $_GET['error'] == "invalidname" ) {
										echo "<p class='card-subtitle text-danger text-center mb-1'>姓名必須為中文</p>";
									}elseif ( $_GET['error'] == "invalidPassCheck" ) {
										echo "<p class='card-subtitle text-danger text-center mb-1'>確認密碼不正確</p>";
									}elseif ( $_GET['error'] == "useracc_token" ) {
										echo "<p class='card-subtitle text-danger text-center mb-1'>此帳號已有人使用</p>";
									}else{
										echo "<p class='bg-danger text-light text-center mb-1'>系統錯誤</p>";
									}
								}elseif ( @$_GET['signup'] == "success" ) {
									echo "<p class='bg-success text-light text-center mb-1'>註冊成功</p>";
								}
							 ?>

							<div class="form-row">
								<div class="col-6">
									<span>帳號</span>
									<input type="text" name="UAcc" placeholder="Account" autocomplete="off" class="d-inline form-control mb-3">
								</div>
								<div class="col-6">
									<span>密碼</span>
									<input type="password" name="UPass" placeholder="Password" class="d-inline form-control mb-3">
								</div>
								<div class="col-6">
									<span>姓名</span>
									<input type="text" name="UName" placeholder="限中文" autocomplete="off" class="d-inline form-control mb-3">
								</div>
								<div class="col-6">
									<span>密碼確認</span>
									<input type="text" name="UPassCheck" placeholder="再次確認密碼無誤" class="d-inline form-control mb-3">
								</div>
								<div class="col-6">
									<span>性別</span>
									<input type="text" name="gender" placeholder="gender" class="d-inline form-control mb-3">
								</div>
								<div class="col-6">
									<span>身分證字號</span>
									<input type="text" name="idNumber" placeholder="identity" class="d-inline form-control mb-3">
								</div>
								<div class="col-6">
									<span>家庭</span>
									<input type="text" name="family" placeholder="family" class="d-inline form-control mb-3">
								</div>
								<div class="col-10">
									<span>信箱</span>
									<input type="email" name="UEmail" placeholder="example@gmail.com" autocomplete="off" class="d-inline form-control mb-3">
								</div>
								<div class="col-10">
									<span>地址</span>
									<input type="email" name="UAddress" placeholder="address" autocomplete="off" class="d-inline form-control mb-3">
								</div>
							</div>
							<button type="submit" class="btn btn-success" name="Signup">Signup</button>
							<button class="btn btn-secondary" type="reset">Reset</button>
						</form>
					</div>
				</div>
			</div>
			<!-- 登入 -->
			<div class="col-xl-5 col-lg-6 col-md-8" id="login_area">
				<div class="card shadow-sm">
					<div class="card-header bg-primary text-white text-center py-2">
						<h3 class="text-shadow">登入 Login</h3>
					</div>
					<div class="card-body">
						<form action="includes/login.simple.php" method="post" class="text-center">

							<?php 
								if(@$_GET['loginEmpty'] == true ){
							 		echo "<p class='card-subtitle text-danger text-center mb-1'>未輸入帳號(信箱)or密碼</p>";
								}
								if( isset( $_GET['loginError'] ) ){
									if( $_GET['loginError'] == "wrong_pwd" ){
										echo "<p class='card-subtitle text-danger text-center mb-1'>密碼錯誤</p>";
									}elseif ( $_GET['loginError'] == "no_user" ){
										echo "<p class='card-subtitle text-danger text-center mb-1'>無此帳號</p>";
									}elseif ( $_GET['loginError'] == "no_login"){
										echo "<p class='card-subtitle text-danger text-center mb-1'>請先登入</p>";
									}else{
										echo "<p class='card-subtitle text-danger text-center mb-1'>系統錯誤</p>";
									}
								}
							 ?>

							<div class="form-row">
								<div class="col-12">
									<input type="text" name="UAcc" placeholder="帳號or信箱" class="form-control mb-3">
								</div>
								<div class="col-12">
									<input type="password" name="UPass" placeholder="密碼" class="form-control mb-3">
								</div>
							</div>
							<?php 
								if ( isset($_SESSION['userId']) && isset($_SESSION['userName']) ) {
									echo "<div class='btn-group'>
									<button type='submit' name='Login' class='btn btn-outline-success' disabled>Login</button>
									<button type='reset' class='btn btn-outline-secondary' disabled>Reset</button>
									</div>";
								} else {
									echo "<div class='btn-group' id='loginButtonGroup'>
									<button type='submit' name='Login' class='btn btn-outline-success'>Login</button>
									<button type='reset' class='btn btn-outline-secondary'>Reset</button>
									</div>
									<a href='resetpwd.php'><small>忘記密碼?</small></a>
									<a href='gotoopenregispage' id='regis_area_show'><small>尚未註冊?</small></a>";
								}
							 ?>
						</form>
					</div>
				</div>				
			</div>
		</div>
	</div>
	<?php 

		require 'footer.html';

	 ?>
	<script>
		$(document).ready(function() {
			$('#regis_area_show').click(function(e) {
				e.preventDefault();
				$('#regis_area').show(1000);
				$('#login_area').hide();
			});
		})
	</script>
</body>
</html>