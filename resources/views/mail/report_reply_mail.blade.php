<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <title>Report Acknowledgement</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f8f9fa;
                padding: 20px;
            }

            .container {
                background-color: #ffffff;
                padding: 20px;
                border-radius: 8px;
            }

            .logo {
                text-align: center;
                margin-bottom: 20px;
            }

            .logo img {
                max-height: 70px;
            }

            .header {
                font-size: 18px;
                font-weight: bold;
                margin-bottom: 20px;
                text-align: center;
            }

            .content {
                font-size: 16px;
                line-height: 1.6;
            }

            .footer {
                margin-top: 30px;
                font-size: 14px;
                color: #666;
            }
        </style>
    </head>

    <body>
        <div class="container">
            <!-- Logo Section -->
            <div class="logo">
                <img src="{{ asset(env('APP_LOGO')) }}" alt="{{ env('APP_NAME') }} Logo">
            </div>

            <!-- Header -->
            <div class="header">
                Thank You for Submitting Your Report
            </div>

            <!-- Main Content -->
            <div class="content">
                Dear {{ $report->reporter_name }},
                <br><br>
                We have received your report regarding the incident involving
                <strong>{{ $report->victim_name }}</strong> and categorized as
                <strong>{{ ucfirst($report->abuse_type) }} Abuse</strong>.
                <br><br>
                We want to thank you for taking the time and courage to report this issue. Your concern has been logged
                in our system, and our team has reviewed the details provided.
                <br><br>

                <strong>Our Response:</strong><br>
                {!! $data['message'] !!}
                <br><br>

                If further action or follow-up is needed, we will contact you using the contact information you
                provided.
                <br><br>
                Please note that our utmost priority is the safety and confidentiality of all parties involved. If you
                believe someone is in immediate danger, we strongly urge you to contact local authorities.
            </div>

            <!-- Footer -->
            <div class="footer">
                Sincerely,<br>
                The Child Protection Unit<br>
                {{ env('APP_NAME') }}
            </div>
        </div>
    </body>

</html>
