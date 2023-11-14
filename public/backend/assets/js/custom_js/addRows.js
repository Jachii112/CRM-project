$(document).ready(function () {
    var rowCounter = 0; // Initialize the counter

    // Function to show the hidden row when the plus button is clicked
    $('#add_row_materials').click(function () {
        console.log('Add button clicked');
        // Remove the 'hidden-row' class to make the row visible
        $('tbody.hidden-row-materials').removeClass('hidden-row-materials');
    });

    $('#add_row_materials').click(function () {
        rowCounter++;
        var newRow =
            '<tr>' +
            '<td><input type="text" name="id[]" class="form-control" value="' + rowCounter + '" readonly></td>' +
            '<td>' +
            '<select name="item_no[]" class="form-control item-no-select">' +
            '<option value="">Select Item</option>' +
            '@foreach ($materials as $material)' +
            '<option value="{{$material->item_no}}">{{$material->item_no}}</option>' +
            '@endforeach' +
            '</select>' +
            '</td>' +
            '<td><input type="text" name="item_description[]" class="form-control item-description" value="" readonly></td>' +
            '<td><input type="text" name="unit_type[]" class="form-control unit-type" value="" readonly></td>' +
            '<td><input type="number" name="quantity[]" class="form-control quantity" value=""></td>' +
            '<td><input type="text" name="amount[]" class="form-control amount" value="" readonly></td>' +
            '<td><input type="text" name="remarks[]" class="form-control remarks" value="" readonly></td>' +
            '<td><button type="button" class="btn btn-danger remove-row">DELETE</button></td>' +
            '</tr>';

        $('tbody').append(newRow);
        loadItemOptions(); // Load the item options for the new row
    });

    // Function to remove a row
    $(document).on('click', '.remove-row', function () {
        $(this).closest('tr').remove();
    });

    // Handle the form submission
    $('#submit-po').click(function () {
        console.log('Next button clicked');
        // Show the confirmation modal
        $('#confirmationModal').modal('show');
    });

    function loadItemOptions() {
        try {
            $.get('/get-materials', function (data) {
                $('.item-no-select:last').empty().append($('<option>', {
                    value: '',
                    text: 'Select Item'
                }));
                $.each(data, function (key, value) {
                    $('.item-no-select:last').append($('<option>', {
                        value: value.item_no,
                        text: value.item_no
                    }));
                });

                // Attach a change event handler to the item select
                $('.item-no-select:last').on('change', function() {
                    var selectedValue = $(this).val();
                    var selectedMaterial = data.find(material => material.item_no === selectedValue);

                    if (selectedMaterial) {
                        // Update item_description, unit_type, quantity, amount, remarks
                        $(this).closest('tr').find('.item-description').val(selectedMaterial.item_description);
                        $(this).closest('tr').find('.unit-type').val(selectedMaterial.unit);

                        $(this).closest('tr').find('.amount').val(selectedMaterial.amount);
                        $(this).closest('tr').find('.remarks').val(selectedMaterial.remarks);
                    } else {
                        // Clear the fields if no item is selected
                        $(this).closest('tr').find('.item-description').val('');
                        $(this).closest('tr').find('.unit-type').val('');

                        $(this).closest('tr').find('.amount').val('');
                        $(this).closest('tr').find('.remarks').val('');
                    }
                });
            });
        } catch (error) {
            console.error('Error fetching registered materials:', error);
        }
    }

    // Load item options for the initial row(s)
    loadItemOptions();

});
