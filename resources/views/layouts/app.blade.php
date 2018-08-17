<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="{{ asset('bower_components/lato-font/css/lato-font.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('bower_components/raleway/raleway.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ asset('bower_components/bootstrap/dist/css/bootstrap.css') }}" type="text/css"/>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css"/>
    <link rel="stylesheet" href="{{ asset('css/swiper.css') }}" type="text/css"/>
    <link rel="stylesheet" href="{{ asset('css/dark.css') }}" type="text/css"/>
    <link rel="stylesheet" href="{{ asset('css/font-icons.css') }}" type="text/css"/>
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}" type="text/css"/>
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css' ) }}" type="text/css"/>
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}" type="text/css"/>
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}" type="text/css"/>
    <link rel="stylesheet" href="{{ asset('css/bootstrap-notifications.min.css') }}" type="text/css">
    <link href="{{ asset('bower_components/select2/dist/css/select2.min.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('bower_components/Font-Awesome/web-fonts-with-css/css/fontawesome-all.min.css') }}">
</head>
<body class="stretched">
    <div id="wrapper" class="clearfix">
        @include('shared.navbar')
        @yield('content')
    </div>
    <script src="{{ asset('bower_components/jquery/dist/jquery.js') }}"></script>
    <script src="{{ asset('bower_components/select2/dist/js/select2.min.js') }}"></script>
    <script src="{{ asset('js/plugins.js') }}"></script>
    <script src="{{ asset('js/functions.js') }}"></script>
    <script src="{{ asset('bower_components/ckeditor/ckeditor.js') }}"></script>
    <script>
        var options = {
            filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
            filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
            filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
            filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
        };
    </script>
    {{--<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>--}}
    <script src="//js.pusher.com/3.1/pusher.min.js"></script>
    <script>
        $(document).ready(function() {
            fetch_noti();
            function fetch_noti()
            {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    url: "{{ url('notification/fetch_noti') }}",
                    method: 'POST',
                    dataType: 'JSON',
                    success: function(data)
                    {
                        console.log(data);
                        $('#noti-count').html(data);
                    }
                })
            }
        });
    </script>
    <script type="text/javascript">


        // Enable pusher logging - don't include this in production
        // $('#noti-count').html(data['count']);
        Pusher.logToConsole = true;

        var pusher = new Pusher('95e81a3735519aedc60a', {
            encrypted: true,
            cluster: 'ap1',
        });

        // Subscribe to the channel we specified in our Laravel Event
        var channel = pusher.subscribe('review-commented');

        // Bind a function to a Event (the full Laravel class)
        channel.bind('App\\Events\\ReviewCommented', function(data) {
            console.log(data['count']);
            $('#noti-count').html(data['count']);
            $('#noti-list').append(data['message']);

        });
    </script>
    @yield('script')
</body>
</html>
