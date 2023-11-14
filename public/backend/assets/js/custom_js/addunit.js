document.addEventListener('DOMContentLoaded', function () {
    const serviceTypeDropdown = document.querySelector('#service_type');

    // Function to toggle the visibility of the "Unit Problem" input
    function toggleUnitProblemInput(input) {
        if (serviceTypeDropdown.value === 'repair') {
            input.removeAttribute('disabled');
        } else {
            input.setAttribute('disabled', 'disabled');
            input.value = '';
        }
    }

    // Add an event listener to the service type dropdown
    serviceTypeDropdown.addEventListener('change', function () {
        const unitProblemInputs = document.querySelectorAll('[name="unit_problem"]');
        unitProblemInputs.forEach(function (input) {
            toggleUnitProblemInput(input);
        });
    });

    const addUnitButton = document.getElementById('add_unit');
    const removeUnitButton = document.getElementById('remove_unit');
    const unitsContainer = document.getElementById('units-container');
    const unitTemplate = document.querySelector('.unit');

    addUnitButton.addEventListener('click', function (event) {
        event.preventDefault();

        const newUnit = unitTemplate.cloneNode(true);
        const inputFields = newUnit.querySelectorAll('input');
        inputFields.forEach(function (input) {
            input.value = '';
        });

        unitsContainer.appendChild(newUnit);

        // Show the Remove Unit button after adding a unit
        removeUnitButton.style.display = 'inline-block';

        // Reset the "Unit Problem" input in the new unit
        const newUnitProblemInput = newUnit.querySelector('[name="unit_problem"]');
        toggleUnitProblemInput(newUnitProblemInput);
    });

    removeUnitButton.addEventListener('click', function () {
        const lastUnit = unitsContainer.lastElementChild;

        if (lastUnit) {
            unitsContainer.removeChild(lastUnit);
        }

        // Hide the Remove Unit button if there are no units left
        if (unitsContainer.childElementCount <= 1) {
            removeUnitButton.style.display = 'none';
        }
    });
});
