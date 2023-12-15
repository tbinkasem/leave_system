<?php

    session_start();
    session_destroy();

    echo "<h2 style='border: 5px solid green;  position: absolute;  top: 15%;  left: 50%;  transform: translate(-50%, -50%);  padding: 10px; color: green;'>ขอบคุณที่ใช้บริการ...</h2>";
    echo "<img src='images/thankyou.svg' style='border: 5px solid black;  position: absolute;  top: 40%;  left: 50%;  transform: translate(-50%, -50%);  padding: 10px; color: green;'>";
    echo "<h3 style='border: 5px solid blue;  position: absolute;  top: 60%;  left: 50%;  transform: translate(-50%, -50%);  padding: 10px; color: blue;'>กรุณารอสักครู่...</h3>";
    echo "<meta http-equiv='refresh' content='3; url= index.html'>";

?>