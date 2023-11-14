function showInput(selectElement) {
    const otherTechnologyInput = document.getElementById("otherTechnologyInput");
    const dropdown = document.getElementById("technology");

    if (selectElement.value === "other") {
        otherTechnologyInput.style.display = "block";
    } else {
        otherTechnologyInput.style.display = "none";
        otherTechnologyInput.value = "";

        // Check if the custom option already exists in the dropdown
        const customValue = otherTechnologyInput.value.trim();
        if (customValue !== "") {
            if (!dropdown.querySelector('option[value="' + customValue + '"]')) {
                const option = document.createElement("option");
                option.value = customValue;
                option.text = customValue;
                dropdown.appendChild(option);
            }
        }
    }
}
