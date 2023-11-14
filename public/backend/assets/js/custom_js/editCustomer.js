document.addEventListener("DOMContentLoaded", function () {
        const editButton = document.querySelector(".btn-edit");
        const saveButton = document.querySelector(".btn-save");
        const formFields = document.querySelectorAll(".custom-form");

        // Function to enable or disable form fields
        function toggleFormFields(editable) {
            formFields.forEach(function (field) {
                field.disabled = !editable;
            });
        }

        // Initial state: Fields are disabled, only "Edit" button is visible
        toggleFormFields(false);
        saveButton.disabled = true;

        // Event listener for the "Edit" button
        editButton.addEventListener("click", function () {
            toggleFormFields(true);
            editButton.disabled = true;
            saveButton.disabled = false;
        });
    });