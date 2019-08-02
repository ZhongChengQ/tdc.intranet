<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title>Reset Password</title>
</head>
<body style="background-color: #CCC;">
	<div class="container">
		<div class="row">
			<div class="col-xl-4 m-auto">
				<div class="card bg-light mt-5">
					<div class="card-title bg-info text-center py-3">
						<h3>Reset</h3>
					</div>
					<div class="card-body">
						<small class="text-danger">你將收到一封重設密碼的信在你的註冊信箱中</small>
						<form action="includes/reset-request.inc.php" method="post">
							<div class="form-row">
								<div class="col-10">
									<input type="email" placeholder="Enter your email" name="resetMail" class="form-control mb-2">
								</div>
								<div class="col-8">
									<button type="submit" name="reset-request-submit" class="btn btn-warning"><small>Receive new password by click</small></button>
								</div>
								
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>