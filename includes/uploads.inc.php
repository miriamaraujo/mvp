<?php

if(isset($_POST['submit'])){

    $newFileName = $_POST['filename'];
    if (empty($newFileName)) {
        $newFileName = "gallery";
    }else {
        $newFileName = strtolower(str_replace(" ", "-", $newFileName));
    }

    $imageTitle = $_POST['filetitle'];
    $imageDesc = $_POST['filedesc'];

    $file = $_FILES['file'];

    $fileName = $file['name'];
    $fileType =$file['type'];
    $fileTmpName = $file['tmp_name'];
    $fileError = $file['error'];    
    $fileSize = $file['size'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));
    $allowed = array('jpg', 'jpeg', 'png');

    if(in_array($fileActualExt, $allowed)){
        if ($fileError === 0) {
            if ($fileSize < 2000000) {
                            $imageFullName =$newFileName.".".uniqid("", true).".".$fileActualExt;
                            $fileDestination = "../uploads/" . $imageFullName;
                            include_once 'dbh.inc.php';

                            if (empty($imageTitle) || empty($imageDesc)) {
                                header("Location: ../index.php?upload=empty");
                                exit();
                            }else {
                                $sql = "SELECT * FROM gallery;";
                                $stmt = mysqli_stmt_init($conn);
                                if (!mysqli_stmt_prepare($stmt, $sql)) {
                                    echo 'SQL failed';
                                }else {
                                    mysqli_stmt_execute($stmt);
                                    $result = mysqli_stmt_get_result($stmt);
                                    $rowCount = mysqli_num_rows($result);
                                    $setImageOrder = $rowCount + 1;
                                    $sql= "INSERT INTO gallery (image_title, image_desc, image_name, image_order) VALUES (?, ?, ?, ?);";
                                    if (!mysqli_stmt_prepare($stmt, $sql)) {
                                        echo 'SQL failed';
                                    }else {
                                        mysqli_stmt_bind_param($stmt, "ssss", $imageTitle, $imageDesc, $imageFullName, $setImageOrder);
                                        mysqli_stmt_execute($stmt);

                                        move_uploaded_file($fileTmpName, $fileDestination);
                                        header("Location: ../gallery.php?upload=success");
                                    }
                                }
                            }
                            
                        }else{
                            echo "Your file is too big";
                            exit();
                        }
            

        }else {
            echo 'you have an Error';
        }

    }else {
        echo 'wrong file type';
    }

    

}









// $file = $_FILES['file'];

    // $fileName = $_FILES['file']['name'];
    // $fileTmpName = $_FILES['file']['tmp_name'];
    // $fileSize = $_FILES['file']['size'];
    // $fileError = $_FILES['file']['error'];
    // $fileType = $_FILES['file']['type'];


    // $fileExt = explode('.', $fileName);
    // $fileActualExt = strtolower(end($fileExt));

    // $allowed = array('jpg', 'jpeg', 'png');

    // if(in_array($fileActualExt, $allowed)){
    //     if($fileError === 0){
    //         if ($fileSize < 2000000) {
    //             $fileNameNew = uniqid('', true).".".$fileActualExt;
    //             $fileDestination = '../uploads/'.$fileNameNew;
    //             include_once 'dbh.inc.php';
                
    //         }else{
    //             echo "Your file is too big (thats what she said)";
    //             exit();
    //         }
    //     }else {
    //         echo "There was an error uploading your file";
    //     }
    // }else {
    //     echo "You can not upload files of this type";
    // }


?>



