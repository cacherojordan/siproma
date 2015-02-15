@extends('_layouts/default')

@section('content')

<div class="uk-grid">
    <div class="uk-width-medium-4-10">
        <div class="uk-panel uk-panel-box">
            <h3 class="uk-panel-title"><i class="uk-icon-user"></i> LOG IN</h3>

            @if(Session::has('message'))
                <p class="uk-text-danger"><i class="uk-icon-exclamation-circle"></i> {{ Session::get('message') }}</p>
            @endif

            {{ Form::open(array('route' => 'login', 'class' => 'uk-form uk-form-stacked')) }}
                <div class="uk-form-row">
                    {{ Form::label('email', 'Email', array('class' => 'uk-form-label')) }}
                    <div class="uk-form-controls">
                        {{ Form::email('email', '', array('class' => 'uk-form-width-large', 'placeholder' => 'siproma@email.com')) }}
                        {{ $errors->first('email', '<small class="uk-text-danger">:message</small>') }}
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
                    {{ Form::button('Log in', array('class' => 'uk-button uk-button-primary', 'type' => 'submit')) }}
                 </div>
            {{ Form::close() }}

        </div>
    </div>
    <div class="uk-width-medium-6-10">
        <article class="uk-article">
            <h1 class="uk-article-title">Simple Project Management</h1>
            <p class="uk-article-lead uk-text-primary"><i class="uk-icon-thumbs-o-up"></i> Manage your project in awesomeness and simplicity!</p>
            <p>
                This is a personal project I created for me to be able to manage my projects easily.
                This is designed for a single user, where collaboration is not implemented.
                I structured it in a way that other users can also use this by registering and logging in their own account.
                I did this project because I can't find any completely free simple project management system.
            </p>
            <p>Features includes: </p>
            <dl class="uk-description-list-horizontal">
                <dt>Multiple Projects</dt>
                <dd>Users can create many projects, and it is free.</dd>
                <dt>Creating Tasks</dt>
                <dd>Create tasks on a specific project. Users can manage its task information in a best way and needed features I think. Checking of finished task to automatically show overall completion of tasks.</dd>
                <dt>Adding Notes</dt>
                <dd>Easily add a note for some tasks.</dd>
                <dt>Mocking Up</dt>
                <dd>One feature is to add a Mock up to a Project! But this is not yet implemented so wait for a while!</dd>
            </dl>
        </article>
    </div>
</div>
@stop