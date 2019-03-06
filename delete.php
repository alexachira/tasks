<?php
//get
//bitbucket.com
//github.com
if (isset($_GET["id"]))
{
    $conn = mysqli_connect("localhost", "root", "", "tasks");
    extract($_GET);
    $sql ="delete from tasks where id=$id";
    mysqli_query($conn,$sql);
}
header("location:fetch.php");