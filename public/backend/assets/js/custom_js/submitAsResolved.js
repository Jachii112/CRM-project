document.getElementById('submitAsResolved').addEventListener('click', function() {
    // Set the 'status' field to 'open' before submitting the form
    document.querySelector('#status').value = 'resolved';
    document.querySelector('form').submit();
});