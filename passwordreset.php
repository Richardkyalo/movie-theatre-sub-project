<?php
session_start();
include 'dbcon.php';
if (isset($_POST['reset-submit'])) {
    if (empty($_POST['email'] && empty($_POST['password']) && empty($_POST['confirm-password']))) {
       if(empty($_POST['email'])){
        $_SESSION['status'] = "All fields are madatory";
        header('Location:forgotpassword.php');
       }
       elseif(empty($_POST['password'])){
        $_SESSION['status'] = "All fields are madatory";
        header('Location:forgotpassword.php');
       }
       elseif(empty($_POST['confirm-password'])){
        $_SESSION['status'] = "All fields are madatory";
        header('Location:forgotpassword.php');
       }
    } else {
        $email=$_POST['email'];
        $newpassword=$_POST['password'];
        $stmt="SELECT * FROM movie WHERE email='{$email}'";
        $result=$conn->query($stmt);
        if(mysqli_num_rows($result)>0){
            $stmt="UPDATE movie SET passwords='$newpassword' WHERE email='$email'";
            $result=$conn->query($stmt);
            $_SESSION['status'] = "You have successfully changed your password";
            header('Location:forgotpassword.php');
        }else{
            $_SESSION['status'] = "You are not registered";
            header('Location:forgotpassword.php');
        }
    }
}
?>