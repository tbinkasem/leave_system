<?php

    include 'conf.php';
    session_start();
    error_reporting(0);

    if($_SESSION['UserName'] == "")
    {
        echo "<img style='display: block; margin-left: auto; margin-right: auto;' src='images/block.png'>";
        echo "<h2 style='text-align: center; color: red; margin-top: 10%;'>กรุณาทำการเข้าสู่ระบบ...</h2>";
        echo "<meta http-equiv='refresh' content='3; url=index.html'>";
        exit();
        
    }

    $dd = date('d');

    $dn = date('w');
    switch ($dn) {
        case '0':
            $dn = "อาทิตย์";
            break;
        case '1':
            $dn = "จันทร์";
            break;
        case '2':
            $dn = "อังคาร";
            break;
        case '3':
            $dn = "พุธ";
            break;
        case '4':
            $dn = "พฤหัสบดี";
            break;
        case '5':
            $dn = "ศุกร์";
            break;

        default:
            $dn = "เสาร์";
            break;
    }

    $dm = date('m');
    switch ($dm) {
        case '01':
            $dm = "มกราคม";
            break;
        case '02':
            $dm = "กุมภาพันธ์";
            break;
        case '03':
            $dm = "มีนาคม";
            break;
        case '04':
            $dm = "เมษายน";
            break;
        case '05':
            $dm = "พฤษภาคม";
            break;
        case '06':
            $dm = "มิถุนายน";
            break;
        case '07':
            $dm = "กรกฎาคม";
            break;
        case '08':
            $dm = "สิงหาคม";
            break;
        case '09':
            $dm = "กันยายน";
            break;
        case '10':
            $dm = "ตุลาคม";
            break;
        case '11':
            $dm = "พฤศจิกายน";
            break;

        default:
            $dm = "ธันวาคม";
            break;
    }

    $dy = date('Y');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ระบบลาออนไลน์ : วิทยาลัยการอาชีพปัตตานี</title>
    <link rel="stylesheet" href="css/leave.css">
</head>
<body>

    <div class="header">
        <img src="images/logo.png" alt="logo">
        <a class="logo">ระบบลาออนไลน์ : <br>วิทยาลัยการอาชีพปัตตานี</a>
        <div class="header-right">
            <a class="active1">
                <marquee behavior="alternate">ยินดีต้อนรับ</marquee>
                <?php echo $_SESSION["FullName"]; ?>
            </a>
        </div>
    </div>
    <div style="height: 20px; margin-top: 5px;">
        <marquee
            scrolldelay="100"
            direction="right"
            behavior="alternate"
            style="color: orangered; font-weight: bolder; font-size: 20px; margin-top: 20px; border: 1px dashed green;">
            วัน<?php echo $dn; ?>ที่  <?php echo $dd; ?>  <?php echo $dm; ?> พ.ศ.<?php echo ($dy+543); ?>
        </marquee>
    </div>
    <br><br><br>
    <div style="display: flex; align-content: space-bewteen; justify-content: center; margin-top: 5%;">
        &nbsp;
        <span style="width: 30%; height: 150px; margin-left: auto; margin-right: auto;">
            <a href="edit_pass.php">
                <img src="images/password-reset.svg" alt="password" style="display: block; margin-left: auto; margin-right: auto;">
            </a> 
            <p style="text-align: center;">แก้ไขรหัสผ่าน</p>
        </span>
        &nbsp;
        <span style="width: 30%; height: 150px; margin-left: auto; margin-right: auto;">
            <a href="edit_address.php">
                <img src="images/home-clipart.svg" alt="addess" style="display: block; margin-left: auto; margin-right: auto;">
            </a>
            <p style="text-align: center;">เพิ่ม/แก้ไขที่อยู่</p>
        </span>
        &nbsp;
        <span style="width: 30%; height: 150px; margin-left: auto; margin-right: auto;">
            <a href="form_leave.php">
                <img src="images/contact-us.svg" alt="leave" style="display: block; margin-left: auto; margin-right: auto;">
            </a>
            <p style="text-align: center;">ยื่นใบลา</p>
        </span>
        &nbsp;
    </div>
    <br><br><br>
    <div style="display: flex; align-content: space-bewteen; justify-content: center; margin-top: 5%;">
        &nbsp;
        <span style="width: 30%; height: 150px; margin-left: auto; margin-right: auto;">
            <a href="report_leave.php">
                <img src="images/statistic.svg" alt="password" style="display: block; margin-left: auto; margin-right: auto;">    
            </a>
            <p style="text-align: center;">รายงาน/สรุปการลา</p>
        </span>
        &nbsp;
        <span style="width: 30%; height: 150px;">
            <a href="pre_attachment.php">
                <img src="images/doc-cleaned.svg" alt="password" style="display: block; margin-left: auto; margin-right: auto;">
            </a>
            <p style="text-align: center;">แนบเอกสารประกอบการลา</p>
        </span>
        &nbsp;
        <span style="width: 30%; height: 150px; margin-left: auto; margin-right: auto;">
            <a href="logout.php">
                <img src="images/log-out.svg" alt="password" style="display: block; margin-left: auto; margin-right: auto;">
            </a>
            <p style="text-align: center;">ออกจากระบบ</p>
        </span>
        &nbsp;
    </div>

</body>
</html>