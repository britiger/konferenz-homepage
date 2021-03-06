<!doctype html>
<html lang="de">

<head>
	<?php include "../inc/meta.inc"; ?>

	<base href="<?php echo dirname($_SERVER['SCRIPT_NAME']); ?>">
	<title>Micro-Service Geo-Daten-Infrastrukturen mit Docker – FOSSGIS 2020</title>

	<link rel="stylesheet" href="./css/normalize.css">
	<link rel="stylesheet" href="./css/base.css">
	<link rel="stylesheet" href="./css/print.css" media="print">
</head>

<body id="programm">
	<?php include "../inc/header.inc"; ?>

        <!-- This file was generated by a script. Do not edit this file in Git,
             edit contents in Pretalx, regenerate the PHP files and commit them
             in the Git repository of the website. -->
        <p><a href="programm/donnerstag.php#session_T3MNRR">&#9668;&#9668; zurück zum Programm</a> </p>
        <h2 class='abstract-title'>Micro-Service Geo-Daten-Infrastrukturen mit Docker</h2>
        <section>
            <p>
                <span class='abstract-sessiontype'>Workshop</span> von                <span class='abstract-speakers'>Stephan Herritsch, Arne Schubert</span></p>
                <p class='abstract-is-workshop'>Bitte melden Sie sich im <a href="https://pretix.eu/fossgis/2020/">Ticketshop</a> für diesen Workshop an, wenn Sie daran teilnehmen möchten. Workshopbuchungen sind auch nach der Ticketbuchung online und auf der Konferenz möglich.</p>            <p><span class='abstract-time-heading'>Zeit: </span>Donnerstag 12. März 10:00 Uhr<br><span class='abstract-room-heading'>Ort: </span>SR R-100</p>

            
            <p>Die Vorteile von Micro-Services mit Docker sind insbesondere die Plattformunabhängigkeit, die Skalierbarkeit des selben Dienstes auf beliebig vielen Servern, die Backupfähigkeit, sowohl der Daten als auch der Infrastruktur, und die Updatefähigkeit. Durch diese Vorteile kann auch ein einfaches Deployment gewährleistet werden.</p>
<p>Vielen ist nicht bewusst, dass Micro-Services sich auch ideal eigenen, um einzelne Komponenten einer GDI auszutauschen, wenn auch nur für Testzwecke.
Zudem kann man mit Docker die gleiche Serverumgebung als lokale Test- und Entwicklungsumgebung ausführen, die sich technisch nicht von der Produktiven unterscheidet!</p>
<p>Das YAGA Development Team hat eine Vielzahl an Docker-Images von PostGIS über GeoServer bis hin zu einem geo-optimierten Solr bereits erstellt und OpenSource veröffentlicht.</p>
<p>In dem Workshop soll den Teilnehmern zunächst eine Grundeinführung in Docker gegeben werden, so dass keine Vorkenntnisse über Docker nötig sind.</p>
<p>Danach soll Schritt für Schritt eine GDI mit Hilfe von Docker aufgebaut und skaliert werden. Angefangen vom einfachen Tile Cache, über einen GeoServer mit PostGIS Anbindung, bis hin zum graphischen Frontend. Im Vergleich zu den vorherigen Kursen wird auf Service-Discovery im Zusammenspiel mit Traefik, einer moderneren alternative zu Apache und nginx, als Reverse-Proxy eingegangen.</p>
<p>Kenntnisse über Bash Skripte und Grundlagen von Netzwerken (Ports, IPs, Hostnamen etc.) sind jedoch von Vorteil. Wie gewohnt wird es wieder Kursmaterial zum Mitnehmen geben.</p>
        </section>


	<?php include "../inc/footer.inc"; ?>

</body>

</html>