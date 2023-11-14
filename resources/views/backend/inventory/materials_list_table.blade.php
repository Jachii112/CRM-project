@extends('admin.admin_dashboard')
@section('admin')
    <div class="page-content">
        <a href="{{ route('register.materials') }}" class="btn btn-primary">Register an Item</a>
        <br><br>
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Materials List</h6>
                        <div class="table-responsive">
                            <table class="table" id="dataTableExample">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>ITEM NUMBER</th>
                                        <th>ITEM DESCRIPTION</th>
                                        <th>UNIT OF Measurement</th>
                                        <th>AVAILABLE STOCKS</th>
                                        <th>AMOUNT</th>
                                        <th>STATUS</th>
                                        <th>LOCATION</th>
                                        <th>REMARKS</th>
                                        <th>MODIFIED</th>
                                        <th>ACTION</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($materials as $key => $item)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $item->item_no }}</td>
                                            <td>{{ $item->item_description }}</td>
                                            <td>{{ $item->unit }}</td>
                                            <td>{{ $item->available_stocks }}</td>
                                            <td>{{ $item->amount }}</td>
                                            <td>{{ $item->status }}</td>
                                            <td>{{ $item->location }}</td>
                                            <td>{{ $item->remarks }}</td>
                                            <td>{{ $item->modified }}</td>
                                            <td>
                                                <a href="{{ route('view.materials.detail', $item->item_no) }}"
                                                    class="btn btn-primary" type="button">View</a>
                                                <Button type="button" class="btn btn-inverse-primary"
                                                    id="order-btn">Order</Button>
                                                <button class="btn btn-danger">Delete</button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal for Order -->
    <div class="modal fade" id="orderModal" tabindex="-1" role="dialog" aria-labelledby="orderModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="orderModalLabel">Place an Order</h5>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="card-title">Material Details</h6>
                                    <form action="" method="POST">

                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="mb-4">
                                                    <label class="form-label">Ticket No.</label>
                                                    <input class="form-control" disabled>
                                                </div>
                                            </div>

                                            <div class="col-sm-4">
                                                <div class="mb-4">
                                                    <label class="form-label">Item No.</label>
                                                    <input class="form-control" disabled>
                                                </div>
                                            </div>

                                            <div class="col-sm-4">
                                                <div class="mb-4">
                                                    <label class="form-label">Item Description</label>
                                                    <input class="form-control" disabled>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="mb-4">
                                                    <label class="form-label">Quantity</label>
                                                    <input type="number" class="form-control" id="quantity"
                                                        name="quantity" placeholder="Enter quantity">
                                                </div>
                                            </div>

                                            <div class="col-sm-4">
                                                <div class="mb-4">
                                                    <label class="form-label">Unit</label>
                                                    <input class="form-control" disabled>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" id="close-modal">Close</button>
                    <button type="button" class="btn btn-primary" data-dismiss="modal" id="place-order">Place
                        Order</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Toast Notification -->
    <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
        <div id="toast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                <strong class="me-auto">Order Placed</strong>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
                The inventory has been updated
            </div>
        </div>
    </div>

    <script>
        // Function to open the order modal
        function openOrderModal() {
            $('#orderModal').modal('show');
        }

        // Function to close the order modal
        function closeOrderModal() {
            $('#orderModal').modal('hide');
        }

        // Function to show the toast notification
        function showOrderPlacedToast() {
            var toast = new bootstrap.Toast(document.getElementById('toast'));
            toast.show();
        }

        // Attach the function to the "Order" button click event
        document.getElementById('order-btn').addEventListener('click', openOrderModal);

        // Attach the function to the "Close" button click event
        document.getElementById('close-modal').addEventListener('click', closeOrderModal);

        // Attach the function to the "Place Order" button click event
        document.getElementById('place-order').addEventListener('click', function() {
            closeOrderModal(); // Close the modal
            showOrderPlacedToast(); // Show the toast notification
        });
    </script>
@endsection
