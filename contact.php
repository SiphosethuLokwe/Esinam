<?php

Session_Start();

// Import PHPMailer classes into the global namespace

// These must be at the top of your script, not inside a function

use phpmailer\phpmailer\src\PHPMailer;

use phpmailer\phpmailer\src\Exception;



if(!isset($_POST['name'])){

}

if(!isset($_SESSION["email"])){
    
}

if(!isset($_SESSION["message"])){
    
}


    //Load composer's autoloader

include ('Esinam2/vendor/autoload.php');



    $mail = new PHPMailer(true);                              // Passing `true` enables exceptions

    try {

        //Server settings

        $mail->SMTPDebug = 3;                                 // Enable verbose debug output

        $mail->isSMTP();                                      // Set mailer to use SMTP

        $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers

        $mail->SMTPAuth = true;                               // Enable SMTP authentication

        $mail->Username = 'nomapelompalala@gmail.com';                 // SMTP username

        $mail->Password = 'mpalalan';

        $mail->smtpConnect(

            array(

    "ssl" => array(

     "verify_peer" => false,

    "verify_peer_name" => false,

     "allow_self_signed" => true

                )

            )

        );                           // SMTP password

        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted

        $mail->Port = 587;                                    // TCP port to connect to



        //Recipients

        $mail->setFrom('nomapelompalala@gmail.com', 'zikho');

        $mail->addAddress('nomapelompalala@gmail.com', 'pelo');     // Add a recipient


        //Content

        $mail->isHTML(true);                                  // Set email format to HTML

        $mail->Subject = $_POST['name'];

        $mail->Body = $_POST['message'];

        //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';



        $mail->send();

        header('');

    } catch (Exception $e) {

        echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;

    }



?>