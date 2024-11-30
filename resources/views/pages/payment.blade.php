@extends('layouts.landingpage')

@section('content')
    <div class="container my-5">
        <div class="text-center mb-3">
            <h1 class="display-5 text-primary font-weight-bold">PayU Payment</h1>
            <!-- <p class="lead text-muted">Secure and Easy Online Payment</p> -->
        </div>

        <!-- Payment Card Section (Both Details and Form Inside) -->
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="card shadow-lg border-0 rounded-lg p-4 bg-gradient">
                    <h2 class="h4 text-center mb-4 text-success">Payment Details</h2>
                    
                    <!-- Payment Details List -->
                    <ul class="list-unstyled mb-4">
                    <li><strong>Merchant Key:</strong> <span class="text-danger">{{ $payuData['key'] }}</span></li>
                        <li><strong>Amount:</strong> <span class="text-danger">₹{{ $payuData['amount'] / 100 }}</span></li>
                        <li><strong>Order ID:</strong> <span class="text-muted">{{ $payuData['order_id'] }}</span></li>
                        <li><strong>User Email:</strong> <span class="text-muted">{{ $payuData['user_email'] }}</span></li>
                        <li><strong>Product Info:</strong> <span class="text-muted">{{ $payuData['product_info'] }}</span></li>
                        <li><strong>Customer Name:</strong> <span class="text-muted">{{ $payuData['customer_name'] }}</span></li>
                        <li><strong>Phone:</strong> <span class="text-muted">{{ $payuData['phone'] }}</span></li>
                        <li><strong>Address:</strong> <span class="text-muted">{{ $payuData['address'] }}</span></li>
                    </ul>
                    
                    <!-- Payment Form -->
                    <form action="https://test.payu.in/_payment" method="POST" class="text-center">
                        <!-- Hidden Inputs for Payment -->
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

                        <!-- Proceed to Pay Button -->
                        <button type="submit" class="btn btn-lg btn-success text-uppercase font-weight-bold mt-3 transition-all">Proceed to Pay</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('styles')
    <style>
        /* Add Gradient Background for Cards */
        .bg-gradient {
            background: linear-gradient(45deg, #ff7e5f, #feb47b);
            color: white;
        }

        /* Hover effect on cards */
        .card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.1);
        }

        /* Button Hover Effect */
        .btn-success {
            background-color: #28a745;
            border: none;
        }

        .btn-success:hover {
            background-color: #218838;
            transform: scale(1.05);
            transition: all 0.3s ease;
        }

        /* Title Color */
        .display-4 {
            color: #ff6347;
        }

        /* Subtle Text Shadow for Title */
        .display-4 {
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1);
        }
    </style>
@endpush
