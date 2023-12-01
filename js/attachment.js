const dropArea = document.querySelector(".drop_box"),
  button = dropArea.querySelector("button"),
  dragText = dropArea.querySelector("header"),
  input = dropArea.querySelector("input");

let file;
var filename;

button.onclick = () => {
  input.click();
};

// <input type="hidden" name="fileUpload" value="${fileName}">

input.addEventListener("change", function (e) {
  var fileName = e.target.files[0].name;
  let filedata = `
    <form action="process_attachment.php" method="post" enctype="multipart/form-data">
    <div class="form">
    <h4>ไฟล์ที่คุณเลือก</h4>
    <header>
        <h4>${fileName}</h4>                    
    </header>
    <input type="file" name="fileUpload">
    <button class="btn" type="submit">ส่งไฟล์แนบ</button>
    </div>
    </form>`;
  dropArea.innerHTML = filedata;
});
