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
    include "navigationbar.php";
    ?>
    <section class="hero">
        <div class="container">
            <h1>Welcome to Our Movie Ticket Booking Site</h1>
            <p>Home of Entertainment</p>
            <button class="btn btn-primary">Get Started</button>
        </div>
    </section>

        <!-- Card section -->
        <section class="container mt-5">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top" src="./uploads/<?= $picture1?>"
                        alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card 1</h5>
                        <p class="card-text">We give the feeling of Leisure anytime you wish </p>
                        <a href="#" class="btn btn-primary">Learn more</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top" src="./uploads/<?=$picture2?>"
                        alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card 2</h5>
                        <p class="card-text">What is making you not to be entertained if not you?</p>
                        <a href="#" class="btn btn-primary">Learn more</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top" src="./uploads/<?=$picture4?>"
                        alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card 3</h5>
                        <p class="card-text">Welcome to our specious theatres in the city, We treasure you</p>
                        <a href="#" class="btn btn-primary">Learn more</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Richard Group Theatres</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Here we make your day end in a happy mood</p>
        <p>Our theatres are open Every Friday to Sunday</p>
        <p>You just need to book and get your ticket and see you there....</p>
      </div>
      <div class="modal-footer">
       <p><b>Thank You</b></p> 
       <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>


    <?php
    include "footer.php";
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