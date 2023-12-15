<?php

    include 'conf.php';
    session_start();
    error_reporting(0);

    if($_SESSION['UserName'] == "")
    {
        echo "<img style='display: block; margin-left: auto; margin-right: auto;' src='images/block.png'>";
        echo "<h2 style='text-align: center; color: red; margin-top: 10%;'>กรุณาทำการเข้าสู่ระบบ...</h2>";
        echo "<meta http-equiv='refresh' content='3; url=index.html'>";
        exit();
        
    }

    $sql = "SELECT * FROM address WHERE UserName='".$_SESSION['UserName']."'";
    $query = mysqli_query($conn,$sql);
    $result = mysqli_fetch_assoc($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เพิ่มเติม / แก้ไข ที่อยู่</title>
    <link rel="stylesheet" href="css/editaddress.css">
</head>
<body>
    <div class="container">
        <div class="text">
            ข้อมูลที่อยู่ (เพิ่มเติม/แก้ไข)
        </div>
        <form action="process_edit_address.php" method="post">
            <div class="form-row">
                <div class="input-data">
                    <input type="text" name="home" value="<?php echo $result["homeID"];?>" required>
                    <div class="underline"></div>
                    <label for="">บ้านเลขที่</label>
                </div>
                <div class="input-data">
                    <input type="text" name="street" value="<?php echo $result["street"];?>" required>
                    <div class="underline"></div>
                    <label for="">ถนน / หมู่ที่</label>
                </div>
            </div>
            <div class="form-row">
                <div class="input-data">
                    <input type="text" name="soi" value="<?php echo $result["soi"];?>" required>
                    <div class="underline"></div>
                    <label for="">ตรอก / ซอย</label>
                </div>
                <div class="input-data">
                    <input type="text" name="tambol" value="<?php echo $result["tambol"];?>" required>
                    <div class="underline"></div>
                    <label for="">ตำบล</label>
                </div>
            </div>
            <div class="form-row">
                <div class="input-data">
                    <input type="text" name="amphue" value="<?php echo $result["amphue"];?>" required>
                    <div class="underline"></div>
                    <label for="">อำเภอ</label>
                </div>
                <div class="input-data">
                    <input type="text" name="province" value="<?php echo $result["province"];?>" required>
                    <div class="underline"></div>
                    <label for="">จังหวัด</label>
                </div>
            </div>
            <div class="form-row">
                <div class="input-data">
                    <input type="text" name="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" value="<?php echo $result["phone"];?>" required>
                    <div class="underline"></div>
                    <label for="">โทรศัพท์ (รูปแบบ 08x-xxx-xxxx)</label>
                </div>
            </div>
            <div class="form-row">
                <div class="form-row submit-btn1">
                    <div class="input-data">
                        <div class="inner"></div>
                        <input type="submit" value="ยืนยันข้อมูล">
                    </div>
                </div>
                <div class="form-row submit-btn2">
                    <a href="leave.php" style="text-decoration: none;">
                    <div class="input-data">
                        <div class="inner"></div>
                            <button type="button">
                                กลับไปหน้าหลัก
                            </button>
                        </div>
                    </a>
                </div>
            </div>
        </form>
    </div>

<?php
    mysqli_close($conn);
?>

</body>
</html>