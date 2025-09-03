<?php
header('Content-Type: application/json');

include "../email/SMTP.php";
include "../email/PHPMailer.php";
include "../email/Exception.php";

use PHPMailer\PHPMailer\PHPMailer;

// Initialize response array
$response = ['success' => false, 'message' => ''];


try {

    $email = $_POST['email'] ?? '';

    try {
        file_put_contents("subList.txt", $email . PHP_EOL, FILE_APPEND | LOCK_EX);
    }catch (Exception $e) {
        $response['message'] = 'Failed to save email to list: ' . $e->getMessage();
        echo json_encode($response);
        exit;
    }

    date_default_timezone_set('Asia/Colombo');

$now   = new DateTime('now', new DateTimeZone('Asia/Colombo'));
$today = $now->format('Y-m-d');
$time  = $now->format('h:i A');

    $body = <<<HTML
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Customer Inquiry</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Segoe UI;
            background-color: #f8f9fa;
            line-height: 1.6;
        }
        
        .email-container {
            max-width: 700px;
            margin: 20px auto;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
        
        .header {
            background-color: #343A40;
            color: white;
            padding: 30px;
            text-align: center;
        }
        
        .header h1 {
            margin: 0;
            font-size: 24px;
            font-weight: 600;
        }
        
        .header p {
            margin: 8px 0 0 0;
            font-size: 14px;
            opacity: 0.9;
        }
        
        .content {
            padding: 30px;
            color: #333333;
        }
        
        .inquiry-details {
            background-color: #f8f9ff;
            border-radius: 8px;
            padding: 0;
            margin: 20px 0;
            overflow: hidden;
            border: 1px solid #e9ecef;
        }
        
        .detail-header {
            background-color: #6c757d;
            color: white;
            padding: 15px 20px;
            font-weight: 600;
            font-size: 16px;
        }
        
        .detail-row {
            display: flex;
            padding: 15px 20px;
            border-bottom: 1px solid #e9ecef;
            align-items: flex-start;
        }
        
        .detail-row:last-child {
            border-bottom: none;
        }
        
        .detail-row:nth-child(even) {
            background-color: #ffffff;
        }
        
        .detail-label {
            font-weight: 600;
            color: #495057;
            min-width: 120px;
            margin-right: 15px;
            font-size: 14px;
        }
        
        .detail-value {
            flex: 1;
            color: #333333;
            font-size: 14px;
            word-break: break-word;
        }
        
        .message-content {
            background-color: #ffffff;
            border: 1px solid #dee2e6;
            border-radius: 6px;
            padding: 15px;
            font-style: italic;
            line-height: 1.5;
            margin-top: 5px;
        }
        
        .contact-links a {
            color: #007bff;
            text-decoration: none;
            font-weight: 500;
        }
        
        .contact-links a:hover {
            text-decoration: underline;
        }
        
        .timestamp {
            background-color: #e9ecef;
            padding: 15px 20px;
            font-size: 12px;
            color: #6c757d;
            text-align: center;
            border-top: 1px solid #dee2e6;
        }
        
        .footer {
            background-color: #343a40;
            color: #adb5bd;
            padding: 20px;
            text-align: center;
            font-size: 12px;
        }
        
        @media (max-width: 600px) {
            .email-container {
                margin: 10px;
                border-radius: 0;
            }
            
            .header, .content {
                padding: 20px;
            }
            
            .detail-row {
                flex-direction: column;
                padding: 12px 15px;
            }
            
            .detail-label {
                margin-bottom: 5px;
                margin-right: 0;
                min-width: auto;
            }
        }
    </style>
</head>
<body>
    <div class="email-container">
        <!-- Header Section -->
        <div class="header">
            <h1>New Newsletter Subscription</h1>
            <p>Admin Notification</p>
        </div>
        
        <!-- Main Content -->
        <div class="content">
            
            <p>A new newsletter subscription has been received through your website contact form. Please review the details below and respond promptly.</p>
            
            <!-- Customer Details -->
            <div class="inquiry-details">
                <div class="detail-header">
                    📋 Customer Information
                </div>
                
                <div class="detail-row">
                    <div class="detail-label">Email Address:</div>
                    <div class="detail-value contact-links">
                        <a href="mailto:'.$email.'">{$email}</a>
                    </div>
                </div>
                <div class="detail-row">
                    <div class="detail-label">View Current List:</div>
                    <div class="detail-value contact-links">
                        <a href="/newsletter/viewSubList.php">View all subscribers list</a>
                    </div>
                </div>
                
            </div>
            
            <!-- Timestamp -->
            <div class="inquiry-details">
                <div class="timestamp">
                    <strong>Received:</strong> {$today} at {$time} | <strong>Source:</strong> Website Newsletter Form
                </div>
            </div>
            
        </div>
        
        <!-- Footer -->
        <div class="footer">
            <p>Hotel Management System</p>
            <p>This email was automatically generated by your website contact form system.</p>
        </div>
    </div>
</body>
</html>
HTML;

    $mail = new PHPMailer;
    $mail->IsSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'sudheeradilum@gmail.com';
    $mail->Password = 'awntzmogjcxwfncy';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;
    $mail->setFrom($email, 'The Starbeans');
    $mail->addReplyTo($email, 'The Starbeans');
    $mail->addAddress('sudheeradilum@gmail.com');
    $mail->isHTML(true);
    $mail->Subject = "Starbeans Newsletter";
    $mail->Body = $body;

    if ($mail->send()) {
        $response['success'] = true;
        $response['message'] = 'Your message has been sent successfully!';
    } else {
        throw new Exception('Message could not be sent. Mailer Error: ' . $mail->ErrorInfo);
    }

} catch (Exception $e) {
    $response['message'] = $e->getMessage();
}

// Output the JSON response
echo json_encode($response);
exit;
?>