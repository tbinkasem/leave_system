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

        // กำหนดให้ปีงบประมาณที่ลา
    // กำหนดตรวจสอบเดือนกันยายนหรือไม่
    $month_check = "09";
    // ตรวจสอบเดือนปัจจุบัน
    $month_now = date("m");
    // กำหนดค่าปีงบประมาณปัจจุบัน ในกรณีที่ไม่เกินเดือนกันยายน
    $year_before = date("Y") + 543;
    // กำหนดให้ปีงบประมาณถัดไป กรณีเกินเดือนกันยายน
    $year_after = date("Y") + 544;

    if($month_now > $month_check){
        $year_now = $year_after;
    }else{
        $year_now = $year_before;
    }

    // กรณีแสดงผลทั้งหมด

    $sql1 = "SELECT * FROM data WHERE UserName = '".$username."' ";
    $query1 = mysqli_query($conn,$sql1);


    // กรณีแสดงผล กรณี ลาป่วย

    $sql2 = "SELECT COUNT(title) as 'ntitle1' FROM data WHERE UserName = '".$username."' AND '".$year_now."' AND title = 'ลาป่วย'";
    $query2 = mysqli_query($conn,$sql2);
    $result2 = mysqli_fetch_assoc($query2);

    // กรณีแสดงผล จำนวนวัน กรณี ลาป่วย

    $sql3 = "SELECT SUM(sumdayNow) as 'nsum1' FROM data WHERE UserName = '".$username."' AND '".$year_now."' AND title = 'ลาป่วย'";
    $query3 = mysqli_query($conn,$sql3);
    $result3 = mysqli_fetch_assoc($query3);

    // กรณีแสดงผล กรณี ลากิจ

    $sql4 = "SELECT COUNT(title) as 'ntitle2' FROM data WHERE UserName = '".$username."' AND '".$year_now."' AND title = 'ลากิจส่วนตัว'";
    $query4 = mysqli_query($conn,$sql4);
    $result4 = mysqli_fetch_assoc($query4);

    // กรณีแสดงผล จำนวนวัน กรณี ลากิจ

    $sql5 = "SELECT SUM(sumdayNow) as 'nsum2' FROM data WHERE UserName = '".$username."' AND '".$year_now."' AND title = 'ลากิจส่วนตัว'";
    $query5 = mysqli_query($conn,$sql5);
    $result5 = mysqli_fetch_assoc($query5);

    // กรณีแสดงผล กรณี ลาคลอดบุตร

    $sql6 = "SELECT COUNT(title) as 'ntitle3' FROM data WHERE UserName = '".$username."' AND '".$year_now."' AND title = 'ลาคลอดบุตร'";
    $query6 = mysqli_query($conn,$sql6);
    $result6 = mysqli_fetch_assoc($query6);

    // กรณีแสดงผล จำนวนวัน กรณี ลาคลอดบุตร

    $sql7 = "SELECT SUM(sumdayNow) as 'nsum3' FROM data WHERE UserName = '".$username."' AND '".$year_now."' AND title = 'ลาคลอดบุตร'";
    $query7 = mysqli_query($conn,$sql7);
    $result7 = mysqli_fetch_assoc($query7);

    // กรณีแสดงผล กรณี ลาช่วยเหลือภรรยาคลอดบุตร

    $sql8 = "SELECT COUNT(title) as 'ntitle4' FROM data WHERE UserName = '".$username."' AND '".$year_now."' AND title = 'ลาช่วยเหลือภรรยาคลอดบุตร'";
    $query8 = mysqli_query($conn,$sql8);
    $result8 = mysqli_fetch_assoc($query8);

    // กรณีแสดงผล จำนวนวัน กรณี ลาช่วยเหลือภรรยาคลอดบุตร

    $sql9 = "SELECT SUM(sumdayNow) as 'nsum4' FROM data WHERE UserName = '".$username."' AND '".$year_now."' AND title = 'ลาช่วยเหลือภรรยาคลอดบุตร'";
    $query9 = mysqli_query($conn,$sql9);
    $result9 = mysqli_fetch_assoc($query9);

    // กรณีแสดงผล จำนวนวันลาทั้งหมด
    
    $sql10 = "SELECT SUM(sumdayNow) as 'nsumAll' FROM data WHERE UserName = '".$username."' AND '".$year_now."'";
    $query10 = mysqli_query($conn,$sql10);
    $result10 = mysqli_fetch_assoc($query10);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>รายงานการลา</title>
    <link rel="stylesheet" href="css/report_leave.css">
