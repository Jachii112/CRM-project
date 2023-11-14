@extends('admin.admin_dashboard')
@section('admin')
    <div class="page-content">
        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <a href="{{ route('index.ticket') }}" class="btn btn-primary"> Back </a>
            </ol>
        </nav>
        <form class="forms-sample" action="" method="POST">
            @csrf
            <div class="row">
                <div class="col">
                    <div class="col-md-12 grid-margin">
                        <div class="card">
                            <div class="card-body">
                                <h1>Ticket View</h1>
                                <h6>{{ $ticket->issued_date }}</h6>
                                <br>
                                <a href="#" class="btn btn-inverse-dark col-md-6 text-start customer-button"
                                    data-customer-id="{{ $ticket->customer_number }}"><span
                                        class="badge bg-warning ">{{ $ticket->status }}</span>{{ $ticket->customer_name }}</a>
                                <br><br>
                                <div class="row mb-3">
                                    <div class="col">
                                        <label class="form-label">
                                            <div class="row">
                                                <h6>Ticket Number</h6>
                                            </div>
                                            <div class="row">
                                                <h3>{{ $ticket->ticket_no }}</h3>
                                            </div>
                                        </label>

                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">
                                            <div class="row">
                                                <h6>Customer ID</h6>
                                            </div>
                                            <div class="row">
                                                <h3>{{ $ticket->customer_number }}</h3>
                                            </div>

                                        </label>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col">
                                        <label class="form-label">
                                            <h6>Customer Name</h6>
                                        </label>
                                        <input type="text" class="form-control customer-name" id="customer_name"
                                            name ="customer_name" readonly value="{{ $ticket->customer_name }}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col">
                                        <label class="form-label">
                                            <h6>Contact Number</h6>
                                        </label>
                                        <input type="number" class="form-control contact-number" id="contact_number"
                                            name ="contact_number" readonly value="{{ $ticket->contact_number }}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col">
                                        <label class="form-label">
                                            <h6>Email Address</h6>
                                        </label>
                                        <input type="email" class="form-control email-address" id="email_address"
                                            name="email_address" readonly value="{{ $ticket->email_address }}">
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
                                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                                    disabled>
                                                    <option disabled selected>{{ $ticket->service_type }}</option>
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
                                    <div class="col-md-9">
                                        <textarea class="form-control" id="description" name="description" rows="7" readonly>{{ $ticket->description }}</textarea>
                                    </div>
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
                                                id="appointment_date" value="{{ $ticket->appointment_date }}" readonly>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <h6 class="form-label">Technician</h6>
                                    </div>
                                    <div class="col-md-3 grid-margin">
                                        <div class="form-group">
                                            <div class="dropdown">
                                                <select class="form-select btn btn-secondary dropdown-toggle text-white"
                                                    name="technician" type="button" id="technician"
                                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                                    disabled>
                                                    <option disabled selected>{{ $ticket->technician }}</option>
                                                    <option value="nozomi" class="dropdown-item-lg">Nozomi Shimofu
                                                    </option>
                                                    <option value="shoiel" class="dropdown-item-lg">Shiol Hedar
                                                    </option>
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
                                    <div class="table-responsive">
                                        <h3>Quotation</h3>
                                        <table class="table table-hover" id="dataTableExample">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Item Number</th>
                                                    <th>Item Name</th>
                                                    <th>Unit Type of Measurement</th>
                                                    <th>Quantity</th>
                                                    <th>Amount</th>
                                                    <th>Total Amount</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($ticket->quotations as $quotation)
                                                    @if ($quotation->item_number_material)
                                                        <tr>
                                                            <td>{{ $loop->iteration }}</td>
                                                            <td>{{ $quotation->item_number_material }}</td>
                                                            <td>{{ $quotation->item_name_material }}</td>
                                                            <td>{{ $quotation->unit_type_material }}</td>
                                                            <td>{{ $quotation->quantity_material }}</td>
                                                            <td>{{ $quotation->amount_material }}</td>
                                                            <td>{{ $quotation->total_amount_material }}</td>
                                                        </tr>
                                                    @endif
                                                    @if ($quotation->item_number_equipment)
                                                        <tr>
                                                            <td>{{ $loop->iteration }}</td>
                                                            <td>{{ $quotation->item_number_equipment }}</td>
                                                            <td>{{ $quotation->item_name_equipment }}</td>
                                                            <td>{{ $quotation->unit_type_equipment }}</td>
                                                            <td>{{ $quotation->quantity_equipment }}</td>
                                                            <td>{{ $quotation->amount_equipment }}</td>
                                                            <td>{{ $quotation->total_amount_equipment }}</td>
                                                        </tr>
                                                    @endif
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="add-purchase-btn text-end">
                <div class="d-grid gap2 d-md-flex justify-content-md-end">
                    <button type="submit" class="btn btn-primary me-md-2">Submit</button>
                </div>
            </div>
        </form>
    </div>
    <script>
        // Get all customer buttons
        const customerButtons = document.querySelectorAll('.customer-button');

        // Add click event listener to each customer button
        customerButtons.forEach(button => {
            button.addEventListener('click', function(event) {
                event.preventDefault();

                // Get the customer ID from the data attribute
                const customerId = button.dataset.customerId;

                // Redirect to the customer view page
                window.location.href = `/view/customer${customerId}`;
            });
        });
    </script>
@endsection
