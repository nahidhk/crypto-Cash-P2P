
window.addEventListener('load', () => {
  let deferredPrompt;


  const addToHomeBtn = document.getElementById('add-to-home-btn');

  
  addToHomeBtn.addEventListener('click', () => {
    
    if (deferredPrompt) {
      deferredPrompt.prompt();

      
      deferredPrompt.userChoice.then((choiceResult) => {
        if (choiceResult.outcome == 'accepted') {
       
        } else {
      
        }
     
        deferredPrompt = null;
      });
    }
  });

 
  window.addEventListener('beforeinstallprompt', (event) => {
    
    event.preventDefault();
   
    deferredPrompt = event;
    
    addToHomeBtn.style.display = 'block';
  });
});


// menu open 
function menu() {
 document.getElementById("menu").classList='vcc icon menu ';
 document.getElementById("close").classList='ccv icon menu';
document.getElementById("list-box").classList="ccv list-box";
}
// close menu
function closed() {
  document.getElementById("menu").classList='ccv icon menu ';
  document.getElementById("close").classList='vcc icon menu ';
  document.getElementById("list-box").classList="vcc list-box";

}
function scrolll(){
  closed();
}

const root = document.documentElement;
const marqueeElementsDisplayed = getComputedStyle(root).getPropertyValue("--marquee-elements-displayed");
const marqueeContent = document.querySelector("ul.marquee-content");

root.style.setProperty("--marquee-elements", marqueeContent.children.length);

for(let i=0; i<marqueeElementsDisplayed; i++) {
  marqueeContent.appendChild(marqueeContent.children[i].cloneNode(true));
}



//  the foter js 
function login() {
  window.location.href="/user/login.asp"
}
function singup() {
  window.location.href="/user/singup.asp"
}
function sell() {
  window.location.href="/user/sell.asp"
}
function buy() {
  window.location.href="/user/buy.asp"
}

document.addEventListener("DOMContentLoaded", function () {
  const url = "user/pricelist.json";

  fetch(url)
    .then((response) => {
      if (!response.ok) {
        throw new Error("Network response was not ok");
      }
      return response.json();
    })
    .then((data) => {
      console.log(data);
      const item = data[0];
      var sell = item.sell;
      var buy = item.buy;
      document.getElementById("isell").innerText = sell;
      document.getElementById("ibuy").innerText = buy;
      sessionStorage.setItem("buy",buy);
      sessionStorage.setItem("sell",sell);
    })
    .catch((error) => {
      console.error("There was a problem with the fetch operation:", error);
    });
});

function telegram(){

}

function github(){
  
}
function tx(){
  
}