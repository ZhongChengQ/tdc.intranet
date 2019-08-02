<?php 

	//預處理方式登入
	
	if( isset($_POST['Login'])){

		include 'db.inc.php';

		$acc = $_POST['UAcc'];
		$password = $_POST['UPass'];
		if( empty($acc) || empty($password) )
		{
			header("location:../index.php?loginEmpty= emptyfields");
			exit();
		}
		else
		{
			$sql = "SELECT * FROM employee WHERE account=? OR u_email=?";
			$stmt = mysqli_stmt_init($conn);
			if( !mysqli_stmt_prepare($stmt, $sql) ){
				header("location:../index.php?loginError=sql_error");
				exit();
			}else{
				mysqli_stmt_bind_param($stmt, "ss", $acc, $password);
				mysqli_stmt_execute($stmt);
				$result = mysqli_stmt_get_result($stmt);
				if( $row = mysqli_fetch_assoc( $result ) ){
					$pwdCheck = password_verify($_POST['UPass'], $row['pass']);
					if( $pwdCheck == true ) {
						session_start();
						$_SESSION['userId'] = $row['e_id'];
						$_SESSION['userName'] = $row['name'];

						header("location:../index.php?login=success&username=".$_SESSION['userName']);
						//header("location:../welcome.php?login=success");
						exit();
					}else{
						header("location:../index.php?loginError=wrong_pwd");
						exit();
					}
				}else{
					header("location:../index.php?loginError=no_user");
					exit();
				}
			}			
		}
		mysqli_stmt_close($stmt);
		mysqli_close($conn);
	}
	else
	{
		echo "not working!";
	}


 ?>