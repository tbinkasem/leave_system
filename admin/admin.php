<?php

    include "conf.php";
    session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>บริหารจัดการข้อมูล</title>
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/menu.css">
</head>
<body>
    <!-- Simulate a smartphone / tablet -->
    <div class="mobile-container">

    <!-- Top Navigation Menu -->
    <div class="topnav">
        <a href="#logo" class="active">
            <img src="images/logo.png" alt="logo" width="5%">
            <h2>ระบบบริหารจัดการข้อมูลระบบ สำหรับแอดมิน</h2>
            <h3 style="color: navy;"><?php  echo $_SESSION["FullName"]; ?></h3>
        </a>
        <div id="myLinks">
            <a href="latest_leave.php" target="content">หน้าแรก</a>
            <a href="data_personal.php" target="content">บุคลากร</a>
            <a href="data_leave.php" target="content">การลาของบุคลากร</a>
            <a href="result_leave.php" target="content">ข้อมูลสรุปการลา</a>
            <a href="logout.php">ออกจากระบบ</a>
        </div>
        <a href="javascript:void(0);" class="icon" onclick="myMenu()">
            <i class="fa fa-bars"></i>
        </a>
    </div>

    <div style="padding-left:10px">
        <iframe src="latest_leave.php" frameborder="0" name="content" width="100%"></iframe>
    </div>

    <!-- End smartphone / tablet look -->

    <script src="js/menu.js"></script>

</body>
</html>