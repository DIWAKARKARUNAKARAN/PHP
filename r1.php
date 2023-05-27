<?php
$server="localhost";
$uname="root";
$pwd="";
$db="dinesh";
$con=mysqli_connect($server,$uname,$pwd,$db) or die("db not connect");
$name=$_POST['name'];
$lname=$_POST['lname'];
$pwd=$_POST['pwd'];
$cpwd=$_POST['rpwd'];
$email=$_POST['email'];
$mobile=$_POST['num'];
$address=$_POST['add'];
$gender=$_POST['gen'];
$hob=$_POST['v2'];
$bod=$_POST['bod'];
$con1=$_POST['con'];
$fname=$_FILES['path']['name'];
$tempf=$_FILES['path']['tmp_name'];
$fsize=$_FILES['path']['size'];
$fdir="upload/";
$path=$fdir.$fname;
if(move_uploaded_file($tempf,$path))
{
   $query="insert into reg values('$name','$lname','$pwd','$cpwd','$email',$mobile,'$address','$gender','$hob','$bod','$con1','$path')";
   $res=mysqli_query($con,$query);
   echo"<script> alert('data saved');
   window.location.href='lo.php';</script>";    
}
else
{

    echo"<script>alert('data unsaved')</script>";
}
?>