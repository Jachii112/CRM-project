@extends('admin.admin_dashboard')

@section('admin')
    <div class="page-content">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center p-3 border-bottom tx-16">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-edit icon-md me-2">
                            <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                            <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                        </svg>
                        New message
                    </div>
                    <br>

                    <div class="container">
                        <form>
                            <div class="form-group">
                                <label for="recipient">Recipient:</label>
                                <input type="email" class="form-control" id="recipient" placeholder="Enter email">
                            </div>

                            <div class="form-group">
                                <label for="subject">Subject:</label>
                                <input type="text" class="form-control" id="subject" placeholder="Enter subject">
                            </div>
                            <br>
                            <div class="mb-3">
                                <label class="form-label " for="easyMdeEditor">Descriptions </label>
                                <textarea class="form-control" name="easymde" id="easyMdeEditor" rows="5" style="display: none;"></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary">Send Email</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        var easyMDE = new EasyMDE({
            element: document.getElementById("easyMdeEditor")
        });
    </script>
@endsection
