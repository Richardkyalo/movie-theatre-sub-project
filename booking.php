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
    .box {
        width: 100%;
        height: 500px;
        border: 1px solid #333;
    }

    .img {
        width: 100%;
        height: 100%;
    }
</style>

<body class="">
    <?php
    include "sessiondestroy.php";
    include "sitenavigationbar.php"
    ?>
    <?php
    if (isset($_POST['book'])) {
        include "dbcon.php";
        $query = "SELECT * FROM movie WHERE title='{$_POST['book']}'";
        $result = $conn->query($query);
        if (mysqli_num_rows($result) > 0) {
            $data = mysqli_fetch_assoc($result);
            $picture1 = $data['picture1'];
            $picture2 = $data['picture2'];
            $picture3 = $data['picture3'];
            $picture4 = $data['picture4'];
    ?>
            <div class="row p-3">
                <div class="col col-sm-6">
                    <div id="carouselExampleCaptions" class="carousel slide">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="box carousel-item active">
                                <img src="./uploads/<?= $picture1 ?>" class="box object-fit-cover border rounded d-inline-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5><b><?= $_POST['book'] ?></b></h5>
                                    <p></p>
                                </div>
                            </div>
                            <div class="box carousel-item">
                                <img src="./uploads/<?= $picture2 ?>" class="box object-fit-cover border rounded d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5><b><?= $_POST['book'] ?></b></h5>
                                    <p>Will be in our Theatres soon</p>
                                </div>
                            </div>
                            <div class="box carousel-item">
                                <img src="./uploads/<?= $picture3 ?>" class="box object-fit-cover border rounded d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5><b><?= $_POST['book'] ?></b></h5>
                                    <p>Will be in our Theatres soon</p>
                                </div>
                            </div>
                            <div class="box carousel-item">
                                <img src="./uploads/<?= $picture4 ?>" class="box object-fit-cover border rounded d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5><b><?= $_POST['book'] ?></b></h5>
                                    <p>Will be in our Theatres soon</p>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <div class="col col-sm-6">
                    <div class="row">
                        <div class="col col-sm-12" style="text-align: center;">
                            <h4><?= $_POST['book'] ?></h4>
                            <h5>Will be <span style="color:red">LIVE AT</span> <?= $_POST['theatre'] ?> Theatre</h5>
                            <h6><a href="" class="btn btn-primary">CLICK</a> Here to check <?= $_POST['theatre'] ?> Theatre displays</h6>
                            <h5>To Book fill in the form below. Only:</h5>
                            <h5 style="color:lime;">Ksh. 500</h5>
                            <h5>Deducted from <span style="color:lime">M-PESA</span></h5>
                        </div>
                    </div>
                    <div class="row">

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
                        <div class="col col-sm-12" style="text-align:center;">
                            <form action="bookmovie.php" method="post">
                                <div class="form-group">
                                    <h4>Please use a <span style="color:lime">M-PESA</span> number</h4>
                                    <input type="text" class="form-control pr-4" placeholder="Enter Username" style="border-left: none; border-top: none; border-right: none; border-bottom: 1px solid green;"> <br>
                                    <input type="text" class="form-control" placeholder="Enter Mobile number" style="border-left: none; border-top: none; border-right: none; border-bottom: 1px solid green;"> <br>
                                    <input type="password" class="form-control" placeholder="Enter your password" style="border-left: none; border-top: none; border-right: none; border-bottom: 1px solid green;"> <br>
                                    <button class="btn btn-primary form-control" name="booking">Book</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    <?php
        }
    }
    ?>
    <div class="row p-3">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
            <h3>Richard Movie Theatres, Home of Joy</h3>
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