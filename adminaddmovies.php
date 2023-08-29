<?php
session_start();
include "dbcon.php";
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


    <div class="container-sm shadow-lg border col-8 mt-5 mb-5">
        <h2 style="text-align: center;">Add Movie</h2>
        <div class="alert alert-danger">
            <?php $_SESSION['info'] = "Fill the fields with *";            ?>
            <h4> <?= $_SESSION['info']; ?></h4>
        </div>
        <?php
                if (isset($_SESSION['status'])) {
                ?>
            <div class="alert alert-danger">
                <h4>Info! <?= $_SESSION['status'] ?></h4>
            </div>
        <?php
                    unset($_SESSION['status']);
                }

?>
        <form action="adminaddmoviesdb.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <div class="row">
                    <div class="col-sm-6"> <label for="email">
                            <b>Movie Title:<div class="required">*</div></b>
                        </label></div>
                    <div class="col-sm-6">
                        <label for="">
                            <b>Movie Duration:<div class="required">*</div></b>
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="title" placeholder="">
                    </div>
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-sm-6">
                                <label for="duration-hours"><b>(hours):</b></label>
                                <input type="number" id="duration-hours" name="duration-hours" min="0" max="5" required>
                            </div>
                            <div class="col-sm-6">
                                <label for="duration-minutes"><b>(minutes):</b></label>
                                <input type="number" id="duration-minutes" name="duration-minutes" min="0" max="59" required>
                            </div>
                        </div>
                        <!-- <input type="time" id="duration" name="duration" required></div> -->
                    </div> <br>
                    <div class="row">
                        <div class="col-sm-11">
                        </div>
                    </div>
                    <br>
                    <label for="imageInput"><b>Movie cover Pictures<div class="required">*</div></b></label> <br>
                    <div class="row">
                        <div class="col-sm-6"> <input class="input" type="file" id="" name="image1"> <br> <br>
                        </div>
                        <div class="col-sm-6"> <input class="input" type="file" id="" name="image2"> <br> <br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6"> <input class="input" type="file" id="" name="image3"> <br> <br>
                        </div>
                        <div class="col-sm-6"> <input class="input" type="file" id="" name="image4"> <br> <br>
                        </div>
                    </div>
                    <label for="password"> <b>Theatres Offering:<div class="required">*</div></b></label><br>
                    <div class=row>
                        <div class="col-sm-4"><b>Theatre Name</b></div>
                        <div class="col-sm-4"><b>Date</b></div>
                        <div class="col-sm-4"><b>Time</b></div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <?php
                            $stmt = "SELECT * FROM theatres";
                            $result = $conn->query($stmt);
                            ?>
                            <select name="theatre1" class="col-4">
                                <?php foreach ($result as $theatre) : ?>
                                    <option value="<?= $theatre['name'] ?>"><?= $theatre['name'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="col-sm-4"><input type="date" name="date1"></div>
                        <div class="col-sm-4"><input type="time" name="time1"></div>
                    </div> <br><br>
                    <div class=row>
                        <div class="col-sm-4"><b>Theatre Name</b></div>
                        <div class="col-sm-4"><b>Date</b></div>
                        <div class="col-sm-4"><b>Time</b></div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <select name="theatre2" class="col-4">
                                <?php foreach ($result as $theatre) : ?>
                                    <option value="<?= $theatre['name'] ?>"><?= $theatre['name'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="col-sm-4"><input type="date" name="date2"></div>
                        <div class="col-sm-4"><input type="time" name="time2"></div>
                    </div> <br><br>
                    <div class=row>
                        <div class="col-sm-4"><b>Theatre Name</b></div>
                        <div class="col-sm-4"><b>Date</b></div>
                        <div class="col-sm-4"><b>Time</b></div>
                    </div> <br>
                    <div class="row">
                        <div class="col-sm-4">
                            <select name="theatre3" class="col-4">
                                <?php foreach ($result as $theatre) : ?>
                                    <option value="<?= $theatre['name'] ?>"><?= $theatre['name'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="col-sm-4"><input type="date" name="date3"></div>
                        <div class="col-sm-4"><input type="time" name="time3"></div>
                    </div> <br><br>
                    <div class=row>
                        <div class="col-sm-4"><b>Theatre Name</b></div>
                        <div class="col-sm-4"><b>Date</b></div>
                        <div class="col-sm-4"><b>Time</b></div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <select name="theatre4" class="col-4">
                                <?php foreach ($result as $theatre) : ?>
                                    <option value="<?= $theatre['name'] ?>"><?= $theatre['name'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="col-sm-4"><input type="date" name="date4"></div>
                        <div class="col-sm-4"><input type="time" name="time4"></div>
                    </div> <br><br>
                </div>
                <div class="form-group">
                </div>
                <br>
                <button type="submit" name="submit-button" class="btn btn-primary btn-block active col-12">Add</button> <br><br>
        </form>

    </div>
    </div>



    <?php
    include "footer.php"
    ?>

</body>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

<script src=."/js/bootstrap.bundle.js"></script>

</html>