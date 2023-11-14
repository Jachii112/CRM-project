@extends('admin.admin_dashboard')
@section('admin')
    <div class="page-content">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="mb-3">
                                <h4 class="card-title">Members</h4>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <div class="d-grid gap d-md-flex justify-content-md-end">
                                    <button type="button" class="btn btn-outline-primary" id="Add-members">Add new</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Employee name</th>
                                    <th>Role</th>
                                    <th>Status</th>
                                    <th>Operation</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Mark Sta Maria</td>
                                    <td>Employee</td>
                                    <td>Busy</td>
                                    <td>
                                        <button type="button" class="btn btn-primary btn-icon btn-xs">
                                            <i data-feather="edit"></i>
                                        </button>
                                        <button type="button" class="btn btn-primary btn-icon btn-xs">
                                            <i data-feather="edit-2"></i>
                                        </button>
                                        <button type="button" class="btn btn-danger btn-icon btn-xs">
                                            <i data-feather="trash-2"></i>
                                        </button>
                                    </td>
                                </tr>

                                <tr>

                                    <td>Jasper Casayuran</td>
                                    <td>Warehouse Manager</td>
                                    <td>Available</td>
                                    <td>
                                        <button type="button" class="btn btn-primary btn-icon btn-xs">
                                            <i data-feather="edit"></i>
                                        </button>
                                        <button type="button" class="btn btn-primary btn-icon btn-xs">
                                            <i data-feather="edit-2"></i>
                                        </button>
                                        <button type="button" class="btn btn-danger btn-icon btn-xs">
                                            <i data-feather="trash-2"></i>
                                        </button>
                                    </td>

                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- The Modal -->
            <div class="modal" id="addMembersModal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Add New Member</h5>

                        </div>
                        <div class="modal-body">
                            <!-- Add your form or content for adding new members here -->
                            <form>
                                <div class="col-md-12 stretch-card">
                                    <div class="card-body">
                                        <form>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Employee Name</label>
                                                        <input type="text" class="form-control"
                                                            placeholder="Enter Employee Name">
                                                    </div>
                                                </div><!-- Col -->
                                                <div class="col-sm-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Role</label>
                                                        <select class="form-select" id="role" name="role">
                                                            <option value="admin">Admin</option>
                                                            <option value="warehousemanager">Warehouse Manager</option>
                                                            <option value="customersupport">Customer Support </option>
                                                        </select>
                                                    </div>
                                                </div><!-- Col -->
                                            </div><!-- Row -->

                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" id="close"
                                data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary" id="save">Save</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- JavaScript to open the modal and handle the "Close" and "Save" buttons -->
            <script>
                function openAddMembersModal() {
                    $('#addMembersModal').modal('show');
                }

                function closeAddMembersModal() {
                    $('#addMembersModal').modal('hide');
                }

                document.getElementById('Add-members').addEventListener('click', openAddMembersModal);

                // Function to handle the "Close" button in the modal
                document.getElementById('close').addEventListener('click', closeAddMembersModal);

                // Function to handle the "Save" button in the modal
                document.getElementById('save').addEventListener('click', function() {
                    // Add your save logic here
                    // After saving, you can close the modal using closeAddMembersModal() function
                    // closeAddMembersModal();
                });
            </script>
        </div>
    </div>
@endsection
