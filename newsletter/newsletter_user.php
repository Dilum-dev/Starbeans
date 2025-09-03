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

    $body = <<<HTML
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Thank You for Subscribing!</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <style>
    /* Mobile fallback for clients that honor media queries (Gmail, iOS, most Android) */
    @media only screen and (max-width:600px){
      .container { width: 100% !important; }
      .p-40 { padding: 20px !important; }
      .h1-lg { font-size: 24px !important; }
      .h2-md { font-size: 20px !important; }
      .text-md { font-size: 15px !important; }
      .benefit-td { display:block !important; width:100% !important; }
      .icon-td { width:36px !important; }
      .icon { width:36px !important; height:36px !important; font-size:18px !important; }
    }
  </style>
</head>
<body style="margin:0; padding:0; background-color:#f4f4f4;">
  <!-- Full-width wrapper -->
  <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="background:#f4f4f4;">
    <tr>
      <td align="center" style="padding:0 10px;">
        <!-- Constraining container -->
        <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" class="container" style="max-width:600px; width:100%; margin:0 auto; background:#ffffff;">
          <!-- HEADER -->
          <tr>
            <td align="center" class="p-40" style="background:linear-gradient(90deg,#3e8d3c,#164d15); padding:40px 20px;">
              <h1 class="h1-lg" style="margin:0; font-family:Arial,sans-serif; font-weight:300; font-size:28px; color:#ffffff;">
                Welcome to Starbeans Newsletter
              </h1>
            </td>
          </tr>

          <!-- CONTENT -->
          <tr>
            <td class="p-40" style="padding:40px 30px; text-align:center;">
              <!-- Icon circle -->
              <table role="presentation" cellspacing="0" cellpadding="0" border="0" align="center">
              </table>

              <h2 class="h2-md" style="margin:0 0 20px; font-family:Arial,sans-serif; font-weight:400; font-size:24px; color:#333333;">
                Thanks for Subscribing!
              </h2>

              <p class="text-md" style="margin:0 0 20px; font-family:Arial,sans-serif; font-size:16px; line-height:1.8; color:#666666;">
                We're thrilled to have you join our community! You've successfully subscribed to our newsletter, and we can't wait to share valuable content, updates, and exclusive offers with you.
              </p>

              <!-- Benefits box -->
              <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="background:#f9f9f9; border-radius:8px;">
                <tr>
                  <td style="padding:30px;">
                    <h3 style="margin:0 0 15px; font-family:Arial,sans-serif; font-weight:600; font-size:18px; color:#333333;">
                      What to Expect:
                    </h3>

                    <!-- Benefit 1 -->
                    <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="margin-bottom:10px;">
                      <tr>
                        <td class="icon-td" valign="top" width="42" style="width:42px;">
                          <div class="icon" style="width:42px; height:42px; border-radius:50%; line-height:42px; text-align:center; font-size:18px; color:#ffffff;">📰</div>
                        </td>
                        <td class="benefit-td" valign="top" style="padding-left:15px; text-align:left;">
                          <div style="font-family:Arial,sans-serif; font-size:16px; color:#333333;">
                            <strong>Weekly Updates:</strong> Stay informed with our latest news and insights delivered directly to your inbox.
                          </div>
                        </td>
                      </tr>
                    </table>

                    <!-- Benefit 2 -->
                    <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="margin-bottom:10px;">
                      <tr>
                        <td class="icon-td" valign="top" width="42" style="width:42px;">
                          <div class="icon" style="width:42px; height:42px; border-radius:50%; line-height:42px; text-align:center; font-size:18px; color:#ffffff;">🎁</div>
                        </td>
                        <td class="benefit-td" valign="top" style="padding-left:15px; text-align:left;">
                          <div style="font-family:Arial,sans-serif; font-size:16px; color:#333333;">
                            <strong>Exclusive Offers:</strong> Be the first to know about special promotions and subscriber-only deals.
                          </div>
                        </td>
                      </tr>
                    </table>

                    <!-- Benefit 3 -->
                    <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                      <tr>
                        <td class="icon-td" valign="top" width="42" style="width:42px;">
                          <div class="icon" style="width:42px; height:42px; border-radius:50%; line-height:42px; text-align:center; font-size:18px; color:#ffffff;">💡</div>
                        </td>
                        <td class="benefit-td" valign="top" style="padding-left:15px; text-align:left;">
                          <div style="font-family:Arial,sans-serif; font-size:16px; color:#333333;">
                            <strong>Expert Tips:</strong> Get valuable tips and advice from our team of experts in your field of interest.
                          </div>
                        </td>
                      </tr>
                    </table>

                  </td>
                </tr>
              </table>
            </td>
          </tr>

          <!-- FOOTER -->
          <tr>
            <td align="center" class="p-40" style="background:#164d15; padding:30px;">
              <p style="margin:0 0 8px; font-family:Arial,sans-serif; font-size:14px; color:#cccccc;"><strong>The Starbeans Team</strong></p>
              <p style="margin:0; font-family:Arial,sans-serif; font-size:14px; color:#cccccc;">No.30 Wellawaya road Ella.</p>
            </td>
          </tr>
        </table>
        <!-- /container -->
      </td>
    </tr>
  </table>
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
    $mail->addAddress($email);
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