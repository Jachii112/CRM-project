@extends('admin.admin_dashboard')
@section('admin')
    <div class="page-content">
        <!-- Supplier And Order Information -->
        <form id="purchase-order-form" action="{{ route('store.purchaseOrders.materials') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-12 stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title">Supplier & Order Information</h6>

                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="mb-3">
                                        <label class="form-label">Supplier Name</label>
                                        <input type="text" class="form-control" id="name" name="name"
                                            placeholder="Enter name" required>
                                    </div>
                                </div><!-- Col -->
                                <div class="col-sm-5">
                                    <div class="mb-3">
                                        <label class="form-label">Email Address</label>
                                        <input type="email" class="form-control" id="email" name="email"
                                            placeholder="Enter email" required>
                                    </div>
                                </div><!-- Col -->
                            </div><!-- Row -->
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="mb-3">
                                        <label class="form-label">Contact Number</label>
                                        <input type="text" class="form-control" id="phone" name="phone"
                                            placeholder="Enter phone number" required>
                                    </div>
                                </div><!-- Col -->
                                <div class="col-sm-8">
                                    <div class="mb-3">
                                        <label class="form-label">Address</label>
                                        <input type text="text" class="form-control" id="address" name="address"
                                            placeholder="Enter address" required>
                                    </div>
                                </div><!-- Col -->
                            </div><!-- Row -->
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="mb-3">
                                        <label class="form-label">Delivery Location</label>
                                        <input type="text" class="form-control" id="location-of-delivery"
                                            name="location_of_delivery" placeholder="Enter location of delivery" required>
                                    </div>
                                </div><!-- Col -->
                                <div class="col-sm-4">
                                    <div class="mb-3">
                                        <label class="form-label">Recipient</label>
                                        <input type="text" class="form-control" id="delivery_to" name="delivery_to"
                                            placeholder="Enter delivery to" required>
                                    </div>
                                </div><!-- Col -->
                                <div class="col-sm-4">
                                    <div class="mb-3">
                                        <label class="form-label">Delivery Date</label>
                                        <input type="date" class="form-control" id="expected-delivery-date"
                                            name="expected_delivery_date" required>
                                    </div>
                                </div><!-- Col -->
                            </div><!-- Row -->
                        </div>
                        <!-- Order Details Table -->
                        <div class="row">
                            <div class="col-md-12 stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <h6 class="card-title">Order</h6>
                                        <div class="table-responsive">
                                            <table class="table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>MATERIAL NO.</th>
                                                        <th>Description</th>
                                                        <th>Unit Type</th>
                                                        <th>Quantity</th>
                                                        <th>Amount</th>
                                                        <th>Remarks</th>
                                                        <th>
                                                            <button id="add_row_materials" type="button"
                                                                class="btn btn-success">
                                                                ADD
                                                            </button>
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody class="hidden-row-materials">
                                                    <!-- Rows will be added here using JavaScript -->
                                                </tbody>
                                            </table>
                                            <br><br>
                                            <div class="add-purchase-btn text-end">
                                                <div class="col-sm-12">
                                                    <div class="mb-13">
                                                        <button type="button" id="submit-po"
                                                            class="btn btn-primary submit">Next</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal Dialog -->
                    <div class="modal fade" id="confirmationModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Confirm Submission</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Do you really want to submit this purchase order?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="submit" id="confirm-submit" class="btn btn-primary">Proceed</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
