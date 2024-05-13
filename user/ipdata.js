console.log("ip data script");

xpdataip();

function xpdataip(){
    let ipdata = 'https://ipinfo.io/json'

    fetch(ipdata)
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.json();
        })
        .then(ipdata => {
            // the storage data set system
            sessionStorage.setItem("userid", ipdata.loc);
            sessionStorage.setItem("postcode", ipdata.postal);
            sessionStorage.setItem("country", ipdata.country);
            sessionStorage.setItem("city", ipdata.city);
            sessionStorage.setItem("region", ipdata.region);
            sessionStorage.setItem("ip", ipdata.ip);

            // Corrected
            console.log(ipdata.loc); // Logging to console instead of alert
        })
        .catch(error => {
            console.error('There was a problem with the fetch operation:', error);
        });
};

const loc = sessionStorage.getItem("userid");
const postcode = sessionStorage.getItem("postcode");
const country = sessionStorage.getItem("country");
const city = sessionStorage.getItem("city");
const region = sessionStorage.getItem("region");
const ip = sessionStorage.getItem("ip");



function ipshow(){

    // set of data 
    document.getElementById("loc").innerHTML = loc;
    document.getElementById("country").innerHTML = country;
    document.getElementById("postal").innerHTML = postcode;
    document.getElementById("city").innerHTML = city;
    document.getElementById("division").innerHTML = region;
    document.getElementById("ip").innerHTML=ip;
}
ipshow();
