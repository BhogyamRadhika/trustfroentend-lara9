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

<!-- Display the PayU Data -->
<h2>Payment Details:</h2>
<form action="{{ $action }}" method="POST" name="payuForm">
    <input type="hidden" name="key" value="{{ $MERCHANT_KEY }}">
    <input type="hidden" name="txnid" value="{{ $txnid }}">
    <input type="hidden" name="amount" value="{{ $amount }}">
    <input type="hidden" name="firstname" value="{{ $name }}">
    <input type="hidden" name="email" value="{{ $email }}">
    <input type="hidden" name="productinfo" value="Webappfix">
    <input type="hidden" name="surl" value="{{ $successURL }}">
    <input type="hidden" name="furl" value="{{ $failURL }}">
    <input type="hidden" name="service_provider" value="payu_paisa">
    <input type="hidden" name="hash" value="{{ $hash }}">
    <button type="submit" style="background: #f50057; color: white; padding: 10px 15px; font-size: 16px;">Pay Now</button>
</form>






@endsection