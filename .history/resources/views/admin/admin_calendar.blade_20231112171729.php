@extends('admin.admin_dashboard')
@section('admin')
    <div class="page-content">

        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-3 d-none d-md-block">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="card-title mb-4">Full calendar</h6>

                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-9">
                        <div class="card">
                            <div class="card-body">
                                <div id='fullcalendar'></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="fullCalModal" class="modal fade">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 id="modalTitle1" class="modal-title"></h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"><span
                                class="visually-hidden">close</span></button>
                    </div>
                    <div id="modalBody1" class="modal-body"></div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button class="btn btn-primary">Event Page</button>
                    </div>
                </div>
            </div>
        </div>

        <div id="createEventModal" class="modal fade">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 id="modalTitle2" class="modal-title">Add event</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"><span
                                class="visually-hidden">close</span></button>
                    </div>
                    <div id="modalBody2" class="modal-body">
                        <form>
                            <div class="mb-3">
                                <label for="formGroupExampleInput" class="form-label">Example label</label>
                                <input type="text" class="form-control" id="formGroupExampleInput"
                                    placeholder="Example input">
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">Another label</label>
                                <input type="text" class="form-control" id="formGroupExampleInput2"
                                    placeholder="Another input">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button class="btn btn-primary">Add</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
