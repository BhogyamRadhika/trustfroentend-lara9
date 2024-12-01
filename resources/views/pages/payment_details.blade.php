@extends('layouts.landingpage')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-8 col-lg-6">
            <h2 class="h4 text-center mb-4 text-success">Payment Details</h2>

        <table class="table">
  <thead>
    <tr>
      <th scope="col">S.No</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">transactionId</th>
      <th scope="col">Amount</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($payments as $index => $pay)
    
    <tr>
      <th scope="row">{{$index + 1}}</th>
      <td>{{$pay->user?->name}}</td>
      <td>{{$pay->user?->email}}</td>
      <td>{{$pay->user?->txnid}}</td>
      <td>{{$pay->amount}}</td>
    </tr>
    @endforeach
    
  </tbody>
</table>
    </div>
{{$payments->links()}}
</div>

@endsection