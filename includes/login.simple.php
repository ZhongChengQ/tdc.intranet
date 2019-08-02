<?php 
	
	//簡單登入

	if( isset($_POST['Login']) ){

		include 'db.inc.php';

		$acc = $_POST['UAcc'];
		$pwd = $_POST['UPass'];
		if( empty($acc) || empty($pwd) )
		{
			header("location:../index.php?loginEmpty=emptyfields");
			exit();
		}
		else
		{
			$sql = "SELECT * FROM employee WHERE account='$acc' OR u_email='$acc'";
			$result = mysqli_query($conn, $sql);
			if( mysqli_num_rows($result) > 0 ){
				
				while ( $row = mysqli_fetch_assoc($result) ) {
					$pwdCheck = password_verify($pwd, $row['pass']);
					if ( $pwdCheck == true ) {
						if ( $row['position'] == "Admin" ) {
							session_start();
							$_SESSION['userId'] = $row['e_id'];
							$_SESSION['userName'] = $row['name'];
							$_SESSION['position'] = $row['position'];
							header("location:../index.php?login=success&position=".$_SESSION['position']);
							exit();
						} else {
							session_start();
							$_SESSION['userId'] = $row['e_id'];
							$_SESSION['userName'] = $row['name'];
							header("location:../index.php?login=success&username=".$_SESSION['userName']);
							exit();
						}
					} else {
						header("location:../index.php?loginError=wrong_pwd");
						exit();
					}
				}
			}else{
				header("location:../index.php?loginError=no_user");
				exit();
			}

		}
		mysqli_close($conn);
	}



 ?>