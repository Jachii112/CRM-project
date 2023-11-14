@extends('admin.admin_dashboard')
@section('admin')
    <div class="page-content">

        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h4>Email</h4>
                        </div>
                        <div class="col">
                            <div class="d-grid gap-6 d-md-flex justify-content-md-end">
                                <a href="" class="btn btn-primary">Compose Email</a>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="table-responsive">
                        <table id="dataTableExample" class="table">
                            <thead>
                                <tr>

                                    <th>#</th>
                                    <th>Customer Name</th>
                                    <th>Phone</th>
                                    <th>Email Address</th>
                                    <th>Type of Service</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($customerAppointment as $appointment)
                                    <td>{{ $appointment->id }}</td>
                                    <td>{{ $appointment->customerName }}</td>
                                    <td>{{ $appointment->phoneNumber }}</td>
                                    <td>{{ $appointment->customerEmail }}</td>
                                    <td>{{ $appointment->service_type }}</td>
                                    <td>
                                        <a href="" class="btn btn-danger" id="delete"> Delete </a>
                                        <a href="" class="btn btn-primary">View</a>
                                        <a href="" class="btn btn-warning">Register Customer</a>
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
