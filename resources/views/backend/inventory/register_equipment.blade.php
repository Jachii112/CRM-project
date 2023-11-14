@extends('admin.admin_dashboard')
@section('admin')
    <div class="page-content">
        <a href="{{ route('equipment.inventory') }}" class="btn btn-primary">Back</a>
        <br><br>
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h3>Register Equipment</h3>
                    <form action="{{ route('store.equipment') }}" method="POST">
                        @csrf
                        <br>
                        <div class="row">
                            <div class="container">
                                <div class="row justify-content-between">
                                    <div class="col-4">
                                        <div class="col-lg-6">
                                            <label for="custom_id">Equipment No.</label>
                                            <input class="form-control" maxlength="100" name="custom_id" type="text"
                                                placeholder="Equipment No.">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <br><br><br><br>

                            <div class="col">
                                <div class="row mb-4">
                                    <div class="col-lg-12">
                                        <input class="form-control" maxlength="100" name="item_description" type="text"
                                            placeholder="Item Description">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="dropdown">
                                    <select class="form-control btn btn-secondary dropdown-toggle" name="unit"
                                        type="button" id="unit" data-bs-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        <option disabled selected>Unit Type:</option>
                                        <option value="piece" class="dropdown-item-lg">Per Piece (pc)</option>
                                        <option value="roll" class="dropdown-item-lg">Roll (roll)</option>
                                        <option value="length" class="dropdown-item-lg">Length (length)</option>
                                        <option value="feet" class="dropdown-item-lg">Feet (feet)</option>
                                        <option value="meter" class="dropdown-item-lg">Meter (meter)</option>
                                        <option value="kilogram" class="dropdown-item-lg">Kilogram(kg)</option>
                                        <option value="sheet" class="dropdown-item-lg">Sheet (sheet)</option>
                                        <option value="sack" class="dropdown-item-lg">Sack (sack)</option>
                                        <option value="can" class="dropdown-item-lg">Can (can)</option>
                                        <option value="gallon" class="dropdown-item-lg">Gallon (gal)</option>
                                        <option value="cyclinder" class="dropdown-item-lg">Cylinder (cyl)</option>
                                        <option value="liter" class="dropdown-item-lg">Liter (liter)</option>
                                        <option value="pair" class="dropdown-item-lg">Pair (pair)</option>
                                    </select>
                                </div>
                            </div>
                            <br><br><br>

                            <div class="row">
                                <div class="col">
                                    <div class="col-lg-12">
                                        <input class="form-control" maxlength="100" name="location" type="text"
                                            placeholder="location">
                                    </div>
                                </div>
                                <br><br>

                            </div>
                            <br><br><br>
                            <div class="row">
                                <div class="col">
                                    <div class="col-lg-12">
                                        <input class="form-control" maxlength="100" name="remarks" type="text"
                                            placeholder="Remarks">
                                    </div>
                                </div>
                                <br><br>
                                <div class="col">
                                    <div class="col-lg-12">
                                        <input class="form-control" maxlength="100" name="amount" type="text"
                                            placeholder="Amount">
                                    </div>
                                </div>
                                <br><br>
                            </div>
                            <br><br><br>

                        </div>
                        <div class="right">
                            <button type="submit" class="btn btn-primary me-2"> Submit </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
