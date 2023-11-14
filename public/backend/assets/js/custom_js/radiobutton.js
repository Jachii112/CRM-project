document.addEventListener('DOMContentLoaded', function(){
    const selectOption = document.getElementById('select-option');
    const radioContainer = document.querySelector('.radio-container');

    // Hide the radio container by default
    radioContainer.style.display = 'none';
    
    selectOption.addEventListener('change', function(){
        const selectedOption = this.value;

        // Check which option is selected and show/hide the radio container accordingly
        if (selectedOption === 'Customer'){
            // Create two new radio buttons
            const radio1 = createRadioButton('radio1', 'Old Customer');
            const radio2 = createRadioButton('radio2', 'New Customer');

            // Append the new radio buttons to the container
            radioContainer.innerHTML = '';
            radioContainer.appendChild(radio1);
            radioContainer.appendChild(radio2);

            // Show the radio container
            radioContainer.style.display = 'block';
        } 
        else if (selectedOption === 'Organization') {
            // Create two new radio buttons
            const radio3 = createRadioButton('radio3', 'Old Organization');
            const radio4 = createRadioButton('radio4', 'New Organization');

            // Append the new radio buttons to the container
            radioContainer.innerHTML = '';
            radioContainer.appendChild(radio3);
            radioContainer.appendChild(radio4);

            // Show the radio container
            radioContainer.style.display = 'block';
        }
        else {
            // Hide the radio container for other options
            radioContainer.style.display = 'none';       
        }
    });

    // Function to create a radio button
    function createRadioButton(id, label) {
        const newRadioButton = document.createElement('input');
        newRadioButton.type = 'radio';
        newRadioButton.className = 'form-check-input';
        newRadioButton.name = 'radioInline';
        newRadioButton.id = id;
        newRadioButton.value = id;

        const newRadioLabel = document.createElement('label');
        newRadioLabel.className = 'form-check-label';
        newRadioLabel.htmlFor = id;
        newRadioLabel.textContent = label;

        const radioDiv = document.createElement('div');
        radioDiv.className = 'form-check form-check-inline';
        radioDiv.appendChild(newRadioButton);
        radioDiv.appendChild(newRadioLabel);

        return radioDiv;
    }
});
