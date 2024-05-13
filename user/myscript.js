console.log("This is a myscript");
//let price = JSON.parse('{"sell":"120","buy":"125"}');

function local1() {}
local1();
function sell() {
  document.getElementById("sell").style.display = "block";
  document.getElementById("buy").style.display = "none";
  document.getElementById("sellbtn").classList = " btnn btn2 active2";
  document.getElementById("buybtn").classList = "btnn btn1";
}
function buy() {
  document.getElementById("sell").style.display = "none";
  document.getElementById("buy").style.display = "block";
  document.getElementById("sellbtn").classList = "btnn btn2";
  document.getElementById("buybtn").classList = "btnn btn1 active1";
}
// error data
// sellprice();

// document.getElementById("sellprice").innerText = sell;
// document.getElementById("buyprice").innerText = buy;


function profile() {
  var profile = document.getElementById("profile");
  if (profile.style.display === "none") {
    profile.style.display = "block";
  } else {
    profile.style.display = "none";
  }
  
}

