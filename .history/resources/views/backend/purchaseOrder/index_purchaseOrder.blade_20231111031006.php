@extends('admin.admin_dashboard')
@section('admin')
    <div class="page-content">

        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">Order List</div>
                    <div class="table-responsive">
                        <table class="table" id="dataTableExample">
                            <thead>
                                <tr>
                                    <th>Order ID</th>
                                    <th>Supplier Name</th>
                                    <th>Total Amount</th>
                                    <th>Ordered Date</th>
                                    <th>Delivery Date</th>
                                    <th>Remarks</th>
                                    <th>ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Add table rows here -->
                                @foreach ($orders as $record)
                                    <tr>
                                        <td>{{ $record->order_no }}</td>
                                        <td>{{ $record->name }}</td>
                                        <td>{{ $record->total_amount }}</td>
                                        <td>{{ $record->ordered_date }}</td>
                                        <td>{{ $record->expected_delivery_date }}</td>
                                        <td>{{ $record->remarks }}</td>
                                        <td>
                                            <a href="{{ route('view.purchaseOrderMaterials', $record->order_no) }}"
                                                class="btn btn-primary">View</a>
                                            <a href="{{ route('delete.purchaseOrderMaterials', $record->id) }}"
                                                class="btn btn-danger" id="delete">Delete</a>
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
@endsection
