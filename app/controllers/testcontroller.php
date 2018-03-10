<?php
namespace PHPMVC\Controllers;

class TestController extends AbstractController
{
    const EMAIL_HOST = 'smtp.gmail.com';
    const EMAIL_USER = 'myehiasandbox@gmail.com';
    const EMAIL_PASS = 'rebo1531982';
    const EMAIL_PORT = 465;

    public function defaultAction()
    {
        require_once LIB_PATH . 'phpmailer' . DS . 'class.smtp.php';
        require_once LIB_PATH . 'phpmailer' . DS . 'class.phpmailer.php';

        try {
            $mail = new \PHPMailer();
            $mail->isSMTP();
            $mail->Host = self::EMAIL_HOST;
            $mail->SMTPAuth = true;
            $mail->Username = self::EMAIL_USER;
            $mail->Password = self::EMAIL_PASS;
            $mail->SMTPSecure = 'ssl';
            $mail->Port = self::EMAIL_PORT;

            $mail->CharSet = 'UTF-8';
            $mail->From = 'welcome@aqaratc.com';
            $mail->FromName = 'Aqaratc.com';
            $mail->addAddress('firefox_egy@hotmail.com');

            $mail->isHTML(true);
            $mail->Subject = 'Aqaratc.com | Activate your account';
            $mail->Body = '<h1>test</h1>';
            $mail->send();
        } catch (\phpmailerException $e) {
            echo $e->getMessage();
        }
    }
}