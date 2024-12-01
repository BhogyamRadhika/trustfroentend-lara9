@extends('layouts.landingpage')

@section('content')
<div class="container my-5">
   
    @if(session('success_message'))
        <div class="alert alert-success">
            {{ session('success_message') }}
        </div>
    @elseif(session('error_message'))
        <div class="alert alert-danger">
            {{ session('error_message') }}
        </div>
    @endif

    <!-- Payment Card Section (Both Details and Form Inside) -->
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
            <div class="card shadow-lg border-0 rounded-lg p-4 bg-gradient">
                <h2 class="h4 text-center mb-4 text-success">Payment Details</h2>

                <!-- Payment Details List -->
                <ul class="list-unstyled mb-4">
                <li><strong>Merchant Key:</strong> <span class="text-danger">{{ $MERCHANT_KEY }}</span></li>
                <li><strong>Amount:</strong> <span class="text-danger">₹{{ $amount }}</span></li>
                    <li><strong>User Email:</strong> <span class="text-muted">{{ $email}}</span></li>
                    <li><strong>Customer Name:</strong> <span class="text-muted">{{ $name }}</span>
                    </li>
                </ul>

                <!-- Payment Form -->
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
                    <!-- Proceed to Pay Button -->
                    <button type="submit" class="btn btn-lg btn-success text-uppercase font-weight-bold mt-3 transition-all">
                        Proceed to Pay
                    </button>
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