<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>New Contact Message</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 20px;
            color: #333;
        }
        .email-container {
            max-width: 600px;
            margin: 0 auto;
            background: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            padding: 20px;
        }
        .email-header {
            text-align: center;
            padding-bottom: 15px;
            border-bottom: 2px solid #eaeaea;
        }
        .email-header h2 {
            margin: 0;
            color: #2c7a7b;
        }
        .email-body {
            margin: 20px 0;
        }
        .email-body p {
            margin: 8px 0;
            line-height: 1.6;
        }
        .label {
            font-weight: bold;
            color: #555;
        }
        .message-box {
            margin-top: 15px;
            padding: 15px;
            background: #f1f5f9;
            border-left: 4px solid #2c7a7b;
            border-radius: 4px;
            white-space: pre-line;
        }
        .email-footer {
            margin-top: 20px;
            text-align: center;
            font-size: 13px;
            color: #888;
            border-top: 1px solid #eaeaea;
            padding-top: 10px;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <!-- Header -->
        <div class="email-header">
            <h2>📩 New Contact Message</h2>
        </div>

        <!-- Body -->
        <div class="email-body">
            <p><span class="label">Name:</span> {{ $name }}</p>
            <p><span class="label">Email:</span> {{ $email }}</p>
            <p><span class="label">Phone:</span> {{ $phone ?? 'N/A' }}</p>
            <p><span class="label">Subject:</span> {{ $subject }}</p>

            <div class="message-box">
                {{ $user_message }}
            </div>
        </div>

        <!-- Footer -->
        <div class="email-footer">
            This message was sent from your website contact form.
        </div>
    </div>
</body>
</html>
