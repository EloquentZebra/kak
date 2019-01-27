<?php
  $page_name = 'Ihr Team';
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
  <link rel="stylesheet" href="css/style.css">

</head>
<body>

  <div class="hero">
        <div class="container hero-content shadow-3">
            <h1><?php echo($page_name); ?></h1>      
        </div>
    </div>

  <div class="top-banner shadow-2">
    <?php include('includes/navigation.php'); ?>
  </div>

  <div class="main-wrapper" id="main">
    
    <section class="main subnav container shadow-1" id="nav">
          <article>
          <a href="#kurteam">Für ihre Betreueng: das Team der KAK</a>
          <a href="#kueche">Für Ihr leibliches Wohl: das Küchenteam</a>
          </article>
        </section>


    <section class="main container shadow-1" id="team">
      <article>
        <h2>Ihr Kurteam</h2>
        <blockquote>Ihr persönlicher Fortschritt steht in unserem Zentrum.</blockquote>
        <div class="team-karte">
          <div class="team-bild">
            <img src="img/team-placeholder.svg" alt="Placeholder">
          </div>
          <div class="team-content">
            <h3>Max Mustermann</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta dolor iure, sapiente fugiat ipsa numquam ad et. Nostrum quibusdam voluptatibus vero eligendi placeat. Cumque consectetur velit, nobis ipsa suscipit dicta.</p>
          </div>
          <div class="team-mail">
            <a href="#">xy@klinik-am-klausenpass.ch</a>
          </div>
        </div>

        <div class="clear"></div>
      </article>
    </section>

    <section class="main container shadow-1" id="kueche">
      <article>
        <h2>Ihr Küchenteam</h2>
        <blockquote>
          Wir kümmern uns kompetent, zuverlässig und vielseitig um ihr leibliches Wohl.
        </blockquote>

        <div class="team-karte"> <!-- Karte 1 -->
          <div class="team-bild">
            <img src="img/team_placeholder.svg" alt="Placeholder">
          </div>
          <div class="team-content">
            <h3>Max Mustermann</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem laboriosam officia reiciendis eligendi voluptate sit at itaque, dolorem, ipsam praesentium ducimus vel, commodi delectus. Saepe quas doloribus debitis eius fuga.</p>
          </div>
          <div class="team-mail">
            <p><a href="#">info@klinik-am-klausenpass.ch</a></p>
          </div>
        </div> <!-- Karte 1 Ende -->

        <div class="team-karte"> <!-- Karte 2 -->
          <div class="team-bild">
            <img src="img/team_placeholder.svg" alt="Placeholder">
          </div>
          <div class="team-content">
            <h3>Max Mustermann</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem laboriosam officia reiciendis eligendi voluptate sit at itaque, dolorem, ipsam praesentium ducimus vel, commodi delectus. Saepe quas doloribus debitis eius fuga.</p>
          </div>
          <div class="team-mail">
            <p><a href="#">info@klinik-am-klausenpass.ch</a></p>
          </div>
        </div> <!-- Karte 2 Ende -->

        <div class="team-karte"> <!-- Karte 3 -->
          <div class="team-bild">
            <img src="img/team_placeholder.svg" alt="Placeholder">
          </div>
          <div class="team-content">
            <h3>Max Mustermann</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem laboriosam officia reiciendis eligendi voluptate sit at itaque, dolorem, ipsam praesentium ducimus vel, commodi delectus. Saepe quas doloribus debitis eius fuga.</p>
          </div>
          <div class="team-mail">
            <p><a href="#">info@klinik-am-klausenpass.ch</a></p>
          </div>
        </div> <!-- Karte 3 Ende -->

        <div class="team-karte"> <!-- Karte 4 -->
          <div class="team-bild">
            <img src="img/team_placeholder.svg" alt="Placeholder">
          </div>
          <div class="team-content">
            <h3>Max Mustermann</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem laboriosam officia reiciendis eligendi voluptate sit at itaque, dolorem, ipsam praesentium ducimus vel, commodi delectus. Saepe quas doloribus debitis eius fuga.</p>
          </div>
          <div class="team-mail">
            <p><a href="#">info@klinik-am-klausenpass.ch</a></p>
          </div>
        </div> <!-- Karte 4 Ende -->

        
        
        <div class="clear"></div>

      </article>
    </section>
  
    <?php
      include('includes/footer.php');
      include('includes/scripts.php');
    ?>

  </div>

</body>
</html>