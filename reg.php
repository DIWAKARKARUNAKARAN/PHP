<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<style>
    *{
        margin:0;
        padding:0
    }
    .body{
        margin:0px;
        margin-bottom:0px;
        padding:90px;
        background:url(Images/n1.jpg);
        background-size:cover;
        background-position:center;
        background-repeat:no-repeat;
 }
 .reg{
    width:40%;
    margin:auto;
    border:2px solid white;
    border-radius:3px;
    padding:25px;
 }
 /*label{
    color:white;
    font-size:16px;
    font-family:sans-serif;
 }*/
 #name{
    width:250px;
    padding:5px;
    border:none;
    border-bottom:2px solid white;
    background:none;

 }

    </style>
<body>
    <div class="body">
    <form method="post"action="r1.php" enctype="multipart/form-data">
        <div class="reg">
        <h1 align="center">REGISTRATION FORM</h1>
        <label for="name">enter your fist name</label><br>
        <input type="text" id="name" name="name" ><br>
        <label for="">enter your last name</label><br>
        <input type="text" id="name" name="lname" ><br>
        <label for="">enter your password</label><br>
        <input type="password" id="name" name="pwd" ><br>
        <label for="">ReEnter your password</label><br>
        <input type="password" id="name" name="rpwd" ><br>
        <label for="">enter your email</label><br>
        <input type="email" id="name" name="email" ><br>
        <label for="">enter your mobile number </label><br>
        <input type="number" id="name" name="num" ><br>
        <label for="">enter your address</label><br>
        <input type="text" id="name" name="add" ><br>
        <h6>Gender: </h6>
        <input type="radio" name="gen"  value="Female" />
       <label for="femaleGender">Female</label>
       <input type="radio" name="gen" value="Male" />
        <label for="maleGender">Male</label> 
        <input type="radio" name="gen" value="other" />
        <label for="otherGender">Other</label><br>
        <lable>hobbies</lable><br>
        <input type="checkbox" id="v1" name="v2">
        <label for="vehicle1"> drawing</label><br>
        <input type="checkbox" id="v1" name="v2" v>
        <label for="vehicle2">singing</label><br>
        <input type="checkbox" id="v1" name="v2" >
        <label for="vehicle3">dancing</label><br> 
        <label for="">select your BOD</label>
        <input type="date" id="bod" name="bod" ><br>
        <label for="">selct your country</label>
        <select name="con" id="cars">
        <option value="i">India</option>
        <option value="c">China</option>
        <option value="r">Russia</option>`````
        <option value="j">Japan</option>
  </select><br>
        <label for="">upload file</label>
        <input type="file" id="fi" name="path" ><br>
        <input type="reset" class="btn btn-danger">
        <input type="submit" class="btn btn-success">
    </form>
</div>
</div>
</body>
</html>