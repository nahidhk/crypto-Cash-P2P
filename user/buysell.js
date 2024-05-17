var loaduserid = sessionStorage.getItem("userid");
document.getElementById("useriddata").value = loaduserid;

var loademail = sessionStorage.getItem("email");
document.getElementById("emaildatashow").value = loademail;

var loadmobile = sessionStorage.getItem("mobile");
document.getElementById("phonedatashow").value = loadmobile;

function mobiledatatest() {
  var mobiletext = document.getElementById("phonedatashow").value;
  if (mobiletext == loadmobile) {
  } else {
    document.getElementById("phonedatashow").value = loadmobile;
    alert("Sorry you cannot change mobile number.");
  }
}

function number1() {
  document.getElementById("number1").classList =
    "animate__bounceOutLeft animate__animated vcc";
  document.getElementById("number2").classList =
    "animate__bounceInRight animate__animated";
  document.getElementById("set1").classList = "numberlock a-active";
}

/// the boss
var loadbkashdata = localStorage.getItem("bkash");
var loadnagaddata = localStorage.getItem("nagad");

function addmethod() {
  var mymathoad = document.getElementById("method").value;
  var accountnumber = document.getElementById("account");

  if (mymathoad == "bkash") {
    accountnumber.value = loadbkashdata;
  } else {
  }

  if (mymathoad == "nagad") {
    accountnumber.value = loadnagaddata;
  } else {
  }

  if (mymathoad == "rocket") {
    accountnumber.value = "Sorry our Rocket service is not launched.";
  } else {
  }

  if (mymathoad == "upay") {
    accountnumber.value = "Sorry our Upay service is not launched.";
  } else {
  }
}

function number2() {
  var setmymathoad = document.getElementById("method").value;
  var setaccountnumber = document.getElementById("account").value;
  localStorage.setItem(setmymathoad, setaccountnumber);

  document.getElementById("number2").classList =
    "animate__bounceOutLeft animate__animated vcc";
  document.getElementById("number3").classList =
    "animate__bounceInRight animate__animated";
  document.getElementById("set2").classList = "numberlock a-active";
}


function number3() {
  var datausd = sessionStorage.getItem("usd");
  document.getElementById("usd").innerHTML = datausd;
  document.getElementById("number3").classList =
    "animate__bounceOutLeft animate__animated vcc";
  document.getElementById("number4").classList =
    "animate__bounceInRight animate__animated";
  document.getElementById("set3").classList = "numberlock a-active";
}

function tokenchk(){
  var tokok = document.getElementById("tokenopstion").value;
 

 
  if (tokok == "bpi") {
    document.getElementById('copy').value="1";
    document.getElementById("vic").style.display="block";
  } else {
    
  }

  if (tokok == "bep20") {
    document.getElementById('copy').value="2";
    document.getElementById("vic").style.display="block";
  } else {
    
  }

  if (tokok == "trc20") {
    document.getElementById('copy').value="3";
    document.getElementById("vic").style.display="block";
  } else {
   
  }


}

function copytext(){
  document.getElementById("vic").innerText="Copyed";
  // Get the text field
  var copyText = document.getElementById("copy");

  // Select the text field
  copyText.select();
  copyText.setSelectionRange(0, 99999); // For mobile devices

  // Copy the text inside the text field
  navigator.clipboard.writeText(copyText.value);
  
  // Alert the copied text

}

function trans(){
  document.getElementById("er").style.display="block";
  document.getElementById("set4").classList = "numberlock a-active";
}

var username = sessionStorage.getItem("username");
var city = sessionStorage.getItem("city");
document.getElementById("name").innerHTML=username;
document.getElementById("jela").innerHTML=city;




// None of these are for fun. It is built with a very open language. May not go as depressed or other system system. It uses only calculation system. Please use the guitar. Cannot attempt to customer.

var sellload = parseFloat(sessionStorage.getItem("sell"));
var buy = parseFloat(sessionStorage.getItem("buy"));

function usdok() {
  var usdx = parseFloat(document.getElementById("usdamount").value);
  var allusd = usdx * sellload;
  document.getElementById("bdtamount").value = allusd.toFixed(2); // Fixing to two decimal places
  sessionStorage.setItem("usd", usdx);
  var fee = usdx * 0.02;
  var feebdtsll = fee * sellload;
  var feebdtsllTotal = allusd - feebdtsll;
  document.getElementById("fee").value = fee.toFixed(2) + " USD";
  document.getElementById("rbdt").value = feebdtsllTotal.toFixed(2) + " BDT"; // Fixing to two decimal places
}

function bdtok() {
  var bdty = parseFloat(document.getElementById("bdtamount").value);
  var allbdt = bdty / sellload;
  document.getElementById("usdamount").value = allbdt.toFixed(2); // Fixing to two decimal places
  sessionStorage.setItem("usd", allbdt);
  var fee = allbdt * 0.02;
  var myrecev = fee * sellload;
  var opto = bdty - myrecev;
  document.getElementById("fee").value = fee.toFixed(2) + " USD"; // Adding "USD" suffix
  document.getElementById("rbdt").value = opto.toFixed(2) + " BDT"; // Fixing to two decimal places and adding "BDT" suffix
}



   
