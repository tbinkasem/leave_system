<?php

    echo "<link rel='stylesheet' href='css/bootstrap.min.css'>";
    echo "<script src='js/bootstrap.min.js'></script>";
    session_start();

    $hn = $_SESSION['hn'];
    $un = $_SESSION['un'];
    $pw = $_SESSION['pw'];
    $db = $_SESSION['db'];

    $eml = $_POST['eml'];
    $pwd = sha1($_POST['pwd']);
    $amn = $_POST['amn'];

    $conn = mysqli_connect($hn, $un, $pw, $db);
    mysqli_set_charset($conn, "utf8");

    if(!$conn){
        echo "<div class='container'><br><br>";
        echo "<h1 class='h1 text-danger'>ไม่สามารถเชื่อมต่อ Database Server ได้ </h1><br><br>";
        echo "<h2 class='h2 text-warning'>ไม่สามารถดำเนินการต่อไปได้ </h2><br><br>";
        echo "<h3 class='h3 text-info'>เนื่องจาก ชื่อโฮสต์(Host Name) หรือ ชื่อผู้ใช้งาน (User Name) หรือ รหัสผ่าน (Password) ไม่ถูกต้อง </h3><br><br>";
        echo "<meta http-equiv='refresh' content='5; url=index.html'>";
    }else{
        $sql = "INSERT INTO admin (email, passwd, fullname) VALUES ('$eml', '$pwd', '$amn')";
        if (mysqli_query($conn, $sql)) {
          echo "<div class='container'><br><br>";
          echo "<h2 class='h2 text-success'>เพิ่มข้อมูลผู้ดูแล เพื่อใช้งานในระบบเรียบร้อยแล้ว </h2><br><br>";
          echo "<h2 class='h2 text-warning'>รอสักครู่...</h2><br><br>";
          $_SESSION['hn'] = $hn;
          $_SESSION['un'] = $un;
          $_SESSION['pw'] = $pw;
          $_SESSION['db'] = $db;
          echo "<meta http-equiv='refresh' content='3; url=create_config.php'>";
        } else {
          echo "<div class='container'><br><br>";
          echo "<h1 class='h1 text-danger'>ไม่สามารถเพิ่่มข้อมูลผู้ดูแลได้ </h1><br><br>";
          echo "<meta http-equiv='refresh' content='3; url=data_admin.php'>";
        }
      }
      
      mysqli_close($conn);


?>