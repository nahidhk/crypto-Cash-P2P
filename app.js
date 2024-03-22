console.log("hello Word!")
function bodyai(){
  document.getElementById("navimg").classList="img-box myani";
 
}
function vdload(){
  document.getElementById("hello").innerHTML="hello"
}







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

function login(){
  window.location.href="/user"
}

