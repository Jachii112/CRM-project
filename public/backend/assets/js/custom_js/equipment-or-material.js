$(document).ready(function() {
    // Initially, check the selected radio button on page load
    updateAmountInput();

    // Listen for the radio button change event for Material
    $('input[name="materials"]').on('change', function() {
        updateAmountInput();
    });

    // Listen for the radio button change event for Equipment
    $('input[name="equipment"]').on('change', function() {
        updateAmountInput();
    });

    function updateAmountInput() {
        var isMaterial = $('#flexRadioDefault1').is(':checked');
        var amountInput = $('input[name="amount"]');

        // Enable or disable the amount input based on the selected radio button
        if (isMaterial) {
            amountInput.prop('disabled', false);
        } else {
            amountInput.prop('disabled', true);
            // Clear the value when "Equipment" is selected
            amountInput.val('');
        }
    }
});
