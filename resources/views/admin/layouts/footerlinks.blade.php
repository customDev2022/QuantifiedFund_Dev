<!--   Core JS Files   -->
<script src="{{ asset('storage') }}/assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="{{ asset('storage') }}/assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="{{ asset('storage') }}/assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<script src="{{ asset('storage') }}/assets/js/plugins/bootstrap-switch.js"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?YOUR_KEY_HERE"></script>
<script src="{{ asset('storage') }}/assets/js/plugins/chartist.min.js"></script>
<script src="{{ asset('storage') }}/assets/js/plugins/bootstrap-notify.js"></script>
<script src="{{ asset('storage') }}/assets/js/plugins/jquery-jvectormap.js" type="text/javascript"></script>
<script src="{{ asset('storage') }}/assets/js/plugins/moment.min.js"></script>
<script src="{{ asset('storage') }}/assets/js/plugins/bootstrap-datetimepicker.js"></script>
<script src="{{ asset('storage') }}/assets/js/plugins/sweetalert2.min.js" type="text/javascript"></script>
<script src="{{ asset('storage') }}/assets/js/plugins/bootstrap-tagsinput.js" type="text/javascript"></script>
<script src="{{ asset('storage') }}/assets/js/plugins/nouislider.js" type="text/javascript"></script>
<script src="{{ asset('storage') }}/assets/js/plugins/bootstrap-selectpicker.js" type="text/javascript"></script>
<script src="{{ asset('storage') }}/assets/js/plugins/jquery.validate.min.js" type="text/javascript"></script>
<script src="{{ asset('storage') }}/assets/js/plugins/jquery.bootstrap-wizard.js"></script>
<script src="{{ asset('storage') }}/assets/js/plugins/bootstrap-table.js"></script>
<script src="{{ asset('storage') }}/assets/js/plugins/jquery.dataTables.min.js"></script>
<script src="{{ asset('storage') }}/assets/js/plugins/fullcalendar.min.js"></script>
<script src="{{ asset('storage') }}/assets/js/light-bootstrap-dashboard.js?v=2.0.1" type="text/javascript"></script>
<script src="{{ asset('storage') }}/assets/js/demo.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        // demo.initDashboardPageCharts();

        // demo.initVectorMap();

        $('#datatables').DataTable({
            "pagingType": "full_numbers",
            "lengthMenu": [
                [10, 25, 50, -1],
                [10, 25, 50, "All"]
            ],
            responsive: true,
            language: {
                search: "_INPUT_",
                searchPlaceholder: "Search records",
            }

        });

        var table = $('#datatables').DataTable();

        // Edit record
        table.on('click', '.edit', function() {
            $tr = $(this).closest('tr');

            if ($tr.hasClass('child')) {
                $tr = $tr.prev('.parent');
            }

            var data = table.row($tr).data();
            alert('You press on Row: ' + data[0] + ' ' + data[1] + ' ' + data[2] + '\'s row.');
        });

        // Delete a record
        table.on('click', '.remove', function(e) {
            $tr = $(this).closest('tr');
            table.row($tr).remove().draw();
            e.preventDefault();
        });
    });
</script>
