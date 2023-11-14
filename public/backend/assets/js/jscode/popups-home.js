const openButton = document.getElementById("btn-request");
const openAButton = document.getElementById("btn-request-a");
const openBButton = document.getElementById("btn-request-b");
const openCButton = document.getElementById("btn-request-c");
const closeButton = document.getElementById("closeButton");
const popup = document.querySelector(".popup");

popup.style.display = "none";

openButton.addEventListener("click", function() {
  popup.style.display = "flex";
  popup.focus();
});

openAButton.addEventListener("click", function(){
 popup.style.display = "flex";
 popup.focus();
});

openBButton.addEventListener("click", function(){
    popup.style.display = "flex";
    popup.focus();  
    
   });

openCButton.addEventListener("click", function(){
    popup.style.display = "flex";
    popup.focus();
});

closeButton.addEventListener("click", function() {
  popup.style.display = "none";
});
