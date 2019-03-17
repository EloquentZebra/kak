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


    <h2>Kurteam</h2>
    <p>«Ihr persönlicher Fortschritt steht in unserem Zentrum.»</p>

    <section class="row kl">

      <article class="bg-white col-3 pc-container">
        <h3>Iwan</h3>
        <img src="img/personen/avatar-m.png" alt="Emanuel Wyss / Tschagon" class="pc-img">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint, reiciendis non repellat doloremque exercitationem at nisi minima, animi nobis distinctio sequi perferendis rerum rem numquam dignissimos sapiente iste natus nemo.</p>
      </article>

      <article class="bg-white col-3 pc-container">
        <h3>Katinka</h3>
        <img src="img/personen/avatar-f.png" alt="Emanuel Wyss / Tschagon" class="pc-img">
        <p>Wenig Text</p>
      </article>

      <article class="bg-white col-3 pc-container">
        <h3>Olga</h3>
        <img src="img/personen/avatar-f.png" alt="Emanuel Wyss / Tschagon" class="pc-img">
        <p>Test-Text-Mit-E-Mail</p>
        <p><a href="mailto:info@klinik-am-klausenpass.ch">info@klinik-am-klausenpass.ch</a></p>
      </article>

    </section>

    <section class="row kl">

      <article class="bg-white col-2 pc-container">
        <h3>Bodgan</h3>
        <img src="img/personen/avatar-m.png" alt="Emanuel Wyss / Tschagon" class="pc-img">
        <p>«Für ihr körperliches Wohlbefinden schwinge ich nicht nur den Kochlöffel.»</p>
      </article>

      <article class="bg-white col-2 pc-container">
        <h3>Igor</h3>
        <img src="img/personen/avatar-m.png" alt="Emanuel Wyss / Tschagon" class="pc-img">
        <p>«Für ihr körperliches Wohlbefinden schwinge ich nicht nur den Kochlöffel.»</p>
      </article>

      <article class="bg-white col-2 pc-container">
        <h3>Kai Uwe</h3>
        <img src="img/personen/avatar-m.png" alt="Emanuel Wyss / Tschagon" class="pc-img">
        <p>«Für ihr körperliches Wohlbefinden schwinge ich nicht nur den Kochlöffel.»</p>
      </article>

      <article class="bg-white col-2 pc-container">
        <h3>?</h3>
        <img src="img/personen/avatar-m.png" alt="Emanuel Wyss / Tschagon" class="pc-img">
        <p>«Für ihr körperliches Wohlbefinden schwinge ich nicht nur den Kochlöffel.»</p>
      </article>

    </section>

    <h2>Küchencrew</h2>
    <p>«Ihr leibliches Wohl steht an unserer ersten Stelle.»</p>

    <section class="row kueche">

      <article class="bg-white col-3 pc-container">
        <h3>Tschagon</h3>
        <img src="img/personen/tsa.jpg" alt="Emanuel Wyss / Tschagon" class="pc-img">
        <p>«Für ihr körperliches Wohlbefinden schwinge ich nicht nur den Kochlöffel.»</p>
      </article>

      <article class="bg-white col-3 pc-container">
        <h3>Lembas</h3>
        <img src="img/personen/avatar-m.png" alt="Jonas Schöni / Lembas" class="pc-img">
        <p>«Für ihr körperliches Wohlbefinden schwinge ich nicht nur den Kochlöffel.»</p>
      </article>

      <article class="bg-white col-3 pc-container">
        <h3>Eyja</h3>
        <img src="img/personen/avatar-f.png" alt="Linda Brunner / Eyja" class="pc-img">
        <p>«Für ihr körperliches Wohlbefinden schwinge ich nicht nur den Kochlöffel.»</p>
      </article>

    </section>

    <section class="row kueche">
      <article class="bg-white col-3 pc-container">
        <h3>Aragorn</h3>
        <img src="img/personen/avatar-m.png" alt="Robin Keller / Aragorn" class="pc-img">
        <p>«Für ihr körperliches Wohlbefinden schwinge ich nicht nur den Kochlöffel.»</p>
      </article>
    </section>

  
    <?php
      include('includes/footer.php');
      include('includes/scripts.php');
    ?>

  </div>

</body>
</html>
