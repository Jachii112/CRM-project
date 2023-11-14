var openButton = document.getElementById("add");
var closeButton = document.getElementById("addButton");
var overlay = document.getElementById("popupContainer");

openButton.addEventListener("click", function(){
    overlay.style.display = "flex";
});

closeButton.addEventListener("click", function(){
    overlay.style.display = "none";
});
