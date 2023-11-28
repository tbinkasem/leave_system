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

    $sql = "SELECT Password FROM member WHERE UserName='".$_SESSION['UserName']."'";
    $query = mysqli_query($conn,$sql);
    $result = mysqli_fetch_assoc($query);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แก้ไขรหัสผ่าน</title>
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

    </style>
</head>
<body>
    
    <br><br><br>
    <div>
        <h2>ข้อมูลรหัสผ่านที่จะทำการแก้ไข</h2> 
        <br>
        <form action="process_edit_pass.php" method="post">

            <table>
                <tr>
                    <th>
                        รหัสผ่านเดิม
                    </th>
                    <td>
                        <input type="text" value="<?php echo $result["Password"];?>" disabled>
                    </td>
                </tr>
                <tr>
                    <th>รหัสผ่านใหม่</th>
                    <td>
                        <input type="password" name="new_pass" id="password" required>
                    </td>
                    
                </tr>
                <tr>
                    <th>ยืนยันรหัสผ่านใหม่</th>
                    <td>
                        <input type="password" id="confirm_password" required>
                    </td>
                    
                </tr>
            </table>

            <br><br>

            <button type="submit">ยืนยันรหัสผ่าน</button>

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