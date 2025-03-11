<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bạn có tin nhắn mới</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }

        .container {
            max-width: 600px;
            background: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin: auto;
        }

        h2 {
            color: #333;
            text-align: center;
        }

        .info {
            background: #f9f9f9;
            padding: 15px;
            border-left: 5px solid #007BFF;
            margin-bottom: 15px;
            border-radius: 5px;
        }

        .info p {
            margin: 5px 0;
        }

        .message {
            background: #f1f1f1;
            padding: 15px;
            border-radius: 5px;
            font-style: italic;
        }

        .footer {
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
            color: #666;
        }

        .footer a {
            color: #007BFF;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>📩 Bạn có một tin nhắn mới!</h2>

        <div class="info">
            <p><strong>👤 Tên:</strong> {{ $details['name'] }}</p>
            <p><strong>📧 Email:</strong> {{ $details['email'] }}</p>
            <p><strong>📞 Số điện thoại:</strong> {{ $details['phone'] }}</p>
            <p><strong>📌 Chủ đề:</strong> {{ $details['subject'] }}</p>
        </div>

        <p><strong>💬 Nội dung tin nhắn:</strong></p>
        <div class="message">
            <p>{{ $details['message'] }}</p>
        </div>

        <div class="footer">
            <p>📮 Đây là email tự động, vui lòng không trả lời.</p>
            <p>&copy; {{ date('Y') }} <a href="https://yourwebsite.com">YourWebsite</a></p>
        </div>
    </div>
</body>

</html>
