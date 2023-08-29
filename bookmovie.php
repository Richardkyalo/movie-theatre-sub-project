<?php
echo 78;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST['username']) && !empty($_POST['mobile-number'] && !empty($_POST['password']))) {
        $query = "SELECT * FROM users WHERE username='{$_POST['username']}'";
        $result = $conn->query($query);
        foreach ($result as $data) :
            echo $data['username'];
        endforeach;
    } else {
                $_SESSION['status']="Fill all the fields";
                header('Location: booking.php');
    }
}
