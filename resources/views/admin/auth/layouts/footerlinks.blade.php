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
<script>
    $(document).ready(function() {
        demo.checkFullPageBackgroundImage();

        setTimeout(function() {
            // after 1000 ms we add the class animated to the login/register card
            $('.card').removeClass('card-hidden');
        }, 700)
    });
</script>
