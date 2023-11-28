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

    $sql = "UPDATE member SET Password = '".$_POST["new_password"]."' WHERE UserName='".$_SESSION['UserName']."'";
    $query = mysqli_query($conn,$sql);

    if(!$query) {
        echo "<h2 style='border: 5px solid;  position: absolute;  top: 40%;  left: 50%;  transform: translate(-50%, -50%);  padding: 10px; color: red;'>";
        echo "เกิดข้อผิดพลาด ไม่สามารถแก้ไขรหัสผ่านได้</h2>";
        echo "<h3 style='border: 5px solid;  position: absolute;  top: 50%;  left: 50%;  transform: translate(-50%, -50%);  padding: 10px; color: blue;'>";
        echo "รอสักครู่ จะกลับไปหน้าหลัก...</h3>";
        echo "<meta http-equiv='refresh' content='3; url= leave.php'>";
    }else{
        echo "<h2 style='border: 5px solid;  position: absolute;  top: 40%;  left: 50%;  transform: translate(-50%, -50%);  padding: 10px; color: green;'>";
        echo "ดำเนินการแก้ไขรหัสผ่านเรียบร้อยแล้ว</h2>";
        echo "<h3 style='border: 5px solid;  position: absolute;  top: 50%;  left: 50%;  transform: translate(-50%, -50%);  padding: 10px; color: blue;'>";
        echo "รอสักครู่ จะกลับไปหน้าหลัก...</h3>";
        echo "<meta http-equiv='refresh' content='3; url= leave.php'>";
    }

    mysqli_close($conn);

?>