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
                    <p class="lead text-center">Wir fordern eine flächendeckende Verkehrsberuhigung für das Grazer ORF
                        Viertel</p>
                </div>
            </div>
        </div>
    </section>

    <!--- Bestaetigung  --------------------------------------------------------------->

    <section class="pt-5 mt-5" id="info">
        <h1>Vielen Dank für Ihre Unterstützung</h1>
        <div class="container">
            <div class="row">
                <div class="col-12 mb-3 text-center">
                    <?php
                    // Datenbankverbindung herstellen
                    $servername = "localhost";  // oder die Adresse deines Datenbankservers
                    $username = "d041a2f5";      // dein MySQL-Benutzername
                    $password = getenv("DB_PASSWORD");      // dein MySQL-Passwort
                    $dbname = "d041a2f5";        // der Name deiner Datenbank

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

                            echo "Ihr Name wurde erfolgreich der Liste hinzugefügt. Zurück zur <a href="/">Startseite</a>";
                        } else {
                            echo "Fehler: " . $sql . "<br>" . $conn->error;
                        }
                    }
                    // Verbindung schließen
                    $conn->close();
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

