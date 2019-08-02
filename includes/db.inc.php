<?php 
	$myhost = "localhost";
	$myacc = "root";
	$mypass = "";
	$mydb = "my_db";

	$conn = mysqli_connect($myhost,$myacc,$mypass,$mydb);

	if( !$conn ){
		die("Connect database error: " . mysqli_connect_error() );
	}
 ?>