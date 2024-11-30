@extends('layouts.landingpage')

@section('content')

<h1>PayU Payment</h1>
@if(session('success_message'))
    <div class="alert alert-success">
        {{ session('success_message') }}
    </div>
@elseif(session('error_message'))
    <div class="alert alert-danger">
        {{ session('error_message') }}
    </div>
@endif

@endsection