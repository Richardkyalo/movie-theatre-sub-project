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
    .required {
        color: red;
    }
</style>

<body>
    <?php
    include "admindashboard.php";
    if (isset($_SESSION['status2'])) {
        ?>
    <div class="alert alert-success">
        <h4>Info! <?= $_SESSION['status2'] ?></h4>
    </div>
<?php
            unset($_SESSION['status2']);
        }
        
?>


    <div class="container-sm shadow-lg border col-6 mt-5 mb-5">
        <h2 style="text-align: center;">Add Movie Theatre</h2>
        <div class="alert alert-danger">
            <?php $_SESSION['info'] = "Fill the fields with *";
            echo $_SESSION['info'];
            ?></div><?php
                    if (isset($_SESSION['status'])) {
                    ?>
            <div class="alert alert-danger">
                <h4>Info! <?= $_SESSION['status'] ?></h4>
            </div>
        <?php
                        unset($_SESSION['status']);
                    }
        ?>
        <form action="adminaddtheatresdb.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <div class="row">
                    <div class="col-sm-6">
                        <label for="">
                            <b>Theatre Name:<div class="required">*</div></b>
                        </label>
                    </div>
                    <div class="col-sm-6">
                        <label for="">
                            <b>County:<div class="required">*</div></b>
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="theatre" placeholder="">
                    </div>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="county" placeholder="">
                    </div>
                </div>
                <br>

                <div class="row">
                    <div class="col-sm-6">
                        <label for="">
                            <b>Town:<div class="required">*</div></b>
                        </label>
                    </div>
                    <div class="col-sm-6">
                        <label for="">
                            <b>Physical Address:<div class="required">*</div></b>
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="town" placeholder="">
                    </div>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="address" placeholder="">
                    </div>
                </div> <br>
                <div class="row">
                    <h4>Theatre Displays:<div class="required">*</div></h4>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                    <input class="input" type="file" id="" name="image1">
                    </div>
                    <div class="col-sm-6">
                    <input class="input" type="file" id="" name="image2">
                    </div>
                </div> <br>
                <div class="row">
                    <div class="col-sm-6">
                    <input class="input" type="file" id="" name="image3">
                    </div>
                    <div class="col-sm-6">
                    <input class="input" type="file" id="" name="image4">
                    </div>
                </div> <br>
            </div>
            <br>
            <button type="submit" name="submit-button" class="btn btn-primary btn-block active col-12">Add</button><br><br>
    </div>
    <div class="form-group">
    </div>
    <br>
   </form>

    </div>




    <?php
    include "footer.php"
    ?>

</body>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

<script src=."/js/bootstrap.bundle.js"></script>

</html>