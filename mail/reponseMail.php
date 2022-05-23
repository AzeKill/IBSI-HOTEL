<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '/home/root/PHPMailer/src/Exception.php';
require '/home/root/PHPMailer/src/PHPMailer.php';
require '/home/root/PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    include('../config.php');
    $sql ="Select * from contact where idContact = $_GET[idReponse]";
    $stmt = $bdd->query($sql);


	while($row = $stmt->fetch(PDO::FETCH_ASSOC))
	{
		$email = $row['email'];
        $message = $row['message'];
	}	
    //Server settings
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.hostinger.com';                  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'contact@ibsi.site';             // SMTP username
    $mail->Password = 'Protected1_';                           // SMTP password
    $mail->SMTPSecure = 'ssl';                            // Enable SSL encryption, TLS also accepted with port 465
    $mail->Port = 465;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('contact@ibsi.site', 'Contact IBSI Hotel');          //This is the email your form sends From
    $mail->addAddress($email, $email); // Add a recipient address

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Contact';
    $mail->Body    = "Bonjour,<br><br>
    Nous avons le plaisir de vous repondre suite à votre demande sur notre site.
    <br><br>Détail:<br>
    $message
    <br>
    Réponse:<br>
    $_GET[reponse]<br>
    L'équipe du IBSI Hotel.<br>
    <img src='http://ibsi.site/image/logo.png' alt='logo'/>";

    $mail->send();
    $sql ="DELETE FROM contact WHERE idContact = $_GET[idReponse]";
    $stmt = $bdd->query($sql);
    echo "<script type='text/javascript'> window.location='../home.php'</script>";
} catch (Exception $e) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}
?>
