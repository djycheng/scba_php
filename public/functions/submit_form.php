<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load composer's autoloader
require $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';

ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);

$mail = new PHPMailer(true);

try {
    $mail->SMTPDebug = 2;
    $mail->Debugoutput = 'html';

    $mail->Mailer = 'smtp';
    $mail->isSMTP();
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'tls';
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587;

    # Move credentials out of file.
    $mail->Username = '';
    $mail->Password = '';

    # Possibly only for localhost?
    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );

    if (isset($_POST['email'])) {
        $mail->setFrom('', 'SCBA');
        $mail->addAddress('');
        $mail->addReplyTo($_POST['email']);

        $mail->isHTML(true);
        $mail->Subject = '[SCBA] Message from ' . $_POST['name'];

        $message = "<b>There's a new message from " . $_POST['name'] . "</b><br/><br/>";
        $message .= "<p>" . $_POST['message'] . "<br/><br/>";
        $message .= "You can reply to " . $_POST['name'] . " by replying to this email (" 
            . $_POST['email'] . ") or using the provided phone number: " . $_POST['phone'] . ".</p>";

        $mail->Body = $message;

        $mail->send();
        echo 'Message has been sent';
    } else {
        header($_SERVER['SERVER_PROTOCOL'] . ' 400 Bad Request', true, 400);
        echo 'No email was provided';
    }
} catch (Exception $e) {
    echo 'Message could not be sent';
    echo 'Mailer error: ' . $mail->ErrorInfo;
}
?>
