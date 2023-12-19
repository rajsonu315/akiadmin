<?php include('../header.php'); ?>
<script src='<?php echo $base_url; ?>assets/js/full-calendar.js'></script>
<style>
    #calendar {
        max-width: 1100px;
        margin: 0 auto;
    }

    td.fc-other-month {
        visibility: hidden;
    }

    .fc-toolbar-chunk .fc-today-button {
        display: none;
    }

    .fc-toolbar-chunk .fc-button-group {
        display: none;
    }
</style>

<!--end header -->
<!--start page wrapper -->
<div class="page-wrapper">
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">View Beat</li>
                    </ol>
                </nav>
            </div>

        </div>
        <!--end breadcrumb-->

        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3">
                        <p class="h6"><b>Salesman Name:</b> Test</p>
                    </div>
                    <div class="col-md-3">
                        <p class="h6"><b>Beat Name:</b> RRR</p>
                    </div>
                </div>
                <hr />
                <div id='calendar'></div>

            </div>
        </div>

    </div>
</div>
<!-- Add Modal -->
<!-- Modal -->
<div class="modal fade" id="schedule-add" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Review RoutePlan Report</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="table-responsive">

                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>Customer No.</th>
                                <th>Customer Name</th>
                                <th>Visit Status</th>


                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>234</td>
                                <td>Test</td>
                                <td>
                                    <img width="20" src="https://cdn-icons-png.flaticon.com/128/5974/5974771.png">
                                </td>
                            </tr>
                            <tr>
                                <td>423</td>
                                <td>Test33</td>
                                <td>
                                    <img width="20" src="https://cdn-icons-png.flaticon.com/128/5974/5974771.png">
                                </td>
                            </tr>



                        </tbody>

                    </table>
                </div>

            </div>

        </div>
    </div>
</div>


<?php include('../footer.php'); ?>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl,

            {

                initialView: 'dayGridMonth',
                initialDate: '2023-12-12',

                selectable: true,
                businessHours: true,
                dayMaxEvents: true,
                events: [{
                        groupId: 999,
                        title: 'Repeating Event',
                        start: '2023-12-12T16:00:00'
                    }, {
                        groupId: 999,
                        title: 'Repeating Event',
                        start: '2023-12-16T16:00:00'
                    }, {
                        title: 'Meeting',
                        start: '2023-12-12T10:30:00',
                        end: '2023-12-12T12:30:00'
                    }, {
                        title: 'Lunch',
                        start: '2023-12-12T12:00:00'
                    }, {
                        title: 'Meeting',
                        start: '2023-12-12T14:30:00'
                    }, {
                        title: 'Happy Hour',
                        start: '2023-12-12T17:30:00'
                    },



                ],

                dateClick: function(info) {
                    $('#schedule-add').modal('show');
                }
            });
        calendar.render();
    });
</script>