<?php
session_start();
include "dbcon.php";
$success = "";

if (isset($_POST['submit-button'])) {
    $theatre = $_POST['theatre'];
    $county = $_POST['county'];
    $town = $_POST['town'];
    $address = $_POST['address'];
    $imageFile1 = $_FILES["image1"];
    $imageFile2 = $_FILES["image2"];
    $imageFile3 = $_FILES["image3"];
    $imageFile4 = $_FILES["image4"];

    $emptyness = array($theatre, $county, $town, $address);
    foreach ($emptyness as $empty) :
        if (empty($empty)) {
            $_SESSION['status'] = "Enter all required fields";
            header('Location:adminaddtheatres.php');
            $success = false;
            exit();
        } else {
            $success = true;
        }
    endforeach;

    $emptyFiles = array($imageFile1, $imageFile2, $imageFile3, $imageFile4);
    foreach ($emptyFiles as $empty) :
        if (empty($empty)) {
            $_SESSION['status'] = "Enter all theatre displays";
            header('Location:adminaddtheatres.php');
            $success = false;
            exit();
        } else {
            $success = true;
        }
    endforeach;

    $image_extension = ".jpg";
    $image_name1 = bin2hex(random_bytes(5)) . $image_extension;
    $image_name2 = bin2hex(random_bytes(5)) . $image_extension;
    $image_name3 = bin2hex(random_bytes(5)) . $image_extension;
    $image_name4 = bin2hex(random_bytes(5)) . $image_extension;
    $imagesize = array('image1', 'image2', 'image3', 'image4');
    foreach ($imagesize as $size) :
        if ($_FILES[$size]['size'] > 2000000) {
            $_SESSION['status'] = "Image or images too large";
            header('Location:adminaddtheatres.php');
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

    if ($success = true) {
        $stmt = "INSERT INTO theatres(`name`, `county`, `town`, `address`, `picture1`, `picture2`, `picture3`, `picture4`)
         VALUES ('{$theatre}','{$county}','{$town}','{$address}','{$image_name1}','{$image_name2}','{$image_name3}','{$image_name4}')";
        $result = $conn->query($stmt);
        if ($result) {
            $_SESSION['status2'] = "Theatre added successfully";
            header('Location:adminaddtheatres.php');
        }
    }
}
