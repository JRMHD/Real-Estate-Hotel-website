<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Contact Form Submission</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            background-color: #ffffff;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }

        .header {
            text-align: center;
            padding: 30px 0;
            border-bottom: 2px solid #DAA520;
        }

        .logo {
            width: 150px;
            height: auto;
            margin-bottom: 20px;
        }

        .content {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #DAA520;
            font-size: 24px;
            margin-bottom: 25px;
            font-weight: 300;
        }

        .message-info {
            margin-bottom: 30px;
        }

        .field {
            margin-bottom: 20px;
        }

        .label {
            color: #DAA520;
            font-weight: bold;
            margin-bottom: 5px;
            display: block;
        }

        .value {
            color: #333333;
            background-color: #f9f9f9;
            padding: 10px;
            border-radius: 4px;
            border-left: 3px solid #DAA520;
        }

        .footer {
            text-align: center;
            padding: 20px;
            color: #666666;
            font-size: 14px;
            border-top: 1px solid #eeeeee;
            margin-top: 30px;
        }

        @media only screen and (max-width: 600px) {
            .container {
                padding: 10px;
            }

            .content {
                padding: 20px;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <img src="http://CialaResidences.com/img/logo.png" alt="Ciala Residences" class="logo">
        </div>

        <div class="content">
            <h1>New Message Received</h1>

            <div class="message-info">
                <p>You have received a new message from the Ciala Residences website contact form.</p>
            </div>

            <div class="field">
                <div class="label">Name</div>
                <div class="value">{{ $contactForm->name }}</div>
            </div>

            <div class="field">
                <div class="label">Email</div>
                <div class="value">{{ $contactForm->email }}</div>
            </div>

            <div class="field">
                <div class="label">Phone</div>
                <div class="value">{{ $contactForm->phone }}</div>
            </div>

            <div class="field">
                <div class="label">Subject</div>
                <div class="value">{{ $contactForm->subject }}</div>
            </div>

            <div class="field">
                <div class="label">Message</div>
                <div class="value">{{ $contactForm->message }}</div>
            </div>
        </div>

        <div class="footer">
            <p>This is an automated message from Ciala Residences Website</p>
            <p>Visionary Living, Rooted in Heritage</p>
        </div>
    </div>
</body>

</html>
