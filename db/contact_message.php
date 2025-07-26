<?php


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'mailer/vendor/autoload.php';

if (isset($_REQUEST['submitForm'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $services = $_POST['services'];
    $message = $_POST['message'];
    $date = date("F j, Y");
    $time = date("g:i a");

    $emailBody = '
    <div style="font-family: Arial, sans-serif; color: #333; line-height: 1.6;">
        <div style="text-align: center; padding: 20px 0;">
            <img src="http://localhost/client101/images/logo/logo.webp" alt="Website Logo" style="width: 150px;">
        </div>
        <h2 style="color: #0056b3; text-align: center;">You have received a new query through your website.</h2>
        <table style="width: 100%; border-collapse: collapse; margin: 20px 0;">
            <tr>
                <th style="border: 1px solid #ddd; padding: 8px; background-color: #f2f2f2; text-align: left;">Name</th>
                <td style="border: 1px solid #ddd; padding: 8px;">' . htmlspecialchars($name) . '</td>
            </tr>
            <tr>
                <th style="border: 1px solid #ddd; padding: 8px; background-color: #f2f2f2; text-align: left;">Email</th>
                <td style="border: 1px solid #ddd; padding: 8px;">' . htmlspecialchars($email) . '</td>
            </tr>
            <tr>
                <th style="border: 1px solid #ddd; padding: 8px; background-color: #f2f2f2; text-align: left;">Phone</th>
                <td style="border: 1px solid #ddd; padding: 8px;">' . htmlspecialchars($phone) . '</td>
            </tr>
            <tr>
                <th style="border: 1px solid #ddd; padding: 8px; background-color: #f2f2f2; text-align: left;">Service</th>
                <td style="border: 1px solid #ddd; padding: 8px;">' . htmlspecialchars($services) . '</td>
            </tr>
            <tr>
                <th style="border: 1px solid #ddd; padding: 8px; background-color: #f2f2f2; text-align: left;">Message</th>
                <td style="border: 1px solid #ddd; padding: 8px;">' . nl2br(htmlspecialchars($message)) . '</td>
            </tr>
        </table>
        <p style="text-align: center; font-size: 12px; color: #aaa;">
            &copy; ' . date("Y") . ' FM Repairs. Designed By <a href="mailto:adeelriasatofficial@gmail.com" style="font-weight:bold;text-decoration:none;color:#3d3da8;">Adeel Riasat</a>.
        </p>
    </div>';

    echo smtp_mailer('adeelriasatofficial@gmail.com', 'New Query from ' . htmlspecialchars($name), $emailBody);
}

function smtp_mailer($to, $subject, $msg) {
    $phpmailer = new PHPMailer();
    $phpmailer->IsSMTP();
    $phpmailer->SMTPAuth = true;
    $phpmailer->SMTPSecure = 'tls';
    $phpmailer->Host = "smtp.gmail.com";
    $phpmailer->Port = 587;
    $phpmailer->IsHTML(true);
    $phpmailer->CharSet = 'UTF-8';
    $phpmailer->Username = "adeelriasatofficial@gmail.com";
    $phpmailer->Password = "ibkcftbvhfiaspwt";
    $phpmailer->SetFrom("adeelriasatofficial@gmail.com", "FM Repairs");
    $phpmailer->Subject = $subject;
    $phpmailer->Body = $msg;
    $phpmailer->AddAddress($to);
    $phpmailer->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => false
        )
    );
    if(!$phpmailer->Send()) {
        $phpmailer->ErrorInfo;
    } else {
        return ;
    }
}
?>

