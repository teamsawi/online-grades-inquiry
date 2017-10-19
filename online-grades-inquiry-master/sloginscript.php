<?php
$myusername = $_GET['un'];
session_start();
include ('admin/config.php');
$sql ="select * from student where student_no='$myusername'";
$result=mysqli_query($con,$sql);
$count=mysqli_num_rows($result);
	if($count==1)
	{
		$_SESSION['login_user'] =$myusername;
		?>
		<script type="text/javascript">alert("Welcome Student");
		window.location="root/index.php";</script>
		<?php
	}
	else
	{
		$_SESSION['login_msg'] = 1; ?>
		<script type="text/javascript">
			alert("Wrong Username or Password!");
			window.location='index.php';
		</script>
		<?php
	}


?>
