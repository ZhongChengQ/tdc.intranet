<?php 
	
	$address = "40701臺中市西屯區臺灣大道3段99號文心樓4樓";
	$family = "未婚";
	$identity = "B123456789";
	$phone = "0988123123";



	if( isset( $_GET['e_id_page'] ) )
	{
		require '../includes/db.inc.php';

		$page = $_GET['e_id_page'];
		$sql = "SELECT * FROM employee WHERE e_id = $page";
		$result = mysqli_query($conn, $sql);
		if( mysqli_num_rows($result) > 0 ){
			$row = mysqli_fetch_assoc($result);
			if ( $row['name'] == "" ) {
				$row['name'] = "NULL";
			}elseif ( $row['gender'] == 1 ) {
				$row['gender'] = "男";
			}else {
				$row['gender'] = "女";
			}
			echo "<tr><th style='width: 10em;'>編號 :</th><td>".$row['e_id']."</td></tr>
			<tr><th style='width: 10em;'>帳號 :</th><td>".$row['account']."</td></tr>
			<tr><th style='width: 10em;'>密碼 :</th><td style='word-break: break-all;'>".$row['pass']."</td></tr>
			<tr><th style='width: 10em;'>姓名 :</th><td>".$row['name']."</td></tr>
			<tr><th style='width: 10em;'>性別 :</th><td>".$row['gender']."</td></tr>
			<tr><th style='width: 10em;'>信箱 :</th><td>".$row['u_email']."</td></tr>
			<tr><th style='width: 10em;'>住址 :</th><td>".$address."</td></tr>
			<tr><th style='width: 10em;'>家庭 :</th><td>".$family."</td></tr>
			<tr><th style='width: 10em;'>身分證字號 :</th><td>".$identity."</td></tr>
			<tr><th style='width: 10em;'>手機 :</th><td>".$phone."</td></tr>";
		}else{
			echo "<tr><th><h3 class='text-center text-primary' style='line-height: 20rem;'>查無資料</h3></th></tr>";
		}
	}
	else
	{
		echo "請審核註冊資料";
	}



 ?>