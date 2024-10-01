<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Bhairaav">
    <meta name="author" content="Bhairaav">
    <meta name="keywords" content="Bhairaav">

    <title>Properties Request Mail</title>

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
        }

        h2 {
            color: #0073e6;
        }

        .details {
            margin-bottom: 15px;
            text-align: left;
        }

        .details strong {
            display: inline-block;
            width: 150px; /* Adjust width as needed */
        }

        .footer {
            margin-top: 20px;
            font-size: 12px;
            color: #666;
        }

        .logo {
            max-width: 150px;
            margin-bottom: 10px; /* Space between logo and heading */
        }

        .logo-title {
            font-size: 18px;
            color: #0073e6; /* Match the color of h2 */
            margin-bottom: 20px; /* Space below the title */
        }
    </style>
</head>

<body>
    <div class="container">
        <img src="https://www.sqmtrs.com/developers/21112.jpg" alt="Bhairava Lifestyles Logo" class="logo">
        <h2>Properties Request Mail Details : -</h2>

        <p class="details"><strong>Name:</strong> {{ $mailData['name'] }}</p>
        <p class="details"><strong>Email:</strong> {{ $mailData['email'] }}</p>
        <p class="details"><strong>Phone No :</strong> {{ $mailData['phone_no'] }}</p>
        <p class="details"><strong>Subject:</strong> {{ $mailData['subject'] }}</p>
        @if ($mailData['flat_type'] == 1)
            <p class="details">
                <strong>Flat Type:</strong>
                1 BHK
            </p>
        @elseif ($mailData['flat_type'] == 2)
            <p class="details">
                <strong>Flat Type:</strong>
                2 BHK
            </p>
        @elseif ($mailData['flat_type'] == 3)
            <p class="details">
                <strong>Flat Type:</strong>
                Other
            </p>
        @endif

        <p>Thank you for reaching out to us. We will respond to your inquiry as soon as possible.</p>
        <p class="footer">Bhairava Lifestyles</p>

        <div class="footer">
            <p>
                Bhairaav Lifestyles<br>
                Email: sales@bhairaav.com
            </p>
        </div>
    </div>
</body>

</html>
