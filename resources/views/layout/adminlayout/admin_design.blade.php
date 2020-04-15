<!DOCTYPE html>
<html lang="en">
<head>
    <title>Mountain Plain  Admin</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{asset('css/backend_css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/backend_css/bootstrap-responsive.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/backend_css/fullcalendar.css')}}" />
    <link rel="stylesheet" href="{{asset('css/backend_css/matrix-style.css')}}" />
    <link rel="stylesheet" href="{{asset('css/backend_css/matrix-media.css')}}" />
    <link href="{{asset('fonts/backend_fonts/css/font-awesome.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('css//backend_css/jquery.gritter.css')}}" />
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
    <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-timepicker/1.10.0/jquery.timepicker.min.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>
@include('layout.adminlayout.admin_header')
@include('layout.adminlayout.admin_sidebar')
@yield('content')
@include('layout.adminlayout.admin_footer')


<script src="{{asset('JS/backend_js/excanvas.min.js')}}"></script>
<script src="{{asset('JS/backend_js/jquery.min.js')}}"></script>
<script src="{{asset('JS/backend_js/jquery.ui.custom.js')}}"></script>
<script src="{{asset('JS/backend_js/bootstrap.min.js')}}"></script>
<script src="{{asset('JS/backend_js/jquery.flot.min.js')}}"></script>
<script src="{{asset('JS/backend_js/jquery.flot.resize.min.js')}}"></script>
<script src="{{asset('JS/backend_js/jquery.peity.min.js')}}"></script>
<script src="{{asset('JS/backend_js/fullcalendar.min.js')}}"></script>
<script src="{{asset('JS/backend_js/matrix.js')}}"></script>
<script src="{{asset('JS/backend_js/matrix.dashboard.js')}}"></script>
<script src="{{asset('JS/backend_js/jquery.gritter.min.js')}}"></script>
<script src="{{asset('JS/backend_js/matrix.interface.js')}}"></script>
<script src="{{asset('JS/backend_js/matrix.chat.js')}}"></script>
<script src="{{asset('JS/backend_js/jquery.validate.js')}}"></script>
<script src="{{asset('JS/backend_js/matrix.form_validation.js')}}"></script>
<script src="{{asset('JS/backend_js/jquery.wizard.js')}}"></script>
<script src="{{asset('JS/backend_js/jquery.uniform.js')}}"></script>
<script src="{{asset('JS/backend_js/select2.min.js')}}"></script>
<script src="{{asset('JS/backend_js/matrix.popover.js')}}"></script>
<script src="{{asset('JS/backend_js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('JS/backend_js/matrix.tables.js')}}"></script>

<script type="text/javascript">
    // This function is called from the pop-up menus to transfer to
    // a different page. Ignore if the value returned is a null string:
    function goPage (newURL) {

        // if url is empty, skip the menu dividers and reset the menu selection to default
        if (newURL != "") {

            // if url is "-", it is this page -- reset the menu:
            if (newURL == "-" ) {
                resetMenu();
            }
            // else, send page to designated URL
            else {
                document.location.href = newURL;
            }
        }
    }

    // resets the menu selection upon entry to this page:
    function resetMenu() {
        document.gomenu.selector.selectedIndex = 2;
    }
</script>
</body>

<script>
    CKEDITOR.replace( 'summary-ckeditor' );
</script>
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-timepicker/1.10.0/jquery.timepicker.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-timepicker/1.10.0/jquery.timepicker.min.js"></script>
<script>
    $(function() {
        $( "#datepicker" ).datepicker();
    });
</script>
<script>
    $(function() {
        $( "#timepicker" ).timepicker();
    });
</script>
<script>
    $(function() {
        $( "#timepickers" ).timepicker();
    });
</script>
</html>
