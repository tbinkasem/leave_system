<?php

  echo "<link rel='stylesheet' href='css/bootstrap.min.css'>";
  echo "<script src='js/bootstrap.min.js'></script>";
  
  session_start();
  error_reporting(E_ALL);
  ini_set('display_errors', 0);
  
  $hn = $_POST['hn'];
  $un = $_POST['un'];
  $pw = $_POST['pw'];
  $db = $_POST['db'];

  $conn = mysqli_connect($hn, $un, $pw);
  
  if(!$conn){
    echo "<div class='container'><br><br>";
    echo "<h1 class='h1 text-danger'>ไม่สามารถเชื่อมต่อ Database Server ได้ </h1><br><br>";
    echo "<h2 class='h2 text-warning'>ไม่สามารถดำเนินการต่อไปได้ </h2><br><br>";
    echo "<h3 class='h3 text-info'>เนื่องจาก ชื่อโฮสต์(Host Name) หรือ ชื่อผู้ใช้งาน (User Name) หรือ รหัสผ่าน (Password) ไม่ถูกต้อง </h3><br><br>";
    echo "<meta http-equiv='refresh' content='5; url=index.html'>";
  }else{
    $sql = "CREATE DATABASE $db";
    if (mysqli_query($conn, $sql)) {
      echo "<div class='container'><br><br>";
      echo "<h2 class='h2 text-success'>สร้างฐานข้อมูล $db เรียบร้อยแล้ว </h2><br><br>";
      echo "<h2 class='h2 text-warning'>รอสักครู่...</h2><br><br>";
      $_SESSION['hn'] = $hn;
      $_SESSION['un'] = $un;
      $_SESSION['pw'] = $pw;
      $_SESSION['db'] = $db;
      echo "<meta http-equiv='refresh' content='3; url=data_table.php'>";
    } else {
      echo "<div class='container'><br><br>";
      echo "<h1 class='h1 text-danger'>ไม่สามารถสร้างฐานข้อมูลได้ </h1><br><br>";
      echo "<meta http-equiv='refresh' content='3; url=index.html'>";
    }
  }
  
  mysqli_close($conn);

?>