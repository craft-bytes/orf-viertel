<!doctype html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <title>Bürgerinitiative "Superblock ORF Viertel"</title>

    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">

    <link href="./bootstrap.css" rel="stylesheet">
</head>
<body>
<main data-offset="0" data-spy="scroll" data-target="#mainNav" role="main">


    <!--- Logo und Forderung -------------------------------------------------------------------------------->

    <section class="intro pt-5" id="intro">
        <div class="container">
            <div class="row align-items-center mb-5">
                <div class="col-12 col-xl-4">
                    <div class="d-flex justify-content-center">
                        <img alt="Logo" class="img-fluid pb-2 img-logo" src="logo.png" width="300px">
                    </div>
                </div>

                <div class="col-12 col-xl-8 pt-5 pt-xl-0">
                    <p class="lead text-center">Vielen Dank für Ihre Unterstützung</p>
                </div>
            </div>
        </div>
    </section>

    <!--- Bestaetigung  --------------------------------------------------------------->

    <section class="pt-5 mt-5" id="info">
        <div class="container">
            <div class="row">
                <div class="col-12 mb-3 text-center">
                    <?php

                    include 'vars.php';
                    // Datenbankverbindung herstellen
 
                    // Verbindung zur Datenbank erstellen
                    $conn = new mysqli($servername, $username, $password, $dbname);

                    // Verbindung überprüfen
                    if ($conn->connect_error) {
                        die("Verbindung fehlgeschlagen: " . $conn->connect_error);
                    }

                    // Daten aus dem Formular verarbeiten
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $vorname = $conn->real_escape_string($_POST['vorname']);
                        $nachname = $conn->real_escape_string($_POST['nachname']);
                        $email = $conn->real_escape_string($_POST['email']);
                        $strasse = $conn->real_escape_string($_POST['strasse']);

                        // SQL-Abfrage vorbereiten
                        $sql = "INSERT INTO unterstuetzer (vorname, nachname, email, strasse) VALUES ('$vorname', '$nachname', '$email', '$strasse')";

                        // Abfrage ausführen und Ergebnis prüfen
                        if ($conn->query($sql) === TRUE) {

                            echo "Ihr Name wurde erfolgreich der Liste hinzugefügt. Zurück zur <a href=\"/\">Startseite</a><br/><br/><br/><br/>

                    <p class=\"alert alert-info text-center font-weight-bold p-4 mb-4\">
                        Sie wollen auch Ihre Nachbarn erreichen? Drucken Sie unser Poster und hängen Sie es in Ihrem
                        Haus oder im Viertel auf!<br/><br/>

                        <a href=\"Superblock_A4.pdf\"><img alt=\"Logo\" class=\"img-fluid img-logo\" src=\"Superblock_A4.png\"
                                                         width=\"200\"></a>

                        <br/><br/> Für ein größeres Transparent melden Sie sich unter <a
                            href=\"mailto:superblock@orf-viertel.at\">superblock@orf-viertel.at</a>.

                    </p>";
                        } else {
                            echo "Fehler: " . $sql . "<br>" . $conn->error;
                        }
                    }
                    // Verbindung schließen
                    $conn->close();
                    
                    // Schicken der Verifikationsemail
                    
                    /*
                    use PHPMailer\PHPMailer\PHPMailer;
                    use PHPMailer\PHPMailer\SMTP;
                    use PHPMailer\PHPMailer\Exception;

                    require_once "vendor/autoload.php";

                    $mail = new PHPMailer(exception: true);
                    
                    try {
                        $mail ->SMTPDebug = SMTP::DEBUG_OFF; // Set to DEBUG_SERVER for debugging
                        $mail ->isSMTP();
                        $mail ->Host = $mail_smtp_server; // Mailtrap SMTP server host 
                        $mail ->SMTPAuth = true;
                        $mail ->Username = $mail_user; 
                        $mail ->Password = $mail_pwd; // Your Mailtrap SMTP password
                        $mail ->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Enable TLS encryption
                        $email ->Port = 465; // TCP port to connect to


                        // Sender und Empfaenger
                        $mail->setFrom('email_check@orf-viertel.at','Superblock ORF Viertel');
                        $mail->addReplyTo('superblock@orf-viertel.at', 'Superblock ORF Viertel');
                        $mail->addAddress($email);

                        // Inhalt
                        $mail->isHTML(false);
                        $mail->Subject = 'Superblock ORF Viertel - Email Bestaetigung';
                        $mail->Body    = "Your verification code is: $verificationCode";

                        $mail->send();
                    
                    } catch (Exception $e) {
                        echo "Mailer Error: ".$e->getMessage();
                    }
                    */
                    
                    ?>
                </div>
            </div>
        </div>
    </section>

</main>

<footer class="container">
    <div class="row">
        <div class="col-12">
            <div class="d-flex flex-row justify-content-between copyright">
                <div class="p-2">
                    <p>
                        &copy; Bürgerinitiative "Superblocks ORF Viertel"
                        Initiatioren: Stefan Haberl, Stefan Mangard, Dieter Preiß
                        Email: <a href="mailto:superblock@orf-viertel.at">superblock@orf-viertel.at</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>


</body>
</html>

