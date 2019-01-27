<?php
    $page_name = 'Informationen';
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
            <h1>Klinik am Klausenpass</h1>      
        </div>
    </div>

    <div class="top-banner shadow-2">
        <?php include('includes/navigation.php'); ?>
    </div>

    <div class="main-wrapper" id="main">

        <section class="main subnav container shadow-1" id="nav">
          <article>
          <a href="#infos">Allg. Informationen</a>
          <a href="#packliste">Packliste</a>
          </article>
        </section>

        <section class="main container shadow-1" id="infos">
            <article>
                <h2>Informationen <span class="hide-on-mobile">zu Ihrem Aufenthalt</span></h2>

                <div class="tab">
                    <input id="tab-1001" type="checkbox" name="tabs">
                    <label for="tab-1001">Start</label>
                    <div class="tab-content">
                        <p>Freitag, xx. April 2019, 07:00 Uhr im <a href="https://google.com/maps?q=De-Wette+Park,+Basel">De-Wette Park</a> in Basel.</a></p>
                    </div>
                </div>

                <div class="tab">
                    <input id="tab-1002" type="checkbox" name="tabs">
                    <label for="tab-1002">Ende</label>
                    <div class="tab-content">
                        <p>Samstag, xx. April 2019, ca. 17:00 Uhr im De-Wette Park</p>
                        <p><i>(Anschliessend freiwilliger Kursabschluss, endet für alle um 20:00 Uhr)</i></p>
                    </div>
                </div>

                <div class="tab">
                    <input id="tab-1003" type="checkbox" name="tabs">
                    <label for="tab-1003">Reisetenu</label>
                    <div class="tab-content">
                        <p>Reisefertig mit Krawatte und <strong>Wanderschuhe</strong></p>
                    </div>
                </div>


                <div class="tab">
                    <input id="tab-1004" type="checkbox" name="tabs">
                    <label for="tab-1004">Persönliche Ausrüsung</label>
                    <div class="tab-content">
                        <ul>
                            <li>Kleiner Tagesrucksack inkl. Lönsch</li>
                            <li>Grosser <strong>Rucksack</strong>, inkl. Cudesch</li>
                        </ul>
                    </div>
                </div>

                <div class="tab">
                    <input id="tab-1005" type="checkbox" name="tabs">
                    <label for="tab-1005">Lageradresse</label>
                    <div class="tab-content">
                        <p>
                        Pfaidheim xy<br>
                        Name Pfadi<br>
                        Adresse<br>
                        PLZ
                    </p>
                    </div>
                </div>

                <div class="tab">
                    <input id="tab-1006" type="checkbox" name="tabs">
                    <label for="tab-1006">Notfallnummer</label>
                    <div class="tab-content">
                        <p>Amira Bösch / Tassilo: <a href="tel:+41796022789" class="tel">+41 79 602 27 89</a></p>
                        <p>Jonas Grüter / Kaa: <a href="tel:+41795088365" class="tel">+41 79 508 83 65</a></p>
                    </div>
                </div>

                <div class="tab">
                    <input id="tab-1007" type="checkbox" name="tabs">
                    <label for="tab-1007">Versicherung</label>
                    <div class="tab-content">
                        <p>Ist Sache des Teilnehmenden</p>
                    </div>
                </div>

            </article>

        </section>

        <section class="main container shadow-1" id="packliste">
            <article>
                <h2>Packliste</h2>
                <div class="row">
                    <div class="col">
                        <h3>Tagesrucksack</h3>
                        <ul>
                            <li><a href="#">Notfallblatt</a> mit Impfausweis-Kopie</li>
                            <li>Lönsch für Freitagmittag</li>
                            <li>Trinkflasche (ganze Woche brauchbar!)</li>
                            <li>Halbtax / GA</li>
                            <li>Portemonnaie</li>
                            <li>Regenjacke &amp; -hose</li>
                            <li>Kappe, Händsche, Schal</li>
                            <li>Wanderschuhe</li>
                            <li>Suco/Rondo/Singbüechli</li>
                            <li>Sackmesser</li>
                            <li>Pers. Medikamente</li>
                            <li>Sonnenhut, -crème &amp; -brille</li>
                            <li>SBB (Schnur, Block &amp; Bleistift</li>
                            <li>Krawatte</li>
                            <li>Pfadihemd</li>
                        </ul>
                    </div>
                    <div class="col">
                       <h3>Grosser Rucksack</h3>
                       <ul>
                           <li>Pyjama</li>
                           <li>Pullis</li>
                           <li>T-Shirts</li>
                           <li>Hosen (kurz &amp; lang)</li>
                           <li>Socken</li>
                           <li>Unterwäsche</li>
                           <li>Sportkleidung</li>
                           <li>Mätteli</li>
                           <li>Schlafsack</li>
                           <li>2 Abtrockungstücher</li>
                           <li>Hausschuhe</li>
                           <li>Turnschuhe</li>
                           <li>Necessaire</li>
                           <li>Badetuch</li>
                           <li>Duschsachen</li>
                           <li>Badezeug</li>
                           <li>Spiele</li>
                           <li>Musik / Musik-Böxli (wer hat)</li>
                           <li>Schreibzeug</li>
                           <li><strong>Gueti Jagd</strong></li>
                           <li>Pfaditechnik / Thilo</li>
                           <li>Kompass</li>
                           <li><strong>Taschenlampe</strong></li>
                           <li>Essgeschirr</li>
                           <li>Fotoapparat (wer hat)</li>
                           <li>Natel & Ladegerät</li>
                           <li>Material für euren TN-Block</li>
                       </ul> 
                    </div>
                </div>

                <p>Es hat vielleicht <strong>Schnee</strong> während dem Kurs: denkt an wasserdichte Schuhe und allg. genügend <strong>warme</strong> Kleidung (Skikleider sehr empfohlen &rarr; vor allem Jacke, Hose und gute wasserdichte Schuhe)</p>
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