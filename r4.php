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
        padding:0;
        box-sizing:border-box;
        font-family:'poppins',sans-serif;
    }
    body{
        display:flex;
        justify-content:center;
        align-items:center;
        min-height:100vh;
        background:#000;
    }
    .wrapper{
        position:relative;
        width:400px;
        height:500px;
        background:#000;
        box-shadow:0 0 50px #0ef;
        border-radius:20px;
        padding:40px;
    }
    .wrapper:hover{
        animation:animate 1s linear infinite;

    }
    @keyframes animate {
        100%{
            filter:hue-rotate(360deg);
        }
        
    }
    .form-wrapper{
        display:flex;
        justify-content:center;
        align-items:center;
        width:100%;
        height:100%
    }
    .h2{
        font-size:30px;
        color:#000;
        text-align:center;
        align-items:center;
        
    }
    .input-group{
        position:relative;
        margin:30px 0;
        border-bottom:2px solid #fff;
    }
    .input-group label{
        position:absolute;
        top:50%;
        left:0;
        transform:translateY(-150%);
        font-size:16px;
        color:#fff;
        font-weight:500;
        pointer-events:none;
        transition: -2s;
    }
    .input-group input {
        width:320px;
        height:40px;
        font-size:16px;
        color:#fff;
        padding:0 5px;
        background:transparent;
        border:none;
        outline:none;
    }

    .input-group input:focus~label,
    .input-group input:valid~label
    {
        top: -15px;
    }

    .button{
        position:relative;
        width:100%;
        height:40px;
        backsground:#0ef;
        box-shadow:0 0 10px #0ef;
        font-size:16px;
        color:#000;
        font-weight:500;
        cursor:pointer;
        border-radius:80px;
        border:none;
        outline:none;
    }

    </style>
<body>
<div class="wrapper">
    <div class="form-wrapper sign-in">
    <div class="container">
    <form method="POST"action="r2.php">
        <div class="row">
        <h2>LOGIN</h2>
            <div class="input-group">   
                <label for="">name</label>
                <input type="text"name="name">
</div>
            <div class="input-group">
                <label for="">password</label>
                <input type="password"name="pwd">
</div>

                <button type="submit">LOGIN</button>
                <!--<input type="submit"name="submit"class="btn btn-success"value="submit">--> 

                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>