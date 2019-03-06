<?php
require 'security.php';
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tasks</title>
</head>
<body>

<div class="container">
    <table class="table table-dark" id="task">
        <thead>
        <tr>
            <th>ID</th>
            <th>TITLE</th>
            <th>STATUS</th>
            <th>DATE</th>
        </tr>
        </thead>

        <tbody>
        <?php
        $conn = mysqli_connect("localhost", "root", "", "tasks");
        $sql = "select * from items";
        $results= mysqli_query($conn,$sql);
        while( $row = mysqli_fetch_assoc($results))
        {
              extract($row);
            echo" <tr>
            <td>$id</td>
            <td>$title</td>
            <td>$status</td>
            <td>$date</td>
            <td><a class='btn btn-danger btn-sm' href='delete.php?id=$id'>delete</a></td>
          
           
        </tr>";
        }
        ?>
        </tbody>

    </table>
</div>
<script>
    $(document).ready(function() {
        $('Tasks').DataTable();
    } );
</script></body>
</html>