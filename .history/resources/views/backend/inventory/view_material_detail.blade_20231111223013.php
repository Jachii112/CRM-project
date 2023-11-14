@extends('admin.admin_dashboard')
@section('admin')
    <div class="page-content">
        <div class="row">
            <div class="col">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title">Item Details</h6>

                            <!-- Supplier and Item Information -->
                            @if ($materialsInfo->isNotEmpty())
                                @php $infoMat = $materialsInfo->first(); @endphp
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="mb-4">
                                            <label class="form-label">Supplier</label>
                                            <input class="form-control" id="name" name="name" disabled value>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="mb-3">
                                            <label class="form-label">Item No.</label>
                                            <input class="form-control" disabled value={{ $infoMat->item_no }}>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="mb-3">
                                            <label class="form-label">Available Stock</label>
                                            <input class="form-control" id="available_stocks" name="available_stocks"
                                                disabled value={{ $infoMat->available_stocks }}>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="mb-3">
                                            <label class="form-label">Unit</label>
                                            <input class="form-control" disabled value={{ $infoMat->unit }}>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="mb-3">
                                            <label class="form-label">Contact Number</label>
                                            <input class="form-control" id="contact_no" name="contact_no" disabled>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="mb-3">
                                            <label class="form-label">Item Description</label>
                                            <input class="form-control" disabled value={{ $infoMat->item_description }}>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="mb-2">
                                            <label class="form-label">Location</label>
                                            <input class="form-control" disabled value={{ $infoMat->location }}>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title">Item Purchase History</h6>
                            <div class="table-responsive">
                                <table id="dataTableExample" class="table">
                                    <thead>
                                        <tr>
                                            <th>OR#</th>
                                            <th>Supplier</th>
                                            <th>Stocks</th>
                                            <th>Acquired Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <button type="button" class="btn btn-warning edit">Edit</button>
        <button type="button" class="btn btn-success save">Save</button>
        <a href="{{ route('materials.inventory') }}" type="button" class="btn btn-primary done">Done</a>

    </div>
@endsection
