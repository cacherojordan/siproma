@extends('_layouts/default')

@section('navbar-flip')
    <div class="uk-navbar-content uk-navbar-flip"><a href="{{ route('login') }}" class="uk-button uk-button-primary">Login</a></div>
@stop

@section('content')

<div class="uk-grid">
    <div class="uk-width-medium-2-10"></div>
    <div class="uk-width-medium-6-10">
        <div class="uk-panel uk-panel-box">
            <h3 class="uk-panel-title"><i class="uk-icon-user"></i> SIGN UP</h3>

            @if(Session::has('message'))
                <p class="uk-text-danger"><i class="uk-icon-exclamation-circle"></i> {{ Session::get('message') }}</p>
            @endif

            {{ Form::open(array('route' => 'register.post', 'class' => 'uk-form uk-form-horizontal')) }}
                <div class="uk-form-row">
                    {{ Form::label('email', 'Email', array('class' => 'uk-form-label')) }}
                    <div class="uk-form-controls">
                        {{ Form::email('email', '', array('class' => 'uk-form-width-large')) }}
                        {{ $errors->first('email', '<small class="uk-text-danger">:message</small>') }}
                    </div>
                </div>
                <div class="uk-form-row">
                        {{ Form::label('email_confirmation', 'Confirm Email', array('class' => 'uk-form-label')) }}
                        <div class="uk-form-controls">
                            {{ Form::email('email_confirmation', '', array('class' => 'uk-form-width-large')) }}
                            {{ $errors->first('email_confirmation', '<small class="uk-text-danger">:message</small>') }}
                        </div>
                    </div>
                <div class="uk-form-row">
                    {{ Form::label('password', 'Password', array('class' => 'uk-form-label')) }}
                    <div class="uk-form-controls">
                        {{ Form::password('password', array('class' => 'uk-form-width-large')) }}
                        {{ $errors->first('password', '<small class="uk-text-danger">:message</small>') }}
                    </div>
                </div>
                <div class="uk-form-row">
                    {{ Form::label('password_confirmation', 'Confirm Password', array('class' => 'uk-form-label')) }}
                    <div class="uk-form-controls">
                        {{ Form::password('password_confirmation', array('class' => 'uk-form-width-large')) }}
                        {{ $errors->first('password_confirmation', '<small class="uk-text-danger">:message</small>') }}
                    </div>
                </div>
                <div class="uk-form-row">
                    {{ Form::label('name', 'Name', array('class' => 'uk-form-label')) }}
                    <div class="uk-form-controls">
                        {{ Form::text('name', '',array('class' => 'uk-form-width-large')) }}
                        {{ $errors->first('name', '<small class="uk-text-danger">:message</small>') }}
                    </div>
                </div>

                 <div class="uk-form-row">
                    {{ Form::button('Register', array('class' => 'uk-button uk-button-success uk-float-right', 'type' => 'submit')) }}
                 </div>
            {{ Form::close() }}

        </div>
    </div>
    <div class="uk-width-medium-2-10"></div>
</div>
@stop