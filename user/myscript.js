console.log("apps");
let price = JSON.parse('{"sell":"120","buy":"125"}');
function menuicon(){
 document.getElementById("menu").classList="munu animate__animated animate__fadeInRight";
}
function myappclose(){
 document.getElementById("menu").classList="munu animate__animated animate__fadeOutRight"; 
}
function local1(){
document.getElementById("buyprice").innerText=price.buy;
}
local1();
function sell(){
    document.getElementById("sell").style.display="block";
    document.getElementById("buy").style.display="none";
}
function buy(){
    document.getElementById("sell").style.display="none";
    document.getElementById("buy").style.display="block";
}
function sellprice(){
    document.getElementById("sellprice").innerText=price.sell;
}
sellprice();
