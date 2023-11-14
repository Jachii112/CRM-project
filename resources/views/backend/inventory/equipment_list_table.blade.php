@extends('admin.admin_dashboard')
@section('admin')
    <div class="page-content">
        <a href="{{ route('register.equipment') }}" class="btn btn-primary">Register an Equipment</a>
        <br><br>
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Equipment List</h6>
                        <div class="table-responsive">
                            <table class="table" id="dataTableExample">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>EQUIPMENT NUMBER</th>
                                        <th>DESCRIPTION</th>
                                        <th>SUPPLIER</th>
                                        <th>UNIT</th>
                                        <th>STATUS</th>
                                        <th>LOCATION</th>
                                        <th>ACQUISITION DATE</th>
                                        <th>AMOUNT</th>
                                        <th>REMARKS</th>
                                        <th>PROJECT</th>
                                        <th>PULLED OUT BY</th>
                                        <th>MODIFIED</th>
                                        <th>ACTION</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($equipment as $item)
                                        <tr>
                                            <td>{{ $item->id }}</td>
                                            <td>{{ $item->custom_id }}</td>
                                            <td>{{ $item->item_description }}</td>
                                            <td>{{ $item->supplier }}</td>
                                            <td>{{ $item->unit }}</td>
                                            <td>{{ $item->status }}</td>
                                            <td>{{ $item->location }}</td>
                                            <td>{{ $item->acquisition }}</td>
                                            <td>{{ $item->amount }}</td>
                                            <td>{{ $item->remarks }}</td>
                                            <td>{{ $item->project }}</td>
                                            <td>{{ $item->assignee }}</td>
                                            <td>{{ $item->modified }}</td>
                                            <td>
                                                <a href="" class="btn btn-primary" type="button">Edit</a>
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
