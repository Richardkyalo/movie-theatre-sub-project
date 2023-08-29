<?php
include "dbcon.php";
include "moviecardviewsub.php"
?>
<div class="row pt-3">
    <table>
        <tr>
            <th>Cover Pictures</th>
            <th>Theatres</th>
            <th>Dates</th>
            <th>Time</th>
            <th>Length</th>
            <th>Action</th>
        </tr>
        <?php
        $stmt = "SELECT * FROM movie";
        $result = $conn->query($stmt);

        if ($result) {
            foreach ($result as $data) :
                $title = $data['title'];
                $hours = $data['hours'];
                $minutes = $data['minutes'];

                $query = "SELECT * FROM movie WHERE title='{$title}'";
                $answer = $conn->query($query);


                foreach ($answer as $data) :
                    $picture1 = $data['picture1'];
                    $picture2 = $data['picture2'];
                    $picture3 = $data['picture3'];
                    $picture4 = $data['picture4'];
                    $theatre1 = $data['theatre1'];
                    $theatre2 = $data['theatre2'];
                    $theatre3 = $data['theatre3'];
                    $theatre4 = $data['theatre4'];
                    $date1 = $data['date1'];
                    $date2 = $data['date2'];
                    $date3 = $data['date3'];
                    $date4 = $data['date4'];
                    $time1 = $data['time1'];
                    $time2 = $data['time2'];
                    $time3 = $data['time3'];
                    $time4 = $data['time4'];

        ?>
                    <tr>
                        <td>
                            <div>
                                <h2> <?= $title ?></h2>
                            </div>
                            <div id="carouselExampleCaptions" class="carousel slide box">
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
                                </div>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="./uploads/<?php echo $picture1 ?>" class="object-fit-cover border rounded d-inline-block img" alt="...">
                                        <div class="carousel-caption d-none d-md-block">

                                            <!-- <p>Will be in our Theatres soon</p> -->
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="./uploads/<?= $picture2 ?>" class="object-fit-cover border rounded d-block img" alt="...">
                                        <div class="carousel-caption d-none d-md-block">

                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="./uploads/<?= $picture3 ?>" class="object-fit-cover border rounded d-block img" alt="...">
                                        <div class="carousel-caption d-none d-md-block">

                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="./uploads/<?= $picture4 ?>" class="object-fit-cover border rounded d-block img" alt="...">
                                        <div class="carousel-caption d-none d-md-block">

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
                        </td>
                        <td class="pt-0">
                            <ol>
                                <li><?= $theatre1 ?></li> <br> <br>
                                <li><?= $theatre2 ?></li> <br> <br>
                                <li><?= $theatre3 ?></li> <br> <br>
                                <li><?= $theatre4 ?></li> <br> <br>
                            </ol>
                        </td>
                        <td>
                            <ol>
                                <li><?= $date1 ?></li> <br> <br>
                                <li><?= $date2 ?></li> <br> <br>
                                <li><?= $date3 ?></li> <br> <br>
                                <li><?= $date4 ?></li> <br> <br>
                            </ol>
                        </td>
                        <td>
                            <ol>
                                <li><?= $time1 ?> <br><button class="btn btn-primary">Delete</button> <button class="btn btn-primary">Update</button></li> <br>
                                <li><?= $time2 ?> <br><button class="btn btn-primary">Delete</button> <button class="btn btn-primary">Update</button></li> <br>
                                <li><?= $time3 ?> <br><button class="btn btn-primary">Delete</button> <button class="btn btn-primary">Update</button></li> <br>
                                <li><?= $time4 ?> <br><button class="btn btn-primary">Delete</button> <button class="btn btn-primary">Update</button></li> <br>
                            </ol>
                        </td>
                    <?php
                endforeach;
                    ?>
                    <td>
                        <?= $hours ?>Hr(s)
                        <?= $minutes ?>min(s)
                        <br><br><br><br><br><br><br><br><br><br><br><br>
                    </td>
                    <td>
                        <button class="btn btn-primary">Delete</button><br><br>
                        <button class="btn btn-primary">Update</button>
                        <br><br><br><br><br><br><br><br>
                    </td>
                    </tr>
            <?php
            endforeach;
        } ?>
    </table>

</div>