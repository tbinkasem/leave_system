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