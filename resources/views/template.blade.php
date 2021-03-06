<!DOCTYPE html>
<html>
    <head>
        <title>TrakIn | @yield('title')</title>
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/flat-ui.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/custom.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css') }}">
    </head>
    <body>
        <script src="{{ URL::asset('js/vendor/jquery.min.js') }}"></script>
        <script src="{{ URL::asset('bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>

        <script type="text/javascript" src="{{ URL::asset('bower_components/moment/min/moment.min.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js') }}"></script>
        @yield('content')
        <script>
        $(document).ready(function(){
            $('table tr').click(function(){
                window.location = $(this).attr('href');
                return false;
            });
        });
        </script>
    </body>
</html>
