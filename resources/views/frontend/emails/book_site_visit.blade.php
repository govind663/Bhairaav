<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Bhairaav">
    <meta name="author" content="Bhairaav">
    <meta name="keywords" content="Bhairaav">

    <title>Book Site Visit Mail</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="content">
    <meta name="csrf-token" id="csrf-token" content="{{ csrf_token() }}">

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

        <img src="{{ asset('frontend/assets/img/about/Bhairaav-black.png') }}" alt="Bhairava Lifestyles Logo" class="logo">
        <h2>Book Site Visit Mail Details :- </h2>

        <!-- Book Site Visit Mail Section -->
        <p class="details"><strong>Project Name : </strong> {{ $mailData['project_name'] }}</p>
        <p class="details"><strong>Name : </strong> {{ $mailData['name'] }}</p>
        <p class="details"><strong>Email : </strong> {{ $mailData['email'] }}</p>
        <p class="details"><strong>Phone No : </strong> {{ $mailData['phone'] }}</p>
        <p class="details"><strong>Visiting Date : </strong> {{ $mailData['visiting_date'] }}</p>
        <p class="details"><strong>Visiting Time : </strong> {{ $mailData['visiting_time'] }}</p>

        <p>
            Thank you for reaching out to us. We will respond to your inquiry as soon as possible.
        </p>

        <!-- Footer Section -->
        <div class="footer">
            <p style="font-size: 12px;color: #666;">
                Copyright © {{ date('Y') }}
                <a href="https://bhairaav.com" target="_blank">Bhairaav</a>.
                All Rights Reserved.
            </p>

            <p class="mb-0" style="font-size: 12px;color: #666;">
                Bhairaav Lifestyles
                <br>
                Email: sales@bhairaav.com
            </p>
        </div>
    </div>
</body>

</html>
