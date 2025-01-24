<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Failed</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8d7da;
            color: #842029;
        }
        .failure-container {
            margin-top: 5%;
            text-align: center;
            padding: 30px;
            border-radius: 10px;
            background-color: #ffffff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }
        .failure-icon {
            font-size: 80px;
            color: #dc3545;
            margin-bottom: 20px;
        }
        .failure-title {
            font-size: 28px;
            font-weight: bold;
            margin-bottom: 10px;
        }
        .failure-message {
            font-size: 18px;
            margin-bottom: 20px;
        }
        .retry-btn {
            background-color: #dc3545;
            color: #ffffff;
            border: none;
            font-size: 16px;
            padding: 10px 20px;
            border-radius: 5px;
            transition: all 0.3s;
        }
        .retry-btn:hover {
            background-color: #b02a37;
            color: #ffffff;
            text-decoration: none;
        }
        .support-link {
            color: #842029;
            text-decoration: none;
            font-weight: bold;
        }
        .support-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="failure-container">
        <div class="failure-icon">❌</div>
        <div class="failure-title">Payment Failed</div>
        <div class="failure-message">
            Oops! Something went wrong with your payment. Please try again or contact our support team if the issue persists.
        </div>
        <a href="{{ route('cart') }}" class="btn retry-btn">Retry Payment</a>
        <p class="mt-4">
            Need help? <a href="#" class="support-link">Contact Support</a>
        </p>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
