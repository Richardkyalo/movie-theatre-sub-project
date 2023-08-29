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
    include "admindashboard.php"
    ?>


    <div class="container-sm shadow-lg border col-6 mt-5 mb-5"><br>
        <h2 style="text-align: center;">Add Employee</h2>
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
        <form action="adminaddemployeedb.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <div class="row">
                    <div class="col-sm-6">
                        <label for="">
                            <b>Employee FirstName:<div class="required">*</div></b>
                        </label>
                    </div>
                    <div class="col-sm-6">
                        <label for="">
                            <b>Employee LastName:<div class="required">*</div></b>
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="firstname" placeholder="">
                    </div>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="lastname" placeholder="">
                    </div>
                </div>
                <br>

                <div class="row">
                    <div class="col-sm-6">
                        <label for="">
                            <b>Level Of Education:<div class="required">*</div></b>
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
                        <input type="text" class="form-control" name="education" placeholder="">
                    </div>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="county" placeholder="">
                    </div>
                </div> <br>
                <div class="row">
                    <div class="col-sm-6">
                        <label for="">
                            <b>Phone Number:<div class="required">*</div></b>
                        </label>
                    </div>
                    <div class="col-sm-6">
                        <label for="">
                            <b>Email:<div class="required">*</div></b>
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="phone" placeholder="">
                    </div>
                    <div class="col-sm-6">
                        <input type="email" class="form-control" name="email" placeholder="">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-sm-6">
                        <label for="">
                            <b>Theatre Allocated:<div class="required">*</div></b>
                        </label>
                    </div>
                    <div class="col-sm-6">
                        <label for="">
                            <b>Profile Picture:<div class="required">*</div></b>
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="theatre" placeholder="">
                    </div>
                    <div class="col-sm-6">
                    <input class="input" type="file" id="" name="profile"> 
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-sm-3">
                        <label for="">
                            <b>Job Specification:<div class="required">*</div></b>
                        </label>
                    </div>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="job" placeholder="">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-sm-3">
                        <label for="">
                            <b>ID Number:<div class="required">*</div></b>
                        </label>
                    </div>
                    <div class="col-sm-9">
                        <input type="number" class="form-control" name="id" placeholder="">
                    </div>
                </div>
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

<script src=."/js/bootstrap.bundle.js"></script>

</html>