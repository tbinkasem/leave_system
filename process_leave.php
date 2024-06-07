<?php

    include "conf.php";
    session_start();

    // กำหนดการ checked 

    $status1 = "";    $status2 = "";    $status3 = "";    $status4 = "";
    $status5 = "";    $status6 = "";    $status7 = "";    $status8 = "";
    $status9 = "";

    // รับค่าจาก form_leave.php

    // ส่วนที่ 1

    $title = $_POST['title'];
    $fullname = $_POST['fullname'];
    $position = $_POST['position'];

    // ส่วนที่ 2

    $case = $_POST['mcase_now'];

    // ตรวจสอบประเภทของการลา

    switch ($case) {
        case 'ป่วย':
            $case_now = $case;
            $status1 = "checked";
            break;
        
        case 'กิจส่วนตัว':
            $case_now = $case;
            $status2 = "checked";
            break;

        case 'คลอดบุตร':
            $case_now = $case;
            $status3 = "checked";
            break;

        default:
            $case_now = "ช่วยเหลือภรรยาที่คลอดบุตร";
            $status4 = "checked";
            break;
    }

    // เหตุผลการลา

    $case1_now = $_POST['case1_now'];
    $case2_now = $_POST['case2_now'];

    // วันเดือนปีและจำนวนวันลา

    $sday_now = $_POST['sday_now'];

    // แปลงรูปแบบวันเดือนปี จาก YYYY-MM-DD เป็น DD-MM-YYYY ของไทย

    $d = substr($sday_now,8,2);
    $m = substr($sday_now,5,2);
    $y = substr($sday_now,0,4);
    switch ($m) {
        case 1:
            $m = "มกราคม";
            break;
        case 2:
            $m = "กุมภาพันธ์";
            break;
        case 3:
            $m = "มีนาคม";
            break;
        case 4:
            $m = "เมษายน";
            break;
        case 5:
            $m = "พฤษภาคม";
            break;
        case 6:
            $m = "มิถุนายน";
            break;
        case 7:
            $m = "กรกฎาคม";
            break;
        case 8:
            $m = "สิงหาคม";
            break;
        case 9:
            $m = "กันยายน";
            break;
        case 10:
            $m = "ตุลาคม";
            break;
        case 11:
            $m = "พฤศจิกายน";
            break;
        default:
            $m = "ธันวาคม";
            break;
    }

    $sday_now = $d." ".$m." ".($y+543);

    $lday_now = $_POST['lday_now'];

    // แปลงรูปแบบวันเดือนปี จาก YYYY-MM-DD เป็น DD-MM-YYYY ของไทย

    $d = substr($lday_now,8,2);
    $m = substr($lday_now,5,2);
    $y = substr($lday_now,0,4);
    switch ($m) {
        case 1:
            $m = "มกราคม";
            break;
        case 2:
            $m = "กุมภาพันธ์";
            break;
        case 3:
            $m = "มีนาคม";
            break;
        case 4:
            $m = "เมษายน";
            break;
        case 5:
            $m = "พฤษภาคม";
            break;
        case 6:
            $m = "มิถุนายน";
            break;
        case 7:
            $m = "กรกฎาคม";
            break;
        case 8:
            $m = "สิงหาคม";
            break;
        case 9:
            $m = "กันยายน";
            break;
        case 10:
            $m = "ตุลาคม";
            break;
        case 11:
            $m = "พฤศจิกายน";
            break;
        default:
            $m = "ธันวาคม";
            break;
    }

    $lday_now = $d." ".$m." ".($y+543);

    $sumday_now = $_POST['sumday_now'];

    // ข้อมูลที่อยู่

    $home_id = $_POST['home_id'];
    $street = $_POST['street'];
    $soi = $_POST['soi'];
    $tambol = $_POST['tambol'];
    $amphue = $_POST['amphue'];
    $province = $_POST['province'];
    $phone = $_POST['phone'];

    // ชื่อ-สกุลผู้ทำหน้าที่แทน

    $place_man = $_POST['place_man'];

    // ข้อมูลการลา ครั้งล่าสุด

    $case_past = $_POST['case_past'];
    $sday_past = $_POST['sday_past'];
    $lday_past = $_POST['lday_past'];
    $sumday_past = $_POST['sumday_past'];

    // กำหนดให้เลือกรายการตามข้อมูลการลาครั้งล่าสุด

    switch ($case_past) {
        case 'ป่วย':
            // $mcase = $case_past;
            $status5 = "checked";
            break;
        
        case 'กิจส่วนตัว':
            // $mcase = $case_past;
            $status6 = "checked";
            break;

        case 'คลอดบุตร':
            // $mcase = $case_past;
            $status7 = "checked";
            break;
        case 'ช่วยเหลือภรรยาที่คลอดบุตร':
            // $mcase = $case_past;
            $status8 = "checked";
            break;

        default:
            $status9 = "";
            break;
    }

    // กำหนดให้ปีงบประมาณที่ลา
    // กำหนดตรวจสอบเดือนกันยายนหรือไม่
    $month_check = "09";
    // ตรวจสอบเดือนปัจจุบัน
    $month_now = date("m");
    // กำหนดค่าปีงบประมาณปัจจุบัน ในกรณีที่ไม่เกินเดือนกันยายน
    $year_before = date("Y") + 543;
    // กำหนดให้ปีงบประมาณถัดไป กรณีเกินเดือนกันยายน
    $year_after = date("Y") + 544;

    if($month_now > $month_check){
        $year_now = $year_after;
    }else{
        $year_now = $year_before;
    }

    $strSQL1 = "INSERT INTO data(Id, title, FullName, Position, mCaseNow, Case1Now, Case2Now, sdayNow, ldayNow, sumdayNow, homeId, street, soi, tambol, amphue, province, phone, placeMan, ybudget, UserName)";
    $strSQL2 = " VALUES(0,'$title','$fullname','$position','$case_now','$case1_now','$case2_now','$sday_now','$lday_now','$sumday_now','$home_id','$street','$soi','$tambol','$amphue','$province','$phone','$place_man','$year_now','".$_SESSION['UserName']."')";
    $strSQL3 = $strSQL1.$strSQL2;
    $objQuery = mysqli_query($conn,$strSQL3);
    
    if(!$objQuery) {
        echo "<h2 style='border: 5px solid;  position: absolute;  top: 40%;  left: 50%;  transform: translate(-50%, -50%);  padding: 10px; color: red;'>";
        echo "เกิดข้อผิดพลาด ไม่ส่งข้อมูลการลาได้</h2>";
        echo "<h3 style='border: 5px solid;  position: absolute;  top: 50%;  left: 50%;  transform: translate(-50%, -50%);  padding: 10px; color: blue;'>";
        echo "รอสักครู่ จะกลับไปหน้าหลัก...</h3>";
        echo "<meta http-equiv='refresh' content='3; url=leave.php'>";
    }else{
        // echo "<h2 style='border: 5px solid;  position: absolute;  top: 30%;  left: 50%;  transform: translate(-50%, -50%);  padding: 10px; color: green;'>";
        // echo "ดำเนินการส่งข้อมูลการลาเรียบร้อยแล้ว</h2>";
        // echo "<h2 style='border: 5px solid;  position: absolute;  top: 40%;  left: 50%;  transform: translate(-50%, -50%);  padding: 10px; color: salmon;'>";
        // echo "หากมีเอกสารต้องแนบ กรุณาเข้าไปส่งเอกสารผ่านเมนู ส่งเอกสารแนบการลา...</h2>";

        // echo "<button style='width: 300px; height: 50px; font-size: 18px; font-weight: bold; ";
        // echo "position: absolute;  top: 50%;  left: 50%;  transform: translate(-50%, -50%);  padding: 10px; ";
        // echo "background-color: skyblue; color: white; border-radius: 15px;'>";
        // echo "<a href='result_leave.php' target='_blank' style='text-decoration: none; color: black;'>";
        // echo "คลิกที่นี่...เปิดหน้าเอกสารเพื่อพิมพ์</a></button>";

        // echo "<button style='width: 300px; height: 50px; font-size: 18px; font-weight: bold; ";
        // echo "position: absolute;  top: 60%;  left: 50%;  transform: translate(-50%, -50%);  padding: 10px; ";
        // echo "background-color: lime; color: white; border-radius: 15px;'>";
        // echo "<a href='leave.php' style='text-decoration: none; color: black;'>";
        // echo "คลิกที่นี่...กลับไปหน้าหลัก</a></button>";

        echo "<div class='alert'><div class='flex-container'>";
        echo "<h2 id='ah2'>ดำเนินการส่งข้อมูลการลาเรียบร้อยแล้ว</h2>";
        echo "<h2 id='bh2'>หากมีเอกสารต้องแนบ กรุณาเข้าไปส่งเอกสารผ่านเมนู [ส่งเอกสารแนบการลา]</h2>";
        echo "<h2 id='ch2'>";
        echo "<a href='result_leave.php' target='_blank' id='a1'>";
        echo "<img src='images/printer.svg' alt='printer' width='5%'>";
        echo "คลิกที่นี่...เปิดเอกสารเพื่อพิมพ์ส่งงานบุคลากร";
        echo "</a>";
        echo "</h2>";
        echo "<h2 id='dh2'>";
        echo "<a href='leave.php' id='a2'>";
        echo "<img src='images/homepage.svg' alt='printer' width='5%'>";
        echo "คลิกที่นี่...กลับไปหน้าหลัก";
        echo "</a>";
        echo "</h2>";
        echo "</div>";

        $_SESSION['title'] = $_POST['title'];
        $_SESSION['fullname'] = $_POST['fullname'];
        $_SESSION['position'] = $_POST['position'];      
        
        $_SESSION['case_now'] = $_POST['mcase_now'];
        $_SESSION['case1_now'] = $_POST['case1_now'];
        $_SESSION['case2_now'] = $_POST['case2_now'];
    
        $_SESSION['case_past'] = $_POST['case_past'];        
        $_SESSION['sday_past'] = $_POST['sday_past'];
        $_SESSION['lday_past'] = $_POST['lday_past'];        
        $_SESSION['sumday_past'] = $_POST['sumday_past'];
        
        $_SESSION['sday_now'] = $_POST['sday_now'];          
        $_SESSION['lday_now'] = $_POST['lday_now'];
        $_SESSION['sumday_now'] = $_POST['sumday_now'];      
        
        $_SESSION['home_id'] = $_POST['home_id'];            
        $_SESSION['street'] = $_POST['street'];
        $_SESSION['street'] = $_POST['street'];                    
        $_SESSION['tambol'] = $_POST['tambol'];
        $_SESSION['amphue'] = $_POST['amphue'];              
        $_SESSION['province'] = $_POST['province'];
        $_SESSION['phone'] = $_POST['phone'];                
        $_SESSION['place_man'] = $_POST['place_man'];
        
        $_SESSION['status1'] = $status1;            
        $_SESSION['status2'] = $status2;
        $_SESSION['status3'] = $status3;            
        $_SESSION['status4'] = $status4;
        $_SESSION['status5'] = $status5;            
        $_SESSION['status6'] = $status6;
        $_SESSION['status7'] = $status7;            
        $_SESSION['status8'] = $status8;
        $_SESSION['status9'] = $status9;

    }

    mysqli_close($conn);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>สรุปการยื่นเอกสารลา</title>
    <style>
      .alert {
        display: block;
        margin-top: 5%;
        margin-right: auto;
        margin-left: auto;
        width: 50%;
      }
      .flex-container {
        display: flex;
        flex-direction: column;
        align-items: center;
      }

      .flex-container > #menu {
        background-color: #f1f1f1;
        width: 100px;
        margin: 10px;
        text-align: center;
        line-height: 75px;
        font-size: 30px;
      }
      .flex-container > #ah2{
        border: 2px dotted green;
        border-radius: 15px;
        background-color: white;
        line-height: 100px;
        padding: 10px;
        color: green;
      }
      .flex-container > #bh2{
        border: 2px dotted dodgerblue;
        border-radius: 15px;
        background-color: white;
        line-height: 100px;
        padding: 10px;
        color: dodgerblue;
      }
      .flex-container > #ch2{
        border: 2px dotted coral;
        border-radius: 15px;
        background-color: white;
        line-height: 80px;
        padding: 10px;
        text-align: center;
      }
      .flex-container > #dh2{
        border: 2px dotted rebeccapurple;
        border-radius: 15px;
        background-color: white;
        line-height: 80px;
        padding: 10px;
        margin-bottom: 15px;
        text-align: center;
      }
      #a1{
        text-decoration: none;
        color: coral;
      }
      #a2{
        text-decoration: none;
        color: rebeccapurple;
      }
    </style>
</head>
<body>
    
</body>
</html>