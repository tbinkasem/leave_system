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

    if(!$conn){
        echo "<div class='container'><br><br>";
        echo "<h1 class='h1 text-danger'>ไม่สามารถเชื่อมต่อ Database Server ได้ </h1><br><br>";
        echo "<h2 class='h2 text-warning'>ไม่สามารถดำเนินการต่อไปได้ </h2><br><br>";
        echo "<h3 class='h3 text-info'>เนื่องจาก ชื่อโฮสต์(Host Name) หรือ ชื่อผู้ใช้งาน (User Name) หรือ รหัสผ่าน (Password) ไม่ถูกต้อง </h3><br><br>";
        echo "<meta http-equiv='refresh' content='5; url=index.html'>";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เพิ่มข้อมูลผู้ดูแลระบบ (ADMIN)</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
</head>
<body>
    
    <div class="container">
            <br><br>
            <h2 class='h2 text-dark'>กรุณากรอกข้อมูลสำหรับผู้ดูแลระบบ (ADMIN)</h2>
            <br><br>
        <form action="add_data_admin.php" method="post">
            <div class="mb-4">
                <label class="form-label">
                    <img src="images/1-square.svg" alt="1">
                    อีเมล์ของผู้ดูแล (Your Email)
                </label>
                <input type="email" class="form-control" placeholder="your_mail@mail.domain" name="eml"/>
                <br>
                <label for="exampleFormControlInput1" class="form-label">
                    <img src="images/2-square.svg" alt="2">
                    รหัสผ่านของผู้ดูแล (Password Admin)
                </label>
                <input type="password" class="form-control" placeholder="xxxxxxxx" name="pwd" />
                <br>
                <label for="exampleFormControlInput1" class="form-label">
                    <img src="images/3-square.svg" alt="3">
                    ชื่อ - สกุลของผู้ดูแล หรือ ชื่องานที่เป็นผู้ดูแล
                </label>
                <input type="text" class="form-control" placeholder="หัวหน้างานบุคลากร" name="amn" />
                <br>
                <button type="submit" class="btn btn-outline-success">บันทึกข้อมูลของผู้ดูแล</button>
                
    </div>

</body>
</html>