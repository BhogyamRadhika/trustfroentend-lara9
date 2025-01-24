<!DOCTYPE html>
<html>
<head>
    <title>Payment Successful</title>
</head>
<body>
    <h1>Thank You, {{ $user->name }}!</h1>
    <p>Your payment of ₹{{ $paymentDetails['amount'] }} has been successfully processed.</p>
    <p>Transaction ID: {{ $paymentDetails['txnid'] }}</p>
    <p>We appreciate your business!</p>
</body>
</html>
