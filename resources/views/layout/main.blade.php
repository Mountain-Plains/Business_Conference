<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    @include('include.css&js')
</head>

<body style="background-color:{{$template->backColor}}; color:{{$template->primaryTextColor}};">
@include('layout.nav')
@yield('content')
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

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>
</html>

