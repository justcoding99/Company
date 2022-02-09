
	<?php
	$server="localhost";
	$username="root";
	$password="";
	$db="jobs";
	
	$con=mysqli_connect($server,$username,$password,$db);
	if(!$con)
	{
		die("connection failed".mysqli_connect_error());
	}
//	else

	 
	function con_close()
	{
		global $con;
		mysqli_close($con);
	}
	
	
	?>
