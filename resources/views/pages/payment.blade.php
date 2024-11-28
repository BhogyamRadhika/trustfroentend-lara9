@extends('layouts.landingpage')

@section('content')

<h1>PayU Payment</h1>

<!-- Display the PayU Data -->
<h2>Payment Details:</h2>
<ul>
    <li>Merchant Key: {{ $payuData['key'] }}</li>
    <li>Amount: ₹{{ $payuData['amount'] / 100 }}</li> <!-- Display amount in rupees (divide by 100) -->
    <li>Order ID: {{ $payuData['order_id'] }}</li> <!-- Now it's properly defined -->
    <li>User Email: {{ $payuData['user_email'] }}</li>
    <li>Product Info: {{ $payuData['product_info'] }}</li>
    <li>Customer Name: {{ $payuData['customer_name'] }}</li>
    <li>Phone: {{ $payuData['phone'] }}</li>
    <li>Address: {{ $payuData['address'] }}</li>
</ul>

<!-- Form for Payment -->
<form action="https://test.payu.in/_payment" method="POST">
    <input type="hidden" name="key" value="{{ $payuData['key'] }}">
    <input type="hidden" name="txnid" value="{{ $payuData['txnid'] }}">
    <input type="hidden" name="amount" value="{{ $payuData['amount'] }}">
    <input type="hidden" name="firstname" value="{{ $payuData['firstname'] }}">
    <input type="hidden" name="email" value="{{ $payuData['email'] }}">
    <input type="hidden" name="phone" value="{{ $payuData['phone'] }}">
    <input type="hidden" name="productinfo" value="{{ $payuData['productinfo'] }}">
    <input type="hidden" name="surl" value="{{ $payuData['surl'] }}">
    <input type="hidden" name="furl" value="{{ $payuData['furl'] }}">
    <input type="hidden" name="hash" value="{{ $payuData['hash'] }}">
    <button type="submit" class="btn-book-now-footer">Proceed to Pay</button>
</form>




@endsection