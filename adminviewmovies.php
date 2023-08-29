<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Richard group Theatres</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:ital,opsz,wght@1,9..144,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="sidebar.css">
    <link rel="stylesheet" href="style.css">
</head>
<style>
    table,
    th,
    td {
        border-radius: 40px;
      border: 1px solid #1cadb7;
      border-collapse: collapse;
    }
    .box {
        width: 500px;
        height: 300px;
        border: 5px solid black;
    }

    .img {
        width: 500px;
        height: 200px;
    }
</style>

<body>
    <?php
    include "admindashboard.php"
    ?>

    <?php
    if (isset($_SESSION['status'])) {
    ?>
        <div class="alert alert-danger">
            <h4>Info!
                <?= $_SESSION['status'] ?>
            </h4>
        </div>
    <?php
        unset($_SESSION['status']);
    }
    ?>



    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-10">
            <?php
            include "moviecardview.php";
            ?>
        </div>
        <div class="col-sm-1"></div>
    </div>
    <div class="row pt-3">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
            <h3>Richard Movie Theatres,,,,, Home of Joy</h3>
        </div>
        <div class="col-sm-4"></div>
    </div>

    <?php
    include "footer.php";
    ?>

</body>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

<script src=."/js/bootstrap.bundle.js"></script>

</html>