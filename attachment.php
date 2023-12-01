<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ส่งเอกสารประกอบการลา</title>
    <link rel="stylesheet" href="css/attachment.css">
</head>
<body>

    <div class="main">
        <div>
            <h1 style="color: green;">ส่งเอกสารประกอบการลา</h1>
            <form action="process_attachment.php" method="post" enctype="multipart/form-data">
                <label for="">เลือกไฟล์เอกสารที่จะส่ง : </label> <br><br>
                <input type="file" name="fileUpload" id="fileUpload" accept=".pdf,.doc,.docx">
                <input type="submit" value="ส่งเอกสารแนบ" name="submit" class="sb">
            </form>
        </div>
        <br><br>
        <div>
            <a href="leave.php">
                <button id="work1" type="submit">กลับไปหน้าหลัก</button>
            </a>
        </div>
    </div>

</body>
</html>