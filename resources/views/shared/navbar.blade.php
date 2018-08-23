<header id="header" class="full-header" data-sticky-class="not-dark">
    <div id="header-wrap">
        <div class="container clearfix">
            <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

            <div id="logo">
                <a href="/" class="standard-logo" data-dark-logo="{{ asset('images/logo-dark.png') }}"><img
                            src="{{ asset('images/logo.png') }}" alt="Canvas Logo"></a>
                <a href="/" class="retina-logo" data-dark-logo="{{ asset('images/logo.png') }}"><img
                            src="{{ asset('images/logo.png') }}" alt="Canvas Logo"></a>
            </div>

            <nav id="primary-menu">
                <ul>
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre> Language <span class="caret"></span>
                        </a>
                        <ul>
                            <li><a href="{!! route('user.change-language', ['en']) !!}">
                                    <div>English</div>
                                </a></li>
                            <li><a href="{!! route('user.change-language', ['vi']) !!}">
                                    <div>Vietnam</div>
                                </a></li>
                        </ul>
                    </li>
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
                            <ul>
                                @role('manager')
                                <li>
                                    <a href="{{ url('/admin') }}" class="dropdown-item" target="_blank">{{ __('Admin Dashboard') }}</a>
                                </li>
                                @endrole
                                <li>
                                    <a href="{{ route('reviews.index') }}">{{ __('My Reviews') }}</a>
                                </li>
                                <li>
                                    <a href="{{ route('reviews.create') }}"> {{ __('Create a review') }}</a>
                                </li>
                                <li>
                                    <a href="{{ route('profile.edit', Auth::user()->id) }}" class="dropdown-item">{{ __('Profile') }}</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    {{ Form::open(['url' => 'logout', 'id' => 'logout-form', 'class' => 'd-none']) }}
                                    @csrf
                                    {{ Form::close() }}
                                </li>
                            </ul>
                        </li>
                        <div id="logo" class="nav-avatar">
                            <img src="{{ Auth::user()->avatar }}" class="img-circle img-avatar">
                        </div>
                    {{--@endguest--}}
                </ul>

                <div id="top-cart">
                    <a href="#" id="top-cart-trigger"><i class="fas fa-bell"></i><span id="noti-count"></span></a>
                    <div class="top-cart-content">
                        {{--<div class="top-cart-items">--}}
                            <ul id="noti-list" class="headerNotify_content">

                            </ul>
                        {{--</div>--}}
                    </div>
                </div>

                <div id="top-cart">
                    <a id="top-cart-trigger" class="bach-filter"><i class="fas fa-filter"></i></a>
                    <div class="top-cart-content">
                    </div>
                </div>

                {{--<div class="filter-icon">--}}
                    {{--<i class="fas fa-filter"></i>--}}
                {{--</div>--}}

                <div id="top-search">
                    <a href="#" id="top-search-trigger"><i class="icon-search3"></i><i class="icon-line-cross"></i></a>
                    {!! Form::open() !!}
                    <input type="text" name="q" class="form-control search-input" value="" placeholder="Type &amp; Hit Enter..">
                    {!! Form::close() !!}
                </div>
                @endguest
            </nav>
        </div>
        {{-- filter --}}
        {{--<div id="bach-filter" class="row justify-content-center">--}}
            {{--<div class="container row justify-content-center">--}}
                {{--{!! Form::open(['route' => 'moviefilter.search', 'id' => 'form-search']) !!}--}}
                {{--<div class="row">--}}
                    {{--<div class="col-sm">--}}
                        {{--<div class="form-group">--}}
                            {{--{!! Form::label( trans('message.selectgenre')) !!}--}}
                            {{--{!! Form::select('genre_id',App\Genre::getGenre(), null, [ 'class' => 'select2 sm-form-control fix-select',  'size' => '5']) !!}--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="col-sm">--}}
                        {{--<div class="form-group">--}}
                            {{--{!! Form::label( trans('message.selectcountry')) !!}--}}
                            {{--{!! Form::select('country_id',App\Country::getCountry(), null, [ 'class' => 'select2 sm-form-control fix-select',  'size' => '5']) !!}--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="col-sm">--}}
                        {{--<div class="form-group">--}}
                            {{--<br>--}}
                            {{--{!! Form::submit(trans('message.search'), ['class' => 'btn btn-primary btn-search']) !!}--}}
                            {{--{!! Form::close() !!}--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    </div>
</header>
