console.log("user login");



function loginapp() {
  var email = document.getElementById("email").value;
  var password = document.getElementById("password").value;

  fetch("signup.json")
    .then(response => response.json())
    .then(data => {
      var found = false;
      data.forEach(user => {
        if (user.email === email && user.password === password) {
          alert("Login complete");
          found = true;
        }
      });
      if (!found) {
        alert("Error: Login failed");
      }
    })
    .catch(error => {
      console.error("Error:", error);
    });
}
