<?php
// any PHP code here (if needed)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5e6d7;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .contact-container {
            background-color: #fff2e5;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            display: flex;
            align-items: center;
            padding: 30px;
            max-width: 800px;
            width: 100%;
        }
        .contact-info {
            flex: 1;
        }
        .contact-info h2 {
            color: #222;
            font-size: 24px;
            margin: 0 0 10px;
        }
        .contact-info p {
            color: #555;
            margin: 10px 0;
            font-size: 16px;
        }
        .contact-info a {
            color: #333;
            text-decoration: none;
            display: block;
            margin: 5px 0;
        }
        .contact-info a:hover {
            text-decoration: underline;
        }
        .contact-illustration {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .contact-illustration img {
            max-width: 100%;
            height: auto;
        }
    </style>
    <title>Contact Us</title>
</head>
<body>
    <div class="contact-container">
        <div class="contact-info">
            <h2>Contact us</h2>
            <p>We're here to help and answer any questions you might have. We look forward to hearing from you!</p>
            <p>
                <strong>Address:</strong><br>
                Ankersgade 12C, 1, 8000 Aarhus
            </p>
            <p>
                <strong>Phone:</strong><br>
                <a href="tel:+4571997707">+45 71 99 77 07</a>
            </p>
            <p>
                <strong>Email:</strong><br>
                <a href="mailto:mail@sleeknote.com">mail@sleeknote.com</a>
            </p>
        </div>
        <div class="contact-illustration">
            <img src="contact-illustration.png" alt="Contact Illustration">
        </div>
    </div>
</body>
</html>
