@extends('admin.admin_dashboard')
@section('admin')
    <div class="page-content">
        <div class="col">
            <div class="row">
                <div class="col-md-12 grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title">Ticket Details</h3>

                            <div class="row mb-3">
                                <div class="col">
                                    <label for="appointment_date" class="form-label">
                                        <h6>Date:</h6>
                                    </label>
                                    <input type="date" class="form-control" name="appointment_date"
                                        id="appointment_date">
                                </div>
                            </div>
                            <div class="col-md-3 grid-margin">
                                <div class="form-group">
                                    <div class="dropdown">
                                        <select class="form-select btn btn-secondary dropdown-toggle text-white"
                                            name="technician" type="button" id="technician" data-bs-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            <option disabled selected>Technician</option>
                                            <option value="nozomi" class="dropdown-item-lg">Nozomi Shimofu
                                            </option>
                                            <option value="shoiel" class="dropdown-item-lg">Shiol Hedar</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
