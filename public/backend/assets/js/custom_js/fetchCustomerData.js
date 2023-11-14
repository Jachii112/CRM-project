document.getElementById('enterButton').addEventListener('click', function () {
    var requesterId = document.getElementById('requester_id').value;

    // Make an Ajax request to fetch customer data
    fetch('/get-customer-data/' + requesterId)
        .then(response => response.json())
        .then(data => {
            // Update the input fields with the retrieved data
            document.getElementById('requester').value = data.requester;
            document.getElementById('phone').value = data.phone;
            document.getElementById('email').value = data.email;
        })
        .catch(error => {
            console.error('Error fetching customer data', error);
        });
});



