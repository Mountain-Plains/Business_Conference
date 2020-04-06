<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
{{--    <link href="{{ asset('css/style.css') }}" rel="stylesheet">--}}
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
    <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-timepicker/1.10.0/jquery.timepicker.min.css">
        @include('include.css&js')

</head>

<body class="bg-info">
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




</html>

