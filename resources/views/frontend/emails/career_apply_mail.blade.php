<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Bhairaav">
    <meta name="author" content="Bhairaav">
    <meta name="keywords" content="Bhairaav">

    <title>Send Career Apply Mail</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="content">
    <meta name="csrf-token" id="csrf-token" content="{{ csrf_token() }}">

    {{-- Fontawesome Icon CDN Link --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

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
        <!-- Contact Us Section -->
        <div class="contact">
            <img src="https://bhairaav.com/frontend/assets/img/Bhairaav-Logo.png" alt="Bhairava Lifestyles Logo" class="logo">
        </div>

        <h2>Career Apply Mail Details :- </h2>
        <p class="details"><strong>Job Title : </strong>{{ $mailData['job_title'] }}</p>
        <p class="details"><strong>Name : </strong> {{ $mailData['name'] }}</p>
        <p class="details"><strong>Email : </strong> {{ $mailData['email'] }}</p>
        <p class="details"><strong>Phone No : </strong> {{ $mailData['mobile_no'] }}</p>
        <p class="details"><strong>Department : </strong> {{ $mailData['department'] }}</p>
        <p class="details"><strong>Designation : </strong> {{ $mailData['currentdesignation'] }}</p>
        {{-- <p class="details" style="font-size: 14px;"><strong>Candidate Resume : </strong>
            <a href="{{ $mailData['resume'] }}" target="_blank">
                <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
                Download
            </a>
        </p> --}}

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
