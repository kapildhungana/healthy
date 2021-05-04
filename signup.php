<?php

require_once "config.php";
$username=$password=$confirmpassword="";
$username_err=$password_err=$confirmpassword_err="";

if($_SERVER['REQUEST_METHOD']=="POST"){
    if(empty(trim($_POST['username']))){
        
        $username_err="Username cannot be blank";
    }
    else{
        $sql="SELECT id FROM users WHERE username=?";
        $stmt=mysqli_prepare($conn,$sql);
        if($stmt){
            mysqli_stmt_bind_param($stmt,"s",$param_username);

            //set the value of pram_usrname
            $param_username=trim($_POST['username']);

            //try to execute the statement
            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);
                if(mysqli_stmt_num_rows($stmt)==1){
                    $username_err="This username is taken";
                }
                else{
                    $username=trim($_POST['username']);
                }
            }
            else{
                echo "something went wrong";
            }
        }
        
    }
    mysqli_stmt_close($stmt);


//check for password
if(empty(trim($_POST['password']))){
    $password_err="Passord cannot be blank";

}
elseif(strlen(trim($_POST['password']))<5){
    $password_err="too small password";
}
else{
    $password=trim($_POST['password']);
}

//check for confirm password
if(trim($_POST['password'])!=trim($_POST['confirmpassword'])){
    $password_err="Password should match";

}

//insert into database
if(empty($username_err) && empty($password_err) && empty($confirmpassword_err)){
    $sql="INSERT INTO users(username,password) VALUES (?,?)";
    $stmt=mysqli_prepare($conn,$sql);
    if($stmt){
        mysqli_stmt_bind_param($stmt,"ss",$param_username,$param_password);

        //set these parameter
        $param_username=$username;
        $param_password=password_hash($password,PASSWORD_DEFAULT);

        //try to execute
        if(mysqli_stmt_execute($stmt)){
            header("location: login.php");
        }
        else{
            echo "something went wrong";
        }
    }
    mysqli_stmt_close($stmt);
}
mysqli_close($conn);
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
    <h3 align="center"> sign up</h3>
    <div class="form-group">
        <label for="firstname">Userinfo</label>
        <input 
        type="text"
        class="form-control"
        id="firstname"
        name="username"
        placeholder="enter first name"/>
    </div>
    <div class="form-group" >
        <input type="number"class="form-control" id="age" name="age" placeholder="enter age"/>
       
    </div>
    <div class="form-group">
        <input type="number"class="form-control" id="height" name="height" placeholder="enter height in cms"/>
    </div>
    <div class="form-group">
    <label for="cars">Choose your dissorder:</label>
        <select id="cars" name="disorder" class="form-control" placeholder="any disorder">
        <option value="suger">Suger</option>
        <option value="HighBP">High BP</option>
        <option value="LowBP">Low BP</option>
        <option value="normal" selected>Nothing</option>
        </select>
    </div>
    
    <div class="form-group">
    <label for="password">password</label>
        <input 
        type="password"
        class="form-control"
        id="password"
        name="password"
        placeholder="enter password"/>
    </div>
    <div class="form-group">
        <input 
        type="password"
        class="form-control"
        id="password2"
        name="confirmpassword"
        placeholder="enter confirm password"/>
    </div>
    <br>
    <button type="submit" class ="btn btn-primary">Submit</button>
</form>
</div>
</div>
</body>
</html>