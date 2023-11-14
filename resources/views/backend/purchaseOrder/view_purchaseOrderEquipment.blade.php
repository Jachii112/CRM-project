@extends('admin.admin_dashboard')
@section('admin')
    <div class="page-content">
        <div class="row">
            <div class="col-md-12 stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title"></h6>
                        <div class="row">
                            <div class="col-md-12 stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <h6 class="card-title">Order</h6>
                                        <form action="" method="POST">
                                            <div class="table-responsive">
                                                <table class="table table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th>ID</th>
                                                            <th>ITEM NO.</th>
                                                            <th>Item Description</th>
                                                            <th>Unit Type</th>
                                                            <th>Quantity</th>
                                                            <th>Amount</th>
                                                            <th>Remarks</th>
                                                            <th><button id="add_row_materials" type="button"
                                                                    class="btn btn-success">
                                                                    ADD
                                                                </button></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="hidden-row-materials">
                                                        <tr>

                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <br>
                                                <br>
                                                <div class="add-purchase-btn text-end">
                                                    <div class="col-sm-12">
                                                        <div class="mb-13">
                                                            <button type="button" id="submit-po"
                                                                class="btn btn-primary submit">Next</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
