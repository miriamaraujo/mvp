<?php
if(isset($_POST['login-submit'])){
    require 'dbh.inc.php';

    $userMail = $_POST['umail'];
    $userPwd = $_POST['pwd'];

    if (empty($userMail) || empty($userPwd)){
        header("Location: ../login.php?error=emptyfields");
        exit();
    }
    else{
        $sql = "SELECT * FROM users WHERE username=? OR user_email=?;";

        $stmt = mysqli_stmt_init($conn); 
        if(!mysqli_stmt_prepare($stmt, $sql)){
        header("Location: ../login.php?error=sql");
        exit();
        }

        else{
            mysqli_stmt_bind_param($stmt, "ss", $userMail, $userMail);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if($row = mysqli_fetch_assoc($result)){
                $pwdCheck = password_verify($userPwd, $row['pwd']);
                if($pwdCheck == false){
                    header("Location: ../login.php?error=wrongpwd");
                    exit();
                }
                else if($pwdCheck == true){
                   session_start();
                   $_SESSION['userId'] = $row['user_id'];
                   $_SESSION['username'] = $row['username'];
                   $_SESSION['fName'] = $row['first_name'];
                   $_SESSION['lName'] = $row['last_name'];
                   $_SESSION['usermail'] = $row['user_email'];
                   $_SESSION['userphone'] = $row['user_phone'];
                   $_SESSION['userpic'] = $row['user_pic'];
                   $_SESSION['userLevel'] = $row['user_level'];
                   


                   header("Location: ../dashboard.php?login=success");
                    exit();

                }

                else{
                    header("Location: ../login.php?error=wrong");
                    exit();
                }

            }
            else {
                header("Location: ../login.php?error=nouser");
                exit();   
            }
        }
    }
}

else{
    header("Location: ../index.php");
    exit();
}