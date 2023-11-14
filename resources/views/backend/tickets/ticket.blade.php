@extends('admin.admin_dashboard')
@section('admin')
    <div class="page-content">

        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <a href="{{ route('create.ticket') }}" class="btn btn-primary"> Add Ticket </a>
            </ol>
        </nav>

        <div class="row">
            <div class="col-md-3 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Tickets</h6>
                        <ul class="navbar-nav">
                            <li class="nav-item nav-category">Main</li>
                            <li class="nav-item">
                                <a href="" class="nav-link">
                                    <i class="link-icon" data-feather="box"></i>
                                    <span class="link-title">New Tickets</span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="" class="nav-link">
                                    <i class="link-icon" data-feather="box"></i>
                                    <span class="link-title">Pending Tickets</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="link-icon" data-feather="box"></i>
                                    <span class="link-title">Resolved Tickets</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="link-icon" data-feather="box"></i>
                                    <span class="link-title">Deleted Tickets</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="link-icon" data-feather="box"></i>
                                    <span class="link-title">Cancelled Tickets</span>
                                </a>
                            </li>
                            <br>

                        </ul>
                    </div>
                </div>
            </div>


            <div class="col-md-9 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Tickets</h6>

                        <div class="table-responsive">
                            <table id="dataTableExample" class="table">
                                <thead>
                                    <tr>
                                        <th>Status</th>
                                        <th>Ticket No.</th>
                                        <th>Service Type</th>
                                        <th>Requester</th>
                                        <th>Issued Date</th>
                                        <th>Appointment Date</th>
                                        <th>Priority</th>
                                        <th>Assigned</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tickets as $item)
                                        <tr>
                                            <td>{{ $item->status }}</td>
                                            <td>{{ $item->ticket_no }}</td>
                                            <td>{{ $item->service_type }}</td>
                                            <td>{{ $item->customer->customer_name }}</td>
                                            <td>{{ $item->issued_date }}</td>
                                            <td>{{ $item->appointment_date }}</td>
                                            <td>{{ $item->priority }}</td>
                                            <td>{{ $item->technician }}</td>
                                            <td>
                                                <div class="container">
                                                    <div class="col">
                                                        <a href="{{ route('view.ticket', ['id' => $item->id]) }}"
                                                            class="btn btn-warning custom-btn">View</a>
                                                        <a href="{{ route('destroy.ticket', ['id' => $item->id]) }}"
                                                            class="btn btn-danger" id="delete"> Delete </a>
                                                    </div>
                                                </div>
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
@endsection
