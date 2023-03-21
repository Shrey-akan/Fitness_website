<?php
	session_start();
	include('../connection.php');


	if (isset($_POST['submit'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];

		$sql = "SELECT * from admin where username='$username' and password='$password'";
		
		$q=mysqli_query($con,$sql);
		$row=mysqli_num_rows($q);

		if ($row == 1)
		{
			
			$r = mysqli_fetch_array($q);
			$_SESSION['admin'] = $r[0];
			header('location:dashboard.php');

		}
		else
		{
			// echo "Login Failed";
			
			header('location:index.php');
			// $_SESSION['status'] = "<div class='alert alert-danger'>Login Failed</div>";
			echo "login faild";
			
		}
	}
	else
	{
		// echo "somwthing went wrong :";
		// echo "Login Failed";
			
			header('location:index.php');
			// $_SESSION['status'] = "<div class='alert alert-danger'>somwthing went wrong :</div>";
echo "somwthing went wrong";
	}

?>