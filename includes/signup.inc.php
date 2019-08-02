<?php 
	if( isset($_POST['Signup']) ){
		
		include 'db.inc.php';

		$useracc = $_POST['UAcc'];
		$userpwd = $_POST['UPass'];
		$pwdCheck = $_POST['UPassCheck'];
		$username = $_POST['UName'];
		$email = $_POST['UEmail'];

		if( empty($username) || empty($useracc) || empty($userpwd) || empty($pwdCheck) ){
			header("location:../index.php?error=emptyfields&uid=".$useracc."&email=".$email);
			exit();
		}elseif ( !preg_match("/^[a-z0-9]*$/", $useracc)) {
			header("location:../index.php?error=invaliduseracc&useracc=".$useracc);
			exit();
		}elseif ( !filter_var($email, FILTER_VALIDATE_EMAIL )) {
			header("location:../index.php?error=invalidmail&uid=".$useracc);
			exit();
		}elseif ( mb_strlen($username, "UTF-8") == strlen($username) ) {	//驗證使用者名稱是否為中文(判斷式中是沒有中文)
			header("location:../index.php?error=invalidname&username=".$username);
			exit();
		}elseif ( $userpwd !== $pwdCheck ) {
			header("location:../index.php?error=invalidPassCheck");
			exit();
		}else{
			$sql = "SELECT account FROM employee WHERE account=?";
			$stmt = mysqli_stmt_init($conn);
			if( !mysqli_stmt_prepare($stmt, $sql) ){
				header("location:../index.php?error=sql_error");
				exit();
			}else{
				mysqli_stmt_bind_param($stmt, "s", $useracc);
				mysqli_stmt_execute($stmt);
				mysqli_stmt_store_result($stmt);
				$resultCheck = mysqli_stmt_num_rows($stmt);
				if( $resultCheck > 0 ){
					header("location:../index.php?error=useracc_token&mail=".$email);
					exit();
				}else{
					$sql = "INSERT INTO employee (account, pass, name, u_email) VALUES (?, ?, ?, ?)";
					$stmt = mysqli_stmt_init($conn);
					if( !mysqli_stmt_prepare($stmt, $sql) ){
						header("location:../index.php?error=sql_error");
						exit();
					}else{
						$hashedPwd = password_hash($userpwd, PASSWORD_DEFAULT);
						mysqli_stmt_bind_param($stmt, "ssss", $useracc, $hashedPwd, $username, $email);
						mysqli_stmt_execute($stmt);
						mysqli_stmt_store_result($stmt);
						header("location:../index.php?signup=success");
						exit();
					}
				}
			}
		}
		mysqli_stmt_close($stmt);
		mysqli_close($conn);
	}
	else{
		header("location:../index.php");
		exit();
	}
 ?>