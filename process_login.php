<?php

    include "conf.php";
    session_start();

    $pass = sha1($_POST['pass']);

    $strSQL = "SELECT * FROM member WHERE UserName = '".mysqli_real_escape_string($conn,$_POST['idcard'])."' 
    and Password = '".mysqli_real_escape_string($conn,$pass)."'";
    $objQuery = mysqli_query($conn,$strSQL);
    $objResult = mysqli_fetch_array($objQuery);
    if(!$objResult)
    {
            echo "<img style='display: block; margin-left: auto; margin-right: auto;' src='images/block.png'>";
            echo "<h2 style='text-align: center; color: red; margin-top: 10%;'>บัญชีผู้ใช้งาน หรือ รหัสผ่าน ไม่ถูกต้อง</h2>";
            echo "<meta http-equiv='refresh' content='3; url=index.html'>";
    }
    else
    {
            $_SESSION["UserName"] = $objResult["UserName"];
            $_SESSION["FullName"] = $objResult["FullName"];
            $_SESSION["Photo"] = $objResult["Photo"];
            header("location: leave.php");
    }
    mysqli_close($conn);

?>