<?php
$myusername = $_GET['un'];
$mypassword = $_GET['pw'];
session_start();
include ('admin/config.php');
$sql ="select * from professors where prof_id='$myusername'
and password='$mypassword'";
$result=mysqli_query($con,$sql);
$count=mysqli_num_rows($result);
	if($count==1)
	{
		$_SESSION['login_user'] =$myusername;
		?>
		<script type="text/javascript">alert("Welcome Teacher");
		window.location="root/faculty.php";</script>
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
