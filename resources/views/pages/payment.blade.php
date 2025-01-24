<!-- resources/views/payment.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redirecting to PayU</title>
</head>
<body>
    <h1>Redirecting to PayU...</h1>
    <form id="payuForm" action="{{ $redirect_url }}" method="POST">
    @csrf <!-- Ensure CSRF token is included -->
    @foreach ($parameters as $key => $value)
        <input type="hidden" name="{{ $key }}" value="{{ $value }}">
    @endforeach
    <button type="submit">Click here if not redirected</button>
</form>


    <script>
        document.getElementById('payuForm').submit();
    </script>
</body>
</html>
