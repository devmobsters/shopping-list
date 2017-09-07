@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
            <div class=”panel panel-default”>
                <div class=”panel-heading”><h2>Registration Confirmed</h2></div>
                <div class=”panel-body”>
                    <p>Your Email is successfully verified. Click here to <a href={{ route('login') }}>login</a></p>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
