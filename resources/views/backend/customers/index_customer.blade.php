@extends('admin.admin_dashboard')
@section('admin')
    <div class="page-content">

        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h4>Customer</h4>
                        </div>
                        <div class="col">
                            <div class="d-grid gap-6 d-md-flex justify-content-md-end">
                                <a href="{{ route('add.customer') }}" class="btn btn-primary">Register Customer</a>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="table-responsive">
                        <table id="dataTableExample" class="table">
                            <thead>
                                <tr>

                                    <th>#</th>
                                    <th>Customer No.</th>
                                    <th>Customer Name</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($customer as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->customer_no }}</td>
                                        <td>{{ $item->customer_name }}</td>
                                        <td>{{ $item->contact_no }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->date }}</td>
                                        <td>
                                            <a href="{{ route('delete.customer', $item->id) }}" class="btn btn-danger"
                                                id="delete"> Delete </a>
                                            <a href="{{ route('view.customer', $item->id) }}"
                                                class="btn btn-primary">View</a>
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
