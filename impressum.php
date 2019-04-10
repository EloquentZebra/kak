<?php
  include('includes/vars.php');
  $page_name = 'Impressum';
  $page_title = $page_name;
  $page_zitat = 'Rechtliches';
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- <meta http-equiv="Content-Security-Policy" content="default-src 'self'"> -->
  <meta name="robots" content="noindex,nofollow"><!-- All Search Engines -->
  <meta name="googlebot" content="noindex,nofollow"><!-- Google Specific -->
  <meta name="description" content="Klinik am Klausenpass - Ihr Kurhaus in der Innerschweiz">

  <title><?php echo $page_name; ?> - Klinik am Klausenpass</title>

  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/framework.css">
  <link rel="stylesheet" href="css/style.css?v=<?php echo $css_version;?>">

  <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
  <link rel="manifest" href="img/favicon/site.webmanifest">
  <link rel="mask-icon" href="img/favicon/safari-pinned-tab.svg" color="#8bc34a">
  <link rel="shortcut icon" href="img/favicon/favicon.ico">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-config" content="img/favicon/browserconfig.xml">
  <meta name="theme-color" content="#8bc34a">
</head>
<body>
  <?php include 'includes/navigation.php'; ?>

  <main class="container">

  <?php include('includes/header.php'); ?>

  <section class="row">
    <article class="col bg-white">
      <h2>Impressum</h2>
      <p>Verantwortlich für den Inhalt der Seite:</p>
      <p>
        PBS CH BS 211-19<br>
        c/o Pfadi Region Basel<br>
        4000 Basel
      </p>
      <p><a href="mailto:info@klinik-am-klausenpass.ch">info@klinik-am-klausenpass.ch</a></p>

      <h2>Disclaimer</h2>
      <p>Alle Texte und Links wurden sorgfältig geprüft und werden laufend aktualisiert. Wir sind bemüht, richtige und vollständige Informationen auf dieser Website bereitzustellen, übernehmen aber keinerlei Verantwortung, Garantien oder Haftung dafür, dass die durch diese Website bereitgestellten Informationen, richtig, vollständig oder aktuell sind. Wir behalten uns das Recht vor, jederzeit und ohne Vorankündigung die Informationen auf dieser Website zu ändern und verpflichten uns auch nicht, die enthaltenen Informationen zu aktualisieren. Alle Links zu externen Anbietern wurden zum Zeitpunkt ihrer Aufnahme auf ihre Richtigkeit überprüft, dennoch haften wir nicht für Inhalte und Verfügbarkeit von Websites, die mittels Hyperlinks zu erreichen sind. Für illegale, fehlerhafte oder unvollständige Inhalte und insbesondere für Schäden, die durch Inhalte verknüpfter Seiten entstehen, haftet allein der Anbieter der Seite, auf welche verwiesen wurde. Dabei ist es gleichgültig, ob der Schaden direkter, indirekter oder finanzieller Natur ist oder ein sonstiger Schaden vorliegt, der sich aus Datenverlust, Nutzungsausfall oder anderen Gründen aller Art ergeben könnte.</p>

      <h2>Datenschutz</h2>
      <p>Für die Sicherheit der Datenübertragung im Internet können wir keine Gewähr übernehmen, insbesondere besteht bei der Übertragung von Daten per E-Mail die Gefahr des Zugriffs durch Dritte.</p>
      <p>Einer Nutzung der im Impressum veröffentlichten Kontaktdaten durch Dritte zu Werbezwecken wird hiermit ausdrücklich widersprochen. Der Betreiber behält sich für den Fall unverlangt zugesandter Werbe- oder Informationsmaterialien ausdrücklich rechtliche Schritte vor.</p>
      <p>Wenn Sie die Webseite der Barotte besuchen, übermittelt Ihr Browser systembedingt gewisse Informationen an den Server, die Sie wiederum identifizierbar machen könnten.</p>
      <p>Wir erheben, verarbeiten oder nutzen die übermittelten Informationen nicht zu Analyse-, Werbezwecken oder Ähnlichem. Vielmehr verwenden wir diese Informationen – entsprechend der Gesetzesintention -, nur zum Zweck der Aufrechterhaltung des Webservices. Wenn dieser Zweck erreicht ist, werden diese Informationen umgehend automatisiert gelöscht. Zur Diensterbringung werden folgende Informationen vom Webserver verarbeitet:</p>
      <ul>
        <li>Datum und Uhrzeit des Aufrufs</li>
        <li>Aufgerufene Seite</li>
        <li>Die verwendete Browser-Version</li>
        <li>Das verwendete Betriebssystem</li>
        <li>Verweisende URL</li>
        <li>Name einer abgerufenen Datei (bspw. PDF)</li>
      </ul>
    </article>
  </section>

  </main>
  
    <?php
      include('includes/footer.php');
      include('includes/scripts.php');
    ?>
</body>
</html>