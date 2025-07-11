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

    <?php

     include 'vars.php';
     // Datenbankverbindung herstellen

     // Verbindung zur Datenbank erstellen
     $conn = new mysqli($servername, $username, $password, $dbname);

     // Verbindung überprüfen
     if ($conn->connect_error) { die("Verbindung fehlgeschlagen: " . $conn->connect_error); }

    // SQL-Abfrage vorbereiten
    $sql = "SELECT COUNT(1) FROM unterstuetzer";

    // Abfrage ausführen und Ergebnis prüfen
    if ($result = mysqli_query($conn, $sql)) { $row = mysqli_fetch_array($result); $count = $row[0]; } else { echo "Fehler: " . $sql . "<br>" . $conn->error; }

    // Verbindung schließen
    $conn->close();

    ?>


    <!--- Transparent -------------------------------------------------------------------------------------->
    <section class="intro" id="intro">
        <nav class="navbar pt-4">
            <div class="container">
                <div class="row text-center">

                    <div class="col-12">
                        <div class="d-flex justify-content-center">
                            <picture>
                                <source media="(max-width: 800px)" srcset="superblock_mobil.png">
                                <img alt="Logo" class="img-fluid img-logo" src="superblock_web.png" width="1140">
                            </picture>
                        </div>
                    </div>

                    <div class="col-12 p-3 mt-4">
                        <h3>Jetzt informieren und im Beteiligungsprozess der Stadt Graz (28.8.2025 - 23.9.2025) einen "Superblock ORF
                            Viertel" fordern!</h3>
                    </div>

                    <div class="col-12 p-3">
                        <p>Ein Superblock ist eine großflächig verkehrsberuhigte Zone ohne Durchzugsverkehr 
                            (Autos, die weder einen Start- noch Zielpunkt in unserem Viertel haben). 
                            Im Gegensatz zu punktuellen Verkehrsmaßnahmen im Viertel, die 
                            den Verkehr nur von einer Straße in die
                            Nächste innerhalb unseres Wohngebiets verschieben, schafft das eine hohe
                            Wohnqualität für ALLE im Viertel.
                        </p>
                    </div>

                    <div class="col-12 p-3 mt-4">
                        <p>
                            <a class="btn btn-primary btn-lg pl-5 pr-5" href="#form">Jetzt unterstützen!</a>
                        </p>

                        Kontakt: <a href="mailto:superblock@orf-viertel.at">superblock@orf-viertel.at</a>
                        
                    </div>
                </div>
            </div>

        </nav>
    </section>

    <!--- Neuigkeiten  --------------------------------------------------------------->

    <section id="News">
        <div class="container">
            <div class="row">
                <div class="col-12 mb-3">
                    <h1>Neuigkeiten</h1>
                    <p>
                    Wir bedanken uns für die vielen aufgehängten Plakate und die vielen postiven Rückmeldungen via Email und durch persönliche Gespräche.  

                    </p>
                    <p><strong>Juli 2025</strong></p>
                    <p>Es gibt nun eine <a href="https://www.graz.at/cms/beitrag/10448763/7760054/">Webseite der Stadt Graz für das Projekt "Verkehrsberuhigung Verkehrsberuhigung Harmsdorf-ORF-Viertel"</a>. Die Webseite zeigt 
                    unter dem Punkt "Beteiligung um Überblick" auch den Zeitplan. Der erste Schritt ist eine AnrainerInnenbefragung vom 28.8.2025 bis zum 23.9.2025. 
                    </p>
                    <p>
                    <strong> Es ist wichtig 
                        die Möglichkeit der AnrainerInnenbefragung zu nutzen und gemeinsam eine Verkehrsberuhigung für ALLE 
                        zu fordern, die den Durchzugsverkehr unterbindet</strong>. Durchzugsverkehr besteht 
                        in vielen Varianten in unserem Viertel 
                        (<a href="#durchzugsverkehr">Details zum Durchzugsverkehr</a>). Die aktuellen und 
                        vor allem die <a href="#bauprojekte">zukünftigen Verkehrsprobleme</a> können nur durch
                        eine Verkehrsberuhigung für ALLE erreicht werden. 
                        Das schafft Zukunftssicherheit und hohe Wohnqualität (<a href="#Details">Details zu den  
                        wichtigsten Gründen</a>). <strong>Es geht jetzt darum festzulegen wie der Verkehr in unserem Viertel in den nächsten Jahrzehnten aussehen wird.</strong>
                
                    </p>
                    <p><strong>Mai 2025</strong></p>
                    <p>Wir treffen uns im ORF Park an drei Freitagen im Mai:
                        <ul>
                            <li>Freitag 9.5., 17:00</li>
                            <li>Freitag 16.5., 17:00</li>
                            <li>Freitag 23.5., 17:00</li>
                        </ul>
                        Alle AnrainerInnen des ORF Viertels sind herzlich willkommen. Das Ziel ist der Austausch zum Thema Verkehr im ORF Viertel im Vorfeld des kommenden Beteiligungsprozesses. 
                    </p>
                    <p><strong>April 2025</strong></p>
                    <p>Die Stadt Graz veröffentlicht den <a href="https://www.graz.at/cms/dokumente/10403377_12799279/6566d420/MP2040_Handlungsfelder_Massnahmen_fin.pdf">Mobilitätsplan 2040</a>. Das ORF Viertel ist darin als Zielgebiet für Verkehrsberuhigung angeführt (Seite 22) und 
                        in der Liste prioritärer Ziele für Verkehrsberuhigung (Seite 92).
                    </p>    
                    <p><strong>März 2025</strong></p>
                    <p>
                    Die Stadt Graz hat in einer <a href="Verkehrsberuhigung%20Harmsdorf-ORF-Viertel%20.pdf">Presseaussendung</a> das Projekt 
                    “Verkehrsberuhigung im Wohngebiet Harmsdorf-ORF-Viertel” angekündigt mit einer AnrainerInnenbefragung für das 2. Quartal 2025.
                    
                    

                    </p>
                    <p><strong>Dezember 2024</strong></p>
                    <p>
                    Aktualisierung der Webseite mit <a href="#durchzugsverkehr">einer Konkretisierung der
                            Beschreibung der Verkehrsprobleme in unserem Viertel</a>, <a href="#bauprojekte">einer Karte mit für den Verkehr
                            in Zukunft relevanter Projekte rund um unsere Viertel</a> und einem Bereich für aktuelle
                            Neuigkeiten.
                    </p>
                    <p><strong>November 2024</strong></h4></p>
                    <p>
                    Die Initiative startet. Es finden von Seite der Bürgerinitiative viele Gespräche mit AnrainerInnen und mit
                    VertreterInnen der Stadt Graz statt. Dies inkludiert Vizebürgermeisterin Schwentner, den
                    Bezirksrat St. Peter, den Bezirksrat Jakomini und die Verkehrsplanung.
                    </p>
                </div>
            </div>
        </div>
    </section>


    <!--- Hintergrund Info / Problembeschreibung --------------------------------------------------------------->

    <section id="info">
        <div class="container">
            <div class="row">
                <div class="col-12 mb-3">
                    <h1>Worum geht es?</h1>
                    <p>
                        Das Grazer ORF Viertel zwischen Münzgrabenstraße, Brucknerstraße, St. Peter Hauptstraße und
                        Petrifelderstraße bietet im Gegensatz zu den Nachbarvierteln viele Durchfahrtmöglichkeiten für
                        den Autoverkehr. Das Viertel wird deshalb als Ausweichroute für die Vorrangstraßen und als
                        ampelfreier Zubringer für den Murpark, die Autobahn, das St. Peter Schulzentrum, oder den TU
                        Campus Inffeldgasse genutzt. </p>
                    <p>
                        Mit der Errichtung der Fahrradstraße Marburger Straße hat sich der Durchzugsverkehr der
                        Marburger Straße auf die anderen Straßen des Viertels verlagert (siehe <a
                            href="https://umap.openstreetmap.de/en/map/burgerinitiative-superblock-orf-viertel_63644"
                            target="_blank">interaktive Karte</a>). Im Rahmen der <a href="https://rad.graz.at/masterplan/">Radoffensive 2030</a> ist als Nächstes die Errichtung einer Fahrradstraße
                        Neufeldweg vorgesehen, die potentiell zu weiteren signifikanten Verlagerungen führt. Weiters gibt es 
                    viele weitere Projekte in und um unser Viertel, die den Verkehrsdruck auf unser Viertel weiter erhöhen werden (<a href="#bauprojekte">Details</a>).</p>
                    <p class="alert alert-info text-center font-weight-bold p-4 mb-4">

                        Der kommende Bürgerbeteiligungsprozess stellt die Weichen für die weitere Verkehrsplanung im ORF
                        Viertel. Jede Stimme für eine großflächige Verkehrsberuhigung in unserem Viertel ist
                        wichtig. </p>

                    <h1>Unsere Forderung</h1>
                    <p>
                        Wir fordern, dass der Durchzugsverkehr im ORF Viertel gänzlich unterbunden wird. Großflächige
                        Verkehrsberuhigungen für Wohngebiete werden in vielen Städten bereits gemacht und sind bekannt
                        unter dem Namen "Superblocks". 
                        <!--Für unser Viertel ist eine solche großflächige Verkehrsberuhigung
                        aktuell aber erst im <a
                            href="https://www.graz.at/cms/beitrag/10403377/12799279/Die_Inhalte_des_Mobilitaetsplan_Graz.html"
                            target="_blank">Mobilitätsplan 2040</a> vorgesehen (Siehe <a
                            href="https://www.graz.at/cms/dokumente/10403377_12799279/4824db14/20240611_Mobilitaetsdialog_fin.pdf"
                            target="_blank">Präsentation zum Mobilitätsplan 2040</a>, Seite 25).
                        Die Probleme mit dem Durchzugsverkehr haben
                        wir aber bereits jetzt. --></p>

                    <p class="alert alert-info text-center font-weight-bold p-4 mt-4 mb-4">
                        Wir fordern die sofortige Umsetzung einer flächendeckenden Verkehrsberuhigung für das ORF
                        Viertel basierend auf dem Verkehrskonzept Superblocks - jetzt im Zuge der Errichtung der
                        Fahrradstraßen. </p>

                    Wir sehen die Fahrradstraßen grundsätzlich als einen richtigen Schritt in Richtung
                    Verkehrsberuhigung. Die aktuelle Umsetzung schafft jedoch Insellösungen. Die ruhige Fahrradstraße
                    Marburger Straße geht auf Kosten der anderen Straßen im Wohnviertel, die den Verkehr aufnehmen. Mit
                    dem Neufeldweg wäre das ähnlich und der Durchzugsverkehr würde sich in den übrigen Straßen sammeln.


                    <p class="alert alert-info text-center font-weight-bold p-4 mt-4 mb-4">
                        Wir wollen keine punktuellen Maßnahmen in der Marburger Straße und im Neufeldweg. Wir fordern eine
                        Lösung ohne Durchzugsverkehr für ALLE im ORF Viertel! Es gibt keinen Grund zu warten und jetzt
                        halbfertige Lösungen zu machen, die den Verkehr im Viertel herumschieben.</p>


                    <p>
                        Wir haben eine <a
                            href="https://umap.openstreetmap.de/en/map/burgerinitiative-superblock-orf-viertel_63644"
                            target="_blank">Karte</a> erstellt, die die aktuelle Verkehrssituation im ORF Viertel zeigt.
                        Die Karte beinhaltet aktuelle Verkehrszählungsdaten und beschreibt die Notwendigkeit einer
                        großflächigen Verkehrsberuhigung aus der Perspektive der einzelnen Straßen des Viertels. </p>

                </div>

                <div class="col-12 align-items-center">
                    <div>
                        <a href="https://umap.openstreetmap.de/en/map/burgerinitiative-superblock-orf-viertel_63644"
                           target="_blank"><img alt="Karte" class="img-fluid w-100" src="karte.png"> </a>
                    </div>
                    <div class="text-center">
                        Klicken Sie auf unsere interaktive Karte für Details
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!--- Gruende für einen Superblock --------------------------------------------------------------->

    <section class="mt-5" id="Details">
        <h1>Gründe für einen Superblock ORF Viertel</h1>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12 mt-5 mt-xl-2">
                    <div class="card">
                        <div class="card-header vh-100 d-flex justify-content-center align-items-center">
                            <h3 class="card-title p-3 text-center mb-0">Gleiches Recht für ALLE im ORF Viertel</h3>
                        </div>
                        <div class="card-body text-center p-4 vh-100 d-flex justify-content-center align-items-center">
                            <div>
                                Einzelmaßnahmen im Viertel wie die Errichtung der Fahrradstraße Marburger Straße oder
                                der geplanten Fahrradstraße Neufeldweg schaffen zwar eine lokale Verbesserung für
                                AnrainerInnen und den Radverkehr. <strong>Leider gehen diese aber auf Kosten der
                                Wohnqualität der anderen Straßen im Viertel.</strong> Seit Errichtung der Fahrradstraße
                                Marburger Straße sehen wir in den umliegenden Straßen mehr Verkehr:
                                <p class="mt-4">
                                    Händelstraße: +61%<br/> Scheigergasse: + 137%<br/> Neufeldweg: +36%<br/>
                                </p>
                            </div>
                        </div>

                        <div class="card-footer mt-4 vh-100 d-flex justify-content-center align-items-center">
                            &rarr; Wir wollen keine punktuellen Maßnahmen in einzelnen Straßen, die auf Kosten anderer Staßen
                            gehen.
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-12 mt-5  mt-xl-2">
                    <div class="card">
                        <div class="card-header vh-100 d-flex justify-content-center align-items-center">
                            <h3 class="card-title p-3 text-center mb-0">Gleiches Recht für das ORF Viertel</h3>
                        </div>
                        <div class="card-body text-center p-4 vh-100 d-flex justify-content-center align-items-center">
                            <div>
                                <strong>Die Viertel rund um das ORF Viertel können nicht mit dem Auto durchquert
                                    werden.</strong> Es gibt außer dem ORF Viertel - vom Dietrichsteinplatz bis zum
                                Liebenauer- bzw. St.Peter-Gürtel (!) - <strong>kein einziges anderes Viertel</strong>,
                                wo man mit dem Auto auf niederrangigen Straßen parallel zu den Hauptverkehrsadern
                                wie der St. Peter-Hauptstraße, der Petersgasse, der Münzgrabenstraße und der Liebenauer
                                Hauptstraße schleichen kann.
                            </div>
                        </div>

                        <div class="card-footer mt-4 vh-100 d-flex justify-content-center align-items-center">
                            &rarr; Das, was woanders geht, geht auch in unserem Viertel.
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-12  mt-5">
                    <div class="card">
                        <div class="card-header vh-100 d-flex justify-content-center align-items-center">
                            <h3 class="card-title p-3 text-center mb-0">Zukunft statt Vergangenheit</h3>
                        </div>
                        <div class="card-body text-center p-4 vh-100 d-flex justify-content-center align-items-center">
                            <div>
                                <p>
                                Mit der Errichtung der Fahrradstraße Marburger Straße wurde eine Maßnahme zur
                                Verkehrsberuhigung und zur Attraktivierung für den Radverkehr im Viertel gesetzt. Manche
                                fordern nun eine Öffnung der Marburger Straße. <strong>Dies wäre jedoch ein Schritt zurück in
                                die Vergangenheit mit dem sich die zukünftigen Verkehrsprobleme nicht lösen lassen. </strong>
                                </p>
                                <p>
                                Mit den immer höheren Bebauungsdichten und den 
                                <a href="#bauprojekte">Bauprojekten</a> in und rund um unser Viertel, wird der Verkehrsdruck 
                                immer höher und es kommt zu mehr Durchzugsverkehr auf allen Straßen des Viertels. Durchzugsverkehr 
                                gehört jedoch nicht ins Wohngebiet.                              
                                Die Verkehrsprobleme auf Hauptstraßen wie der St. Peter Hauptstraße und der Münzgrabenstraße können nur
                                mit übergeordneten Maßnahmen (Ausbau der Öffis, P+R, …) gelöst werden und nicht mit Schleichwegen
                                durch unser Wohngebiet. 
                            </p>
                            </div>
                        </div>

                        <div class="card-footer mt-4 vh-100 d-flex justify-content-center align-items-center">
                            &rarr; Die Zukunft des Viertels darf nicht darin bestehen, dass die Straßen unseres Wohngebiets
                            als
                            ampelfreie Ausweichrouten benutzt werden.
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-12 mt-5">
                    <div class="card">
                        <div class="card-header vh-100 d-flex justify-content-center align-items-center">
                            <h3 class="card-title p-3 text-center mb-0">Wirksame Maßnahmen</h3>
                        </div>
                        <div class="card-body text-center p-4 vh-100 d-flex justify-content-center align-items-center">
                            <div>
                                <p>
                                Es braucht wirksame Maßnahmen - sowohl für den Radverkehr als auch für AnrainerInnen.
                                Das Versetzen der Parkplätze in der Händelstraße und der Scheigergasse ist laut
                                Verkehrsmessungen nicht wirksam. 
                            </p>
                                <p>
                                Auch Fahrradstraßen ohne Durchfahrtssperren für den
                                Autoverkehr wären keine wirksame Maßnahme. Das würde keine Verbesserung für den
                                Radverkehr oder die AnrainerInnen bringen. <strong>Es wären "Alibi-Fahrradstraßen" mit
                                vielen Schildern, aber ohne Effekt.</strong>
                            </p>
                            </div>
                        </div>

                        <div class="card-footer mt-4 vh-100 d-flex justify-content-center align-items-center">
                            &rarr; Es braucht Maßnahmen, die den Durchzugsverkehr für das gesamte Viertel unterbinden.
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>

    <!--- Problembeschreibung --------------------------------------------------------------->

    <section id="durchzugsverkehr">
        <div class="container">
            <div class="row">
                <div class="col-12 mb-3">
                    <h1>Der Durchzugsverkehr im Detail</h1>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-12 col-lg-4 mb-3 text-center justify-content-center align-items-center">
                    <a href="verkehr_nord_sued.jpg"><img alt="Nord-Süd Durchzugsverkehr" class="img-fluid w-100" src="verkehr_nord_sued.jpg"></a> 1.
                    Nord-Süd Durchzugsverkehr
                </div>
                <div class="col-12 col-lg-4 mb-3 text-center justify-content-center align-items-center">
                    <a href="verkehr_ost_west.jpg"><img alt="Ost-West Durchzugsverkehr" class="img-fluid w-100" src="verkehr_ost_west.jpg"></a> 2. Ost-West
                    Durchzugsverkehr
                </div>
                <div class="col-12 col-lg-4 mb-3 text-center justify-content-center align-items-center">
                    <a href="verkehr_kreuzungen.jpg"><img alt="Lokaler Kreuzungs-Ausweichsverkehr" class="img-fluid w-100" src="verkehr_kreuzungen.jpg"></a>
                    3. Lokaler Kreuzungs-Ausweichverkehr
                </div>
            </div>


            <div class="row">
                <div class="col-12 mb-3">
                    <p> Es gibt grundsätzlich drei Arten von Verkehrsproblemen im ORF Viertel:</p>
                    <ol>
                        <li><strong>Nord-Süd Durchzugsverkehr: </strong> Das ORF Viertel ist Zubringer zur Autobahn und
                            zum Murpark.
                        </li>
                        <li><strong>Ost-West Durchzugsverkehr: </strong> Das ORF Viertel wird von der Münzgrabenstr. zur
                            St. Peterhauptstr. durchquert und umgekehrt.
                        </li>

                        <li><strong>Lokaler Kreuzungs-Ausweichverkehr:</strong> Ampelkreuzungen werden via
                            Schleichrouten an den Kanten des Viertel umfahren.
                        </li>
                    </ol>

                    <p>Es gibt auch Überlagerungseffekte dieser drei Arten von Verkehr. Wir diskutieren im Folgenden die
                        Probleme und unsere daraus abgeleiteten Forderungen.</p>

                    <h4>1. Das ORF Viertel ist Zubringer zur Autobahn und zum Murpark</h4>

                    <p><strong>Das Problem:</strong></p>
                    <p>
                        Um die Nord-Süd Hauptverbindungen (Münzgrabenstraße, St. Peter Hauptstraße) auf dem Weg zur
                        Autobahn oder zum Murpark zu umgehen, fahren immer mehr PendlerInnen und GrazerInnen durch das
                        ORF Viertel. Der Grund ist einfach: Durch das ORF Viertel kommt man ampelfrei vom Murpark zum
                        St. Peter Schulzentrum oder in die Münzgrabenstraße. Natürlich gilt das auch in der
                        Gegenrichtung. </p>

                    <p><strong>Die Zukunft: </strong></p>
                    Es ist absehbar, dass der Nord-Süd Durchzugsverkehr weiter anwachsen wird. Konkrete Gründe:
                    <ul>
                        <li><strong>Kreisverkehr Neufeldweg:</strong> Es ist ein Kreisverkehr an der Kreuzung
                            Neufeldweg/Petrifelderstraße geplant. Mit diesem Kreisverkehr wird es nochmals erheblich
                            bequemer im Süden des Viertels in die Schleichrouten durch unser Viertel einzufahren.
                        </li>
                        <li><strong>Neubauten rund um das ORF Viertel:</strong> Der <a
                                href="https://www.tugraz.at/tu-graz/services/news-stories/tu-graz-news/einzelansicht/article/masterplan-fuer-den-campus-inffeldgasse-der-tu-graz">TU
                            Campus</a> im Norden des ORF Viertels wird stark ausgebaut und bekommt einen Zugang via
                            Brucknerstraße. Das erhöht den Druck auf die Nord-Süd Verbindungen durch das Viertel. Auch
                            die Bauprojekte im Westen des Viertels (<a
                                    href="https://www.ventagroup.com/de/projekte/graz-mitte/">Graz Mitte</a>, <a
                                    href="https://www.kleinezeitung.at/steiermark/graz/18940918/die-plaene-fuer-den-ausbau-der-merkur-arena-in-graz-liebenau">Ausbau
                                des Liebenauer Stadions</a>, <a href="https://www.haring-immobilien.at/mqg/">Messequadrant</a>,
                            <a href="https://www.kleinezeitung.at/steiermark/graz/19181105/startschuss-fuer-riesiges-bauprojekt-beim-grazer-stadion-ist-gefallen">Projekt 
                                Caro (Areal Roth Tankstelle)</a>, ... ) führen in Zukfunt zu mehr Verkehr auf
                            den klassischen Nord-Süd Achsen der Stadt und damit auch zu mehr Druck auf die
                            Schleichrouten durch unser Viertel (siehe auch 
                            <a href="#bauprojekte">Grafik unten</a>).
                        </li>
                    </ul>

                    <p><strong>Unsere Forderung:</strong></p>
                    <p>
                        Das Versetzen von Parkplätzen (Scheigergasse, Händelstraße) hatte praktisch keinen Effekt auf
                        den Verkehr (bestätigt durch Verkehrsmessungen). Wir fordern wirksame Maßnahmen zur Unterbindung
                        des Nord-Süd Durchzugsverkehrs. Hierfür sind insbesondere Maßnahmen in der Wittenbauerstraße,
                        der Scheigergasse, im Neufeldweg, und in der Schwarzenberggasse notwendig. Werden nicht alle
                        Nord-Süd-Verbindungen berücksichtigt, führt dies nur zu unerwünschten Verlagerungseffekten.

                    <p class="alert alert-info text-center font-weight-bold p-4 mb-4">
                        Aktuell wird das ORF Viertel als Zubringer zum Murkpark und zur Autobahn genutzt. Es ist
                        absehbar, dass dieser Verkehr immer mehr werden wird. Es sind wirksame Maßnahmen notwendig um
                        diesen Nord-Süd Durchzugsverkehr zu unterbinden. </p>

                    <h4>2. Ost-West Durchzugsverkehr Münzgrabenstraße &harr; St. Peter Hautpstraße</h4>

                    <p><strong>Das Problem:</strong></p>
                    <p>
                        Auf der Ostseite des Viertels gibt es nur einen Zugang zur Münzgrabenstraße, der keine
                        Vorrangstaße ist: die Harmsdorfgasse. Von der der Kreuzung Münzgrabenstraße/Harmsdorfgasse
                        nutzen viele AutofahrerInnen Schleichrouten durch unser Viertel. Eine Hauptroute führt via
                        Harmsdorfgasse und Händelstraße Richtung St. Peter Schulzentrum. Es gibt aber auch Routen
                        südlich des ORF Parks in Richtung Petrifelderstraße. </p>

                    <p><strong>Die Zukunft: </strong></p>
                    <p>
                        Es ist absehbar, dass auch der Ost-West Durchzugsverkehr weiter anwachsen wird. Konkret liegt
                        das insbesondere an den geplanten Bautätigkeiten im Westen des Viertels
                        (Conrad-von-Hötzendorf-Straße). Hier entstehen viele neue attraktive Ziele, die man gut quer
                        durch unser Viertel erreichen kann bzw. von denen ausgehend AutofahrerInnen auf die Ostseite des
                        ORF Viertels wollen werden (siehe auch 
                        <a href="#bauprojekte">Grafik unten</a>): <a href="https://www.ventagroup.com/de/projekte/graz-mitte/">Graz
                        Mitte</a>, <a
                            href="https://www.kleinezeitung.at/steiermark/graz/18940918/die-plaene-fuer-den-ausbau-der-merkur-arena-in-graz-liebenau">Ausbau
                        des Liebenauer Stadions</a>, <a href="https://www.haring-immobilien.at/mqg/">Messequadrant</a>,
                        <a href="https://www.kleinezeitung.at/steiermark/graz/19181105/startschuss-fuer-riesiges-bauprojekt-beim-grazer-stadion-ist-gefallen">Projekt 
                            Caro (Areal Roth Tankstelle)</a>, ... </p>
                    <p><strong>Unsere Forderung:</strong></p>
                    <p>
                        Wir fordern wirksame Maßnahmen zur Unterbindung des Ost-West Durchzugsverkehrs. Hierbei gibt es
                        potentielle Synergien mit der Unterbindung des Nord-Süd Durchzugsverkehrs, weil der Ost-West Durchzugsverkehr
                        auch immer eine Nord-Süd Komponente hat um nördlich oder südlich am ORF Park vorbei zu fahren.
                        An den Stellen wo es keine Synergien gibt, sind dezidierte Maßnahmen zur Unterbindung des Ost-West 
                        Durchzugsverkehrs notwendig.
                        

                    <p class="alert alert-info text-center font-weight-bold p-4 mb-4">
                        Aktuell wird das ORF Viertel von der Harmsdorfgasse Richtung St. Peter Hauptstraße auf mehreren
                        Routen durchquert (gilt auch in Gegenrichtung). Es ist absehbar, dass auch dieser Verkehr mehr
                        werden wird. Es sind wirksame Maßnahmen notwendig um diesen Verkehr zu unterbinden. </p>

                    <h4>3. Das ORF Viertel ist Ausweichroute für ampelgergelte Kreuzungen</h4>

                    <p><strong>Das Problem:</strong></p>
                    <p>
                        Es gibt lokale Ausweichrouten für Kreuzungen. Dabei wird nicht das ganze Viertel durchquert
                        sondern es wird nur eine Eckverbindung gemacht. Konkret: Man kann z.B. die Kreuzung St.Peter
                        Hauptstraße/Petrifelderstraße via Nußbaumerstraße und Marburgerstraße umfahren. Solche Routen
                        rund um die Marburger Straße basieren auf der expliziten Erlaubnis von Durchzugsverkehr in der
                        Marburger Straße im Bereich Nußbaumerstraße &harr; Petrifelderstraße und Brucknerstraße &harr;
                        Rosengasse. </p>
                    <p>
                        Eine solche Durchfahrt für den allgemeinen Verkehr ist aber eigentlich nicht notwendig: Die <a
                            href="https://www.jusline.at/gesetz/stvo/paragraf/67">Straßenverkehrsordnung (StVo) sieht
                        für Fahrradstraßen vor</a>: "In einer solchen Fahrradstraße ist außer dem Fahrradverkehr jeder
                        Fahrzeugverkehr verboten; ausgenommen davon ist das Befahren mit den in § 76a Abs. 5 genannten
                        Fahrzeugen (Anmerkung: Müllabfuhr, Krankentransport, ...) sowie das Befahren zum Zweck des Zu-
                        und Abfahrens." </p>
                    <p>

                    </p>
                    <p><strong>Die Zukunft: </strong></p>
                    <p>
                        Auch für dieses Thema gilt: Es ist nicht absehbar, dass dieser Ausweichverkehr weniger werden
                        wird. Es ist zu erwarten, dass er zu den Stoßzeiten weiter zunimmt. </p>
                    <p><strong>Unsere Forderung:</strong></p>
                    <p>
                        Wir fordern, dass durch Verkehrsmaßnahmen im Viertel, sowohl Durchzugsverkehr, als auch lokale
                        "Abkürzungen" rund um Kreuzungsbereiche unterbunden werden. </p>

                    <p class="alert alert-info text-center font-weight-bold p-4 mb-4">
                        Aktuell gibt es mehrere "Abkürzungen" durch das ORF Viertel mit den ampelgeregelte Kreuzungen
                        umfahren werden können. Es sind Verkehrsmaßnahmen notwendig, dass auch diese "Abkürzungen"
                        unterbunden werden. </p>
                </div>

            </div>
        </div>
    </section>

    <!-- Zukunft  ------------------------------------------------------------------------------------------->
    <section id="bauprojekte">
        <div class="container">
            <div class="row">
                <div class="col-12 mb-3">
                    <h1>Verkehrsrelevante Projekte rund um unser Viertel</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12 mb-3">
                    Die Bebauungsdichten in unserem Viertel werden höher. Gleichzeitig entstehen mehrere Großprojekte unmittelbar
                    rund um unser Viertel, die in Zukunft mehr Verkehr anziehen und den Druck auf den Verkehr in unseren
                    Straßen nochmals erhöhen werden.
                </div>
                <div class="col-12 mt-3 align-items-center">
                    <div class="text-center">
                        <img alt="Bauprojekte rund um unser Viertel" class="img-fluid w-75" src="bauprojekte.png"/>
                    </div>
                    <div class="text-center">
                        Die geplanten Projekte rund um unser Viertel
                    </div>
                </div>
                <div class="col-12 mt-5">
                    Weitere Detailinformation zu den einzelnen Projekten findet man unter anderem unter:
                    <ul class="mt-3">
                        <li>
                            <a href="https://www.kleinezeitung.at/steiermark/graz/18940918/die-plaene-fuer-den-ausbau-der-merkur-arena-in-graz-liebenau">Ausbaupläne
                                für die Merkur Arena</a></li>
                        <li>
                            <a href="https://www.kleinezeitung.at/steiermark/graz/19181105/startschuss-fuer-riesiges-bauprojekt-beim-grazer-stadion-ist-gefallen">Projekt 
                                Caro (Areal Roth Tankstelle)</a></li>
                        <li><a href="https://www.ventagroup.com/de/projekte/graz-mitte/">Projekt Graz Mitte</a></li>
                        <li>
                            <a href="https://www.architekturwettbewerb.at/competition/oebb-areal-ostbahnhof-raiffeisenstrasse/6400">ÖBB
                                Areal Ostbahnhof</a></li>
                        <li><a href="https://www.haring-immobilien.at/mqg/">Projekt Messequadrant Graz</a></li>
                        <li>
                            <a href="https://www.tugraz.at/tu-graz/services/news-stories/tu-graz-news/einzelansicht/article/masterplan-fuer-den-campus-inffeldgasse-der-tu-graz">
                                TU Campus Inffeldgründe</a></li>
                        <li>
                            <a href="https://www.graz.at/cms/dokumente/10084441_7758072/e29899e7/40%20FWP%20Broschüre.pdf">Bereich Emil-Ertl-Gasse im Flächenwidmungsplan
                                der Stadt Graz</a></li>
                        <li>
                            <a href="https://www.meinbezirk.at/graz/c-lokales/kein-zeitplan-fuer-kreisverkehr-in-der-petrifelderstrasse_a6488005">Kreisverkehr
                                Petrifelderstraße</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


    <!-- FAQ  ------------------------------------------------------------------------------------------->
    <section class="faq mt-5 pt-2" id="faq">
        <h1 class="display-5">Fragen und Antworten </h1>
        <div class="container">
            <div class="row pt-1">
                <div class="col-12">

                    <h4 class="mt-0">Wie kann man ein Viertel ohne Durchzugsverkehr umsetzen?</h4>
                    <p>Die Erkenntnis, dass man Wohnviertel nicht mit dem Auto durchqueren können sollte, ist nicht neu.
                        Ein Konzept der Verkehrsplanung, um große verkehrsberuhigte Wohnbereiche zu schaffen, stammt aus
                        Barcelona und nennt sich "Superblocks". Die Grundidee ist, Durchzugswege mit Wohnstraßen, Einbahnen, und 
                        modalen Filtern, d.h. mit Sperren wie Diagonalsperren, Poller, Pflanzkästen, etc., zu versehen, sodass der
                        Autoverkehr innerhalb des Viertels sich auf den unmittelbaren Verkehr durch AnrainerInnen
                        beschränkt. Das steigert die Wohnqualität nicht nur in einzelnen Straßen, sondern im ganzen
                        Viertel. </p>
                    <p>
                        Das Konzept Superblocks wird bereits in vielen Städten Europas umgesetzt, in Wien läuft es z.B.
                        unter dem Namen „Supergrätzl“. Auch der <a href="https://www.graz.at/cms/dokumente/10403377_12799279/6566d420/MP2040_Handlungsfelder_Massnahmen_fin.pdf">Mobilitätsplan 2040</a> für die Stadt Graz sieht die
                        Schaffung von großen, verkehrsberuhigten Quartieren nach dem Prinzip von Superblocks vor, auch
                        ganz konkret für das ORF Viertel. Es ist nicht sinnvoll, jetzt beim Errichten von Fahrradstraßen
                        temporäre, suboptimale Lösungen zu schaffen. Wir fordern eine Verkehrsberuhigung, die sofort
                        umgesetzt und sofort wirksam wird. </p>
                    <p>
                        <strong>Weiterführende Information:</strong>
                    </p>
                    <ul>
                        <li><a href="https://de.wikipedia.org/wiki/Superblock_(Stadtplanung)">Beschreibung von
                            Superblocks auf Wikipedia</a>
                        </li>
                        <li>
                            <a href="https://www.graz.at/cms/beitrag/10403377/12799279/Die_Inhalte_des_Mobilitaetsplan_Graz.html">Ziele
                                des Mobilitätsplans 2040 der Stadt Graz</a>
                        </li>
                    </ul>

                    <h4>Schränken Sperren für den Durchzugsverkehr die Mobilität von AnrainerInnen ein?</h4>
                    <p>Superblocks sind nichts Exotisches, nichts Neues, und sie funktionieren! Auch in Graz, auch in
                        unserer unmittelbaren Umgebung! Gehen Sie in die Straßen unmittelbar nördlich und südlich des
                        Petersbachs: Dort sorgen eine Reihe von modalen Sperren für verkehrsberuhigte Straßen, und die
                        BewohnerInnen dort haben keine Probleme zur Arbeit, zum Einkaufen, oder zu einem Arzt zu
                        kommen. </p>
                    <p>
                        Natürlich braucht es vom Viertel aus gute Anbindungen an die Hauptstraßen. Z.B. wäre es eine
                        Möglichkeit, dass die Kreuzung Brucknerstraße / Münzgrabenstraße mit einer vollständigen
                        Ampelregelung ausgebaut wird. Dieser Ausbau ist sowieso notwendig, weil die Bebauung immer
                        dichter wird und sonst vermehrt die Hamsdorfstraße genutzt wird, um stadtauswärts in die
                        Münzgrabenstraße zu gelangen. </p>
                    <h4>Sind die Hauptverbindungen nicht noch mehr verstopft, wenn es keine Durchfahrt durch das ORF
                        Viertel gibt?</h4>
                    <p>Jedes Auto, das aktuell durch unsere Straßen im ORF Viertel und dann stadteinwärts
                        weiterfährt, muss letztendlich entweder auf die Münzgrabenstraße, die Petersgasse oder die St.
                        Peter Hauptstraße, da nördlich des ORF Viertels kein Auto durch den TU Campus fahren kann. Gibt
                        es keine Durchfahrtsmöglichkeit durch unser Viertel, müssen die Autos lediglich früher auf die
                        Hauptverbindungen, auf denen sie sowieso landen würden. </p>
                    <p>
                        Auch Richtung Süden ist die Situation ähnlich, wo der bereits bestehende Superblock rund um den
                        Petersbach keine Durchfahrt mit dem Auto erlaubt.

                        <strong> Wichtig ist festzuhalten, dass es nicht die Funktion des ORF Viertels sein kann, die
                            Verkehrsbelastung auf den Vorrangstraßen zu lösen. </strong>

                    </p>
                    <h4>Gibt es Alternativen zur Errichtung eines Superblocks und der Unterbindung des
                        Durchzugsverkehrs?</h4>
                    <p>Wir sehen keine vernünftigen Alternativen. Jede andere Maßnahme würde die Situation für einen
                        Teil der AnwohnerInnen - wenn nicht sogar für alle - verschlechtern, und mehr Nachteile als
                        Vorteile für das Viertel bringen. Wir sind überzeugt, dass eine Unterbindung des
                        Durchzugsverkehrs für alle AnrainerInnen im Viertel die meisten Vorteile bringt. </p>
                    <p>
                        Wir sind aus diesem Grund auch gegen eine Wiederöffnung der Marburger Straße für den
                        Autoverkehr, wie von einigen gefordert wird. Eine Wiedereröffnung hätte massive Nachteile für
                        die dort ansässigen Bewohner. <strong>Wir wollen jedoch eine gute Lösung für ALLE
                        AnrainerInnen.</strong> Wir sind davon überzeugt, dass nicht nur der Durchzugsverkehr in der
                        Marburger Straße zurückkommen würde. Die neuen Ausweichrouten durch unser Viertel haben sich
                        mittlerweile leider etabliert. Bei einer Wiederöffnung der Marburger Straße würde die
                        Verkehrsbelastung in anderen Straßen in unserem Viertel trotzdem spürbar hoch bleiben. </p>
                    <p>
                        <strong>Solange es Möglichkeiten zur Durchfahrt durch unser Viertel gibt, werden sie genutzt
                            werden.</strong> Egal in welche Straßen man den Verkehr schiebt, die Routen sind unserer
                        Meinung nach zu attraktiv. Auch wegen der immer dichteren Bebauung in unserer Gegend und von
                        Großbauprojekten in der Umgebung (TU Campus, Liebenauer Stadion, Projekt Graz Mitte, ...)
                        braucht es eine tragfähige und zukunftsorientierte Lösung. Wir sind fest davon überzeugt, dass
                        nur eine vollständige Unterbindung des Durchzugsverkehrs Straßen mit hoher Lebensqualität und
                        eine faire Lösung für alle AnrainerInnen im Viertel schafft. </p>


                    <h4>Reicht die Errichtung von Fahrradstraßen im ORF Viertel zur Verkehrsberuhigung?</h4>
                    <p>
                        Wir stehen der Errichtung von Fahrradstraßen grundsätzlich positiv gegenüber, denn sie bieten in
                        vielerlei Hinsicht Vorteile: Sie führen nicht nur zu einer Verbesserung für den Radverkehr,
                        sondern erhöhen auch die Wohnqualität der unmittelbaren AnrainerInnen. </p>
                    <p>
                        Allerdings macht die bereits bestehende Fahrradstraße in der Marburger Straße sowie die geplante
                        Fahrradstraße Neufeldweg ein Problem sichtbar, das auch vorher bereits vorhanden war: Autofahrer
                        nutzen die Straßen unseres Viertels als attraktive Durchzugs- und Schleichrouten. Mit der
                        alleinigen Verkehrsberuhigung von einzelnen Straßenzügen durch Fahrradstraßen verteilt man
                        diesen Ausweichverkehr in andere Straßen im Wohngebiet um. Daher fordern wir eine ganzheitliche Lösung für
                        das gesamte ORF Viertel, von der alle AnrainerInnen profitieren. </p>
                    <p>Der Masterplan <a href="https://rad.graz.at/">Radoffensive Graz 2030</a> wurde 2021 von der Stadt
                        Graz und vom Land Steiermark beschlossen und wird nun schrittweise umgesetzt. Dieser Masterplan
                        sieht zwei Fahrradstraßen im ORF Viertel vor:</p>
                    <ul>
                        <li> Marburger Straße – bereits umgesetzt (<a
                                href="https://rad.graz.at/masterplan/">Masterplan</a> S. 174, Abschnitt 6)
                        </li>
                        <li>Neufeldweg – Umsetzung 2025 geplant (<a
                                href="https://rad.graz.at/masterplan/">Masterplan</a> S. 182, Abschnitt 3)
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </section>

    <!-- Mitmachen  ------------------------------------------------------------------------------------------->
    <section class="about" id="about">
        <h1 class="display-5" id="form">Jetzt unterstützen!</h1>
        <div class="container">
            <div class="row">
                <div class="col-12">


                    <!-- Meinung  -----------------------------------------------------------------------------------------
                    <section class="mt-5 pt-5" id="meinung">
                     <h1 class="display-5">Ihre Meinung zählt!</h1>
                     <div class="container mt-5">
                         <p>
                             Die Stadt Graz wird laut <a href="https://www.graz.at/cms/beitrag/10424814/7759964/">offizieller
                             Aussendung</a> in naher Zukunft einen Bürgerbeteiligungsprozess zum Thema Verkehrsberuhigung im ORF
                             Viertel starten. Wir wissen leider noch nicht, wie dieser Prozess genau ablaufen wird, aber jede Stimme
                             zählt! Je mehr von uns eine gerechte Verkehrsberuhigung für ALLE im ORF Viertel in der Form eines
                             Superblocks fordern, desto größer sind unsere Chancen, dass nicht wieder Insellösungen geschaffen werden
                             und Verkehr von einer Wohnstraße in die andere hin und her geschoben wird. Wir brauchen ein vernünftiges
                             Gesamtkonzept für das ORF Viertel in Form eines Superblocks! </p>
                         <p class="pt-4">
                             Wenn Sie sich am Ende dieser Seite für unseren <a href="#newsletter">Newsletter</a> eintragen, werden
                             wir Sie per Mail informieren, sobald der Beteiligungsprozess der Stadt startet, und wie Sie dort eine
                             Verkehrsberuhigung für ALLE einfordern können. </p>
                         <p class="pt-4">
                             Sie wollen bis dahin unser gemeinsames Anliegen sichtbar machen und ein Transparent an Ihrem Grundstück
                             anbringen? Wir helfen gerne. Anfragen bitte unter <a href="mailto:superblock@orf-viertel.at">superblock@orf-viertel.at</a>.
                         </p>
                     </div>
                 </section>
                 -->

                    <!-- Formular  ------------------------------------------------------------------------------------------->


                    <p class="mb-5">
                        Tragen Sie sich <?php echo "wie $count andere" ?> in unsere Liste von UnterstützerInnen
                        ein. Wir nutzen den Eintrag, um Sie zu informieren, sobald der Beteiligungsprozess startet.
                        Gleichzeitig schafft Ihr Eintrag eine Vernetzung von UnterstützerInnen im Viertel.</p>

                    <form accept-charset="utf-8" action="submit.php" method="POST">
                        <div class="row">
                            <div class="col-12 col-xl-6 mb-3">
                                <input class="form-control" id="vorname" name="vorname" placeholder="Vorname" required
                                       type="text">
                            </div>
                            <div class="col-12 col-xl-6 mb-3">
                                <input class="form-control" id="nachname" name="nachname" placeholder="Nachname"
                                       required type="text">
                            </div>
                            <div class="col-12 mb-3">
                                <input class="form-control" id="email" name="email" placeholder="E-Mail-Adresse"
                                       required type="email">
                            </div>
                            <div class="col-12 mb-3">
                                <input class="form-control" id="strasse" name="strasse"
                                       placeholder="Straße im ORF Viertel (optional)" type="text">
                            </div>
                            <div class="col-12 mb-2">
                                <small>Mit Ihrer Eintragung stimmen Sie zu, dass Ihre Daten elektronisch gespeichert
                                    werden. Wir verwenden Ihre Daten ausschließlich dazu, um Sie im Rahmen dieser
                                    Bürgerinitiative über aktuelle Entwicklungen und dem Start des
                                    Bürgerbeteiligungsprozesses zu informieren. </small>
                            </div>
                            <div class="col-12 p-5 mb-2 text-center">
                                <button class="btn btn-primary pl-5 pr-5" type="submit">Absenden</button>
                            </div>
                        </div>
                    </form>

                    <p class="alert alert-info text-center font-weight-bold p-4 mb-4">
                        Sie wollen auch Ihre Nachbarn erreichen? Drucken Sie unser Poster und hängen Sie es in Ihrem
                        Haus oder im Viertel auf!<br/><br/>

                        <a href="Superblock_A4.pdf"><img alt="Logo" class="img-fluid img-logo" src="Superblock_A4.png"
                                                         width="200"></a>

                        <br/><br/> Für ein größeres Transparent melden Sie sich unter <a
                            href="mailto:superblock@orf-viertel.at">superblock@orf-viertel.at</a>.

                    </p>

                    <h1 class="display-5" id="form">Die Bürgerinitiative</h1>
                    <p>
                        Die Initiatoren der Initiative sind Stefan Haberl, Stefan Mangard, und Dieter Preiß. </p>
                    <p>
                        Wir sind alle Anrainer im ORF Viertel und wollen uns als Bürger engagieren. Wir stehen keiner
                        politischen Partei nahe, sondern wollen uns viel mehr um eine bessere Lebensqualität für uns,
                        unsere Familien und für Sie als AnrainerInnen in unserem Viertel starkmachen, um die beste
                        Lösung für das aktuelle Verkehrsproblem unseres Viertels zu finden. </p>
                    <p>
                        Diese Initiative ist aus der Unterschriften Petition <a
                            href="https://mein.aufstehn.at/petitions/fahrradstrasse-marburger-strasse-ja-schleich-und-durchzugsverkehr-im-wohngebiet-nein-1">"Fahrradstraße
                        Marburger Straße: JA, Schleich- und Durchzugsverkehr im Wohngebiet: NEIN!"</a> entstanden, die
                        bereits von 800 Personen unterzeichnet wurde. Danke für Ihre großartige Unterstützung! Wir
                        werden weitermachen, bis eine akzeptable Lösung des Durchzugsverkehrs für alle gefunden und
                        umgesetzt ist. </p>

                    </p>

                    <p>
                        Sie wollen mitmachen? Wir freuen uns über jede helfende Hand! Melden sie sich einfach via <a
                            href="mailto:superblock@orf-viertel.at">superblock@orf-viertel.at</a>. </p>


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
                        &copy; Bürgerinitiative "Superblock ORF Viertel" Initiatioren: Stefan Haberl, Stefan Mangard,
                        Dieter Preiß Email: <a href="mailto:superblock@orf-viertel.at">superblock@orf-viertel.at</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>


</body>
</html>
