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
    include('../../config.php');
    $sql ="Select * from reservationChambre where idReservation = $_GET[id]";
    $stmt = $bdd->query($sql);


	while($row = $stmt->fetch(PDO::FETCH_ASSOC))
	{
		$titre = $row['titre'];
		$prenom = $row['prenom'];
		$nom = $row['nom'];
		$email = $row['email'];
		$typeChambre = $row['typeChambre'];
		$nombreChambre = $row['nombreChambre'];
		$lit = $row['lit'];
		$restauration = $row['restauration'];

		$dateEntree = $row['dateEntree'];
        $dateEntree=date("d-m-Y", strtotime($dateEntree));  

		$dateSortie = $row['dateSortie'];
        $dateSortie=date("d-m-Y", strtotime($dateSortie));

		$nombreJour = $row['nombreJour'];
	}	
    //Server settings
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.hostinger.com';                  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'noreply@ibsi.site';             // SMTP username
    $mail->Password = 'Protected1_';                           // SMTP password
    $mail->SMTPSecure = 'ssl';                            // Enable SSL encryption, TLS also accepted with port 465
    $mail->Port = 465;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('noreply@ibsi.site', 'Reservation IBSI Hotel');          //This is the email your form sends From
    $mail->addAddress($email, $email); // Add a recipient address

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Reservation';
    $mail->Body    = "Bonjour $titre $nom $prenom,<br><br>
    Nous avons le plaisir de vous confirmez votre réservation du $dateEntree au $dateSortie.
    <br><br>Détail:<br>
    Type de chambre : $typeChambre $lit<br>
    Nombre de chambre: $nombreChambre<br>
    Restauration : $restauration<br>
    <br>
    Je vous prie d'agréer, $titre $nom, l'expression de notre considération distinguée.<br>
    <br>
    L'équipe du IBSI Hotel.<br>
    <img src='http://ibsi.site/image/logo.png' alt='logo'/>";

    $mail->send();
    echo "<script type='text/javascript'> window.location='../home.php'</script>";
} catch (Exception $e) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}
?>
