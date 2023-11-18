<?php

    session_start();
    session_destroy();
    echo "<h2 style='border: 5px solid;  position: absolute;  top: 50%;  left: 50%;  transform: translate(-50%, -50%);  padding: 10px; color: green;'>กรุณารอสักครู่...</h2>";
    echo "<meta http-equiv='refresh' content='3; url= index.html'>";

?>