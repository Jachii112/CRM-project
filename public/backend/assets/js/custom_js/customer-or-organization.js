function toggleForm(type) {
    if (type === "Customer") {
        document.getElementById("customerForm").style.display = "block";
        document.getElementById("organizationForm").style.display = "none";
    } else if (type === "Organization") {
        document.getElementById("customerForm").style.display = "none";
        document.getElementById("organizationForm").style.display = "block";
    }
}

// Get a reference to the select element by its ID
const selectElement = document.getElementById("select-option");

// Add a change event listener
selectElement.addEventListener("change", function () {
    const selectedValue = selectElement.value;
    
    // Call the toggleForm function
    toggleForm(selectedValue);
});
