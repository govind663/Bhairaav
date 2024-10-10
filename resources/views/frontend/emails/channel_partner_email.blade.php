<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Bhairaav">
    <meta name="author" content="Bhairaav">
    <meta name="keywords" content="Bhairaav">

    <title>Send Channel Partner Email</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

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
            text-align: left;
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
            width: 100px;
            height: 100px;
            margin-bottom: 5px;
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
        <img src="{{ asset('frontend/assets/img/about/Bhairaav-black.png') }}" alt="Bhairava Lifestyles Logo" class="logo">
    </div>

    <h1>New Channel Partner Registration :-</h1>
    <p>Dear Sales Team,</p>
    <p>A new channel partner has been successfully registered with the following details:</p>

    <ul>
        <li><strong>Company Name / Individual Name:</strong> {{ $companyNameOrIndividualName }}</li>
        <li><strong>Name of the Owner:</strong> {{ $nameOfTheOwner }}</li>
        <li><strong>Entity:</strong> {{ $entity }}</li>
        <li><strong>Office Address:</strong> {{ $officeAddress }}</li>
        <li><strong>Telephone Number:</strong> +91-{{ $telephoneNumber }}</li>
        <li><strong>Mobile Number:</strong> +91-{{ $mobileNumber }}</li>
        <li><strong>Website:</strong> {{ $website }}</li>
        <li><strong>Email ID:</strong> {{ $emailId }}</li>
    </ul>

    <p>Thank you,</p>
    <p>The Bhairaav Team</p>

    <div class="footer">
        <div class="footer">
            <p>This email was sent automatically. Please do not reply.</p>
        </div>
    </div>
</body>

</html>
