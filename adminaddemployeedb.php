<?php
session_start();
include 'dbcon.php';

$success="";
if(isset($_POST['submit-button'])){

    $id=$_POST['id'];
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $education=$_POST['education'];
    $county=$_POST['county'];
    $phonenumber=$_POST['phone'];
    $email=$_POST['email'];
    $theatre=$_POST['theatre'];
    $job=$_POST['job'];
    $profile=$_FILES['profile'];

    $array=array($firstname, $lastname, $education, $county, $phonenumber, $email, $theatre, $job);
    foreach($array as $empty):
        if(empty($empty)){
            $_SESSION['status']="please enter all required fields";
            header('Location: adminaddemployee.php');
            $success=false;
            exit();
        }else{
            $success=true;
        }
    endforeach;

    if(empty($_FILES['profile']['name'])){
        $_SESSION['status']='Please enter your profile';
        $success=false;
        exit();
    }else
    {
        $success=true;
    }

    if ($_FILES['profile']['size'] > 2000000) {
        $_SESSION['status'] = "Image too large";
        header('Location:adminaddemployee.php');
        $success = false;
        exit();
    } else {
        $image_extension = ".jpg";
        $profilename = bin2hex(random_bytes(5)) . $image_extension;
        $image_upload_dir = "uploads/";
        move_uploaded_file($profile["tmp_name"], __DIR__ . "/uploads/" . $profilename);
        $image_upload_path = $image_upload_dir . basename($profilename);
        $success=true;
    }

    if($success=true){

        $stm="SELECT * FROM employee WHERE id={$id}";
        $result=$conn->query($stm);
        if(mysqli_num_rows($result)==0){
        $sql="INSERT INTO employee(firstname, lastname, education, county, phone, email, theatre, picture, job, id)
         VALUES ('{$firstname}','{$lastname}','{$education}','{$county}','{$phonenumber}','{$email}','{$theatre}','{$profilename}','{$job}','{$id}')";
         $result=$conn->query($sql);
        }
        else{
            $_SESSION['status']="Employee already exists";
            header('Location: adminaddemployee.php');
        }
    }
}

?>