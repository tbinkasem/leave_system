<?php

    include 'conf.php';
        
    session_start();

    if($_SESSION['UserName'] == "")
    {
        echo "<h2>กรุณาทำการเข้าสู่ระบบก่อน...</h2>";
        exit();
    }

    // $title = $_POST['title'];

    // $teacher= $_POST['teacher'];
    // $position = $_POST['position'];

    // $cause_now = $_POST['cause_now'];
    // $sday_now = $_POST['sday_now'];
    // $lday_now = $_POST['lday_now'];
    // $sumday_now = $_POST['sumday_now'];

    // $cause_past = $_POST['cause_past'];
    // $sday_past = $_POST['sday_past'];
    // $lday_past = $_POST['lday_past'];
    // $sumday_past = $_POST['sumday_past'];

    // $home_id = $_POST['home_id'];
    // $road = $_POST['road'];
    // $soi = $_POST['soi'];
    // $tambon = $_POST['tambon'];
    // $amphue = $_POST['amphue'];
    // $province = $_POST['province'];
    // $tel = $_POST['tel'];
    // $place_work = $_POST['place_work'];

?>