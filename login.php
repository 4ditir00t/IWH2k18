<html>
<body>
<?php
include 'connect.php';
session_start();
$myusername = $_POST['uname'];
$mypassword = md5($_POST['psw']);
$query = "select * from `login` where name='$myusername'";
$result=mysqli_query($dbhandle,$query);
$count= mysqli_num_rows($result);
if($count==1){
	mysqli_close(NULL);
	$_SESSION['auth']="yes";
	$q="SELECT * FROM `login`";
$r=mysqli_query($dbhandle,$q) or die("Cannot fetch");
while($row=mysqli_fetch_array($r))
{
	if($row['name']==$myusername)
	{
		$_SESSION['ID']=$row['index'];
	}
}
	header("Location:story.html");
	exit;
}
else
{
	echo "<script>alert('Invalid Username or Password');window.loaction.href='index.html';</script>";
}
?>
</body>
</html>