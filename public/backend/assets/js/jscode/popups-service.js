const servicebtn = document.getElementById("clkhere");
const closeButton = document.getElementById("service-closeButton");
const popup = document.querySelector(".popup");

popup.style.display = "none";

servicebtn.addEventListener("click", function() {
    popup.style.display = "flex";
    popup.focus();
});


closeButton.addEventListener("click", function() {
    popup.style.display = "none";
  });
  