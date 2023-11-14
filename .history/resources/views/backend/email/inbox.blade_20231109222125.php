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
                                        <a href="{{ route('') }}" class="btn btn-primary">View</a>
                                        <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal">Register Customer</button>
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
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Register Customer</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="btn-close"></button>
                </div>
                <div class="modal-body">
                    <p>Do you really want to register this customer?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                    <button type="button" id="redirect-to-add-customer" class="btn btn-primary confirm-button">Yes</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.getElementById('redirect-to-add-customer').addEventListener('click', function(event) {
            var target = event.target;
            if (target.classList.contains('confirm-button')) {
                console.log('Yes button clicked');
                window.location.href = "{{ route('add.customer') }}";
            }
        });
    </script>
@endsection
