<?php

    echo "<link rel='stylesheet' href='css/bootstrap.min.css'>";
    echo "<script src='js/bootstrap.min.js'></script>";
    session_start();

    $hn = $_SESSION['hn'];
    $un = $_SESSION['un'];
    $pw = $_SESSION['pw'];
    $db = $_SESSION['db'];

    $conn = mysqli_connect($hn, $un, $pw, $db);
    mysqli_set_charset($conn, "utf8");

    $target_dir = "images/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $photo = $_FILES["fileToUpload"]["name"];

    $file_tmp = $_FILES['fileToUpload']['tmp_name'];
    $size_info = getimagesize($file_tmp);
    $image_width = $size_info[0];
    $image_height = $size_info[1];

    $max_width = 224;
    $max_height = 224;

    if($image_width <= $max_width || $image_height <= $max_height){
        if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)){
            $sql = "INSERT INTO college (fullname, photo) VALUES ('$college', '$photo')";   
            if(mysqli_query($conn, $sql)){
                echo "<div class='container'><br><br>";
                echo "<h2 class='h2 text-success'>เพิ่มไฟล์โลโก้และชื่อสถานศึกษาเพื่อใช้งานในระบบเรียบร้อยแล้ว </h2><br><br>";
                echo "<h2 class='h2 text-warning'>รอสักครู่...</h2><br><br>";
                echo "<meta http-equiv='refresh' content='3; url=xxx/index.html'>";
            }else{
                echo "ไม่สามารถส่งไฟล์โลโก้และข้อมูลสถานศึกษาได้";
                echo "<meta http-equiv='refresh' content='3; url=file_logo.html'>";
            }
        }
    }else{
        echo "ไม่สามารถส่งไฟล์โลโก้สถานศึกษาได้ เนื่องจาก... <br>";
        echo "ขนาดของภาพ ความกว้าง(width) ต้องไม่เกิน 1000 pixel.<br>";
        echo "ขนาดของภาพ ความสูง(height) ต้องไม่เกิน 1000 pixel.";
        echo "<meta http-equiv='refresh' content='3; url=file_logo.html'>";
    }

?>