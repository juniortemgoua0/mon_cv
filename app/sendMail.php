<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';

$recipients = $_POST['recipients'] ;
$object = $_POST['object'] ;


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

    // $mail->addAddress("juniortemgoua0@gmail.com"); 

    //Content
    $mail->isHTML(true);                                 
    $mail->Subject = $object;


    ob_start() ;

    require "../index.php" ;

    $body = ob_get_contents() ;

    ob_end_clean() ;
    $mail->Body    = $body;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}


?> 