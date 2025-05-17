<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            body {
                font-family: Arial, sans-serif;
                margin: 0;
                padding: 0;
                background-color: #f5f5f5;
            }

            .email-container {
                max-width: 600px;
                margin: 20px auto;
                background-color: #ffffff;
                border: 1px solid #dddddd;
                border-radius: 8px;
                box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
                overflow: hidden;
            }

            .header {
                background-color: #003366;
                color: #ffffff;
                padding: 20px;
                text-align: center;
            }

            .header img {
                max-width: 300px;
                margin-bottom: 10px;
            }

            .content {
                padding: 20px;
            }

            .content h2 {
                color: #003366;
                font-size: 20px;
                margin-bottom: 10px;
            }

            .content p {
                color: #333333;
                line-height: 1.6;
                margin-bottom: 10px;
            }

            .footer {
                background-color: #f5f5f5;
                color: #333333;
                padding: 10px;
                text-align: center;
                font-size: 0.9em;
                border-top: 1px solid #dddddd;
            }

            .footer a {
                color: #003366;
                text-decoration: none;
            }

            .label {
                font-weight: bold;
            }
        </style>
    </head>

    <body>
        <div class="email-container">
            <div class="header">
                <img src="{{ asset(env('APP_LOGO')) }}" alt="{{ env('APP_NAME') }} Logo">
            </div>
            <div class="content">
                <h2>New Contact Request</h2>

                <p><span class="label">Name:</span> {{ $data['name'] }}</p>
                <p><span class="label">Email:</span> {{ $data['email'] }}</p>
                {{-- <p><span class="label">Phone:</span> {{ $data['phone'] ?? 'N/A' }}</p> --}}
                <p><span class="label">Subject:</span> {{ $data['subject'] }}</p>
                <p><span class="label">Message:</span></p>
                <p>{{ $data['message'] }}</p>

                <hr>
                <p style="font-size: 0.9em; color: #888;">This message was sent from the contact page of
                    {{ env('APP_NAME') ?? env('APP_URL') }}.</p>
            </div>
            <div class="footer">
                <p>&copy; {{ date('Y') }} {{ env('APP_NAME') }}. All rights reserved.</p>
            </div>
        </div>
    </body>

</html>
