<?php
session_start();
include 'dbcon.php';
if (isset($_POST['signup-button'])) {
    $username=$_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmpassword = $_POST['confirm_password'];
    if (!empty($email) && !empty($password) &&!empty($username) && !empty($confirmpassword)) {
        if (strlen($password) > 5) {
            $uppercase = preg_match('@[A-Z]@', $password);
            $lowercase = preg_match('@[a-z]@', $password);
            $number = preg_match('@[0-9]@', $password);
            $specialcharacters = preg_match('@[^\w]@', $password);
            if (!$uppercase || !$lowercase || !$number || !$specialcharacters) {
                $_SESSION['status'] = "Use a strong password(should contain one uppercase, one lowercase one number
                and one special character)";
                header('Location:usersignup.php');
            } else {
                if ($password == $confirmpassword) {
                    //check existence
                    $stmt="SELECT * FROM users WHERE email='{$email}'";
                    $result=$conn->query($stmt);
                    if(mysqli_num_rows($result)>0){
                        $_SESSION['status'] = "User already exists";
                        header('Location:usersignup.php');
                    }else{
                        //insert
                        $hashedpassword=password_hash($password,PASSWORD_DEFAULT);
                        $stmt ="INSERT INTO users(username,email, passwords)
                        VALUES ('$username','$email','$hashedpassword')";
                        $result=$conn->query($stmt);
                        header('Location:userlogin.php');
                    }
                } else {
                    $_SESSION['status'] = "Password missmatch";
                    $_SESSION['info']='Fill all the fields with *';
                    header('Location:usersignup.php');
                }

            }
        } else {
            $_SESSION['status'] = "Password shoud be greater than 5 characters";
            header('Location:usersignup.php');
        }
    } else {
        $_SESSION['status'] = "All fields are madatory";
        header('Location:usersignup.php');
    }
}

?>