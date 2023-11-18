<?php

    include 'conf.php';
    session_start();

    $dd = date('d');
    $dm = date('m');
    switch ($dm) {
        case '01':
            $dm = "มกราคม";
            break;
        case '02':
            $dm = "กุมภาพันธ์";
            break;
        case '03':
            $dm = "มีนาคม";
            break;
        case '04':
            $dm = "เมษายน";
            break;
        case '05':
            $dm = "พฤษภาคม";
            break;
        case '06':
            $dm = "มิถุนายน";
            break;
        case '07':
            $dm = "กรกฎาคม";
            break;
        case '08':
            $dm = "สิงหาคม";
            break;
        case '09':
            $dm = "กันยายน";
            break;
        case '10':
            $dm = "ตุลาคม";
            break;
        case '11':
            $dm = "พฤศจิกายน";
            break;

        default:
            $dm = "ธันวาคม";
            break;
    }
    
    $dy = date('Y');

    $status1 = "";
    $status2 = "";
    $status3 = "";
    $status4 = "";

    $title = $_POST['title'];

    $teacher = $_POST['teacher'];
    $position = $_POST['position'];

    $case = $_POST['case_now'];

    switch ($case) {
        case 'ป่วย':
            $cause_now = $case;
            $status1 = "checked";
            break;
        
        case 'กิจส่วนตัว':
            $cause_now = $case;
            $status2 = "checked";
            break;

        case 'คลอดบุตร':
            $cause_now = $case;
            $status3 = "checked";
            break;

        default:
            $cause_now = "ช่วยเหลือภรรยาที่คลอดบุตร";
            $status4 = "checked";
            break;
    }


    // $cause_now = $_POST['case_now'];
    $case1 = $_POST['case1'];
    $case2 = $_POST['case2'];

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
    <title>ใบลา</title>

    <style>
        @font-face {
            font-family: 'THSarabun';
            src: url('fonts/THSarabun.eot');
            src: url('fonts/THSarabun.eot#iefix') format('embedded-opentype'),
                 url('fonts/THSarabun.woff') format('woff'),
                 url('fonts/THSarabun.ttf') format('truetype'),
                 url('fonts/THSarabun.svg#Sri-TSCRegular') format('svg');
            font-weight: normal;
            font-style: normal;
        }
        
        body { 
            font-family: 'THSarabun';
            font-size: 19px;
        }
        
        span{
            border-bottom: 1px dotted black;
        }
        
        h3{
            margin: auto;
            text-align: center;
            padding: 5px;
            font-size: 20px;
        }

        .per{
            margin: auto;
            text-align: center;
        }
        
        .main{
            margin: auto;
            padding-left: 10px;
            padding-top: 10px;
            padding-right: 10px;
            padding-bottom: 10%;
        }
        
        .para1{
            margin-top: 5px;
            margin-bottom: 5px;
        }
        
        .para2{
            margin-top: 5px;
            margin-bottom: 5px;
        }
        
        .para3{
            margin-top: 30px;
            margin-bottom: 30px;
        }
        
        h1{
            padding-top: 1px;
            padding-bottom: 1px;
        }
        
        .now{
            text-align: right;
            width: 95%;
        }

        .ttt{
            margin: auto;
            padding: 5px;
            text-align: center;
        }

        table{
            width: 100%;
        }

        td{
            text-align: left;
        }

        .tnt{
            width: 100%;
            font-size: 20px;
            border: 1px;
        }

    </style>

