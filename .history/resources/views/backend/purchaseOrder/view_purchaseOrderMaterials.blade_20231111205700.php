@extends('admin.admin_dashboard')
@section('admin')
    <div class="page-content">
        <!-- Supplier And Order Information -->
        <div class="row">
            <div class="col-md-12 stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">View Supplier & Order Information </h6>

                        @if ($information->isNotEmpty())
                            @php $info = $information->first(); @endphp
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="mb-3">
                                        <label class="form-label">OR #</label>
                                        <input class="form-control" id="order_no" name="order_no" disabled
                                            value={{ $info->order_no }}>
                                    </div>
                                </div><!-- Col -->
                                <div class="col-sm-4">
                                    <div class="mb-3">
                                        <label class="form-label">Name</label>
                                        <input class="form-control" id="name" name="name" disabled
                                            value={{ $info->name }}>
                                    </div>
                                </div><!-- Col -->
                                <div class="col-sm-5">
                                    <div class="mb-3">
                                        <label class="form-label">Email</label>
                                        <input class="form-control" id="email" name="email" disabled
                                            value={{ $info->email }}>
                                    </div>
                                </div><!-- Col -->
                            </div><!-- Row -->
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="mb-3">
                                        <label class="form-label">Phone</label>
                                        <input class="form-control" id="phone" name="phone" disabled
                                            value={{ $info->phone }}>
                                    </div>
                                </div><!-- Col -->
                                <div class="col-sm-8">
                                    <div class="mb-3">
                                        <label class="form-label">Address</label>
                                        <input class="form-control" id="address" name="address" disabled
                                            value={{ $info->address }}>
                                    </div>
                                </div><!-- Col -->
                            </div><!-- Row -->
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="mb-3">
                                        <label class="form-label">Location of Delivery</label>
                                        <input class="form-control" id="location_of_delivery" name="location_of_delivery"
                                            disabled value={{ $info->location_of_delivery }}>
                                    </div>
                                </div><!-- Col -->
                                <div class="col-sm-4">
                                    <div class="mb-3">
                                        <label class="form-label">Delivery To</label>
                                        <input class="form-control" id="delivery_to" name="delivery_to" disabled
                                            value={{ $info->delivery_to }}>
                                    </div>
                                </div><!-- Col -->
                                <div class="col-sm-4">
                                    <div class="mb-3">
                                        <label class="form-label">Delivery Date</label>
                                        <input class="form-control" id="expected_delivery_date"
                                            name="expected_delivery_date" disabled
                                            value={{ $info->expected_delivery_date }}>
                                    </div>
                                </div><!-- Col -->
                            </div><!-- Row -->
                        @endif
                        <!-- Order Details Table -->
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>MATERIAL NO.</th>
                                        <th>Description</th>
                                        <th>Unit Type</th>
                                        <th>Quantity</th>
                                        <th>Amount</th>
                                        <th>Remarks</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($information as $key => $record)
                                        @php
                                            $itemNos = explode(',', $record->item_no);
                                            $itemDescriptions = explode(',', $record->item_description);
                                            $unitTypes = explode(',', $record->unit_type);
                                            $quantities = explode(',', $record->quantity);
                                            $amounts = explode(',', $record->amount);
                                            $remarks = explode(',', $record->remarks);
                                        @endphp
                                        @for ($index = 0; $index < count($itemNos); $index++)
                                            <tr>
                                                <td>{{ $key * count($itemNos) + $index + 1 }}</td>
                                                <td>{{ isset($itemNos[$index]) ? $itemNos[$index] : '' }}</td>
                                                <td>{{ isset($itemDescriptions[$index]) ? $itemDescriptions[$index] : '' }}
                                                </td>
                                                <td>{{ isset($unitTypes[$index]) ? $unitTypes[$index] : '' }}</td>
                                                <td>{{ isset($quantities[$index]) ? $quantities[$index] : '' }}</td>
                                                <td>{{ isset($amounts[$index]) ? $amounts[$index] : '' }}</td>
                                                <td>{{ isset($remarks[$index]) ? $remarks[$index] : '' }}</td>
                                            </tr>
                                        @endfor
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        <br><br><br>
                        <div class="row">
                            <div class="col">
                                <div class="d-grid gap2 d-md-flex justify-content-md-end">
                                    <button type="button" class="btn btn-primary me-md-2">Done</button>
                                    <button type="button" class="btn btn-primary">Print</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
