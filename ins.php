<?php
$server="localhost";
$uname="root";
$pwd="";
$db="diwakar";
$con=mysqli_connect($_server,$uname,$pwd,$db)or die("db not connected");
$id=$_POST['id'];
$name=$_POST['name'];
$dob=$_POST['dob'];
$age=$_POST['city'];
$doj=$_POST['address'];
$query="insert into diwa values($id,'$name','$dob','$city','$address')";
if($res=mysqli_query($con,$query))
{
	echo"<script>alert('data saved');
	window.location.href='front.php';
	</script>";
}
else
{
	echo"<script>alert('data not saved');
	window.location.href='front.php';
	</script>";
}
?>