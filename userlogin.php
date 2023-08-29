<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Richard group Theatres</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:ital,opsz,wght@1,9..144,500&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="sidebar.css">
    <link rel="stylesheet" href="style.css">
</head>
<style>

</style>

<body>
    <?php
    include "navigationbar.php"
        ?>


    <div class="container-sm shadow-lg col-4 border p-3 mt-5 mb-5">
        <h2 style="text-align: center;">Login</h2>

        <?php
        if(isset($_SESSION['status'])){
        ?>
        <div class="alert alert-danger">
            <h4>Info! <?=$_SESSION['status']?></h4>
        </div>
        <?php
        unset($_SESSION['status']);
        }
        ?>

        <form action="userlogindb.php" method="post">
            <div class="form-group">
                <label for="email">
                    <b>Email:</b>
                </label><br>
                <input type="email" class="form-control" name="email" placeholder="example@gmail.com">
            </div>
            <div class="form-group">
                <label for="password"> <b> Password:</b></label><br>
                <input type="password" class="form-control" name="password" placeholder="enter password">
            </div>
            <p>Don't have an account?<a href="usersignup.php">Register here</a></p>
            <p>Forgot Password?<a href="forgotpassword.php" class="col-4">Click here</a></p>
            <button type="submit" name="login-submit" class="btn btn-primary col-12 btn-block">Login</button>
        </form>

    </div>




    <?php
    include "footer.php"
        ?>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>

        <script src=."/js/bootstrap.bundle.js"></script>
</body>

</html>