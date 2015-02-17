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
            <p>Registration Successful! Please confirm you email address by going to your email and clicking a confirmation link in the email sent by Siproma.</p>

        </div>
    </div>
    <div class="uk-width-medium-2-10"></div>
</div>
@stop