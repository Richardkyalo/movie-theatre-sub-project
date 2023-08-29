<?php
session_start();

include "dbcon.php";
$success = "";
if (isset($_POST['submit-button'])) {
    $title = $_POST['title'];
    $hours = $_POST['duration-hours'];
    $minutes = $_POST['duration-minutes'];
    $imageFile1 = $_FILES["image1"];
    $imageFile2 = $_FILES["image2"];
    $imageFile3 = $_FILES["image3"];
    $imageFile4 = $_FILES["image4"];
    $theatre1 = $_POST['theatre1'];
    $theatre2 = $_POST['theatre2'];
    $theatre3 = $_POST['theatre3'];
    $theatre4 = $_POST['theatre4'];
    $date1 = $_POST['date1'];
    $date2 = $_POST['date2'];
    $date3 = $_POST['date3'];
    $date4 = $_POST['date4'];
    $time1 = $_POST['time1'];
    $time2 = $_POST['time2'];
    $time3 = $_POST['time3'];
    $time4 = $_POST['time4'];


    $image_extension = ".jpg";
    $image_name1 = bin2hex(random_bytes(5)) . $image_extension;
    $image_name2 = bin2hex(random_bytes(5)) . $image_extension;
    $image_name3 = bin2hex(random_bytes(5)) . $image_extension;
    $image_name4 = bin2hex(random_bytes(5)) . $image_extension;

    $emptyimage = array('image1', 'image2', 'image3', 'image4');
    foreach ($emptyimage as $empty) :
        if (empty($_FILES[$empty]['name'])) {
            $_SESSION['status'] = "You should enter movie covers in all fields";
            header('Location:adminaddmovies.php');
            $success = false;
            exit();
        } else {
            $success = true;
        }
    endforeach;

    $imagesize = array('image1', 'image2', 'image3', 'image4');
    foreach ($imagesize as $size) :
        if ($_FILES[$size]['size'] > 2000000) {
            $_SESSION['status'] = "Image or images too large";
            header('Location:adminaddmovies.php');
            $success = false;
            exit();
        } else {
            $image_upload_dir = "uploads/";
            move_uploaded_file($imageFile1["tmp_name"], __DIR__ . "/uploads/" . $image_name1);
            $image_upload_path = $image_upload_dir . basename($image_name1);
            move_uploaded_file($imageFile2["tmp_name"], __DIR__ . "/uploads/" . $image_name2);
            $image_upload_path = $image_upload_dir . basename($image_name2);
            move_uploaded_file($imageFile3["tmp_name"], __DIR__ . "/uploads/" . $image_name3);
            $image_upload_path = $image_upload_dir . basename($image_name3);
            move_uploaded_file($imageFile4["tmp_name"], __DIR__ . "/uploads/" . $image_name4);
            $image_upload_path = $image_upload_dir . basename($image_name4);
            $success = true;
        }
    endforeach;

    $emptyness = array(
        $title, $hours, $minutes, $theatre1, $theatre2, $theatre3, $theatre4,
        $date1, $date2, $date3, $date4, $time1, $time2, $time3, $time4
    );
    foreach ($emptyness as $empty) :
        if (empty($empty)) {
            $_SESSION['status'] = "Please fill all the required fields";
            header('Location:adminaddmovies.php');
            $success = false;
            exit();
        } else {
            $success = true;
        }
    endforeach;

    $datecheck=array($date1, $date2,  $date3, $date4);
    foreach($datecheck as $date):
        if(strtotime(date("Y-m-d")) >= strtotime($date)){
            $_SESSION['status'] = "Invalid dates";
            header('Location:adminaddmovies.php');
            $success = false;
            exit();
        }else{
            $success = true;
        }
    endforeach;

    if ($success = true) {
        $stmt = "INSERT INTO `movie`(`title`, `hours`, `minutes`, `picture1`, `picture2`, `picture3`, `picture4`, `theatre1`, `date1`, `time1`, `theatre2`, `date2`, `time2`, `theatre3`, `date3`, `time3`, `theatre4`, `date4`, `time4`)
         VALUES ('{$title}','{$hours}','{$minutes}','{$image_name1}','{$image_name2}','{$image_name3}','{$image_name4}','{$theatre1}','{$date1}','{$time1}','{$theatre2}','{$date2}','{$time2}','{$theatre3}','{$date3}','{$time3}','{$theatre4}','{$date4}','{$time4}')";
        $result = $conn->query($stmt);
        if ($result) {
            $_SESSION['status2'] = "Movie added successfuly";
            header('Location:adminaddmovies.php');
        }
    }
}
