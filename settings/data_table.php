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
    }else{
        $sql_table_1 = "CREATE TABLE admin (
                        id int(11) NOT NULL AUTO_INCREMENT,
                        email varchar(100) NOT NULL,
                        passwd varchar(40) NOT NULL,
                        fullname varchar(100) NOT NULL,
                        PRIMARY KEY (id)
                        )";
        
        $query_table_1 = mysqli_query($conn, $sql_table_1);

        $sql_table_2 = "CREATE TABLE address (
                        id int(11) NOT NULL AUTO_INCREMENT,
                        homeID varchar(7) DEFAULT NULL,
                        street varchar(100) DEFAULT NULL,
                        soi varchar(100) DEFAULT NULL,
                        tambol varchar(100) DEFAULT NULL,
                        amphue varchar(100) DEFAULT NULL,
                        province varchar(100) DEFAULT NULL,
                        phone varchar(12) DEFAULT NULL,
                        UserName varchar(13) NOT NULL,
                        PRIMARY KEY (id)
                        )";

        $query_table_2 = mysqli_query($conn, $sql_table_2);

        $sql_table_3 = "CREATE TABLE data (
                        id int(11) NOT NULL AUTO_INCREMENT,
                        title varchar(50) NOT NULL,
                        FullName varchar(100) NOT NULL,
                        Position varchar(50) NOT NULL,
                        mCaseNow varchar(50) NOT NULL,
                        Case1Now varchar(200) NOT NULL,
                        Case2Now varchar(200) NOT NULL,
                        sdayNow varchar(20) NOT NULL,
                        ldayNow varchar(20) NOT NULL,
                        sumdayNow varchar(2) NOT NULL,
                        homeId varchar(7) NOT NULL,
                        street varchar(100) NOT NULL,
                        soi varchar(100) NOT NULL,
                        tambol varchar(100) NOT NULL,
                        amphue varchar(100) NOT NULL,
                        province varchar(100) NOT NULL,
                        phone varchar(12) NOT NULL,
                        placeMan varchar(100) NOT NULL,
                        attachment varchar(100) NOT NULL,
                        ybudget varchar(4) NOT NULL,
                        UserName varchar(13) NOT NULL,
                        PRIMARY KEY (id)
                        )";

        $query_table_3 = mysqli_query($conn, $sql_table_3);

        $sql_table_4 = "CREATE TABLE member (
                        UserID int(3) NOT NULL AUTO_INCREMENT,
                        UserName varchar(13) NOT NULL,
                        Password varchar(40) NOT NULL,
                        FullName varchar(100) NOT NULL,
                        Status varchar(5) NOT NULL DEFAULT 'user',
                        Photo varchar(17) NOT NULL,
                        PRIMARY KEY (UserID)
                        )";
        
        $query_table_4 = mysqli_query($conn, $sql_table_4);

        $sql_table_5 = "CREATE TABLE college (
                        FullName varchar(200) NOT NULL,
                        photo varchar(200) NOT NULL
                        )";

        $query_table_5 = mysqli_query($conn, $sql_table_5);
        
        if($query_table_1 && $query_table_2 && $query_table_3 && $query_table_4 && $query_table_5) {
            echo "<div class='container'><br><br>";
            echo "<h2 class='h2 text-success'>สร้างตาราง admin เรียบร้อยแล้ว... </h2><br>";
            echo "<h2 class='h2 text-success'>สร้างตาราง address เรียบร้อยแล้ว... </h2><br>";
            echo "<h2 class='h2 text-success'>สร้างตาราง data เรียบร้อยแล้ว... </h2><br>";
            echo "<h2 class='h2 text-success'>สร้างตาราง member เรียบร้อยแล้ว... </h2><br>";
            echo "<h2 class='h2 text-success'>สร้างตาราง college เรียบร้อยแล้ว... </h2><br>";
            echo "<h2 class='h2 text-muted'>รอสักครู่...</h2><br><br>";
            echo "<meta http-equiv='refresh' content='5; url=data_admin.php'>";
        }else{
            echo "<div class='container'><br><br>";
            echo "<h1 class='h1 text-danger'>ไม่สามารถสร้างตารางได้... </h1><br><br>";
            echo "<meta http-equiv='refresh' content='5; url=index.html'>";
        }

    }  
  
    mysqli_close($conn);

?>