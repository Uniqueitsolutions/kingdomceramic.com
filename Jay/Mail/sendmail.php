<?php

class sendmail 
{
    public $SenderEmail = "contact@kingdomceramic.com";
    public $SenderEmailPassword = "contact@1234567890";
    public $ReciverEmail = "";
    public $Subject = "";
    public $Body = "";

    function sendMail()
    {
        include('smtp/PHPMailerAutoload.php');
        $mail = new PHPMailer(); 
        $mail->SMTPDebug  = 3;
        $mail->IsSMTP(); 
        $mail->SMTPAuth = true; 
        $mail->SMTPSecure = 'tls'; 
        $mail->Host = "216.10.241.228";
        $mail->Port = 587; 
        $mail->IsHTML(true);
        $mail->CharSet = 'UTF-8';
        $mail->Username = $this->SenderEmail;
        $mail->Password = $this->SenderEmailPassword;
        $mail->SetFrom($this->SenderEmail);
        $mail->Subject = $this->Subject;
        $mail->Body = $this->Body;
        $mail->AddAddress($this->ReciverEmail);
        $mail->SMTPOptions = array('ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => false
        ));
        if (!$mail->Send()) {
            echo $mail->ErrorInfo;
        } else {
        
        }
    }
}
?>