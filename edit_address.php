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
    <script src="js/confirm_pass.js"></script>
    <style>

        body{
            font-size: 22px;
        }

        div{
            border: 2px dashed green;
            margin: auto;
            width: 50%;
            padding: 50px;
        }

        button{
            width: 200px;
            height: 50px;
            font-size: 18px;
            font-weight: bold;
            background-color: blue;
            color: white;
            border-radius: 15px;
        }

        .abutton{
            width: 200px;
            height: 50px;
            font-size: 18px;
            font-weight: bold;
            background-color: lime;
            color: white;
            border-radius: 15px;
        }

        a{
            text-decoration: none;
            color: black;
        }

        input{
            width: 250px;
            height: 30px;
            border: 2px dotted blue;
            font-weight: bold;
            font-size: 16px;
            background-color: #9FE2BF;
        }

        table{
            width: 95%;
        }

        th,td{
            text-align: right;
            color: blue;
        }

        input:focus{
            background-color: lime;
        }

    </style>
</head>
<body>
    
    <br><br><br>
    <div>
        <h2>ข้อมูลที่อยู่ (เพิ่มเติม/แก้ไข)</h2> 
        <br>
        <form action="process_edit_address.php" method="post">

            <table>
                <tr>
                    <th>บ้านเลขที่</th>
                    <td>
                        <input type="text" name="home" value="<?php echo $result["homeID"];?>" required>
                    </td>
                </tr>
                <tr>
                    <th>ถนน / หมู่ที่</th>
                    <td>
                        <input type="text" name="street" value="<?php echo $result["street"];?>" required>
                    </td>                
                </tr>
                <tr>
                    <th>ตรอก / ซอย</th>
                    <td>
                        <input type="text" name="soi" value="<?php echo $result["soi"];?>" required>
                    </td>                    
                </tr>
                <tr>
                    <th>ตำบล</th>
                    <td>
                        <input type="text" name="tambol" value="<?php echo $result["tambol"];?>" required>
                    </td>                    
                </tr>
                <tr>
                    <th>อำเภอ</th>
                    <td>
                        <input type="text" name="amphue" value="<?php echo $result["amphue"];?>" required>
                    </td>                    
                </tr>
                <tr>
                    <th>จังหวัด</th>
                    <td>
                        <input type="text" name="province" value="<?php echo $result["province"];?>" required>
                    </td>
                </tr>
                <tr>
                    <th>โทรศัพท์มือถือ</th>
                    <td>
                        <input type="tel" name="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" value="<?php echo $result["phone"];?>" required>
                    </td>
                    <td rowspan="7">
                        (ตัวอย่างรูปแบบ 0xx-xxx-xxxx)
                    </td>
                </tr>
            </table>

            <br><br>

            <button type="submit">ยืนยันข้อมูล</button>

        </form>
        <br>
        <button type="submit" class="abutton">
            <a href="leave.php">
                ย้อนกลับไปหน้าหลัก
            </a>
        </button>
        
    </div>
    

    <script src="js/confirm_pass.js"></script>

    <?php
    mysqli_close($conn);
    ?>

</body>
</html>