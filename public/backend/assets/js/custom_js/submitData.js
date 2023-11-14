document.addEventListener("DOMContentLoaded", function () {
    const form = document.querySelector(".table-form-container");
    const tableBody = document.querySelector(".category-choices");

    const submitBtn = document.getElementById("submitBtn");

    submitBtn.addEventListener("click", function (event) {
        event.preventDefault(); // Prevent the form from submitting to a server

        // Get input values
        const id = document.querySelector("input[name='add-id']").value;
        const description = document.querySelector("input[name='add-description']").value;
        const category = document.querySelector("select[name='add-category']").value;
        const unit = document.querySelector("select[name='add-unit']").value;
        const quantity = document.querySelector("input[name='add-quantity']").value;
        const warranty = document.querySelector("input[name='add-warranty']").value;

        // Create a new row in the table
        const newRow = document.createElement("tr");
        newRow.innerHTML = `
            <td>${id}</td>
            <td>${description}</td>
            <td>${category}</td>
            <td>${unit}</td>
            <td>${quantity}</td>
            <td>${warranty}</td>
        `;

        tableBody.appendChild(newRow);

        // Clear the form fields
        form.reset();
    });
});
