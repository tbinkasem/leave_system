<?php

    include 'conf.php';
    
    session_start();

	if($_SESSION['UserName'] == "")
	{
		echo "<h2>กรุณาทำการเข้าสู่ระบบ...</h2>";
		exit();
	}

    // $title = $_POST['title'];

    // $teacher= $_POST['teacher'];
    // $position = $_POST['position'];

    // $cause_now = $_POST['cause_now'];
    // $sday_now = $_POST['sday_now'];
    // $lday_now = $_POST['lday_now'];
    // $sumday_now = $_POST['sumday_now'];

    // $cause_past = $_POST['cause_past'];
    // $sday_past = $_POST['sday_past'];
    // $lday_past = $_POST['lday_past'];
    // $sumday_past = $_POST['sumday_past'];

    // $home_id = $_POST['home_id'];
    // $road = $_POST['road'];
    // $soi = $_POST['soi'];
    // $tambon = $_POST['tambon'];
    // $amphue = $_POST['amphue'];
    // $province = $_POST['province'];
    // $tel = $_POST['tel'];
    // $place_work = $_POST['place_work'];

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
            <form action="result_leave.php" method="post">

                <div class="page slide-page">
                    <div class="title">ส่วนที่ 1 :</div>
                    <div class="field">
                        <div class="label">เรื่อง</div>
                        <select name="title">
                            <option value="ลาป่วย">ลาป่วย</option>
                            <option value="ลากิจส่วนตัว">ลากิจส่วนตัว</option>
                            <option value="ลาคลอดบุตร">ลาคลอดบุตร</option>
                            <option value="ลาช่วยเหลือภรรยาคลอดบุตร">ลาช่วยเหลือภรรยาคลอดบุตร</option>
                        </select>
                    </div>
                    <div class="field">
                        <div class="label">ชื่อ - สกุล</div>
                        <input type="text" name="teacher">
                    </div>
                    <div class="field">
                        <div class="label">ตำแหน่ง</div>
                        <select name="position">
                            <option value="ครู">ครู</option>
                            <option value="พนักงานราชการ">พนักงานราชการ</option>
                            <option value="ครูจ้างสอน">ครูอัตราจ้าง</option>
                            <option value="ลูกจ้างชั่วคราว">ลูกจ้างชั่วคราว</option>
                            <option value="รองผู้อำนวยการ">รองผู้อำนวยการ</option>
                            <option value="ผู้อำนวยการ">ผู้อำนวยการ</option>
                        </select>
                    </div>                   
                    <div class="field">
                        <button class="firstNext next">ถัดไป</button>
                    </div>
                </div>
                
                <div class="page">
                    <div class="title">ส่วนที่ 2 :</div>
                    <div class="field">
                        <div class="label">ขอลา</div>
                        <select name="case_now">
                            <option value="ป่วย">ป่วย</option>
                            <option value="กิจส่วนตัว">กิจส่วนตัว</option>
                            <option value="คลอดบุตร">คลอดบุตร</option>
                            <option value="ช่วยเหลือภรรยาที่คลอดบุตร">ช่วยเหลือภรรยาที่คลอดบุตร</option>
                        </select>
                    </div>
                    <div class="field">
                        <div class="label">เนื่องจาก (กรณีลาป่วย)</div>
                        <input type="text" value="-" name="case1">
                    </div>
                    <div class="field">
                        <div class="label">เนื่องจาก (กรณีลากิจส่วนตัว)</div>
                        <input type="text" value="-" name="case2">
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
                        <input type="date" name="sday_now">
                    </div>
                    <div class="field">
                        <div class="label">ถึงวันที่</div>
                        <input type="date" name="lday_now">
                    </div>
                    <div class="field">
                        <div class="label">รวม</div>
                        <input type="number" value="1" name="sumday_now">
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
                            <option value="ป่วย">ป่วย</option>
                            <option value="กิจส่วนตัว">กิจส่วนตัว</option>
                            <option value="คลอดบุตร">คลอดบุตร</option>
                            <option value="ช่วยเหลือภรรยาที่คลอดบุตร">ช่วยเหลือภรรยาที่คลอดบุตร</option>
                        </select>
                    </div>
                    <div class="field">
                        <div class="label">ครั้งสุดท้าย เมื่อวันที่</div>
                        <input type="date" name="sday_past">
                    </div>
                    <div class="field">
                        <div class="label">ถึงวันที่</div>
                        <input type="date" name="lday_past">
                    </div>
                    <div class="field">
                        <div class="label">รวม</div>
                        <input type="number" value="1" name="sumday_past">
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
                        <input type="text" name="home_id" placeholder="บ้านเลขที่">&nbsp;
                        <input type="text" name="road" placeholder="ถนน / หมู่ที่">
                    </div>
                    <div class="field">
                        <input type="text" name="soi" placeholder="ตรอก / ซอย">&nbsp;
                        <input type="text" name="tambol" placeholder="ตำบล">
                    </div>
                    <div class="field">
                        <input type="text" name="amphue" placeholder="อำเภอ">&nbsp;
                        <input type="text" name="province" placeholder="จังหวัด">
                    </div>
                    <div class="field">
                        <div class="label">เบอร์โทรศัพท์ / มือถือ</div>
                        <input type="tel" name="tel" placeholder="ตัวอย่างรูปแบบ 081-222-9999" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}">
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
                        <input type="text" name="place_work">
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