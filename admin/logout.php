<?php

    session_start();
    session_unset();
    session_destroy();

    echo "<br><br><h2 style='text-align: center; color: green;'>คุณออกจากระบบแล้ว...</h2>";
    echo "<img src='images/logout.png' style='border: 1px dotted green; width: 30%; display: block; margin-left: auto; margin-right: auto;'>";
    echo "<h3 style='text-align: center; color: blue;'>กรุณารอสักครู่...</h3>";
    echo "<meta http-equiv='refresh' content='3; url= ../index.html'>";

?>