<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('img/truvo_trades.png') }}" type="image/png">
    <title>Truvo Trade</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>
<body>
    <div>
        <h2>Hello, {{ $user->first_name }}!</h2>

        <p>Thank you for registering. Please verify your email address by clicking the button below:</p>

        <p>
            <a href="{{ route('verify.email', $user->verification_token) }}"
            style="background-color: #4f46e5; color: white; padding: 10px 20px; text-decoration: none; border-radius: 5px;">
                Verify Email
            </a>
        </p>

        <p>If you did not create this account, no action is required.</p>
    </div>
</body>
</html>