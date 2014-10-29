@extends('master')

@section('content')

    <div class="row">
        <div class="col-md-7 well">
            <h1>Pic Uploads</h1>
            <ul>
                <li>Learn!</li>
                <li>Create!</li>
                <li>Have Fun!</li>
            </ul>
        </div>
        <div class="col-md-3 well">
            <legend>登入</legend>
            {{ Form::open(array('url' => '/')) }}
            {{ Form::text('email', '', array('placeholder' => 'Email')) }}
            {{ Form::password('password', array('placeholder' => 'Password')) }}
            <br/>
            {{ Form::submit('登入', array('class' => 'btn btn-success')) }}
            {{ HTML::link('register','註冊', array('class' => 'btn btn-primary')) }}
            {{ Form::close() }}
        </div>
    </div>


@endsection