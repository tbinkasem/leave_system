<?php

    include 'conf.php';
    session_start();

    if($_SESSION['UserName'] == "")
    {
        echo "<img style='display: block; margin-left: auto; margin-right: auto;' src='images/block.png'>";
        echo "<h2 style='text-align: center; color: red; margin-top: 10%;'>กรุณาทำการเข้าสู่ระบบ...</h2>";
        echo "<meta http-equiv='refresh' content='3; url=index.html'>";
        exit();
        
    }

    $us = $_SESSION['UserName'];

    $ho = $_POST["home"];
    $st = $_POST["street"];
    $so = $_POST["soi"];
    $ta = $_POST["tambol"];
    $am = $_POST["amphue"];
    $pr = $_POST["province"];
    $ph = $_POST["phone"];

    $sql1 = "SELECT * FROM address WHERE UserName='".$_SESSION['UserName']."'";
    $query1 = mysqli_query($conn,$sql1);


    if(mysqli_num_rows($query1) == 0){

        $sql3 = "INSERT INTO address(homeID,street,soi,tambol,amphue,province,phone,UserName) VALUES('$ho','$st','$so','$ta','$am','$pr','$ph','$us')";
        $query3 = mysqli_query($conn,$sql3);

        if(!$query3) {
            echo "<h2 style='border: 5px solid;  position: absolute;  top: 40%;  left: 50%;  transform: translate(-50%, -50%);  padding: 10px; color: red;'>";
            echo "เกิดข้อผิดพลาด ไม่สามารถ เพิ่ม/แก้ไขที่อยู่ ได้";
            echo "</h2>";
            echo "<h3 style='border: 5px solid;  position: absolute;  top: 50%;  left: 50%;  transform: translate(-50%, -50%);  padding: 10px; color: blue;'>";
            echo "รอสักครู่ จะกลับไปหน้าหลัก...</h3>";
            echo "<meta http-equiv='refresh' content='3; url= leave.php'>";
        }else{
            echo "<h2 style='border: 5px solid; position: absolute; top: 40%; left: 50%; transform: translate(-50%, -50%); padding: 10px; color: green;'>";
            echo "ดำเนินการ เพิ่มที่อยู่ เรียบร้อยแล้ว</h2>";
            echo "<h3 style='border: 5px solid;  position: absolute;  top: 50%;  left: 50%;  transform: translate(-50%, -50%);  padding: 10px; color: blue;'>";
            echo "รอสักครู่ จะกลับไปหน้าหลัก...</h3>";
            echo "<meta http-equiv='refresh' content='3; url= leave.php'>";
        }

    }else{

        $sql2 = "UPDATE address SET homeID = '$ho', street = '$st', soi = '$so', tambol = '$ta', amphue = '$am', province = '$pr', phone = '$ph', UserName='.$us' WHERE UserName='".$_SESSION['UserName']."'";
        $query2 = mysqli_query($conn,$sql2);

        if(!$query2) {
            echo "<h2 style='border: 5px solid;  position: absolute;  top: 40%;  left: 50%;  transform: translate(-50%, -50%);  padding: 10px; color: red;'>";
            echo "เกิดข้อผิดพลาด ไม่สามารถ เพิ่ม/แก้ไขที่อยู่ ได้";
            echo "</h2>";
            echo "<h3 style='border: 5px solid;  position: absolute;  top: 50%;  left: 50%;  transform: translate(-50%, -50%);  padding: 10px; color: blue;'>";
            echo "รอสักครู่ จะกลับไปหน้าหลัก...</h3>";
            echo "<meta http-equiv='refresh' content='3; url= leave.php'>";
        }else{
            echo "<h2 style='border: 5px solid; position: absolute; top: 40%; left: 50%; transform: translate(-50%, -50%); padding: 10px; color: green;'>";
            echo "ดำเนินการ แก้ไขที่อยู่ เรียบร้อยแล้ว</h2>";
            echo "<h3 style='border: 5px solid;  position: absolute;  top: 50%;  left: 50%;  transform: translate(-50%, -50%);  padding: 10px; color: blue;'>";
            echo "รอสักครู่ จะกลับไปหน้าหลัก...</h3>";
            echo "<meta http-equiv='refresh' content='3; url= leave.php'>";
        }

    }

    mysqli_close($conn);

?>