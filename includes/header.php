<?php
	$hausbild = Array(
    'img/slideshow/bild1.jpg',
    'img/slideshow/bild2.jpg',
    'img/slideshow/bild3.JPG',
    'img/slideshow/bild4.jpg',
    'img/slideshow/bild5.jpg',
  );
?>

<header class="row">

  <article class="title-text col-4">
    <h1><?php echo $page_title; ?></h1>
    <p class="title-text-zitat text-right"><?php echo $page_zitat; ?></p>
  </article>

  <article class="col-7">
    <div class="title-img">
    	<img src="<?php echo $hausbild[array_rand($hausbild)]; ?>">
    </div>

  </article>

</header>