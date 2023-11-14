var unitCountElement = document.getElementById("unitCount");
var countPlus = document.getElementById("increaseCount");
var countMinus = document.getElementById("decreaseCount");

var unitCount = 0;

function updateUnitCount() {
    unitCountElement.textContent = unitCount;
}

countPlus.addEventListener("click", function() {
    unitCount++;
    updateUnitCount();
});

countMinus.addEventListener("click", function() {
    if (unitCount > 0) {
        unitCount--;
        updateUnitCount();
    }
});

updateUnitCount();