<?php
function check_user($mail)
{
    global $con;
    $query = "SELECT * FROM `register` WHERE `mail`='" . $mail . "'";
    $result = mysqli_query($con, $query);
    if (mysqli_num_rows($result) == 0) {
        return "valid";
    } else {
        return "invalid";
    }
}
?>