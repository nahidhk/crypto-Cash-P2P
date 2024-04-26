console.log("user login");

function logapp() {
  var email = document.getElementById("email").value;

  var password = document.getElementById("password").value;

  localStorage.setItem("email", email);
  localStorage.setItem("password", password);
}

var email = document.getElementById("email");

var password = document.getElementById("password");
var emaildata = localStorage.getItem("email");
var passdata = localStorage.getItem("password");

email.value = emaildata;
password.value = passdata;

function logout() {
  alert(
    "  If you log out, all your data will be removed from the local server and you will be logged in again.Hope you understand what we mean."
  );
  window.location.href = "/index.html";
  localStorage.removeItem("email");
  localStorage.removeItem("password");
}
// the nahid hk is a web developer
 