$(document).ready(function () {

    // Function to show the hidden row when the plus button is clicked
    $('#add_row_quotation').click(function () {
        // Remove the 'hidden-row' class to make the row visible
        $('tbody.hidden-row-quotation').removeClass('hidden-row-quotation');
    });

    var rowCounter = 0; // Initialize the counter

    $('#add_row_quotation').click(function () {
        rowCounter++;
        var newRow =
            '<tr>' +
            '<td><input type="text" name="id[]" class="form-control" value="' + rowCounter + '" readonly></td>' +
            '<td><input type="text" name="item_no[]" class="form-control"></td>' +
            '<td><input type="text" name="description[]" class="form-control"></td>' +
            '<td><input type="text" name="unit_type_quote[]" class="form-control"></td>' +
            '<td><input type="number" name="quantity[]" class="form-control"></td>' +
            '<td><input type="text" name="amount[]" class="form-control"></td>' +
            '<td><input type="text" name="total_amount[]" class="form-control"></td>' +
            '<td><button type="button" class="btn btn-danger remove-row">DELETE</button></td>' +
            '</tr>';

        $('tbody').append(newRow);
    });

    // Function to remove a row
    $(document).on('click', '.remove-row', function () {
        $(this).closest('tr').remove();
    });

});
