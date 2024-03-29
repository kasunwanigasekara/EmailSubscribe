<?php
namespace EmailVerication\controller;
use EmailVerication\model\addemail;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class email
{
    private $email;

    public function __construct(string $email)
    {
        $this->email=$email;
    }

    public function getEmail():string
    {
        return $this->email;
    }

    public function addEmail():void
    {
        $add = new addemail();
        $add->add($this->email);

    }


    public function sendEmail():void
    {
     
    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        //Server settings
        //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                //Enable verbose debug output(Detailed Msg on error/success)
        $mail->isSMTP();   
        $mail->Host       = 'smtp.gmail.com';                   //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                               //Enable SMTP authentication
        $mail->Username   = 'kasunwanigasekara@gmail.com';      //SMTP username
        $mail->Password   = 'kcotfbhayoaswxcb';                 //SMTP password(if using 2 factor Auth, Needs to add secure app password generated by google)
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;        //Enable implicit TLS encryption
        $mail->Port       = 465;                                //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('kasunwanigasekara@gmail.com','Kasun');
        $mail->addAddress($this->email, 'User');                //Add a recipient
        //$mail->addAddress('example@gmail.com');               //Name is optional
        //$mail->addReplyTo('example@gmail.com', 'Information');
        //$mail->addCC('examplea@gmail.com');
        //$mail->addBCC('example@yahoo.com');

        //Attachments
        //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
        //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

        //Content
        $mail->isHTML(true);                                    //Set email format to HTML
        $mail->Subject = 'User Support Request';
        $mail->Body    = 'Message from a new user ....';
        //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();

            ?>
            <script>
                callmodel2();
            </script>
            <?php

        } catch (Exception $e) 
        {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }

    }

}



?>