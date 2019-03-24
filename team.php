<?php
  include('includes/vars.php');
  $page_name = 'Ihr Team';
  $page_title = $page_name;
  $page_zitat = 'Nebst hervorragend ausgebildeten Ärzten bieten wir Ihnen Tag ein, Tag aus den höchstmöglichen Service.';
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

  <title><?php echo($page_name); ?> - Klinik am Klausenpass</title>

  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/framework.css">
  <link rel="stylesheet" href="css/style.css?v=<?php echo $css_version;?>">

</head>
<body>

  <?php include 'includes/navigation.php'; ?>

    <main class="container">

    <?php include('includes/header.php'); ?>


    <h2>Klinikleitung</h2>
    <p>«Ihr persönlicher Fortschritt steht in unserem Zentrum.»</p>

    <section class="row kl">

      <article class="bg-white col-3 pc-container">
        <h3>Iwan</h3>
        <img src="img/personen/iwan.jpg" alt="Iwan" class="pc-img">
        <p>Gründer und heute Co-Leitung der <i>Klinik am Klausenpass</i>.</p>
      </article>

      <article class="bg-white col-3 pc-container">
        <h3>Katinka</h3>
        <img src="img/personen/avatar-f.png" alt="Katinka" class="pc-img">
        <p>Das Herz der Unternehmung - und Iwans Eherfrau.</p>
      </article>

      <article class="bg-white col-3 pc-container">
        <h3>Olga</h3>
        <img src="img/personen/olga.jpg" alt="Olga" class="pc-img">
        <p>Co-Leitung <i>Klinik am Klausenpass</i> - und Tochter von Iwan.</p>
      </article>

    </section>

    <section class="row kl">

      <article class="bg-white col-2 pc-container">
        <h3>Bodgan</h3>
        <img src="img/personen/bogdan.jpg" alt="Bogdan" class="pc-img">
        <p>Die erste stets helfende Hand.</p>
      </article>

      <article class="bg-white col-2 pc-container">
        <h3>Igor</h3>
        <img src="img/personen/igor.jpg" alt="Igor" class="pc-img">
        <p>Die zweite stets helfende Hand.</p>
      </article>

      <article class="bg-white col-2 pc-container">
        <h3>Kai Uwe</h3>
        <img src="img/personen/kaiuwe.jpg" alt="Kai Uwe" class="pc-img">
        <p>Als Olgas Ehemann mit den administrativen Angelegenheiten der <i>KaK</i> betraut.</p>
      </article>

      <article class="bg-white col-2 pc-container">
        <h3>Nathalia</h3>
        <img src="img/personen/nathalia.jpg" alt="Nathalia" class="pc-img">
        <p></p>
      </article>

    </section>

    <h2>Pflegerteam</h2>

    <section class="row pfleger">

      <article class="bg-white col-9 pc-container">
        <img src="img/personen/pfleger.jpg" alt="Pflegerteam">
      </article>

      <article class="bg-white col-2 pc-container">
        <p>Tagein, tagaus kümmeren wir, das Pflegerteam der <i>KaK</i>, uns kompetent um ihre Wünsche, Befinden und Anliegen.</p>
      </article>

    </section>

    <h2>Küchencrew</h2>
    <p>«Ihr leibliches Wohl steht an unserer ersten Stelle.»</p>

    <section class="row kueche">

      <article class="bg-white col-3 pc-container">
        <h3>Lembas</h3>
        <img src="img/personen/avatar-m.png" alt="Jonas Schöni / Lembas" class="pc-img">
        <p>«Denk immer dran: Das Messer ist niemals schuld!»</p>
      </article>

      <article class="bg-white col-3 pc-container">
        <h3>Eyja</h3>
        <img src="img/personen/avatar-f.png" alt="Linda Brunner / Eyja" class="pc-img">
        <p>«Köche machen keine Fehler, sie erfinden neue Rezepte.»</p>
      </article>

      <article class="bg-white col-3 pc-container">
        <h3>Tschagon</h3>
        <img src="img/personen/tsa.jpg" alt="Emanuel Wyss / Tschagon" class="pc-img">
        <p>«Für ihr körperliches Wohlbefinden schwinge ich nicht nur den Kochlöffel.»</p>
      </article>

    </section>

    <section class="row kueche">
      <article class="bg-white col-3 pc-container">
        <h3>Aragorn</h3>
        <img src="img/personen/ara.jpg" alt="Robin Keller / Aragorn" class="pc-img">
        <p>«Viele Menschen haben das Essen verlernt. Sie können nur noch schlucken.»</p>
      </article>
    </section>

  
    <?php
      include('includes/footer.php');
      include('includes/scripts.php');
    ?>

  </div>

</body>
</html>
