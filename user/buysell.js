

var loaduserid = sessionStorage.getItem("userid");
document.getElementById("useriddata").value=loaduserid;


var loademail= sessionStorage.getItem("email");
document.getElementById("emaildatashow").value=loademail;

var loadmobile = sessionStorage.getItem("mobile")
document.getElementById("phonedatashow").value=loadmobile ;

function mobiledatatest(){
var mobiletext = document.getElementById("phonedatashow").value;
    if (mobiletext == loadmobile) {
        
    } else {
        document.getElementById("phonedatashow").value=loadmobile ;
        alert("Sorry you cannot change mobile number.")  
    }
}


function number1() {
    
 document.getElementById("number1").classList="animate__bounceOutLeft animate__animated vcc"
 document.getElementById("number2").classList="animate__bounceInRight animate__animated"
}