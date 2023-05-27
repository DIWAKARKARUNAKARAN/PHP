<?php 
$name=$_POST['name'];
$pwd=$_POST['pwd'];
$con=mysqli_connect("localhost","root","","diwakar") or die("db not connected");
$que="select * from diwa where name='$name'";
$res=mysqli_query($con,$que);
if($row=mysqli_fetch_array($res))
{
   if($row['pwd']==$pwd) 
     { 
        echo"<script> alert('login success');</script>"; 
        
     }
    else
    {
        echo"<script>alert('login unsuccess')</script>;";
    }
}
else
{
    echo"<script>alert('invalid username')
   </script>;";
}