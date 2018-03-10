<?php
namespace PHPMVC\lib;

require_once LIB_PATH . 'phpmailer' . DS . 'class.smtp.php';
require_once LIB_PATH . 'phpmailer' . DS . 'class.phpmailer.php';

class Mailer
{
    const EMAIL_HOST = 'gator3313.hostgator.com';
    const EMAIL_USER = 'welcome@aqaratc.com';
    const EMAIL_PASS = 'aqaratc@2018';
    const EMAIL_PORT = '465';

    public static function notify($email, $content) {

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
        $mail->addAddress($email);

        $mail->isHTML(true);
        $mail->Subject = 'Aqaratc.com | Activate your account';
        $mail->Body = $content;

        if ($mail->send()) {
            return true;
        }
        return false;
    }
}