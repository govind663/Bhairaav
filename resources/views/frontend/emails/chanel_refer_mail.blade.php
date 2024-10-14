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
            text-align: left;
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

    <h2>Channel Refer Mail Details :- </h2>
    <p class="details"><strong>First Name:</strong> {{ $mailData['f_name'] }}</p>
    <p class="details"><strong>Last Name:</strong> {{ $mailData['l_name'] }}</p>
    <p class="details"><strong>Email:</strong> {{ $mailData['email'] }}</p>
    <p class="details"><strong>Phone No:</strong> {{ $mailData['mobile_no'] }}</p>
    <p class="details"><strong>Project:</strong> {{ $mailData['project'] }}</p>
    <p class="details"><strong>Unit/Flat:</strong> {{ $mailData['unit_or_flat'] }}</p>

    <!-- Assuming these are arrays, loop through them -->
    @foreach ($mailData['refer_f_name'] as $index => $referFName)
        <p class="details"><strong>Referral First Name:</strong> {{ $referFName }}</p>
        <p class="details"><strong>Referral Last Name:</strong> {{ $mailData['refer_l_name'][$index] }}</p>
        <p class="details"><strong>Referral Email:</strong> {{ $mailData['refer_email'][$index] }}</p>
        <p class="details"><strong>Referral Relation:</strong> {{ $mailData['refer_relation'][$index] }}</p>
    @endforeach

    <p>
        Thank you for reaching out to us. We will respond to your inquiry as soon as possible.
    </p>

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
</body>

</html>