</head>
<body>

    <h3>แบบลาป่วย ลากิจส่วนตัว  ลาคลอดบุตร ลาช่วยเหลือภรรยาที่คลอดบุตร</h3>
    <h3>วิทยาลัยการอาชีพปัตตานี</h3>

    <br>

    <!-- เริ่มต้น วัน/เดือน/ปีที่เขียน -->

    <div class="now">
        วันที่ 
        <span>
            &nbsp;&nbsp;&nbsp;
                <?php echo $dd; ?>
            &nbsp;&nbsp;&nbsp;
        </span>
        เดือน 
        <span>
            &nbsp;&nbsp;&nbsp;
                <?php echo $dm; ?>
            &nbsp;&nbsp;&nbsp;
        </span>
        พ.ศ.
        <span>
            &nbsp;&nbsp;&nbsp;
            <?php echo $dy + 543; ?>
            &nbsp;&nbsp;&nbsp;
        </span>
    </div>

    <!-- สิ้นสุด วัน/เดือน/ปีที่เขียน -->

    <div style="padding: 5px"></div>

    <div class="main">

        <!-- เริ่มต้น เกริ่นนำเอกสาร -->

        เรื่อง&nbsp;
        <span>
            &nbsp;&nbsp;&nbsp;
                <?php echo $title; ?>
            &nbsp;&nbsp;&nbsp;
        </span>

        <p class="para1"></p>

        เรียน&nbsp;
        <span>
            &nbsp;&nbsp;&nbsp;
                ผู้อำนวยการวิทยาลัยการอาชีพปัตตานี
            &nbsp;&nbsp;&nbsp;
        </span>

        <!-- สิ้นสุด เกริ่นนำเอกสาร -->

        <br><br>

        <!-- เริ่มต้น สร้างแท็บย่อหน้า -->

        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

        <!-- สิ้นสุด สร้างแท็บย่อหน้า -->

        <!-- เริ่มต้น ข้อมูลเบื้องต้น -->

        ข้าพเจ้า
        <span>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <?php echo $teacher; ?> 
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </span>
        ตำแหน่ง
        <span>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <?php echo $position; ?>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </span>
        
        <p class="para2"></p>

        สังกัด
        <span>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                วิทยาลัยการอาชีพปัตตานี
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </span>
        &nbsp;&nbsp; สำนักงานคณะกรรมการการอาชีวศึกษา &nbsp;&nbsp;กระทรวงศึกษาธิการ

        <!-- สิ้นสุด ข้อมูลเบื้องต้น -->

        <p class="para2"></p>

        <!-- เริ่มต้น เลือกประเภทการลา -->

        <b>ขอลา</b> <br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="checkbox" <?php echo $status1; ?>>
        <?php echo $cause_now; ?> เนื่องจาก
        <span>
            &nbsp;&nbsp;&nbsp;&nbsp;
            <?php echo $case1; ?>
            &nbsp;&nbsp;&nbsp;&nbsp;
        </span>
        
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="checkbox" <?php echo $status2; ?>> 
        <?php echo $cause_now; ?> เนื่องจาก
        <span>
            &nbsp;&nbsp;&nbsp;&nbsp;
            <?php echo $case2; ?>
            &nbsp;&nbsp;&nbsp;&nbsp;
        </span><br>

        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="checkbox" <?php echo $status3; ?>> คลอดบุตร 

        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="checkbox" <?php echo $status4; ?>> ช่วยเหลือภรรยาที่คลอดบุตร

        <!-- สิ้นสุด เลือกประเภทการลา -->

        <p class="para2"></p>

        <!-- เริ่มต้น วัน/เดือน/ปีที่ลา -->

        ตั้งแต่วันที่
        <span>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            16 พฤศจิกายน 2566
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </span>
        ถึงวันที่
        <span>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            17 พฤศจิกายน 2566
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </span>
        รวม
        <span>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                2
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </span>
        วัน

        <!-- สิ้นสุด วัน/เดือน/ปีที่ลา -->

        <p class="para2"></p>

        <!-- เริ่มต้น ประเภทที่ลา ครั้งก่อน -->

        ข้าพเจ้าได้ลา
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="checkbox" checked> ป่วย &nbsp;&nbsp;&nbsp;&nbsp;
        <input type="checkbox" > กิจส่วนตัว &nbsp;&nbsp;&nbsp;&nbsp;
        <input type="checkbox" > คลอดบุตร &nbsp;&nbsp;&nbsp;&nbsp;
        <input type="checkbox" > ช่วยเหลือภรรยาที่คลอดบุตร

        <p class="para2"></p>

        ครั้งสุดท้าย เมื่อวันที่
        <span>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            16 ตุลาคม 2566
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </span>
        ถึงวันที่
        <span>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            17 ตุลาคม 2566
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </span>
        รวม
        <span>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                2
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </span>
        วัน

        <!-- สิ้นสุด ประเภทที่ลา ครั้งก่อน -->

        <p class="para1"></p>

        <!-- เริ่มต้น สถานที่ติดต่อ -->

        ในระหว่างลา สามารถติดต่อข้าพเจ้าได้ที่ 
        <span>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            10/128
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </span>
        ถนน
        <span>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            หนองจิก
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </span>
        ตรอก / ซอย
        <span>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &#45;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </span>

        <p class="para2"></p>

        ตำบล
        <span>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &#45;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </span>
        อำเภอ 
        <span>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            เมือง
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </span>
        จังหวัด
        <span>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            ปัตตานี
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </span>
        เบอร์โทรศัพท์
        <span>
            &nbsp;&nbsp;&nbsp;&nbsp;
            073-333011
            &nbsp;&nbsp;&nbsp;&nbsp;
        </span>

        <!-- สิ้นสุด สถานที่ติดต่อ -->

        <!-- <p class="para3"></p> -->

        <br><br>
        <div class="ttt">
            <table>
        
        <!-- เริ่มต้น มอบหมายผู้รับแทน และ ลงชื่อ -->

                <tr>
                    <td style="width: 70%;">
                        ในระหว่างที่ข้าพเจ้าลา ขอมอบให้
                        <p class="para2"></p>
                        <span>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            นายอิมรอน  สุหลง
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        </span>
                        เป็นผู้ปฏิบัติราชการแทน
                        <p class="para2"></p>
                        ลงชื่อ
                        <span>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        </span>
                    </td>
                    <td style="text-align: center;">
                        ขอแสดงความนับถือ
                        <p class="para2"></p>
                        <span>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        </span>
                        <p class="para2"></p>
                        (
                        <span>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            นายธีระ  บินกาเซ็ม
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        </span>
                        )
                    </td>
                </tr>

        <!-- สิ้นสุด มอบหมายผู้รับแทน และ ลงชื่อ -->

        <!-- เริ่มต้น ผู้ปฏิบัติราชการแทน และ ลงชื่อหัวหน้างาน/แผนก -->

                <tr>
                    <td>
                        <br>
                        <b>ผู้ปฏิบัติราชการแทน</b>
                        <br>
                        <span>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            รับทราบ
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        </span>
                        <p class="para2"></p>
                        ลงชื่อ
                        <span>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        </span>
                    </td>
                    <td style="text-align: center;">
                        <br>
                        <b>ความเห็นหัวหน้าแผนกวิชา/หัวหน้างาน</b>
                        <br>
                        <span>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        </span>
                        <p class="para2"></p>
                        ลงชื่อ
                        <span>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        </span>
                    </td>
                </tr>

        <!-- สิ้นสุด ผู้ปฏิบัติราชการแทน และ ลงชื่อหัวหน้างาน/แผนก -->

            </table>
        </div>
        <div class="ttt">
            <table>
                <tr>

        <!-- เริ่มต้น ตารางข้อมูลการลา -->

                    <td  style="font-size: 15px; width: 60%;">
                            <table>
                                <tr>
                                    <th style="border: 1px solid black; width: 35%;">ประเภทการลา</th>
                                    <th style="border: 1px solid black;">ครั้งที่</th>
                                    <th style="border: 1px solid black;">ลามาแล้ว วันทำการ</th>
                                    <th style="border: 1px solid black;">ลาครั้งนี้ วันทำการ</th>
                                    <th style="border: 1px solid black;">รวมเป็น วันทำการ</th>
                                </tr>
                                <tr>
                                    <td style="border: 1px solid black;">ลาป่วย</td>
                                    <td style="border: 1px solid black;">&nbsp;</td>
                                    <td style="border: 1px solid black;">&nbsp;</td>
                                    <td style="border: 1px solid black;">&nbsp;</td>
                                    <td style="border: 1px solid black;">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td style="border: 1px solid black;">กิจส่วนตัว</td>
                                    <td style="border: 1px solid black;">&nbsp;</td>
                                    <td style="border: 1px solid black;">&nbsp;</td>
                                    <td style="border: 1px solid black;">&nbsp;</td>
                                    <td style="border: 1px solid black;">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td style="border: 1px solid black;">คลอดบุตร</td>
                                    <td style="border: 1px solid black;">&nbsp;</td>
                                    <td style="border: 1px solid black;">&nbsp;</td>
                                    <td style="border: 1px solid black;">&nbsp;</td>
                                    <td style="border: 1px solid black;">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td style="border: 1px solid black;">ช่วยเหลือภรรยาที่คลอดบุตร</td>
                                    <td style="border: 1px solid black;">&nbsp;</td>
                                    <td style="border: 1px solid black;">&nbsp;</td>
                                    <td style="border: 1px solid black;">&nbsp;</td>
                                    <td style="border: 1px solid black;">&nbsp;</td>
                                </tr>
                            </table>
                    </td>

        <!-- สิ้นสุด ตารางข้อมูลการลา -->

        <!-- เริ่มต้น ความเห็นของผู้บังคับบัญชา -->

                    <td style="text-align: center;">
                        <b>ความเห็นของผู้บังคับบัญชา</b>
                        <br>
                        <span>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        </span>
                        <p class="para2"></p>
                        ลงชื่อ
                        <span>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        </span>
                        <p class="para2"></p>
                        รองผู้อำนวยการ ฝ่ายบริหารทรัพยากร
                    </td>

        <!-- สิ้นสุด ความเห็นของผู้บังคับบัญชา -->

                </tr>
                <tr>

        <!-- เริ่มต้น หัวหน้างานบุคลากร -->

                    <td style="width: 70%;">
                        <div class="per">
                            ลงชื่อ
                            <span>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            </span>
                            ผู้ตรวจสอบ
                            <p class="para2"></p>
                            <b>
                                ตำแหน่ง หัวหน้างานบุคลากร
                                &nbsp;&nbsp;&nbsp;&nbsp;
                            </b>
                            <p class="para2"></p>
                            วันที่
                            <span>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;
                            </span>
                            &nbsp;&nbsp;&nbsp;&nbsp;
                        </div>
                    </td>

        <!-- สิ้นสุด หัวหน้างานบุคลากร -->

        <!-- เริ่มต้น ผู้อำนวยการวิทยาลัยการอาชีพปัตตานี -->

                    <td style="text-align: center;">
                        <br>
                        <b>คำสั่ง</b>
                        <br>
                        <input type="checkbox" checked> อนุญาต
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="checkbox" > ไม่อนุญาต
                        <br><br>
                        ลงชื่อ
                        <span>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        </span>
                        <p class="para2"></p>
                        <b>ผู้อำนวยการวิทยาลัยการอาชีพปัตตานี</b>
                        <p class="para2"></p>
                        วันที่
                        <span>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;
                        </span>
                    </td>

        <!-- สิ้นสุด ผู้อำนวยการวิทยาลัยการอาชีพปัตตานี -->

                </tr>
            </table>
        </div>
    </div>
    
</body>
</html>