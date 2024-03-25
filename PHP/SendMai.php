<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send Mail</title>
</head>
<body>
    <?php
    if(isset($_POST['submit'])){
        // Validate form data
        $to = filter_var($_POST['to'], FILTER_VALIDATE_EMAIL);
        $message = htmlspecialchars($_POST['message']);
        
        if(!$to || empty($message)){
            echo "Invalid email address or message.";
            exit;
        }

        // Set email parameters
        $subject = "Test Email";
        $headers = "From: RAMBO";

        // Send email
        if(isset($_POST['submit'])){
            // Validate form data
            $to = filter_var($_POST['to'], FILTER_VALIDATE_EMAIL);
            $message = htmlspecialchars($_POST['message']);
            
            if(!$to || empty($message)){
                echo "Invalid email address or message.";
                exit;
            }

            // Set email parameters
            $subject = "Test Email";
            $headers = "From: RAMBO";

            // Set SMTP settings
            ini_set("SMTP", "your_smtp_server");
            ini_set("smtp_port", "your_smtp_port");

            // Send email
            if(mail($to, $subject, $message, $headers)){
                echo "Email sent successfully.";
            } else {
                echo "Failed to send email.";
            }
        }
    }
        ?>

        <form method="post" action="">
            <label for="to">To:</label>
            <input type="text" id="to" name="to"><br><br>
            <label for="message">Message:</label><br>
            <textarea id="message" name="message"></textarea><br><br>
            <input type="submit" name="submit" value="Send Email">
        </form>
        </body>
        </html>
</body>
</html>