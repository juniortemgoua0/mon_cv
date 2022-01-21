<?php 
// require "../database/config.php" ;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';

$recipients = $_POST['recipients'] ;
$object = $_POST['object'] ;
$format = $_POST['format'] ;

$mail = new PHPMailer(true);

try {
 
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                    
    $mail->isSMTP();                                         
    $mail->Host       = 'smtp.gmail.com';                
    $mail->SMTPAuth   = true;                                 
    $mail->Username   = 'juniortemgoua0@gmail.com';                   
    $mail->Password   = 'Berbato7';                             
    $mail->SMTPSecure = "ssl";
    $mail->Port       = 465;    

    $mail->setFrom("juniortemgoua0@gmail.com", 'Junior');
    foreach($recipients as $r){
        $mail->addAddress($r["tag"]);  
    }

    //Content
    $mail->isHTML(true);                                 
    $mail->Subject = $object;

    if($format== "txt"){
        ob_start() ;
        require "../index.php" ;
        $body = ob_get_contents() ;
        ob_end_clean() ;
    }else{
        $body = $mail->AddAttachment('../cv.pdf') ;
    }

    $mail->Body = $body;
    $mail->send();
    
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?> 