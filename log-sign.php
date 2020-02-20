<?php
include 'connection.php';
include 'check_user.php';
if (isset($_POST['type'])) {
    if ($_POST['type'] == "signup") {
        if (check_user($_POST['mail']) == "valid") {
            $query = "INSERT INTO `register`(`fname`, `lname`, `mail`, `category`, `gender`, `pass`, `mobile`) 
            VALUES ('" . $_POST["fname"] . "','" . $_POST["lname"] . "','" . $_POST["mail"] . "','" . $_POST["category"] . "','" . $_POST["gender"] . "','" . $_POST["pass"] . "','" . $_POST["phone"] . "')";
            $result = mysqli_query($con, $query);
            if ($result) {
				$query="SELECT `id` FROM  `register` where `mail`='".$_POST["mail"]."'";
				$result=mysqli_query($con,$query);
				$data=mysqli_fetch_array($result);
				$query="INSERT INTO `personal_info`(`id`) VALUES ('".$data['id']."')";
				$result=mysqli_query($con,$query);
                echo "success";
            }
        } else {
            echo "exist user";
        }
    }
    if ($_POST['type'] == "check") {
        echo check_user($_POST['mail']);
    }
    if ($_POST['type'] == "check-session") {
        session_start();
        if (isset($_SESSION['buddy_mail']) && isset($_SESSION['buddy_pass'])) {
            $query = "SELECT * FROM `register` WHERE `mail`='" . $_SESSION['buddy_mail'] . "' and `pass`='" . $_SESSION['buddy_pass'] . "';";
            $result = mysqli_query($con, $query);
            if (mysqli_num_rows($result) == 1) {
                echo "login";
            } else {
                session_destroy();
            }
        } else {
            echo "not log";
        }
    }
    if ($_POST['type'] == "login") {
        session_start();
        if (check_user($_POST['mail']) == "valid") {
            echo "invalid";
        } else {
            $query = "SELECT * FROM `register` WHERE `mail`='" . $_POST['mail'] . "' and `pass`='" . $_POST['pass'] . "';";
            $result = mysqli_query($con, $query);
            if (mysqli_num_rows($result) == 1) {
                $_SESSION['buddy_mail'] = $_POST['mail'];
                $_SESSION['buddy_pass'] = $_POST['pass'];
                echo "login";
            } else {
                echo "invalc password";
            }
        }
    }
}
