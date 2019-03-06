<?php
if (isset($_POST["email"])){
    require 'db.php';
    extarct($_POST);
    $password=md5($password);
    $sql="select * from users where email ='$email' and password='password'";
    $results=mysql_querry($conn,$sql) or die (mysqli_error($conn));
    $count=mysqli_num_rows($results);
    if($count==1){
        //success
        //save
        $info=mysqli_fetch_assoc($results);
        session_start();
        $_SESSION['info']=info;
        header("location;tasks.php");
    }
    else{
        $message="wrong username or password";
    }
}




?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>
    <link rel="stylesheet" href="bootstrap-4.2/css/bootstrap.css">
</head>
<body>

<div class="container">
    <form class="row justify-content-center">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-header">
                    <h3>login</h3>
                </div>
                <div class="card-body">


                    <form action="login.php" method="post">


                        <div class="form-group">
                            <label>email</label>
                            <input type="email" class="form-control " name="email">
                        </div>

                        <div class="form-group">
                            <label>password</label>
                            <input type="password" class="form-control " name="password">
                        </div>

                        <button type="submit" class="btn btn-primary btn-block">Sign up</button>
                    </form>

                    <a href="register.php" class="text-center">register here</a>
                </div>
            </div>


        </div>


</html>
