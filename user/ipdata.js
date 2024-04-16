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

            

            // the storege data set system
            sessionStorage.setItem("userid", ipdata.loc);
            sessionStorage.setItem("postcode", ipdata.postal);

            
            // Corrected
            console.log(ipdata.loc); // Logging to console instead of alert
        })
        .catch(error => {
            console.error('There was a problem with the fetch operation:', error);
        });
};




function 
