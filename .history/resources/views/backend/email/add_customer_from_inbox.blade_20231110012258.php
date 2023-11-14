@extends('admin.admin_dashboard')
@section('admin')
    <div class="page-content">
        <!-- Supplier And Order Information -->
        <div class="row">
            <div class="col-md-12 stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Customer Data</h6>
                        <form action="{{ route('store.customer') }}" method="POST">
                            @csrf
                            <div class="row">

                                <div class="col-sm-4">
                                    <div class="mb-4">
                                        <label class="form-label">Customer Name</label>
                                        <select class="form-select" id="customer_name" name="customer_name"
                                            placeholder="Customer Name">
                                            <option value=""></option>
                                        </select>
                                    </div>
                                </div><!-- Col -->
                                <div class="col-sm-4">
                                    <div class="mb-4">
                                        <label class="form-label">Contact Number</label>
                                        <input type="text" class="form-control" id="contact_no" name="contact_no"
                                            placeholder="Contact No." value="">
                                    </div>
                                </div><!-- Col -->
                            </div><!-- Row -->
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="mb-4">
                                        <label class="form-label">Email Address</label>
                                        <input type="email" class="form-control" id="email" name="email"
                                            placeholder="Enter Address">
                                    </div>
                                </div><!-- Col -->
                                <div class="col-sm-4">
                                    <div class="mb-4">
                                        <label class="form-label">Address</label>
                                        <input type="text" class="form-control" id="address" name="address"
                                            placeholder="Enter address">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="mb-4">
                                        <label class="form-label">Residential Details</label>
                                        <input type="text" class="form-control" id="residential" name="residential"
                                            placeholder="Residential Details">
                                    </div>
                                    <div class="d-grid gap-6 d-md-flex justify-content-md-end">
                                        <button type="submit" class="btn btn-primary me-2">Register</button>
                                    </div><!-- Col -->
                                </div><!-- Row -->
                            </div><!-- Form -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const customerName = document.getElementById('customer_name');

            customerName.addEventListener('change', () => {
                const selectedCustomerName = customerName.value;
                if (selectedCustomerName) {
                    fetch('/getCustomer/Data/' + selectedCustomerName, {
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
                                document.getElementById('contact_no').value = data.phoneNumber;
                                document.getElementById('email').value = data.customerEmail;
                                // Update other fields as needed.
                            }
                        })
                        .catch(error => {
                            console.error('Error:', error);
                        });
                }
            });
        });
    </script>
@endsection
