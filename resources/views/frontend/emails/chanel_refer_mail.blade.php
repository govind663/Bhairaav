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
            width: 180px;
            height: 120px;
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
        <img src="https://bhairaav.com/frontend/assets/img/Bhairaav-Logo.png" alt="Bhairava Lifestyles Logo" class="logo">

        <h2>Member Details :- </h2>

        <p class="details"><strong>First Name:</strong> {{ $mailData['f_name'] }}</p>
        <p class="details"><strong>Last Name:</strong> {{ $mailData['l_name'] }}</p>
        <p class="details"><strong>Email:</strong> {{ $mailData['email'] }}</p>
        <p class="details"><strong>Phone No:</strong> {{ $mailData['mobile_no'] }}</p>
        <p class="details"><strong>Project:</strong> {{ $mailData['project'] }}</p>
        <p class="details"><strong>Unit/Flat:</strong> {{ $mailData['unit_or_flat'] }}</p>

        <!-- Table for Referral Details -->
        <table style="width: 100%; border-collapse: collapse; border: 1px solid #000; margin-top: 20px;">
            <caption style="background-color: #f2f2f2; padding: 8px; font-weight: bold;">Referral Details</caption>
            <thead>
                <tr style="background-color: #f2f2f2;">
                    <th style="border: 1px solid #000; padding: 8px;">Referral First Name</th>
                    <th style="border: 1px solid #000; padding: 8px;">Referral Last Name</th>
                    <th style="border: 1px solid #000; padding: 8px;">Referral Email</th>
                    <th style="border: 1px solid #000; padding: 8px;">Referral Relation</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($mailData['refer_f_name'] as $index => $referFName)
                <tr>
                    <td style="border: 1px solid #000; padding: 8px;">{{ $referFName }}</td>
                    <td style="border: 1px solid #000; padding: 8px;">{{ $mailData['refer_l_name'][$index] }}</td>
                    <td style="border: 1px solid #000; padding: 8px;">{{ $mailData['refer_email'][$index] }}</td>
                    <td style="border: 1px solid #000; padding: 8px;">{{ $mailData['refer_relation'][$index] }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

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
    </div>
</body>

</html>
