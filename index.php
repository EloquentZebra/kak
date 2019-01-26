<?php
    $page_name = 'Home';
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

    <div class="hero">
        <div class="container hero-content shadow-3">
            <h1>Klinik am Klausenpass</h1>      

            <?php include('includes/slideshow.php'); ?>
        </div>
    </div>

    <div class="top-banner shadow-2">
        <?php include('includes/navigation.php'); ?>
    </div>

    <div class="main-wrapper" id="main">
        <section class="main container shadow-1">
            <article>
                <blockquote>
                    Wir begleiten Menschen auf dem Weg zur Genesung und zurück in ein aktives Leben. 
                </blockquote>
                
                <h2>
                    Herzlich Willkommen bei der<br>
                    <span class="kak">Klinik am Klausenpass</span>
                </h2>

                <p>Auf knapp 1'300 Metern über Meer liegt die Klinik am Klausenpass. Hier gibt es Raum, um Kraft zu schöpfen, Körper und Geist zu aktivieren und sich anschliessend auf den Heimweg zu machen.</p>
                
                <?php include('includes/termine.php'); ?>
                


            </article>
        </section>
    
        <?php include('includes/footer.php'); ?>

    </div>

    <script src="js/jquery.js"></script>
    <script>
        $('a[href*="#"]')
          .not('[href="#"]')
          .not('[href="#0"]')
          .click(function(event) {
            if (
              location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
              && 
              location.hostname == this.hostname
            ) {
              var target = $(this.hash);
              target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
              if (target.length) {
                event.preventDefault();
                $('html, body').animate({
                  scrollTop: target.offset().top
                }, 1000, function() {
                  var $target = $(target);
                  $target.focus();
                  if ($target.is(":focus")) {
                    return false;
                  } else {
                    $target.attr('tabindex','-1');
                    $target.focus();
                  };
                });
              }
            }
          });
    </script>

</body>
</html>