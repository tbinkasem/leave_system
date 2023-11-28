<?php

    include 'conf.php';
    session_start();
    // error_reporting(0);

	if($_SESSION['UserName'] == "")
	{
		echo "<h2>กรุณาทำการเข้าสู่ระบบ...</h2>";
		exit();
	}

    $sumdayNow = "";

    $strSQL1 = "SELECT * FROM address WHERE UserName = '".$_SESSION['UserName']."'";
    $objQuery1 = mysqli_query($conn,$strSQL1);
    $objResult1 = mysqli_fetch_assoc($objQuery1);

    // $strSQL2 = "SELECT * FROM data WHERE UserName = '".$_SESSION['UserName']."'";
    $strSQL2 = "SELECT mCaseNow,sdayNow,ldayNow,sumdayNow,UserName FROM data WHERE UserName = '".$_SESSION['UserName']."' ORDER BY sdayNow DESC LIMIT 1";
    $objQuery2 = mysqli_query($conn,$strSQL2);
    $objRows2 = mysqli_num_rows($objQuery2);

    if($objRows2 == 0){

        $case_past = "-";
        $sday_past = "-";
        $lday_past = "-";
        $sumday_past = "-";
        $status5 = "";
        $status6 = "";
        $status7 = "";
        $status8 = "";
        $status9 = "";
        $sumdayNow = "-";
        
    }else{

        $objResult2 = mysqli_fetch_assoc($objQuery2);

        $case_past = $objResult2['mCaseNow'];

        switch ($case_past) {
            case 'ป่วย':
                $case = $case_past;
                $status5 = "selected";
                break;
            
            case 'กิจส่วนตัว':
                $case = $case_past;
                $status6 = "selected";
                break;
    
            case 'คลอดบุตร':
                $case = $case_past;
                $status7 = "selected";
                break;
            case 'ช่วยเหลือภรรยาที่คลอดบุตร':
                $case = $case_past;
                $status8 = "selected";
                break;
            default:
                $case = "-";
                $status9 = "selected";
                break;
        }

        $sumdayNow = $objResult2['sumdayNow'];
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แบบกรอกข้อมูลการลา</title>
    <link rel="stylesheet" href="css/style_register.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
    <div class="container">
        <header>ข้อมูลการลา</header>
        <div class="progress-bar">

            <div class="step">
                <p>A</p>
                <div class="bullet">
                    <span>1</span>
                </div>
                <div class="check fas fa-check"></div>
            </div>
            
            <div class="step">
                <p>B</p>
                <div class="bullet">
                    <span>2</span>
                </div>
                <div class="check fas fa-check"></div>
            </div>
            
            <div class="step">
                <p>C</p>
                <div class="bullet">
                    <span>3</span>
                </div>
                <div class="check fas fa-check"></div>
            </div>
            
            <div class="step">
                <p>D</p>
                <div class="bullet">
                    <span>4</span>
                </div>
                <div class="check fas fa-check"></div>
            </div>
            
            <div class="step">
                <p>E</p>
                <div class="bullet">
                    <span>5</span>
                </div>
                <div class="check fas fa-check"></div>
            </div>

            <div class="step">
                <p>F</p>
                <div class="bullet">
                    <span>6</span>
                </div>
                <div class="check fas fa-check"></div>
            </div>
            
        </div>
        
        <div class="form-outer">
            <form action="process_leave.php" method="post">

                <div class="page slide-page">
                    <div class="title">ส่วนที่ 1 :</div>
                    <div class="field">
                        <div class="label">เรื่อง</div>
                        <select name="title" required>
                            <option value="ลาป่วย">ลาป่วย</option>
                            <option value="ลากิจส่วนตัว">ลากิจส่วนตัว</option>
                            <option value="ลาคลอดบุตร">ลาคลอดบุตร</option>
                            <option value="ลาช่วยเหลือภรรยาคลอดบุตร">ลาช่วยเหลือภรรยาคลอดบุตร</option>
                        </select>
                    </div>
                    <div class="field">
                        <div class="label">ชื่อ - สกุล</div>
                        <input type="text" name="fullname" required>
                    </div>
                    <div class="field">
                        <div class="label">ตำแหน่ง</div>
                        <select name="position" required>
                            <option value="ครู">ครู</option>
                            <option value="พนักงานราชการ">พนักงานราชการ</option>
                            <option value="ครูจ้างสอน">ครูอัตราจ้าง</option>
                            <option value="ลูกจ้างชั่วคราว">ลูกจ้างชั่วคราว</option>
                            <option value="ลูกจ้างชั่วคราว">ข้าราชการ ก.พ.</option>
                            <option value="รองผู้อำนวยการ">รองผู้อำนวยการ</option>
                            <option value="ผู้อำนวยการ">ผู้อำนวยการ</option>
                        </select>
                    </div>                   
                    <div class="field">
                        <button style="
                            width: 300px; 
                            height: 50px; 
                            font-size: 18px; 
                            font-weight: bold;
                            background-color: lime;
                            color: white;
                            border-radius: 15px;">
                            <a href="leave.php" style="text-decoration: none; color: black;">
                                กลับไปหน้าหลัก
                            </a>
                        </button>
                        &nbsp;&nbsp;                        
                        <button class="firstNext next">ถัดไป</button>
                    </div>
                </div>
                
                <div class="page">
                    <div class="title">ส่วนที่ 2 :</div>
                    <div class="field">
                        <div class="label">ขอลา</div>
                        <select name="mcase_now" required>
                            <option value="ป่วย">ป่วย</option>
                            <option value="กิจส่วนตัว">กิจส่วนตัว</option>
                            <option value="คลอดบุตร">คลอดบุตร</option>
                            <option value="ช่วยเหลือภรรยาที่คลอดบุตร">ช่วยเหลือภรรยาที่คลอดบุตร</option>
                        </select>
                    </div>
                    <div class="field">
                        <div class="label">เนื่องจาก (กรณีลาป่วย)</div>
                        <input type="text" value="-" name="case1_now">
                    </div>
                    <div class="field">
                        <div class="label">เนื่องจาก (กรณีลากิจส่วนตัว)</div>
                        <input type="text" value="-" name="case2_now">
                    </div>
                    <div class="field btns">
                        <button class="prev-1 prev">ย้อนกลับ</button>
                        <button class="next-1 next">ถัดไป</button>
                    </div>
                </div>
                
                <div class="page">
                    <div class="title">ส่วนที่ 3 :</div>
                    <div class="field">
                        <div class="label">ตั้งแต่วันที่</div>
                        <input type="date" name="sday_now" required>
                    </div>
                    <div class="field">
                        <div class="label">ถึงวันที่</div>
                        <input type="date" name="lday_now" required>
                    </div>
                    <div class="field">
                        <div class="label">รวม</div>
                        <input type="number" value="1" name="sumday_now" required>
                    </div>
                    <div class="field btns">
                        <button class="prev-2 prev">ย้อนกลับ</button>
                        <button class="next-2 next">ถัดไป</button>
                    </div>
                </div>
                
                <div class="page">
                    <div class="title">ส่วนที่ 4 :</div>
                    <div class="field">
                        <div class="label">ข้าพเจ้า ได้ลา</div>
                        <select name="case_past">
                            <option value="-" <?php echo $status9; ?>>-</option>
                            <option value="ป่วย"  <?php echo $status5; ?>>ป่วย</option>
                            <option value="กิจส่วนตัว"  <?php echo $status6; ?>>กิจส่วนตัว</option>
                            <option value="คลอดบุตร"  <?php echo $status7; ?>>คลอดบุตร</option>
                            <option value="ช่วยเหลือภรรยาที่คลอดบุตร"  <?php echo $status8; ?>>ช่วยเหลือภรรยาที่คลอดบุตร</option>
                        </select>
                    </div>
                    <div class="field">
                        <div class="label">ครั้งสุดท้าย เมื่อวันที่</div>
                        <input type="date" name="sday_past" value="<?php echo $objResult2['sdayNow']; ?>">
                    </div>
                    <div class="field">
                        <div class="label">ถึงวันที่</div>
                        <input type="date" name="lday_past" value="<?php echo $objResult2['ldayNow']; ?>">
                    </div>
                    <div class="field">
                        <div class="label">รวม</div>
                        <input type="text" name="sumday_past" value="<?php echo $sumdayNow; ?>">
                    </div>
                    <div class="field btns">
                        <button class="prev-3 prev">ย้อนกลับ</button>
                        <button class="next-3 next">ถัดไป</button>
                    </div>
                </div>

                <div class="page">
                    <div class="title">ส่วนที่ 5 :</div>
                    <div class="field">
                        <div class="label">ในระหว่างลา สามารถติดต่อ ข้าพเจ้าได้ที่</div>
                        <input type="text" name="home_id" placeholder="บ้านเลขที่" value="<?php echo $objResult1['homeID']; ?>" required>&nbsp;
                        <input type="text" name="street" placeholder="ถนน / หมู่ที่" value="<?php echo $objResult1['street']; ?>" required>
                    </div>
                    <div class="field">
                        <input type="text" name="soi" placeholder="ตรอก / ซอย" value="<?php echo $objResult1['soi']; ?>" required>&nbsp;
                        <input type="text" name="tambol" placeholder="ตำบล" value="<?php echo $objResult1['tambol']; ?>" required>
                    </div>
                    <div class="field">
                        <input type="text" name="amphue" placeholder="อำเภอ" value="<?php echo $objResult1['amphue']; ?>" required>&nbsp;
                        <input type="text" name="province" placeholder="จังหวัด" value="<?php echo $objResult1['province']; ?>" required>
                    </div>
                    <div class="field">
                        <div class="label">เบอร์โทรศัพท์ / มือถือ (ตัวอย่างรูปแบบ 0xx-xxx-xxxx)</div>
                        <input type="tel" name="phone" placeholder="0xx-xxx-xxxx" value="<?php echo $objResult1['phone']; ?>" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required>
                    </div>
                    <div class="field btns">
                        <button class="prev-4 prev">ย้อนกลับ</button>
                        <button class="next-4 next">ถัดไป</button>
                    </div>
                </div>

                <div class="page">
                    <div class="title">ส่วนที่ 6 :</div>
                    <div class="field">
                        <div class="label">ในระหว่างที่ข้าพเจ้าลา ขอมอบให้</div>
                        <input type="text" name="place_man">
                    </div>
                    <div class="field">
                        <div class="label">เป็นผู้ปฎิบัติราชการแทน</div>
                    </div>
                    <div class="field btns">
                        <button class="prev-5 prev">ย้อนกลับ</button>
                        <button class="submit">ยืนยันข้อมูล</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
    <script src="js/script_register.js"></script>

</body>
</html>