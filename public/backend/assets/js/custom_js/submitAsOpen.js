document.getElementById('submitAsOpen').addEventListener('click', function() {
    // Set the 'status' field to 'open' before submitting the form
    document.querySelector('#status').value = 'open';
    document.querySelector('form').submit();
});