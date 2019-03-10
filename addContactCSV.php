<?php
  $page_name = 'Erfolgreich';
  $page_title = 'Wir haben Ihre Informationen notiert.';
  $page_zitat = '';
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

  <title>Home - Klinik am Klausenpass</title>

  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/framework.css">
  <link rel="stylesheet" href="css/style.css">

</head>
<body>

  <?php include 'includes/navigation.php'; ?>

    <main class="container">

    <?php
      //read data from form
      $name = filter_input(INPUT_POST, "name");
      $pfadiname = filter_input(INPUT_POST, "pfadiname");
      $email = filter_input(INPUT_POST, "email");
      $tel = filter_input(INPUT_POST, "tel");
      $vortreff = filter_input(INPUT_POST, "vortreff");

      $output = $name . ";";
      $output .= $pfadiname . ";";
      $output .= $email . ";";
      $output .= $tel . ";";
      $output .= $vortreff . "\n";
      //open file for output
      $fp = fopen("contacts.csv", "a");
      //write to the file
      fwrite($fp, $output);
      fclose($fp);
    ?>

    <section class="row">
      <article class="bg-white col">
        <h2>Besten Dank für Ihre Anmeldung.</h2>

        <?php 
          if($vortreff == 'dabei') {
            echo '
              <p>Wir freuen uns, Sie in Bälde persönlich kennen zu lernen.</p>
              <p>Treffpunkt für den Wellness-Apéro ist am <strong>Montag, 25. März 2019</strong> um <strong>19:00 Uhr</strong> in der <strong><a href="https://maps.google.com?q=Bruderholzallee+140,+4059+Basel" target="_blank">Bruder Klaus Kirche, Bruderholzallee 140, 4059 Basel</a></strong>.</p>
              <p>Das einzige was Sie für diesen entspannten Abend mitbringen sollen, sind aus hygienischen Gründen ein eigenes farbiges Halstuch (auch als Pfadifoulard bekannt) sowie einen Terminplaner um Ihre individuellen Kurbausteine zu planen.</p>
              ';
          } elseif ($vortreff == 'nicht-dabei') {
            echo '<p>Schade, dass Sie am Vortreff verhindert sind. Bitte nehmen Sie diesbezüglich mit der Kurleitung Kontakt auf (<a href="mailto:info@klinik-am-klausenpass.ch">info@klinik-am-klausenpass.ch</a>).</p>';
          }
        ?>

      </article>
    </section>

    </main>

</body>
</html>
