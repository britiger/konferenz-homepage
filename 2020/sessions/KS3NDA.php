<!doctype html>
<html lang="de">

<head>
	<?php include "../inc/meta.inc"; ?>

	<base href="<?php echo dirname($_SERVER['SCRIPT_NAME']); ?>">
	<title>Vorbereitung einer Großveranstaltung mit QGIS und QField - Der Rheinland-Pfalztag 2019 in Annweiler – FOSSGIS 2020</title>

	<link rel="stylesheet" href="./css/normalize.css">
	<link rel="stylesheet" href="./css/base.css">
	<link rel="stylesheet" href="./css/print.css" media="print">
</head>

<body id="programm">
	<?php include "../inc/header.inc"; ?>

        <!-- This file was generated by a script. Do not edit this file in Git,
             edit contents in Pretalx, regenerate the PHP files and commit them
             in the Git repository of the website. -->
        <p><a href="programm/donnerstag.php#session_KS3NDA">&#9668;&#9668; zurück zum Programm</a> </p>
        <h2 class='abstract-title'>Vorbereitung einer Großveranstaltung mit QGIS und QField - Der Rheinland-Pfalztag 2019 in Annweiler</h2>
        <section>
            <p>
                                <span class='abstract-speakers'>Jelto Buurman, Jan Klein</span></p>
                            <p><span class='abstract-time-heading'>Zeit: </span>Donnerstag 12. März 09:00 Uhr<br><span class='abstract-room-heading'>Ort: </span>HS Rundbau</p>

            
            <p>Im Juli 2018 fand bei den Stadtwerken in Annweiler eine Besprechung statt, mit dem Ziel, eine GIS Unterstützung für die Vorbereitung des Pfalztages 2019 zu besprechen. Beteiligte waren die Stadtwerke Annweiler, als Organisator vor Ort, die Staatskanzlei des Landes Rheinland Pfalz als übergeordneter Organisator und die Firma norBIT GmbH als GIS Dienstleister. Folgende Aufgaben sollten vom GIS gelöst werden</p>
<ul>
<li>Aufnahme des Straßenmobiliars und aller Hindernisse für Standflächen und Fluchtwege</li>
<li>Als Nebenprodukt : Aufnahme der Schieber, Hausabsteller und Hydranten des Wasserleitungsnetzes der Stadtwerke</li>
<li>Durchführung der Planungen für Bühnen, Stände etc. incl. Berücksichtigung eines Durchfahrt Korridors für die Feuerwehr</li>
<li>Erstellen von Listen</li>
<li>Erstellen von Planunterlagen</li>
</ul>
<h3>Erfassung des Straßenmobiliars</h3>
<p>Die Erfassung des Straßenmobiliars wurde mit dem Trimble „Catalyst“ System durchgeführt. Dabei handelt es sich um ein GPS Lösung, die mit einer Zusatzantenne zu einem Android Gerät, unter zu Hilfenahme von Korrekturdaten und Onlinealgorithmen eine Vermessungsgenauigkeit von 2-3 cm bietet. 
Als Oberfläche für die Erfassung wurde QField genutzt. Indem das interne GPS per „Mockup“ durch die Trimble Lösung ersetzt wird, kann man Daten in QField mit der oben beschriebenen Genauigkeit erfassen. Die Datenstrukturen wurden in QGIS erstellt und mit dem mobilen Gerät ausgetauscht. Zu diesem Zwecke wurden die Tabellen für die Datenerfassung sowie die zugehörige Symbolisierung und die Eingabemaske in einem Geopackage erzeugt. Bei der Erfassung muss dann nur noch die entsprechende Objektart aus einer Auswahlliste ausgewählt werden.
Im Oktober wurde dann die Erfassung in einem eintägigen Workshop geschult. Dann wurde die Erfassung des Straßenmobiliars innerhalb von 4 Wochen von den Kollegen der Stadtwerke in Eigenregie durchgeführt. 
Insgesamt wurden folgende Objekte erfasst:
Punktobjekte:       2628
Linienobjekte:       170
Flächenobjekte:        45
 </p>
<h3>Erstellen des Durchfahrt Korridors, Fachschaleninformationen</h3>
<p>Annweiler ist ein altes Städtchen mit engen Gassen. Deshalb ist es eine besondere Hausforderung, Stände etc. zu planen und dabei einen Korridor von 3,5m Breite für die Feuerwehr freizuhalten. Deshalb wurde der Bordstein gegenüber den zu planenden Ständen ebenfalls aufgemessen, und dann durch Bufferbildung eine entsprechende Fläche erzeugt.</p>
<p>Weitere Hintergrunddaten wurden aus den norGIS Fachschalen für Wasser, Strom und Kanal in die Planungen eingeführt. Diese wurden mit dem norGIS Plugin für QGIS in QGIS eingebunden und dann wurde ein Snapshot in einem Geopackage gesichert, um die Daten auch offline verfügbar zu haben.
 </p>
<h3>Datenmodell für die Planungen und Datenerfassung</h3>
<p>Ebenfalls in ein Geopackage wurden die Tabellen (Layer) für die Planungen modelliert. Als Anregungen dienten Unterlagen, die bei einer entsprechenden Veranstaltung des Jahres 2018 benutzt wurden.
In ca. 50 Tabellen wurden ca. 200 Objekttypen definiert. Dabei wurde nicht nur die Symbolisierung festgelegt, wie bei der Erfassung des Straßenmobiliars sondern auch, wie die Attribute die für die verwaltungstechnische Abwicklung der Veranstaltung notwendig sind, wie z.B.  Adressen von Standverantwortlichen etc. 
Auch wurden Infrastrukturelemente, wie z.B. Wasserzähler etc. nicht nur graphisch dargestellt, sondern auch durch Verknüpfungen mit den entsprechenden Ständen etc. verknüpft so dass später die notwendigen Planungslisten direkt aus der Datenbank erzeugt werden konnten.</p>
<h3>Auswertung und Plots</h3>
<p>Zur Organisation der Planungen wurden aus der Datenbank verschiedene Listen und Pläne erzeugt. 
Die Listen wurden durch Export der Attributtabellen nach EXCEL erzeugt.  Hier wurden die Daten nötigenfalls weiter aufbereitet.
Beispielsweise wurden verschiedene Listen der Stände und deren Infrastruktur erzeugt:
Liste aller Stände, Standlisten für die Themengebiete sowie deren Infrastruktur wie. z.B. LAN-, Strom- und Wasseranschlüsse oder Listen mit anderen Infrastrukturelementen wie Kameras, Infopunkte, Absperrgitter und deren Materialverbrauch, Notausganganalyse und vieles mehr.
Die Erzeugung der Pläne wurde mit QGIS durchgeführt, wobei auch verschiedene Planblattschnitte mit der Atlas-Funktion erzeugt wurden.</p>
<h3>Verortung der Planelemente</h3>
<p>In der unmittelbaren Vorbereitung des Pfalztages wurden die Planungselemente z.B. die Stände in der vor Ort auf den Strassen markiert, so dass die Stände genau entsprechend der Planungen aufgebaut werden konnte. Am Donnerstag vor Beginn der Veranstaltung erwies sich dann der Bestand der Planungen als die Feuerwehr mit der Drehleiter an den Ständen vorbei durch die Stadt fahren konnte.</p>
        </section>


	<?php include "../inc/footer.inc"; ?>

</body>

</html>