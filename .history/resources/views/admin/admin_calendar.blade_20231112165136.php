@extends('admin.admin_dashboard')
@section('admin')
    <div class="page-content">

        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <center>
                            <h4>Full Calendar</h4>
                        </center>
                    </div>
                    <div id="calendar"></div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            var calendar = $('#calendar').fullCalendar({

            });
        });
    </script>
@endsection
