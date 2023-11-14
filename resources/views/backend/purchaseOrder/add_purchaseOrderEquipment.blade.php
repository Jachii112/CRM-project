@extends('admin.admin_dashboard')
@section('admin')
    <div class="page-content">
        <!-- Supplier And Order Information -->
        <div class="row">
            <div class="col-md-12 stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Supplier & Order Information</h5>
                        <form action="" method="POST">
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="mb-3">
                                        <label class="form-label">
                                            <h6>OR #</h6>
                                        </label>
                                        <input type="text" class="form-control" id="order_no" name="order_no"
                                            placeholder="Enter name">
                                    </div>
                                </div><!-- Col -->
                                <div class="col-sm-4">
                                    <div class="mb-3">
                                        <label class="form-label">
                                            <h6>Supplier Name</h6>
                                        </label>
                                        <input type="text" class="form-control" id="name" name="name"
                                            placeholder="Enter name">
                                    </div>
                                </div><!-- Col -->
                                <div class="col-sm-5">
                                    <div class="mb-3">
                                        <label class="form-label">
                                            <h6>Email Address</h6>
                                        </label>
                                        <input type="text" class="form-control" id="email" name="email"
                                            placeholder="Enter email">
                                    </div>
                                </div><!-- Col -->
                            </div><!-- Row -->
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="mb-3">
                                        <label class="form-label">
                                            <h6>Contact Number</h6>
                                        </label>
                                        <input type="text" class="form-control" id="phone" name="phone"
                                            placeholder="Enter phone number">
                                    </div>
                                </div><!-- Col -->
                                <div class="col-sm-8">
                                    <div class="mb-3">
                                        <label class="form-label">
                                            <h6>Address</h6>
                                        </label>
                                        <input type="text" class="form-control" id="address" name="address"
                                            placeholder="Enter address">
                                    </div>
                                </div><!-- Col -->
                            </div><!-- Row -->
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="mb-3">
                                        <label class="form-label">
                                            <h6>Delivery Location</h6>
                                        </label>
                                        <input type="text" class="form-control" id="location-of-delivery"
                                            name="location-of-delivery" placeholder="Enter location of delivery">
                                    </div>
                                </div><!-- Col -->
                                <div class="col-sm-4">
                                    <div class="mb-3">
                                        <label class="form-label">
                                            <h6>Recipient</h6>
                                        </label>
                                        <input type="text" class="form-control" id="delivery-to" name="delivery-to"
                                            placeholder="Enter delivery to">
                                    </div>
                                </div><!-- Col -->
                                <div class="col-sm-4">
                                    <div class="mb-3">
                                        <label class="form-label">
                                            <h6>Delivery Date</h6>
                                        </label>
                                        <input type="date" class="form-control" id="expected-delivery-date"
                                            name="expected-delivery-date" placeholder="Enter Date">
                                    </div>
                                </div><!-- Col -->
                            </div><!-- Row -->
                        </form>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-12 stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Order</h6>
                        <form action="" method="POST">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>ITEM NO.</th>
                                            <th>Item Description</th>
                                            <th>Unit Type</th>
                                            <th>Amount</th>
                                            <th>Remarks</th>
                                            <th><button id="add_row" type="button" class="btn btn-success">
                                                    ADD
                                                </button></th>
                                        </tr>
                                    </thead>
                                    <tbody class="hidden-row">
                                        <tr>

                                        </tr>
                                    </tbody>
                                </table>
                                <br>
                                <br>
                                <div class="add-purchase-btn text-end">
                                    <div class="col-sm-12">
                                        <div class="mb-13">
                                            <button type="button" id="submit-po"
                                                class="btn btn-primary submit">Next</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="example">
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Are you sure?</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Do you really want to perform this action?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <a href="" type="button" class="btn btn-primary">Proceed</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
