console.log("user login");

function logapp(){
  var email = document.getElementById("email").value;

 var password = document.getElementById("password").value;

localStorage.setItem("email",email);
localStorage.setItem("password",password);
};

  var email = document.getElementById("email");

 var password = document.getElementById("password");
  var emaildata  = localStorage.getItem("email");
  var passdata = localStorage.getItem("password");

email.value = emaildata;
password.value = passdata;