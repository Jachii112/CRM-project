@extends('admin.admin_dashboard')
@section('admin')
    <div class="page-content">
        <div class="col-md-6 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h3>Email</h3>
                    <br>
                    <div class="row mb-3">
                        <div class="col">
                            <label class="form-label">
                                <h6>Customer Name</h6>
                            </label>
                            <input type="text" class="form-control customer-name" id="customer_name" name ="customer_name"
                                readonly>
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
                            <input type="email" class="form-control email-address" id="email_address" name="email_address"
                                readonly>
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
                                    <select class="form-select btn btn-secondary dropdown-toggle" name="service_type"
                                        type="button" id="service_type" data-bs-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
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
    </div>
@endsection
