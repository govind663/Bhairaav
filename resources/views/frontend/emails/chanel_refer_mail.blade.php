<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Bhairaav">
    <meta name="author" content="Bhairaav">
    <meta name="keywords" content="Bhairaav">

    <title>Channel Refer Mail</title>

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
            margin: 0;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
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
            width: 180px; /* Adjust width as needed */
            color: #555; /* Slightly darker for contrast */
        }

        .footer {
            margin-top: 20px;
            font-size: 12px;
            color: #666;
            text-align: center; /* Center footer content */
        }

        .logo {
            max-width: 150px;
            margin-bottom: 10px; /* Space between logo and heading */
            display: block; /* Ensure it is centered */
            margin-left: auto;
            margin-right: auto;
        }

        .logo-title {
            font-size: 18px;
            color: #0073e6; /* Match the color of h2 */
            margin-bottom: 20px; /* Space below the title */
            text-align: center; /* Center title */
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="logo text-center">
            <img src="https://www.sqmtrs.com/developers/21112.jpg" alt="Bhairava Lifestyles Logo" class="logo">
        </div>

        <div class="logo-title">Channel Refer Mail</div>

        <div class="contact">
            <h2>Channel Refer Mail Details:</h2>
            <p class="details"><strong>First Name:</strong> {{ $mailData['f_name'] }}</p>
            <p class="details"><strong>Last Name:</strong> {{ $mailData['l_name'] }}</p>
            <p class="details"><strong>Email:</strong> {{ $mailData['email'] }}</p>
            <p class="details"><strong>Phone No:</strong> {{ $mailData['mobile_no'] }}</p>
            <p class="details"><strong>Project:</strong> {{ $mailData['project'] }}</p>
            <p class="details"><strong>Unit/Flat:</strong> {{ $mailData['unit_or_flat'] }}</p>
            <p class="details"><strong>Referral First Name:</strong> {{ json_decode($mailData['refer_f_name']) }}</p>
            <p class="details"><strong>Referral Last Name:</strong> {{ json_decode($mailData['refer_l_name']) }}</p>
            <p class="details"><strong>Referral Email:</strong> {{ json_decode($mailData['refer_email']) }}</p>
            <p class="details"><strong>Referral Relation:</strong> {{ json_decode($mailData['refer_relation']) }}</p>

            <p>
                Thank you for reaching out to us. We will respond to your inquiry as soon as possible.
            </p>
        </div>

        <div class="footer">
            <p>
                Copyright © {{ date('Y') }}
                <a href="https://bhairaav.com" target="_blank">Bhairaav</a>.
                All Rights Reserved.
            </p>
            <p class="mb-0">
                Bhairaav Lifestyles
                <br>
                Email: <a href="mailto:sales@bhairaav.com">sales@bhairaav.com</a>
            </p>
        </div>
    </div>
</body>

</html>