</head>
<body>

    <div class="container">

        <h1>รายการลาทั้งหมด</h1>

        <table class="zigzag">
            <thead>
                <tr>
                    <th class="header">ประภทการลา</th>
                    <th class="header">วันเดือนปีเริ่มต้น(การลา)</th>
                    <th class="header">วันเดือนปีสิ้นสุด(การลา)</th>
                    <th class="header">จำนวนวันลา</th>
                    <th class="header">ปีงบประมาณ</th>
                    <th class="header">เอกสารแนบท้าย</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while($result1 = mysqli_fetch_assoc($query1))
                    {
                ?>
                <tr>
                    <td>
                        <?php  echo $result1['title']; ?>
                    </td>
                    <td>
                        <?php  echo $result1['sdayNow']; ?>
                    </td>
                    <td>
                        <?php  echo $result1['ldayNow']; ?>
                    </td>
                    <td>
                        <?php  echo $result1['sumdayNow']; ?>
                    </td>
                    <td>
                        <?php  echo $result1['ybudget']; ?>
                    </td>
                    <td>
                        <?php
                            if($result1['attachment'] == ""){ 
                                echo "<span style='text-align: center; color: red;'>ไม่มีเอกสารแนบ</span>";
                            }else{
                                echo "<a href=attachments/".$result1['attachment']." target='_blank' style='text-decoration: none;'>";
                                echo "<img src='images/pdf.png' alt='attachment'></a>";
                            }
                        ?>
                        
                    </td>
                </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
        <br><br>
        <h3>แบบสรุปการลาในปีงบประมาณ <?php echo $year_now; ?></h3>
        <ol>
            <li>
                <b>ลาป่วย</b>
                <span>จำนวน  <?php  echo $result2['ntitle1']; ?>  ครั้ง  จำนวน  <?php  echo $result3['nsum1']; ?>  วัน</span>
            </li>
            <li>
                <b>ลากิจส่วนตัว</b>
                <span>จำนวน  <?php  echo $result4['ntitle2']; ?>  ครั้ง  จำนวน  <?php  echo $result5['nsum2']; ?>  วัน</span>
            </li>
            <li>
                <b>ลาคลอดบุตร</b>
                <span>จำนวน  <?php  echo $result6['ntitle3']; ?>  ครั้ง  จำนวน  <?php  if($result7['nsum3'] == ""){ echo "0"; }else{ echo $result7['nsum3']; } ?>  วัน</span>
            </li>
            <li>
                <b>ลาช่วยเหลือภรรยาที่คลอดบุตร</b>
                <span>จำนวน  <?php  echo $result8['ntitle4']; ?>  ครั้ง  จำนวน  <?php  if($result9['nsum4'] == ""){ echo "0"; }else{ echo $result9['nsum4']; } ?>  วัน</span>
            </li>
        </ol>
        <span class="all">จำนวนวันลาทั้งหมด</span>&nbsp;&nbsp;&nbsp;<?php echo $result10['nsumAll']; ?>&nbsp;&nbsp;&nbsp;<span class="all">วัน</span>
        <br><br><br><br><br>
        
        <a href="leave.php">
            <button type="button">กลับไปหน้าหลัก</button>
        </a>
        
    </div>
    <?php
        mysqli_close($conn);
    ?>

</body>
</html>