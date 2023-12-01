<?php

    include "conf.php";
    session_start();

    $UserName = $_SESSION['UserName'];

    
    $target_dir = "attachments/";

    $trf = basename($_FILES["fileUpload"]["name"]);
    $cnv = date_create();
    $confile = date_timestamp_get($cnv);
    $genfile = $confile."_".$trf;

    // $target_file = $target_dir . basename($_FILES["fileUpload"]["name"]);

    $target_file = $target_dir . $genfile;
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    if (file_exists($target_file)) {
      echo "ขออภัย, file already exists.";
      echo "<meta http-equiv='refresh' content='3; url=leave.php'>";
      $uploadOk = 0;
    }elseif ($_FILES["fileUpload"]["size"] > 10000000) {
      echo "<h2 style='border: 5px solid;  position: absolute;  top: 40%;  left: 50%;  transform: translate(-50%, -50%);  padding: 10px; color: red;'>";
      echo "ขออภัย, ขออภัย, เอกสารที่ส่งมาขนาดใหญ่เกิน 10MB.";
      echo "</h2>";
      echo "<h3 style='border: 5px solid;  position: absolute;  top: 50%;  left: 50%;  transform: translate(-50%, -50%);  padding: 10px; color: blue;'>";
      echo "รอสักครู่ จะกลับไปหน้าส่งเอกสารใหม่...</h3>";
      echo "<meta http-equiv='refresh' content='3; url= attachment.php'>";

      $uploadOk = 0;
    }elseif ($uploadOk == 0) {
      echo "<h2 style='border: 5px solid;  position: absolute;  top: 40%;  left: 50%;  transform: translate(-50%, -50%);  padding: 10px; color: red;'>";
      echo "ขออภัย, ไม่สามารถส่งเอกสารได้";
      echo "</h2>";
      echo "<h3 style='border: 5px solid;  position: absolute;  top: 50%;  left: 50%;  transform: translate(-50%, -50%);  padding: 10px; color: blue;'>";
      echo "รอสักครู่ จะกลับไปหน้าส่งเอกสารใหม่...</h3>";
      echo "<meta http-equiv='refresh' content='3; url= attachment.php'>";
  // if everything is ok, try to upload file
    }elseif (move_uploaded_file($_FILES["fileUpload"]["tmp_name"], $target_file)) {
        echo "<h2>The file ". htmlspecialchars( basename( $_FILES["fileUpload"]["name"])). " has been uploaded.</h2>";
        echo "<meta http-equiv='refresh' content='3; url=leave.php'>";
        echo "<h2 style='border: 5px solid; position: absolute; top: 40%; left: 50%; transform: translate(-50%, -50%); padding: 10px; color: green;'>";
        echo "ดำเนินการ ส่งเอกสารแนบใบลา เรียบร้อยแล้ว</h2>";
        echo "<h3 style='border: 5px solid;  position: absolute;  top: 50%;  left: 50%;  transform: translate(-50%, -50%);  padding: 10px; color: blue;'>";
        echo "รอสักครู่ จะกลับไปหน้าหลัก...</h3>";
        echo "<meta http-equiv='refresh' content='3; url= leave.php'>";
    } else {
        echo "<h2 style='border: 5px solid;  position: absolute;  top: 40%;  left: 50%;  transform: translate(-50%, -50%);  padding: 10px; color: red;'>";
        echo "เกิดข้อผิดพลาด ไม่สามารถส่งเอกสารได้";
        echo "</h2>";
        echo "<h3 style='border: 5px solid;  position: absolute;  top: 50%;  left: 50%;  transform: translate(-50%, -50%);  padding: 10px; color: blue;'>";
        echo "รอสักครู่ จะกลับไปหน้าหลัก...</h3>";
        echo "<meta http-equiv='refresh' content='3; url= leave.php'>";
    }

?>