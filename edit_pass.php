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

    // $sql = "SELECT Password FROM member WHERE UserName='".$_SESSION['UserName']."'";
    // $query = mysqli_query($conn,$sql);
    // $result = mysqli_fetch_assoc($query);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แก้ไขรหัสผ่าน</title>
    <link rel="stylesheet" href="css/editpass.css">
    <script src="js/confirm_pass.js"></script>
</head>
<body>
    <div class="form">
      <form action="process_edit_pass.php" method="post">
        <div class="title">ข้อมูลรหัสผ่าน</div>
        <div class="subtitle">ที่จะทำการแก้ไข</div>
        <!-- <div class="input-container ic1">
          <input class="input" type="text" value="<?php echo $result["Password"];?>" disabled />
          <div class="cut"></div>
          <label for="firstname" class="placeholder">รหัสผ่านเดิม</label>
        </div> -->
        <div class="input-container ic2">
          <input class="input" type="password" id="new_password" name="new_password" required />
          <div class="cut"></div>
          <label for="new_password" class="placeholder">รหัสผ่านใหม่</label>
        </div>
        <div class="input-container ic2">
          <input class="input" type="password" id="confirm_password" name="confirm_password" required />
          <div class="cut cut-short"></div>
          <label for="confirm_password" class="placeholder">ยืนยันรหัสผ่านใหม่</>
        </div>
        <button type="text" class="submit1">บันทึกรหัสผ่านใหม่</button>
      </form>
        <a href="leave.php">
          <button type="text" class="submit2">กลับไปหน้าหลัก</button>
        </a>
      </div>
      <script src="js/confirm_pass.js"></script>

  <!-- <?php
  mysqli_close($conn);
  ?> -->

</body>
</html>