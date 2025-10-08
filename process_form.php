<?php
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $message = '';
    // Get form inputs
    $name = trim($_POST["name"]);
    $mobile = trim($_POST["mobile"]);
    $message = isset($_POST["message"]) ? trim($_POST["message"]) : '';
    $email = trim($_POST["email"]);
    
    // Save data to CSV
    $csvFile = "form_submissions.csv";
    $websiteName = "LandTRealty Noida";
    $row = [$name, $mobile, $email, $message, $websiteName, date("Y-m-d H:i:s")];

    if (!file_exists($csvFile)) {
        $header = ['Name', 'Mobile', 'Email', 'Message', 'websiteName', 'Submitted At'];
        $f = fopen($csvFile, 'w');
        fputcsv($f, $header);
        fclose($f);
    }

    $f = fopen($csvFile, 'a');
    fputcsv($f, $row);
    fclose($f);
    
    // Include PHPMailer files
    require 'PHPMailer/Exception.php';
    require 'PHPMailer/PHPMailer.php';
    require 'PHPMailer/SMTP.php';

    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPSecure = 'tls';
        $mail->Host = "smtp.gmail.com";
        $mail->SMTPAuth = true;
        $mail->Username = 'info.thewoodenstrings@gmail.com';
        $mail->Password = 'xcebwquejoenferl';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Recipients
        $mail->setFrom('info.thewoodenstrings@gmail.com', 'LandTRealty Noida');
        $mail->addAddress('rohit.mis.360@gmail.com', 'admin');

        // Content
        $mail->isHTML(true);
		$mail->CharSet = 'UTF-8';
        $mail->Subject = 'Query From ' . $name. '  - LandTRealty Noida';
        $mail->Body = '
<html>


  <body style="font-family: Arial, sans-serif; background-color:#f8f9fa; padding:20px; color:#333;">
    <div style="max-width:650px; margin:auto; background:#ffffff; border-radius:10px; box-shadow:0 2px 8px rgba(0,0,0,0.1); overflow:hidden; border:1px solid #eee;">
      
      <!-- Header -->
      <div style="background:#004274; color:#fff; padding:20px; text-align:center;">
        <h2 style="margin:0;">🏡 L&T Green Reserve</h2>
        <p style="margin:5px 0 0; font-size:14px;">New Lead Enquiry</p>
      </div>
      
      <!-- Lead Info -->
      <div style="padding:25px;">
        <p style="font-size:16px; margin:0 0 10px;">
          <b>👤 Name:</b> '.$name.'
        </p>
        <p style="font-size:16px; margin:0 0 10px;">
          <b>📞 Mobile:</b> '.$mobile.'
        </p>
        <p style="font-size:16px; margin:0 0 10px;">
          <b>📧 Email:</b> '.$email.'
        </p>
        <p style="font-size:16px; margin:0 0 10px;">
          <b>💬 Message:</b> '.$message.'
        </p>
      </div>
      
      <!-- Divider -->
      <hr style="border:none; border-top:1px solid #eee; margin:0;">
      
      <!-- Action Section -->
      <div style="padding:20px; text-align:center;">
        <p style="margin-bottom:15px; font-size:15px; color:#555;">Take quick action:</p>
        
        <!-- Call Button -->
        <a href="tel:'.$mobile.'" 
           style="display:inline-block; background:#28a745; color:#fff; font-size:15px; padding:12px 22px; margin:5px; text-decoration:none; border-radius:6px; font-weight:bold;">
           📞 Call
        </a>
        
        
      </div>
      
      <!-- Footer -->
      <div style="background:#f1f1f1; text-align:center; padding:15px; font-size:13px; color:#777;">
        📌 L&T Realty | Lead Notification System
      </div>
      
    </div>
  </body>
</html>';



        $mail->send();
        $_SESSION['form_submitted'] = true;
        $_SESSION['name'] = $name;
        if($message !== '' ){
            header("Location: thankyou.php");
        }else{
            echo json_encode(["status" => "success", "message" => "Thanks $name! We received your details."]);
        }
        
        
        exit();
        
    } catch (Exception $e) {
        // Redirect back with error parameter
        header("Location: index.php?error=1");
        exit();
    }
}
?>