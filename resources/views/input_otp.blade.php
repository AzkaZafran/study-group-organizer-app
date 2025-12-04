<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/input_otp.css', 'resources/js/app.js'])
</head>
<body>
    <div class="otp-block">
        <form action="/register/verify-otp" method="POST" class="otp-form">
            @csrf
            <h2 class="otp-title">OTP Verification</h2>
            <h4 class="otp-subtitle">
                Successfully sent to <span>{{ $temp_email }}</span>.<br>
                Please check your email inbox.
            </h4>
            <input name="otp_email" type="hidden" value="{{ $temp_email }}">
            <h3>Enter 6-digit OTP Code</h3>
            <input name="otp_code" type="text">
            <input type="submit" value="VERIFY">
        </form>
    </div>
</body>
</html>