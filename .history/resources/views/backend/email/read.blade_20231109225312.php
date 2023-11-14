@extends('admin.admin_dashboard')
@section('admin')
    <div class="page-content">
        <div class="col-md-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h3>Email</h3>
                    <br>
                    <div class="row">
                        <div class="col">
                            <div class="row mb-3">
                                <div class="col">
                                    <label class="form-label">
                                        <h6>Customer Name</h6>
                                    </label>
                                    <div class="row">
                                        <label>{{ $customerAppointed->customerName }}</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col">
                                    <label class="form-label">
                                        <h6>Contact Number</h6>
                                    </label>
                                    <div class="row">
                                        <label>{{ $customerAppointed->phoneNumber }}</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col">
                                    <label class="form-label">
                                        <h6>Email Address</h6>
                                    </label>
                                    <div class="row">
                                        <label>{{ $customerAppointed->customerEmail }}</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="service_type" class="form-label">
                                    <h6>Service Type</h6>
                                </label>
                                <div class="row">
                                    <label>{{ $customerAppointed->service_type }}</label>
                                </div>
                            </div>
                        </div>
                        <div class="col">


                            <label class="form-label">
                                <h6>Description</h6>
                            </label>


                            <textarea class="form-control" id="description" name="description" rows="7"></textarea>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
