<?php
// Datenbankverbindung herstellen
$servername = "localhost";  // oder die Adresse deines Datenbankservers
$username = "d041a2f5";      // dein MySQL-Benutzername
$password = "Pfga3rNPvxN5ogwgfbFy";      // dein MySQL-Passwort
$dbname = "d041a2f5";        // der Name deiner Datenbank

echo "Verbindungsaufbau..."


// Verbindung zur Datenbank erstellen
$con1 = new mysqli($servername, $username, $password, $dbname);

echo "Überprüfe Verbindung..."
// Verbindung überprüfen
if ($conn->connect_error) {
    die("Verbindung fehlgeschlagen: " . $conn->connect_error);
}
echo "Verbindung zur DB hergestellt."

// Daten aus dem Formular verarbeiten
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $vorname = $conn->real_escape_string($_POST['vorname']);
    $nachname = $conn->real_escape_string($_POST['nachname']);
    $email = $conn->real_escape_string($_POST['email']);

    // SQL-Abfrage vorbereiten
    $sql = "INSERT INTO unterstuetzer (vorname, nachname, email) VALUES ('$vorname', '$nachname', '$email')";

    // Abfrage ausführen und Ergebnis prüfen
    if ($conn->query($sql) === TRUE) {
        echo "Vielen Dank für Ihre Unterstützung!";
    } else {
        echo "Fehler: " . $sql . "<br>" . $conn->error;
    }
}

// Verbindung schließen
$conn->close();
?>
