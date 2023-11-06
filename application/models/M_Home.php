<?php
defined('BASEPATH') || exit('No direct script access allowed');

class M_Home extends CI_Model
{
    function sendMail($to, $message, $title)
    {
        set_time_limit(6);

        require_once(APPPATH . "libraries/PHPMailer-master/PHPMailerAutoload.php");

        $mail = new PHPMailer;
        $mail->isSMTP();
        $mail->SMTPDebug = 0;
        $mail->Debugoutput = 'html';
        // $mail->Host = '_mainaccount@fnmdev.my.id';
        // $mail->Port = 25;
        // $mail->SMTPAuth = false;
        // $mail->SMTPSecure = false;
        // $mail->setFrom('_mainaccount@fnmdev.my.id', "quinpay@noreply");

        // $mail->SMTPSecure = '';
        // $mail->smtpConnect([
        //     'ssl' => [
        //         'verify_peer' => false,
        //         'verify_peer_name' => false,
        //         'allow_self_signed' => true
        //     ]
        // ]);
        $mail->Host = 'mail.fnmdev.my.id'; // Ganti dengan alamat server SMTP email hosting Anda
        $mail->Port = 587; // Biasanya 587 untuk TLS, 465 untuk SSL
        $mail->SMTPSecure = 'tls'; // 'tls' untuk TLS, 'ssl' untuk SSL
        $mail->SMTPAuth = true;
        $mail->Username = 'qu_inpay@fnmdev.my.id'; // Ganti dengan alamat email hosting Anda
        $mail->Password = 'Tintin77@';
        $mail->setFrom('qu_inpay@fnmdev.my.id', "qu_inpay@noreply");

        $mail->addAddress('fandy_chaniago99@gmail.com');
        

        $mail->Subject = $title;

        $mail->msgHTML('<font style="font-family: Helvetica, Arial, Verdana, Tahoma, sans-serif; font-size:12px;">' . $message . '</font>');


        if (!$mail->send()) {
            return 'failed';
        } else {
            return 'success';
        }
    }
}
