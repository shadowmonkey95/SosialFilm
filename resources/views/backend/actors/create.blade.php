@extends('backend.main')

@section('content')
    <section id="content">
        <div class="content-wrap">
            <div class="container clearfix">
                <div class="heading-block center">
                    <h1><i class="icon-film"></i></h1>
                    <span>We make it awesome!</span>
                </div>
                <div class="single-post nobottommargin">
                    <div id="comments" class="clearfix">
                        <div id="respond" class="clearfix">
                            <h3>{!! __('Create an').' ' !!}<span>{!! __('Actor') !!}</span></h3>
                            {!! Form::open(array('route' => ['actors.store'], 'method' => 'post', 'class' => 'clearfix', 'id' => 'commentform')) !!}
                            @foreach ($errors->all() as $error)
                                <p class="alert alert-danger">{{ $error }}</p>
                                {{--{{dd($error)}}--}}
                            @endforeach

                            @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <div class="row">
                                <div class="col_one_third">
                                    {!! Form::label(__('Name')) !!}
                                    {!! Form::text('name', null, array('class' => 'sm-form-control')) !!}
                                </div>
                            </div>

                            <div class="row">
                                <div class="col_one_sixth">
                                    {!! Form::label(__('Date of birth').':') !!}
                                    <input type="text" id="datepicker" name="birthday" class="sm-form-control">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col_one_third">
                                    {!! Form::label(__('Country')) !!}
                                    {!! Form::text('country', null, array('class' => 'sm-form-control')) !!}
                                </div>
                            </div>

                            <div class="row">
                                <div class="col_one_third">
                                    {!! Form::label(__('Avatar')) !!}
                                    {!! Form::text('avatar', null, array('class' => 'sm-form-control')) !!}
                                </div>
                            </div>


                            <div class="clear"></div>
                            <div class="row">
                                <div class="col_full">
                                    {!! Form::label(__('Information').':') !!}
                                    {!! Form::textarea('information', null, array('class' => 'sm-form-control', 'cols' => 58, 'rows' => 7, 'id' => 'ckeditor')) !!}
                                </div>
                            </div>
                            <div class="col_full nobottommargin">
                                {!! Form::submit(__('Submit'), array('class' => 'button button-3d nomargin')) !!}
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{--<p>Date: <input type="text" id="datepicker"></p>--}}
@endsection

