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

    $username = $_SESSION['UserName'];

    // กรณีแสดงผลทั้งหมด

    $sql1 = "SELECT * FROM data WHERE UserName = '".$username."' ";
    $query1 = mysqli_query($conn,$sql1);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เลือกรายการลาเพื่อแนบเอกสาร</title>
    <link rel="stylesheet" href="css/pre_attachment.css">
</head>
<body>
    <br><br>
    <div class="main">
        <a href="leave.php">
            <button id="work1" type="submit">กลับไปหน้าหลัก</button>
        </a>
    </div>
    <br><br>
    <div class="container">
        <h2>โปรดเลือกรายการลา <small>ที่จะทำการแนบเอกสาร</small></h2>
        <ul class="responsive-table">
            <li class="table-header">
                <div class="col col-1">ประภทการลา</div>
                <div class="col col-2">วันเดือนปีเริ่มต้น(การลา)</div>
                <div class="col col-3">วันเดือนปีสิ้นสุด(การลา)</div>
                <div class="col col-4">จำนวนวันลา</div>
                <div class="col col-5">เอกสารแนบท้าย</div>
            </li>
            <?php
                while($result1 = mysqli_fetch_assoc($query1)){
            ?>
            <li class="table-row">
                <div class="col col-1" data-label="Job Id">
                    <?php  echo $result1['title']; ?>
                </div>
                <div class="col col-2" data-label="Customer Name">
                    <?php  echo $result1['sdayNow']; ?>
                </div>
                <div class="col col-3" data-label="Amount">
                    <?php  echo $result1['ldayNow']; ?>
                </div>
                <div class="col col-4" data-label="Payment Status">
                    <?php  echo $result1['sumdayNow']; ?>
                </div>
                <div class="col col-5" data-label="Payment Status">
                    <form action="attachment.php" method="get">
                        <input type="submit" value="ส่งเอกสารประกอบการลา">
                        <input type="hidden" name="send" value="<?php  echo $result1['Id']; ?>">
                    </form>
                </div>
            </li>
            <?php } ?>
        </ul>
    </div>

    <?php
        mysqli_close($conn);
    ?>

</body>
</html>