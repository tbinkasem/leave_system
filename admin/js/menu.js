function myMenu() {
    var x = document.getElementById("myLinks");
    if (x.style.display === "block") {
      x.style.display = "none";
    } else {
      x.style.display = "block";
      setTimeout(function(){ x.style.display = "none" }, 2000);
    }
  }