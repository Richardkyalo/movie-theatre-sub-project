<?php
include "dbcon.php";

$query = 'SELECT * FROM movie';
$result = $conn->query($query);
$count = 0;
foreach ($result as $data) :
    $title = $data['title'];
    $hour = $data['hours'];
    $minute = $data['minutes'];
    $stmt = "SELECT * FROM movie WHERE title='{$title}'";
    $answer = $conn->query($stmt);
    if (mysqli_num_rows($answer) > 0) {
        foreach ($answer as $output) :
            $count = $count + 1;
            $picture1 = $output['picture1'];
            $picture2 = $output['picture2'];
            $picture3 = $output['picture3'];
            $picture4 = $output['picture4'];
            $theatre1 = $output['theatre1'];
            $theatre2 = $output['theatre2'];
            $theatre3 = $output['theatre3'];
            $theatre4 = $output['theatre4'];
            $date1 = $output['date1'];
            $date2 = $output['date2'];
            $date3 = $output['date3'];
            $date4 = $output['date4'];
            $time1 = $output['time1'];
            $time2 = $output['time2'];
            $time3 = $output['time3'];
            $time4 = $output['time4'];
?>
            <div class="row">
                <div class="col-lg-3 mb-3 mb-sm-0">
                    <div class="card" style="width: 18rem;">
                        <img src="./uploads/<?= $picture1 ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?= $title ?></h5>
                            <p class="card-text"><b>Length:</b> <?= $hour ?>hr(s) <?= $minute ?>min(s)</p>
                            <p class="card-text"><b>Theatre:</b> <?= $theatre1 ?></p>
                            <p class="card-text"><b>Date:</b> <?= $date1 ?></p>
                            <p class="card-text"><b>Time:</b> <?= $time1 ?></p>
                            <form action="booking.php" method="post">
                                <input type="hidden" name="theatre" value="<?= $theatre1 ?>">
                                <input type="hidden" name="date" value="<?= $date1 ?>">
                                <input type="hidden" name="time" value="<?= $time1 ?>">
                                <input type="hidden" name="length1" value="<?= $hour ?>">
                                <input type="hidden" name="length2" value="<?= $minute ?>">
                                <button class="btn btn-primary" name="book" value="<?= $title ?>">Book</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mb-3 mb-sm-0">
                    <div class="card" style="width: 18rem;">
                        <img src="./uploads/<?= $picture2 ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?= $title ?></h5>
                            <p class="card-text"><b>Length:</b> <?= $hour ?>hr(s) <?= $minute ?>min(s)</p>
                            <p class="card-text"><b>Theatre:</b> <?= $theatre2 ?></p>
                            <p class="card-text"><b>Date:</b> <?= $date2 ?></p>
                            <p class="card-text"><b>Time:</b> <?= $time2 ?></p>
                            <form action="booking.php" method="post">
                                <input type="hidden" name="theatre" value="<?= $theatre2 ?>">
                                <input type="hidden" name="date" value="<?= $date2 ?>">
                                <input type="hidden" name="time" value="<?= $time3 ?>">
                                <input type="hidden" name="length1" value="<?= $hour ?>">
                                <input type="hidden" name="length2" value="<?= $minute ?>">
                                <button class="btn btn-primary" name="book" value="<?= $title ?>">Book</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mb-3 mb-sm-0">
                    <div class="card" style="width: 18rem;">
                        <img src="./uploads/<?= $picture3 ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?= $title ?></h5>
                            <p class="card-text"><b>Length:</b> <?= $hour ?>hr(s) <?= $minute ?>min(s)</p>
                            <p class="card-text"><b>Theatre:</b> <?= $theatre3 ?></p>
                            <p class="card-text"><b>Date:</b> <?= $date3 ?></p>
                            <p class="card-text"><b>Time:</b> <?= $time3 ?></p>
                            <form action="booking.php" method="post">
                                <input type="hidden" name="theatre" value="<?= $theatre3 ?>">
                                <input type="hidden" name="date" value="<?= $date3 ?>">
                                <input type="hidden" name="time" value="<?= $time3 ?>">
                                <input type="hidden" name="length1" value="<?= $hour ?>">
                                <input type="hidden" name="length2" value="<?= $minute ?>">
                                <button class="btn btn-primary" name="book" value="<?= $title ?>">Book</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mb-3 mb-sm-0">
                    <div class="card" style="width: 18rem;">
                        <img src="./uploads/<?= $picture4 ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?= $title ?></h5>
                            <p class="card-text"><b>Length:</b> <?= $hour ?>hr(s) <?= $minute ?>min(s)</p>
                            <p class="card-text"><b>Theatre:</b> <?= $theatre4 ?></p>
                            <p class="card-text"><b>Date:</b> <?= $date4 ?></p>
                            <p class="card-text"><b>Time:</b> <?= $time4 ?></p>
                            <form action="booking.php" method="post">
                                <input type="hidden" name="theatre" value="<?= $theatre4 ?>">
                                <input type="hidden" name="date" value="<?= $date4 ?>">
                                <input type="hidden" name="time" value="<?= $time4 ?>">
                                <input type="hidden" name="length1" value="<?= $hour ?>">
                                <input type="hidden" name="length2" value="<?= $minute ?>">
                                <button class="btn btn-primary" name="book" value="<?= $title ?>">Book</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
<?php
        endforeach;
    }
endforeach;
?>