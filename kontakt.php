<?php
  $page_name = 'Kontakt';
  $page_title = $page_name;
  $page_zitat = '«Wir begleiten Menschen auf dem Weg zur Genesung und zurück in ein aktives Leben.»';


?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- <meta http-equiv="Content-Security-Policy" content="default-src 'self'"> -->
  <meta name="robots" content="index,follow"><!-- All Search Engines -->
  <meta name="googlebot" content="index,follow"><!-- Google Specific -->
  <meta name="description" content="Klinik am Klausenpass - Ihr Kurhaus in der Innerschweiz">

  <title><?php echo $page_name; ?> - Klinik am Klausenpass</title>

  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/framework.css">
  <link rel="stylesheet" href="css/style.css?v=1.2">

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
        <h2 id="anmeldung">Anmeldung Wellness-Apéro</h2>

        <form action="kontakt2.php" method="POST">
          <label for="name">Name</label>
          <input type="text" name="name" id="name" required>

          <label for="pfadiname">Pfadiname</label>
          <input type="text" name="pfadiname" id="pfadiname" required>

          <label for="email">E-Mail-Adresse</label>
          <input type="email" name="email" id="email" required>

          <label for="tel">Telefon</label>
          <input type="tel" name="tel" id="tel" required>

          <label for="vortreff">Vortreff *</label>

          <label class="label">Ich bin dabei
            <input type="radio" name="vortreff" id="dabei" value="dabei" checked="checked">
            <span class="checkmark"></span>
          </label>

          <label class="label">Ich bin leider nicht dabei
            <input type="radio" name="vortreff" id="nicht-dabei" value="nicht-dabei">
            <span class="checkmark"></span>
          </label>

          <p class="text-small">* verbindliche Anmeldung für obligatorischen Wellness-Apéro.</p>

          <input type="submit">

        </form>
      </article>
    </section>

    <section class="row">
      <article class="col bg-white">
        <h2>Kontakt</h2>
        <p>Sollten Sie Fragen haben, welche wir Ihnen auf dieser Internetseite nicht beantworten konnten, dann zögern Sie nicht sich bei uns zu melden.</p>
        <p>Unsere Reception ist unter der E-Mail-Adresse <a href="mailto:info@klinik-am-klausenpass.ch">info@klinik-am-klausenpass.ch</a> oder unter der Nummer +41 79 602 27 89 erreichbar.</p>
        
      </article>
    </section>

  </main>
  
    <?php
      include('includes/footer.php');
      include('includes/scripts.php');
    ?>


</body>
</html>