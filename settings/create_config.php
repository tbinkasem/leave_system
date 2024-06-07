<?php

    echo "<link rel='stylesheet' href='css/bootstrap.min.css'>";
    echo "<script src='js/bootstrap.min.js'></script>";
    session_start();

    $hn = $_SESSION['hn'];
    $un = $_SESSION['un'];
    $pw = $_SESSION['pw'];
    $db = $_SESSION['db'];

    $fileConfig = fopen("config/conf.php", "w") or 
    die("<div class='container'><br><br><h1 class='h1 text-danger'>ไม่สามารถเปิดไฟล์/เขียนไฟล์ได้ </h1><br><br>");
    $txt = "<?php\n\t\$server = \"localhost\";\n";
    fwrite($fileConfig, $txt);
    $txt = "\t\$user = \"root\";\n";
    fwrite($fileConfig, $txt);
    $txt = "\t\$pass = \"itdep333011\";\n";
    fwrite($fileConfig, $txt);
    $txt = "\t\$db = \"$db\";\n";
    fwrite($fileConfig, $txt);
    $txt = "\n";
    fwrite($fileConfig, $txt);
    $txt = "\t\$conn = mysqli_connect(\$hn,\$un,\$pw,\$db);\n";
    fwrite($fileConfig, $txt);
    $txt = "\tmysqli_set_charset(\$conn, \"utf8\");\n";
    fwrite($fileConfig, $txt);
    $txt = "\n";
    fwrite($fileConfig, $txt);
    $txt = "\tif(!\$conn){\n";
    fwrite($fileConfig, $txt);
    $txt = "\t\techo \"ไม่สามารถเชื่อมต่อฐานข้อมูลได้\";\n";
    fwrite($fileConfig, $txt);
    $txt = "\t}\n";
    fwrite($fileConfig, $txt);
    $txt = "?>";
    fwrite($fileConfig, $txt);
    fclose($fileConfig);

    echo "<div class='container'><br><br>";
    echo "<h2 class='h2 text-success'>สร้างไฟล์ conf.php เรียบร้อยแล้ว</h2><br><br>";
    echo "<meta http-equiv='refresh' content='3; url=basic_data.php'>";

?>