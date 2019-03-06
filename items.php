<?php
require 'security.php';
if (isset($_POST["Status"])) {
    extract($_POST);
    $conn=mysqli_connect("localhost" ,"root","","tasks" );

    $sql=  "INSERT INTO `items`(`id`, `title`, `status`, `date`,`$user_id`)
 VALUES ('$id','$title','$status','$date','$id')";
    mysqli_query($conn,$sql);

}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>items</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container" >



    <form action="items.php" method="post">
        <div class="form-group">

            <input type="text" class="form-control" name="Title" placeholder="Title">
        </div>
        <div class="form-group">

            <input type="date" class="form-control" name="date" placeholder="date">
        </div>
        <div class="form-group">

            <select name="status" class="form-control">
                <option value="complete">Complete</option>
                <option value="incomplete">Incomplete</option>

            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>



    </form>
</div>


</body>
</html>