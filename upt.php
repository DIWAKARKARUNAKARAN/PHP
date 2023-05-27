<?php
$server="localhost";
$uname="root";
$pwd="";
$db="diwakar";
$con=mysqli_connect($server,$uname,$pwd,$db)or die('db not connected');
$id=$_POST['id'];
$name=$_POST['name'];
$city=$_POST['city'];
$dob=$_POST['dob'];
$address=$_POST['address'];
$query="update diw set name='$name',city='$city',dob='$dob',address='$address'where id=$id";
if($res=mysqli_query($con,$query))
{
    echo"<script>alert('update successfully')</script>";
}
else
{
    echo"<script>alert(' not update successfully')</script>"; 
}
?>
