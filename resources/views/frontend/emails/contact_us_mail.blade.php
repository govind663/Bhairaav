<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        {{ config('app.name') }}
    </title>
</head>
<body>
    <div style="font-family: Arial, sans-serif; margin: 0 auto; max-width: 600px; padding: 20px; border: 1px solid #ddd;">
        <h1 style="color: #333;">Welcome, {{ config('app.name') }}</h1>
        <p style="color: #555;">
            Your account has been successfully created.
            Once admin approves the account, you will be notified with the login credentials soon.
        </p>
        <!--<p style="color: #333;">Email: {{ $user_email }}</p>-->
        <!--<p style="color: #333;">Password: {{ $password }}</p>-->
    </div>
</body>
</html>
