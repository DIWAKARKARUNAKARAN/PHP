<?php
$server="localhost";
$uname="root";
$pwd="";
$db="diw";
$con=mysqli_connect($server,$uname,$pwd,$db)or die('db not connected');
$id=$_POST['id'];
$uname=$_POST['name'];
$city=$_POST['dob'];
$query="update diw1 set name='$name'AND city='$dob'where id=$id";
if($res=mysqli_query($con,$query))
{
    echo"<script>alert('update successfully')</script>";
}
else
{
    echo"<script>alert(' not update successfully')</script>"; 
}
?>
