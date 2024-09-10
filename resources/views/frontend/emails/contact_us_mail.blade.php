<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Bhairaav">
    <meta name="author" content="Bhairaav">
    <meta name="keywords" content="Bhairaav">

    <title>Contact Us Submission</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="content">
    <meta name="csrf-token" id="csrf-token" content="{{ csrf_token() }}">

    <!-- Site favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/src/images/favicon.png') }}" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/src/images/favicon.png') }}" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/src/images/favicon.png') }}" />
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            color: #333;
            padding: 20px;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            text-align: center;
            /* Center content within the container */
        }

        h2 {
            color: #0073e6;
        }

        .details {
            margin-bottom: 15px;
            text-align: left;
            /* Align text to left for details */
        }

        .details strong {
            display: inline-block;
            width: 100px;
        }

        .footer {
            margin-top: 20px;
            font-size: 12px;
            color: #666;
        }

        .logo {
            max-width: 150px;
            /* Adjust the width as needed */
            margin-bottom: 20px;
            /* Space between logo and heading */
        }
    </style>
</head>

<body>
    <div class="container">
        <!-- Logo Section -->
        <img src="{{ asset('assets/src/images/bhairaav_dark_logo.png') }}" alt="Bhairava Lifestyles Logo" class="logo">

        <h2>Contact Us Submission</h2>
        <p class="details"><strong>Name:</strong> {{ $name }}</p>
        <p class="details"><strong>Email:</strong> {{ $email }}</p>
        <p class="details"><strong>Phone No :</strong> {{ $phone_no }}</p>
        <p class="details"><strong>Subject:</strong> {{ $subject }}</p>
        <p class="details"><strong>Message:</strong> {{ $message }}</p>

        <p>Thank you for reaching out to us. We will respond to your inquiry as soon as possible.</p>

        <div class="footer">
            <p>
                Bhairaav Lifestyles<br>
                Email: sales@bhairaavlifestyles.com
            </p>
        </div>
    </div>
</body>

</html>
