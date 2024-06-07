<?php

    session_start();

    $hn = $_SESSION['hn'];
    $un = $_SESSION['un'];
    $pw = $_SESSION['pw'];
    $db = $_SESSION['db'];

    $conn = mysqli_connect($hn, $un, $pw, $db);
    mysqli_set_charset($conn, "utf8");

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ส่งไฟล์โลโก้ และ ชื่อสถานศึกษา</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
  </head>
  <body>
    <div class="container">
        <br><br>
        <h2 class='h2 text-success'>กรอกชื่อสถานศึกษา และเลือกไฟล์ภาพโลโก้สถานศึกษา</h2>
        <br><br>
        <form action="check_dimension.php" method="post" enctype="multipart/form-data">

            <div class="row">
                <div class="col">
                    <input type="text" class="form-control" placeholder="กรุณาพิมพ์ชื่อสถานศึกษา" name="cname">
                </div>
                <div class="col">
                    <div class="input-group mb-3">
                        <label class="input-group-text">รูปโลโก้</label>
                        <input type="file" class="form-control" name="fileToUpload">
                    </div>
                </div>
                <div class="col">
                    <button type="submit" class="btn btn-success">ปรับปรุงข้อมูล</button>
                </div>
            </div>

        </form>
    </div>

  </body>
</html>
