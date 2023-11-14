@extends('admin.admin_dashboard')
@section('admin')
    <div class="page-content">
        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <a href="{{ route('index.ticket') }}" class="btn btn-primary"> Back </a>
            </ol>
        </nav>
        <form class="forms-sample" action="{{ route('store.ticket') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-6 grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title">Ticket Details</h3>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="form-label">
                                        <h6>Customer ID</h6>
                                    </label>
                                    <select name="customer_number" class="form-select" id="customer_number">
                                        <option value="" selected>
                                            <h6>--Select Customer ID--</h6>
                                        </option>
                                        @foreach ($customerInfo as $info)
                                            <option value="{{ $info->customer_no }}">{{ $info->customer_no }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col">
                                    <label class="form-label">
                                        <h6>Customer Name</h6>
                                    </label>
                                    <input type="text" class="form-control customer-name" id="customer_name"
                                        name ="customer_name" readonly>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col">
                                    <label class="form-label">
                                        <h6>Contact Number</h6>
                                    </label>
                                    <input type="number" class="form-control contact-number" id="contact_number"
                                        name ="contact_number" readonly>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col">
                                    <label class="form-label">
                                        <h6>Email Address</h6>
                                    </label>
                                    <input type="email" class="form-control email-address" id="email_address"
                                        name="email_address" readonly>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col">
                                    <label for="service_type" class="form-label">
                                        <h6>Service Type</h6>
                                    </label>
                                </div>

                                <div class="col-md-4 row grid-margin">
                                    <div class="form-group">
                                        <div class="dropdown">
                                            <select class="form-select btn btn-secondary dropdown-toggle"
                                                name="service_type" type="button" id="service_type"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <option disabled selected>Service Type</option>
                                                <option value="maintenance" class="dropdown-item-lg">Maintenance
                                                </option>
                                                <option value="repair" class="dropdown-item-lg">Repair</option>
                                                <option value="installation" class="dropdown-item-lg">Installation
                                                </option>
                                                <option value="inquiry" class="dropdown-item-lg">Inquiry</option>

                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">

                                <div class="col-md-3">
                                    <label class="form-label">
                                        <h6>Description</h6>
                                    </label>
                                </div>
                                <div class="col-6 col-md-9">
                                    <textarea class="form-control" id="description" name="description" rows="7"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="row">
                        <div class="col-md-12 grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="card-title">Ticket Details</h3>

                                    <div class="row mb-3">
                                        <div class="col">
                                            <label for="appointment_date" class="form-label">
                                                <h6>Date:</h6>
                                            </label>
                                            <input type="date" class="form-control" name="appointment_date"
                                                id="appointment_date">
                                        </div>
                                    </div>
                                    <div class="col-md-3 grid-margin">
                                        <div class="form-group">
                                            <div class="dropdown">
                                                <select class="form-select btn btn-secondary dropdown-toggle text-white"
                                                    name="technician" type="button" id="technician"
                                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <option disabled selected>Technician</option>
                                                    <option value="nozomi" class="dropdown-item-lg">Nozomi Shimofu
                                                    </option>
                                                    <option value="shoiel" class="dropdown-item-lg">Shiol Hedar</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="card-title">Material List</h3>
                                    <div class="row mb-3">
                                        <div class="col">
                                            <label class="form-label">
                                                <h6>Item Number</h6>
                                            </label>
                                            <select class="form-select" name="item_number_material"
                                                id="item_number_material">
                                                <option value="">--Select Item--</option>
                                                @foreach ($materialInfo as $id)
                                                    <option value="{{ $id->item_no }}">{{ $id->item_no }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                            <label class="form-label">
                                                <h6>Item Name</h6>
                                            </label>
                                            <input type="text" class="form-control" id="item_name_material"
                                                name="item_name_material" readonly>
                                        </div>
                                        <div class="col-md-3">
                                            <label class="form-label">
                                                <h6>Quantity</h6>
                                            </label>
                                            <input type="number" class="form-control" id="quantity_material"
                                                name="quantity_material">
                                        </div>
                                        <div class="col-md-3">
                                            <label class="form-label">
                                                <h6>Estimated Amount</h6>
                                            </label>
                                            <input type="number" class="form-control" id="amount_material"
                                                name="amount_material" readonly>
                                        </div>
                                    </div>
                                    <button type="button" name="add_material_btn" id="add_material_btn"
                                        class="btn btn-primary">Add</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="card-title">Equipment</h3>
                                    <div class="row mb-3">
                                        <div class="col">
                                            <label class="form-label">
                                                <h6>Item Number</h6>
                                            </label>
                                            <select type="number" class="form-select" id="item_number_equipment"
                                                name="item_number_equipment">
                                                <option value="">--Select Item--</option>
                                                @foreach ($equipmentInfo as $id)
                                                    <option value="{{ $id->custom_id }}">{{ $id->custom_id }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                            <label class="form-label">
                                                <h6>Item Name</h6>
                                            </label>
                                            <input type="text" class="form-control" id="item_name_equipment"
                                                name="item_name_equipment" readonly>
                                        </div>
                                        <div class="col-md-3">
                                            <label class="form-label">
                                                <h6>Quantity</h6>
                                            </label>
                                            <input type="number" class="form-control" id="quantity_equipment"
                                                name="quantity_equipment">
                                        </div>
                                        <div class="col-md-3">
                                            <label class="form-label">
                                                <h6>Estimated Amount</h6>
                                            </label>
                                            <input type="number" class="form-control" id="amount_equipment"
                                                name="amount_equipment" readonly>
                                        </div>
                                    </div>
                                    <button type="button" name="add_equipment_btn" id="add_equipment_btn"
                                        class="btn btn-primary">Add</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <h3>Quotation</h3>
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Item Number</th>
                                            <th>Item Name</th>
                                            <th>Unit Type of Measurement</th>
                                            <th>Quantity</th>
                                            <th>Amount</th>
                                            <th>Total Amount</th>
                                            <th>ACTiON</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <input type="hidden" name="materials[item_number_material][]" value="">
                                        <input type="hidden" name="materials[item_name_material][]" value="">
                                        <input type="hidden" name="materials[unit_type_material][]" value="">
                                        <input type="hidden" name="materials[quantity_material][]" value="">
                                        <input type="hidden" name="materials[amount_material][]" value="">

                                        <input type="hidden" name="equipment[item_number_equipment][]" value="">
                                        <input type="hidden" name="equipment[item_name_equipment][]" value="">
                                        <input type="hidden" name="equipment[unit_type_equipment][]" value="">
                                        <input type="hidden" name="equipment[quantity_equipment][]" value="">
                                        <input type="hidden" name="equipment[amount_equipment][]" value="">
                                    </tbody>
                                </table>
                                <br><br>
                                <div class="add-purchase-btn text-end">
                                    <div class="d-grid gap2 d-md-flex justify-content-md-end">
                                        <button type="submit" class="btn btn-primary me-md-2">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const customerNumber = document.getElementById('customer_number');

            customerNumber.addEventListener('change', () => {
                const selectedCustomerId = customerNumber.value;
                if (selectedCustomerId) {
                    fetch('/get-customer-info/' + selectedCustomerId, {
                            method: 'GET',
                            headers: {
                                'X-Requested-With': 'XMLHttpRequest',
                            },
                        })
                        .then(response => {
                            if (!response.ok) {
                                throw new Error('Network response was not ok');
                            }
                            return response.json();
                        })
                        .then(data => {
                            if (data) {
                                document.getElementById('customer_name').value = data.customer_name;
                                document.getElementById('contact_number').value = data.contact_no;
                                document.getElementById('email_address').value = data.email;
                                // Update other fields as needed.
                            }
                        })
                        .catch(error => {
                            console.error('Error:', error);
                        });
                }
            });
        });

        //materials
        document.addEventListener('DOMContentLoaded', () => {
            const itemNumber = document.getElementById('item_number_material');

            itemNumber.addEventListener('change', () => {
                const selectedMaterialId = itemNumber.value;
                if (selectedMaterialId) {
                    fetch('/get-materials-info/' + selectedMaterialId, {
                            method: 'GET',
                            headers: {
                                'X-Requested-With': 'XMLHttpRequest',
                            },
                        })
                        .then(response => {
                            if (!response.ok) {
                                throw new Error('Network response was not ok');
                            }
                            return response.json();
                        })
                        .then(data => {
                            if (data) {
                                document.getElementById('item_name_material').value = data
                                    .item_description;
                                document.getElementById('amount_material').value = data.amount;
                                // Update other fields as needed.
                            }
                        })
                        .catch(error => {
                            console.error('Error:', error);
                        });
                }
            });
        });

        document.addEventListener("DOMContentLoaded", function() {
            let rowCounter = 1;
            const quotationTableBody = document.querySelector("table tbody");

            quotationTableBody.addEventListener("click", function(e) {
                if (e.target && e.target.classList.contains("delete-row")) {

                    e.preventDefault();
                    // Remove the row when the "Delete" button is clicked.
                    e.target.closest("tr").remove();
                    rowCounter--;

                    // Update row numbers in the table.
                    const rows = quotationTableBody.querySelectorAll("tr");
                    rows.forEach((row, index) => {
                        row.querySelector("td:first-child").textContent = index + 1;
                    });
                }
            });

            // Get references to the input fields and the "Add" button.
            const itemNumberSelect = document.getElementById("item_number_material");
            const itemNameInput = document.getElementById("item_name_material");
            const quantityInput = document.getElementById("quantity_material");
            const amountInput = document.getElementById("amount_material");
            const addButton = document.getElementById("add_material_btn");

            addButton.addEventListener("click", function() {
                // Get the selected material information.
                const itemNumber = itemNumberSelect.value;
                const itemName = itemNameInput.value;
                const quantity = quantityInput.value;
                const amount = amountInput.value;

                // Use AJAX to fetch the unit type based on the selected material.
                fetch(`/getUnitType/${itemNumber}`)
                    .then(response => response.json())
                    .then(data => {
                        // Extract the unit type from the response.
                        const unitType = data.unit_type;

                        // Calculate the total amount with two decimal places.
                        const totalAmount = (quantity * amount).toFixed(2);

                        // Create a new row for the quotation table with the unit type.
                        const newRow = document.createElement("tr");
                        newRow.innerHTML = `
                    <td>${rowCounter}</td>
                    <td>${itemNumber}</td>
                    <td>${itemName}</td>
                    <td>${unitType}</td>
                    <td>${quantity}</td>
                    <td>${amount}</td>
                    <td>${totalAmount}</td>
                    <td><button class="btn btn-danger delete-row">Delete</button></td>
                `;

                        // Append the new row to the quotation table.
                        quotationTableBody.appendChild(newRow);

                        const materialsInputContainer = document.querySelector(
                            'input[name="materials[item_number_material][]"]').parentNode;
                        materialsInputContainer.innerHTML += `
                                <input type="hidden" name="materials[item_number_material][]" value="${itemNumber}">
                                <input type="hidden" name="materials[item_name_material][]" value="${itemName}">
                                <input type="hidden" name="materials[unit_type_material][]" value="${unitType}">
                                <input type="hidden" name="materials[quantity_material][]" value="${quantity}">
                                <input type="hidden" name="materials[amount_material][]" value="${amount}">
                            `;

                        // Increment the row counter for the next row.
                        rowCounter++;

                        // Clear the input fields.
                        itemNumberSelect.value = '';
                        itemNameInput.value = '';
                        quantityInput.value = '';
                        amountInput.value = '';
                    })
                    .catch(error => {
                        console.error('Error:', error);
                    });
            });
        });

        //equipment
        document.addEventListener('DOMContentLoaded', () => {
            const EquipmentItemNumber = document.getElementById('item_number_equipment');

            EquipmentItemNumber.addEventListener('change', () => {
                const selectedEquipmentId = EquipmentItemNumber.value;
                if (selectedEquipmentId) {
                    fetch('/get-equipment-info/' + selectedEquipmentId, {
                            method: 'GET',
                            headers: {
                                'X-Requested-With': 'XMLHttpRequest',
                            },
                        })
                        .then(response => {
                            if (!response.ok) {
                                throw new Error('Network response was not ok');
                            }
                            return response.json();
                        })
                        .then(data => {
                            if (data) {
                                document.getElementById('item_name_equipment').value = data
                                    .item_description;
                                document.getElementById('amount_equipment').value = data.amount;
                                // Update other fields as needed.
                            }
                        })
                        .catch(error => {
                            console.error('Error:', error);
                        });
                }
            });
        });

        document.addEventListener("DOMContentLoaded", function() {
            let rowCounter = 1;
            const quotationTableBody = document.querySelector("table tbody");

            quotationTableBody.addEventListener("click", function(e) {
                if (e.target && e.target.classList.contains("delete-row")) {

                    e.preventDefault();
                    // Remove the row when the "Delete" button is clicked.
                    e.target.closest("tr").remove();
                    rowCounter--;

                    // Update row numbers in the table.
                    const rows = quotationTableBody.querySelectorAll("tr");
                    rows.forEach((row, index) => {
                        row.querySelector("td:first-child").textContent = index + 1;
                    });
                }
            });

            // Get references to the input fields and the "Add" button.
            const itemNumberSelect = document.getElementById("item_number_equipment");
            const itemNameInput = document.getElementById("item_name_equipment");
            const quantityInput = document.getElementById("quantity_equipment");
            const amountInput = document.getElementById("amount_equipment");
            const addButton = document.getElementById("add_equipment_btn");

            addButton.addEventListener("click", function() {
                // Get the selected material information.
                const itemNumber = itemNumberSelect.value;
                const itemName = itemNameInput.value;
                const quantity = quantityInput.value;
                const amount = amountInput.value;

                // Use AJAX to fetch the unit type based on the selected material.
                fetch(`/getEquipmentUnitType/${itemNumber}`)
                    .then(response => response.json())
                    .then(data => {
                        // Extract the unit type from the response.
                        const unitType = data.unit_type;

                        // Calculate the total amount with two decimal places.
                        const totalAmount = (quantity * amount).toFixed(2);

                        // Create a new row for the quotation table with the unit type.
                        const newRow = document.createElement("tr");
                        newRow.innerHTML = `
                            <td>${rowCounter}</td>
                            <td>${itemNumber}</td>
                            <td>${itemName}</td>
                            <td>${unitType}</td>
                            <td>${quantity}</td>
                            <td>${amount}</td>
                            <td>${totalAmount}</td>
                            <td><button class="btn btn-danger delete-row">Delete</button></td>
                        `;

                        // Append the new row to the quotation table.
                        quotationTableBody.appendChild(newRow);

                        const equipmentInputContainer = document.querySelector(
                            'input[name="equipment[item_number_equipment][]"]').parentNode;
                        equipmentInputContainer.innerHTML += `
                                <input type="hidden" name="equipment[item_number_equipment][]" value="${itemNumber}">
                                <input type="hidden" name="equipment[item_name_equipment][]" value="${itemName}">
                                <input type="hidden" name="equipment[unit_type_equipment][]" value="${unitType}">
                                <input type="hidden" name="equipment[quantity_equipment][]" value="${quantity}">
                                <input type="hidden" name="equipment[amount_equipment][]" value="${amount}">
                            `;

                        // Increment the row counter for the next row.
                        rowCounter++;

                        // Clear the input fields.
                        itemNumberSelect.value = '';
                        itemNameInput.value = '';
                        quantityInput.value = '';
                        amountInput.value = '';
                    })
                    .catch(error => {
                        console.error('Error:', error);
                    });
            });
        });
    </script>
@endsection
