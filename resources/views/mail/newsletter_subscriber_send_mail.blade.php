<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{ $subject }}</title>
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

            .header h1 {
                margin: 0;
                font-size: 24px;
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

            #links {
                text-decoration: none;
                color: white;
            }

            .button {
                display: inline-block;
                padding: 12px 24px;
                background-color: #4CAF50;
                color: #fff;
                text-decoration: none;
                border-radius: 4px;
                font-size: 16px;
            }

            .button:hover {
                background-color: #45a049;
            }

            .unsubscribe {
                color: #ff0000;
                text-decoration: none;
            }
        </style>
    </head>

    <body>
        <div class="email-container">
            <div class="header">
                <img src="{{ asset(env('APP_LOGO')) }}" alt="{{ env('APP_NAME') }} Logo">
            </div>
            <div class="content">
                <p>Dear {{ $email }},</p>
                <p>
                    {!! $content !!}
                </p>
            </div>
            <div class="footer">
                <p>If you no longer wish to receive these emails, you can <a
                        href="{{ route('newsletter.unsubscribe', $email) }}" class="unsubscribe">unsubscribe
                        here</a>.</p>
                <p>&copy; {{ date('Y') }} {{ env('APP_NAME') }}. All rights reserved.</p>
            </div>
        </div>
    </body>

</html>
