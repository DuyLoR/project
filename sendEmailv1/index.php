<?php
//khai báo thư viện sử dụng
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'Exception.php';
require 'PHPMailer.php';
require 'SMTP.php';

// Instantiation and passing `true` enables exceptions  :tạo ra đối tượng để gửi email
$mail = new PHPMailer(true);

// khai báo, cài đặt các thuộc tính phương thức
try {
    //Server settings   : thiết lập liên quan đến mail sever
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;// Enable verbose debug output
    $mail->isSMTP();// gửi mail SMTP
    $mail->Host = 'smtp.gmail.com';// Set the SMTP server to send through
    $mail->SMTPAuth = true;// Enable SMTP authentication

    $mail->Username = 'duya7k50@gmail.com';// SMTP username
    $mail->Password = 'wawruioyifyzjpso'; // SMTP password

    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;// Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
    $mail->Port = 587; // TCP port to connect to
    $mail->CharSet = 'UTF-8';
    
    //Recipients
    $mail->setFrom('duya7k50@gmail.com', '14.Nguyễn Khương Duy.1951060661');    //email gửi

    $mail->addReplyTo('duya7k50@gmail.com', '14.Nguyễn Khương Duy.1951060661');//email nhận phản hồi
      
    $mail->addAddress('kitudu99@gmail.com'); // Add a recipient: người nhận
    
    // Attachments  : tệp tin đính kèm
    // $mail->addAttachment('pdf/XTT/'.$data[11].'.pdf', $data[11].'_1.pdf'); // Add attachments
    // $mail->addAttachment('pdf/Giay_bao_mat_sau.pdf', $data[11].'_2.pdf'); // Optional name

    // Content
    $mail->isHTML(true);   // Set email format to HTML
    $tieude = '[Điểm danh 61TH1]';
    $mail->Subject = $tieude;
    
    // Mail body content 
    $bodyContent = '<p>Kính gửi thầy Dũng,<br/></p>';
    $bodyContent .='<p>Em tên là Nguyễn Khương Duy lớp 61TH1 stt 14. Em xin điểm danh ạ</p>';
    
    $mail->Body = $bodyContent;
    
    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    if($mail->send()){
        echo 'Thư đã được gửi đi';
    }else{
        echo 'Lỗi. Thư chưa gửi được';
    }  

} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

?>
