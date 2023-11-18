<?php

    include 'conf.php';
        
    session_start();

    if($_SESSION['UserName'] == "")
    {
        echo "<h2>กรุณาทำการเข้าสู่ระบบ...</h2>";
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
    <title>ระบบการลาออนไลน์ : วิทยาลัยการอาชีพปัตตานี</title>
    <style>

        * {
            box-sizing: border-box;
        }

        .nav{
            background: linear-gradient(-90deg, #dcf803, #0327ef);
            height: 200px;
            margin-top: 1%;
            border-style: groove;
        }

        h2{
            display: block;
            color: white;
            padding: 10px;
            margin: auto;
        }

        h3{
            display: block;
            color: white;
            padding: 10px;
            margin: auto;
        }

        .logout{
            position: fixed;
            color: black;
            padding: 10px;
            margin: auto;
            background-color: chartreuse;
            text-decoration: none;
            border-radius: 15px;
            width: 120px;
            text-align: center;
        }
        .logout:hover{
            position: fixed;
            color: black;
            background-color: yellow;
        }

        .position{            
            position: absolute;
            display: block;
            margin-left: auto;
            margin-right: auto;
            text-align: center;
        }

        .up1 {
            padding: 1px;
            width: 0px;
            height: 0px;
            border-style: inset;
            border-width: 0 100px 170px 100px;
            border-color: transparent transparent navy transparent;
            float: left;
            transform: rotate(360deg);
            -ms-transform: rotate(360deg);
            -moz-transform: rotate(360deg);
            -webkit-transform: rotate(360deg);
            -o-transform: rotate(360deg);
        }

        .up1 p {
            text-align: center;
            top: 80px;
            left: -47px;
            position: relative;
            width: 93px;
            height: 93px;
            margin: 0px;
            color: antiquewhite;
        }

        .up2 {
            padding: 1px;
            width: 0px;
            height: 0px;
            border-style: inset;
            border-width: 0 100px 170px 100px;
            border-color: transparent transparent red transparent;
            float: left;
            transform: rotate(360deg);
            -ms-transform: rotate(360deg);
            -moz-transform: rotate(360deg);
            -webkit-transform: rotate(360deg);
            -o-transform: rotate(360deg);
        }

        .up2 p {
            text-align: center;
            top: 80px;
            left: -47px;
            position: relative;
            width: 93px;
            height: 93px;
            margin: 0px;
            color: antiquewhite;
        }

        .up3 {
            padding: 1px;
            width: 0px;
            height: 0px;
            border-style: inset;
            border-width: 0 100px 170px 100px;
            border-color: transparent transparent green transparent;
            float: left;
            transform: rotate(360deg);
            -ms-transform: rotate(360deg);
            -moz-transform: rotate(360deg);
            -webkit-transform: rotate(360deg);
            -o-transform: rotate(360deg);
        }

        .up3 p {
            text-align: center;
            top: 80px;
            left: -47px;
            position: relative;
            width: 93px;
            height: 93px;
            margin: 0px;
            color: antiquewhite;
        }
        
    </style>
</head>
<body>
    <div class="nav">
        <h2>ระบบการลาออนไลน์ : วิทยาลัยการอาชีพปัตตานี</h2>
        <marquee
            scrolldelay="100"
            direction="right"
            behavior="alternate"
            style="border: 1px dashed chartreuse; color: orangered; font-weight: bolder; font-size: 20px;">
            วัน<?php echo $dn; ?>ที่  <?php echo $dd; ?>  <?php echo $dm; ?> พ.ศ.<?php echo ($dy+543); ?>
        </marquee>
        <h2>ธีระ  บินกาเซ็ม</h2>
        <br>
        <a href="logout.php" class="logout">
            ออกจากระบบ
        </a>
    
    </div>

    <br>

    <div class="position">

        <a href="edit_pass.php" target="_blank">
            <div class="up1">
                <p>แก้ไขรหัสผ่าน</p>
            </div>  
        </a>

        <a href="edit_address.php" target="_blank">
            <div class="up2">
                <p>แก้ไข/เพิ่มที่อยู่</p>
            </div>
        </a>

        <a href="form_leave.php" target="_blank">
            <div class="up3">
                <p>กรอกแบบฟอร์มลา</p>
            </div>
        </a>
        
    </div>
    
</body>
</html>