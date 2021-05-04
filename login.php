<?php
//handling login

//check if user is already logged in
if(isset($_SESSION['username'])){
    header("location: home.php");
    exit;
}
require_once "config.php";

$username=$password="";
$err="";

//if request is post
if($_SERVER['REQUEST_METHOD']=="POST"){
    if(empty(trim($_POST['username'])) || empty(trim($_POST['password']))){
        $err="Please enter username +password";
        }
    else{
        $username=trim($_POST['username']);
        $password=trim($_POST['password']);
    }

if(empty($err)){
    $sql="SELECT id,username,password FROM users WHERE username=?";
    $stmt=mysqli_prepare($conn,$sql);
    mysqli_stmt_bind_param($stmt,"s",$param_username);
    $param_username=$username;
    //try to execute this statement

    if(mysqli_stmt_execute($stmt)){
        mysqli_stmt_store_result($stmt);
        if(mysqli_stmt_num_rows($stmt)==1){
            mysqli_stmt_bind_result($stmt,$id,$username,$hassed_password);
            if(mysqli_stmt_fetch($stmt)){
                if(password_verify($password,$hassed_password)){
                    //ALLOW USER TO LOGIN
                    
                    session_start();
                    $_SESSION["username"]=$username;
                    $_SESSION["id"]=$id;
                    $_SESSION["loggedin"]=true;

                    //redirect to home page
                    header("location: home.php");

                }
            }
        }
    }
}
}

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    

</head>
<body>
    <!-- <header class="nav">
        <span >
            <img src="image/icon.png">
            </span>
        <span class="bold">Healthy living</span>
        
    </header> -->
    <ul>
      <li><img src="image/icon.png"></li>
      <li>Healthy life</li>
    
    </ul>
    <div class="form-page">
    <div class="box">
    <form action="" method="post">
        <h3 align="center"> Login </h3>
        <div class="form-group">
            <label for="username">User Name</label>
            <input 
            type="text"
            class="form-control"
            id="username"
            name="username"
            placeholder="enter username"/>
        </div>
       
        <div class="form-group">
            <label for="password">Password</label>
            <input 
            type="password"
            class="form-control"
            id="password"
            name="password"
            placeholder="enter password"/>
        </div>
      
        <br>
        <div class="sub">
            <button type="submit" class ="btn btn-primary">Submit</button>
        </div>
       
    </form>
</div>
</div>
</body>
</html>