<?php

namespace App;

use Database\DataBase;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;



class SentMagazineByEmail
{

    public function index()
    {

        $db = new DataBase();

        $get_image_sidebar = $db->select('SELECT * FROM banners WHERE id IN (10, 11, 12)');
        require_once(BASE_PATH . '/template/app/email_gui_bai.php');
    }

    public function sendPostByEmail()
    {
        $title_magaz = $_POST['title_magaz'];
        $name_sender = $_POST['name_sender'];
        $mail_sender = $_POST['mail_sender'];
        $fileToUpload = $_FILES['fileToUpload'];
        $mail_receive = $_POST['mail_receive'];

        $mail = new PHPMailer(true);
        $mail->CharSet = 'UTF-8';
        $emailSent = false;
        $errorMessage = '';

        try {
            $mail->isSMTP();

            $mail->Host = MAIL_HOST;
            $mail->SMTPAuth = SMTP_AUTH;
            $mail->Username = MAIL_USERNAME;
            $mail->Password = MAIL_PASSWORD;
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = MAIL_PORT;

            //Recipients
            $mail->setFrom($mail_sender, $name_sender);
            $mail->addAddress($mail_receive);
            $mail->addReplyTo($mail_sender, $name_sender);

            // Attachments
            if (isset($fileToUpload) && $fileToUpload['error'] == UPLOAD_ERR_OK) {
                $mail->addAttachment($fileToUpload['tmp_name'], $fileToUpload['name']);
            }

            // Content
            $mail->isHTML(true);
            $mail->Subject = $title_magaz;
            $mail->Body = $title_magaz;

            $mail->send();
        } catch (Exception $e) {
            echo "Không gửi đi được. Lỗi: {$mail->ErrorInfo}";
        }
        require_once(BASE_PATH . '/template/app/email_gui_bai.php');
        if ($emailSent) {
            echo "<script> alert('Đã gửi bài thành công!');</script>";
        } else {
            echo "<script> alert('Đã gửi bài thành công!'. $mail->ErrorInfo);</script>";
        }
    }

    public function sendByEmail()
    {
        $title_magaz = $_POST['title_magaz'];
        $name_sender = $_POST['name_sender'];
        $mail_sender = $_POST['mail_sender'];
        $mail_receive = $_POST['mail_receive'];

        $mail = new PHPMailer(true);
        $mail->CharSet = 'UTF-8';
        $emailSent = false;
        $errorMessage = '';

        try {
            $mail->isSMTP();

            $mail->Host = MAIL_HOST;
            $mail->SMTPAuth = SMTP_AUTH;
            $mail->Username = MAIL_USERNAME;
            $mail->Password = MAIL_PASSWORD;
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = MAIL_PORT;

            //Recipients
            $mail->setFrom($mail_sender, $name_sender);
            $mail->addAddress($mail_receive);
            $mail->addReplyTo($mail_sender, $name_sender);


            // Content
            $mail->isHTML(true);
            $mail->Subject = $title_magaz;
            $mail->Body = $title_magaz;

            $mail->send();
        } catch (Exception $e) {
            echo "Không gửi đi được. Lỗi: {$mail->ErrorInfo}";
        }
        if ($emailSent) {
            echo "<script> alert('Đã gửi bài thành công!');</script>";
        } else {
            echo "<script> alert('Đã gửi bài thành công!'. $mail->ErrorInfo);</script>";
        }
        require_once(BASE_PATH . '/template/app/sent-email.php');

    }

}