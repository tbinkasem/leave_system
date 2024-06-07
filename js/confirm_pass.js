var new_password = document.getElementById("new_password")
  , confirm_password = document.getElementById("confirm_password");

function validatePassword(){
  if(new_password.value != confirm_password.value) {
    confirm_password.setCustomValidity("รหัสผ่านป้อนไม่ตรงกันทั้งสองช่อง");
    alert("รหัสผ่านป้อนไม่ตรงกันทั้งสองช่อง");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;