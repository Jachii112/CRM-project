@extends('admin.admin_dashboard')
@section('admin')
    <div class="page-content">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Customer View</h4>
                    <form method="POST" action="{{ route('update.customer', ['id => $types->id']) }}" class="forms-sample">
                        @csrf
                        @method('PUT')
                        <br>
                        <div class="customer" id="customerForm">
                            <div class="container">
                                <div class="row">
                                    <div class="col">
                                        <div class="row mb-4">
                                            <div class="col-lg-10">
                                                <label>Customer ID</label>
                                                <input maxlength="100" name="customer_no" type="text"
                                                    class="form-control custom-form" value="{{ $types->customer_no }}"
                                                    disabled>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="row mb-4">
                                            <div class="col-lg-10">
                                                <label>Customer Name</label>
                                                <input maxlength="100" name="customer_name" type="text"
                                                    class="form-control custom-form" value="{{ $types->customer_name }}"
                                                    disabled>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="row mb-4">
                                            <div class="col-lg-10">
                                                <label>Phone Number</label>
                                                <input maxlength="100" name="contact_no" type="text"
                                                    class="form-control custom-form" value="{{ $types->contact_no }}"
                                                    disabled>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <div a class="row mb-4">
                                            <div class="col-lg-10">
                                                <label>Residential Details</label>
                                                <input maxlength="100" name="residential" type="text"
                                                    class="form-control custom-form" value="{{ $types->residential }}"
                                                    disabled>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="row mb-4">
                                            <div class="col-lg-10">
                                                <label>Address</label>
                                                <input maxlength="100" name="address" type="text"
                                                    class="form-control custom-form" value="{{ $types->address }}" disabled>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="row mb-4">
                                            <div class="col-lg-10">
                                                <label>Email</label>
                                                <input maxlength="100" name="email" type="text"
                                                    class="form-control custom-form" value="{{ $types->email }}" disabled>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <button type="submit" class="btn btn-primary btn-save" disabled>Save Changes</button>
                            <button type="button" class="btn btn-primary btn-edit">Edit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Scheduled Appointments</h6>
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Ticket Number</th>
                                        <th>Scheduled Date</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tickets as $ticket)
                                        <tr>
                                            <td>{{ $ticket->ticket_no }}</td>
                                            <td>{{ $ticket->appointment_date }}</td>
                                            <td>{{ $ticket->status }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Tickets</h6>
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Ticket No.</th>
                                        <th>Service Type</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tickets as $ticket)
                                        <tr>
                                            <td>{{ $ticket->ticket_no }}</td>
                                            <td>{{ $ticket->service_type }}</td>
                                            <td>{{ $ticket->status }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <br>
                            <br>
                            <br>
                        </div>
                        <div class="d-grid gap-6 d-md-flex justify-content-md-end">
                            <button type="button" class="btn btn-primary float-right gotoAddTicket"
                                data-customernumber="{{ $types->customer_no }}"
                                data-customername="{{ $types->customer_name }}"
                                data-phonenumber="{{ $types->contact_no }}" data-customeremail="{{ $types->email }}">Add
                                Ticket</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const goyoAddTicketButton = document.querySelectorAll('.gotoAddTicket');

            goyoAddTicketButton.forEach(button => {
                button.addEventListener('click', () => {
                    // Get the customerName, phoneNumber, and customerEmail values from the button's data attributes
                    const customerNumber = button.getAttribute('data-customernumber');
                    const customerName = button.getAttribute('data-customername');
                    const phoneNumber = button.getAttribute('data-phonenumber');
                    const customerEmail = button.getAttribute('data-customeremail');

                    // Redirect to the add_customer_from_inbox route with the customerName, phoneNumber, and customerEmail data
                    window.location.href =
                        "{{ route('add.ticket.from.customer') }}?customerNumber=" +
                        customerNumber +
                        "&customerName=" +
                        customerName + "&phoneNumber=" + phoneNumber + "&customerEmail=" +
                        customerEmail;
                });
            });
        });
    </script>
@endsection
