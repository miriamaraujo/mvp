<?php
if (isset($_POST['update-submit'])) {
    require 'dbh.inc.php';

    $id_user = mysqli_real_escape_string($conn, $_POST['id']);
    $u_name = mysqli_real_escape_string($conn, $_POST['username']);
    $f_name = mysqli_real_escape_string($conn, $_POST['firstname']);
    $l_name = mysqli_real_escape_string($conn, $_POST['lastname']);
    $u_phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $u_email = mysqli_real_escape_string($conn, $_POST['email']);
    $u_level = mysqli_real_escape_string($conn, $_POST['ulevel']);
   

    // if (empty($f_name) || empty($l_name) || empty($u_email)) {

    //     header('location: ../update-profile.php?error=emptyfields');
    //     exit();
    // }


    $query = "UPDATE `users` SET username='" . $u_name . "', first_name='" . $f_name . "', last_name='" . $l_name . "', user_phone='" . $u_phone . "', user_email='" . $u_email . "', user_level='" . $u_level . "' WHERE `user_id` = $id_user";

    $result = mysqli_query($conn, $query);
    if ($result) {
        header('location: ../profile.php?update=successful');
        
        exit();
    } else {
        header('location: ../profile.php?update=failed');
        exit();
    }
    mysqli_close($connect);
}
