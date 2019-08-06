<?php 
	
	require '../includes/db.inc.php';

	$sql = "SELECT * FROM employee";
	$result = mysqli_query($conn, $sql);
	if ( mysqli_num_rows($result) > 0 ) {
		while ( $row = mysqli_fetch_assoc($result) ) {
			if ( $row['name'] == "" ) {
				$row['name'] = "NULL";
			}
			echo "<tr><th scope='row'>".$row['e_id']."</th><td>".$row['name']."</td><td>".$row['account']."</td><td>";
			if ( $row['gender'] == 1 ) {
				echo "<a href='index.php?e_id_page=".$row['e_id']."'><img src='../images/man.png'></a>";
			}else {
				echo "<a href='index.php?e_id_page=".$row['e_id']."'><img src='../images/girl.png'></a>";
			}
			echo "</td></tr>";
		}
	} else {
		echo "<tr><th scope='row' colspan='3' class='text-center'>尚無註冊資料</th></tr>";
	}
	
	mysqli_close($conn);


 ?>