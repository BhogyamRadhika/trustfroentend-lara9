<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="{{ $redirect_url }}" method="POST">
    @foreach($payload as $key => $value)
    <input type="hidden" name="{{ $key }}" value="{{ $value }}">
    @endforeach
    <div class="text-center">
        <p>Redirecting to the payment...</p>
        <button type="submit" class="btn btn-primary">Pay Now</button>
    </div>
</form>

<script>
    document.forms[0].submit(); // Automatically submit the form
</script>
</body>
</html>