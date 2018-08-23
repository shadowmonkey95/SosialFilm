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
    <script src="{{ asset('bower_components/typeahead.js/dist/typeahead.bundle.js') }}"></script>
    <script src="{{ asset('bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/plugins.js') }}"></script>
    <script src="{{ asset('js/functions.js') }}"></script>
    <script src="{{ asset('js/search.js') }}"></script>
    <script src="{{ asset('bower_components/ckeditor/ckeditor.js') }}"></script>
    <script src="{{ asset('bower_components/pusher-js/dist/web/pusher.min.js') }}"></script>
    <script>
        var options = {
            filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
            filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
            filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
            filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
        };
    </script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $(document).ready(function() {
            fetch_noti_count();
            fetch_noti_list();
            function fetch_noti_count() {
                $.ajax({
                    url: "{{ url('notification/fetch_noti_count') }}",
                    method: 'POST',
                    dataType: 'JSON',
                    success: function(data)
                    {
                        // console.log(data);
                        $('#noti-count').html(data);
                    }
                })
            }
            function fetch_noti_list() {
                var i;
                var content = '';
                var html ='';
                var style = '';
                $.ajax({
                    url: "{{ url('notification/fetch_noti_list') }}",
                    method: 'POST',
                    dataType: 'JSON',
                    success: function(data)
                    {
                        //0 = from_user_name
                        //1 = type
                        //2 = type_id
                        //3 = diff_time
                        //4 = diff_type
                        //5 = avatar
                        //6 = url
                        //7 = id
                        //8 = click
                        // console.log(data);
                        for (i = 0; i < data.length; i++) {
                            if (data[i][1] == 'replied') {
                                content = ' to a comment you made';
                            } else if (data[i][1] == 'commented') {
                                content = ' on your review';
                            }

                            if (data[i][8] == 1) {
                                style = 'background-color: white;';
                            } else {
                                style = 'background-color: #d3d3d3b0;';
                            }
                            html =
                                '<a class="a-noti-list" id="noti_'+ data[i][7] +'" href="'+ data[i][6] +'">' +
                                '<li class="headerNotify_item" style="'+ style +'">' +
                                '<div class="headerNotify_block-img">' +
                                '<img class="headerNotify_pic" src="' + data[i][5] + '">' +
                                '</div>' +
                                '<div class="headerNotify_block-txt">' +
                                '<em class="headerNotify_em">' + data[i][0] + '</em>' + ' ' + data[i][1] + content +
                                '</div>' +
                                '<div class="headerNotify_block-time">' + data[i][3] + ' ' + data[i][4] + ' ago' +
                                '</li>' +
                                '</a>';
                            $('#noti-list').append(html);
                        }
                    }
                })
            }
            $('#top-cart-trigger').click( function(e) {
                e.preventDefault();
                $.ajax({
                    url: "{{ url('notification/read') }}",
                    method: 'POST',
                    dataType: 'JSON',
                    success: function(data)
                    {
                        // $('#noti-count').html("0");
                    }
                })
                $('#noti-count').html("0");
            });

            $(document).on('click','[id^="noti_"]', function(e){
                e.preventDefault();
                $.ajax({
                    url: "{{ url('notification/click') }}",
                    method: 'POST',
                    data:
                        {
                            id: $(this).attr('id'),
                        },
                    dataType: 'JSON',
                    success: function(data)
                    {
                        // console.log(data);
                        window.location.href = data;
                    }
                });
                $(this).find('.headerNotify_item').css('background-color', 'white');
            });

            if ( "{{ Auth::check() }}") {
                Pusher.logToConsole = true;
                var pusher_review_commented = new Pusher('{{ env('PUSHER_APP_KEY') }}', {
                    encrypted: true,
                    cluster: '{{ env('PUSHER_APP_CLUSTER') }}',
                });
                var channel = pusher_review_commented.subscribe('review-commented');
                channel.bind('App\\Events\\ReviewCommented', function(data) {
                    console.log(data);
                    if ( "{{ Auth::id() }}" == data['to_user_id']) {
                        //0 = from_user_name
                        //1 = type
                        //2 = type_id
                        //3 = diff_time
                        //4 = diff_type
                        //5 = avatar
                        //6 = url
                        //7 = id
                        $('#noti-count').html(data['count']);
                            if (data['type'] == 'replied') {
                                content = ' to a comment you made';
                            } else if (data['type'] == 'commented') {
                                content = ' on your review';
                            }

                            html =
                                '<a class="a-noti-list" id="noti_'+ data['id'] +'" href="'+ data['url'] +'">' +
                                '<li class="headerNotify_item">' +
                                '<div class="headerNotify_block-img">' +
                                '<img class="headerNotify_pic" src="' + data['avatar'] + '">' +
                                '</div>' +
                                '<div class="headerNotify_block-txt">' +
                                '<em class="headerNotify_em">' + data['from_user_name'] + '</em>' + ' ' + data['type'] + content +
                                '</div>' +
                                '<div class="headerNotify_block-time">' + data['diff_time'] + ' ' + data['diff_type'] + ' ago' +
                                '</li>' +
                                '</a>';
                            $('#noti-list').prepend(html);
                    }
                });
            }
        });
    </script>
    
    <script >
        $(document).ready(function() {
            $('.select2').select2();
        });
    </script>
    @yield('script')
</body>
</html>