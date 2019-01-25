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
                <h2>
                    Herzlich Willkommen bei der<br>
                    <span class="kak">Klinik am Klausenpass</span>
                </h2>

                <p>
                    <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi commodi minima, perferendis ab fuga nemo ipsum, ullam, temporibus inventore vel officiis. Officia sint, iure blanditiis debitis vero ex cum nobis.</span>
                    <span>Dolores aut enim, repudiandae sequi eum, accusamus delectus minima laboriosam assumenda facilis commodi hic modi obcaecati, animi maiores blanditiis reprehenderit soluta atque aliquid, deserunt iure sapiente in expedita dolore dignissimos!</span>
                    <span>Sapiente expedita porro ipsa cumque nisi, cupiditate, eos labore consequuntur ratione ab animi nulla, dolores nam soluta debitis odio assumenda in veniam a. Distinctio voluptatem, cum. Architecto sint ut, placeat.</span>
                </p>
                <p>
                    <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus incidunt earum cupiditate alias in itaque quidem deserunt, omnis illum aliquid accusantium, minima aut provident iusto illo officia nobis est perspiciatis?</span>
                    <span>Quas eveniet, quo in facilis sapiente omnis eligendi. Nemo beatae, itaque veniam, saepe alias aliquam. Quidem pariatur quisquam numquam laborum sequi esse omnis, quasi, placeat assumenda aspernatur maiores debitis qui?</span>
                    <span>Repudiandae facilis, doloribus tempora eligendi, reiciendis illum voluptas explicabo. Ducimus, harum consequatur, facere eveniet mollitia corporis. Maiores fugit ratione nesciunt reiciendis doloribus, quibusdam voluptate perspiciatis, mollitia minus expedita quos laborum.</span>
                </p>
                <p>
                    <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque possimus recusandae, quo quod ipsa et asperiores eveniet dolorum mollitia! Unde quae totam laborum, facilis eaque voluptatum consectetur est nulla numquam!</span>
                    <span>Iure omnis, rerum dolore totam vel quo? Quod fugit rerum animi quos nesciunt ducimus numquam vitae! Voluptates unde, nobis perferendis optio voluptate modi repellendus illum vel. Harum minima, molestiae tempora.</span>
                    <span>Odit iure ullam ex perferendis molestias alias aliquam asperiores, iusto quia! Quos magnam natus a commodi suscipit, sunt est blanditiis sapiente nulla qui obcaecati nihil, corporis et architecto nisi animi.</span>
                </p>
                <p>
                    <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, velit adipisci, laudantium natus, debitis quisquam a molestias voluptates provident architecto at impedit. Doloremque reprehenderit porro, eaque vero accusamus odio maiores.</span>
                    <span>Voluptatem assumenda, illum, modi necessitatibus voluptas tempore ducimus itaque ratione rem ea asperiores provident quia! Tempora quo, id minima. Suscipit placeat facere voluptatum vero exercitationem totam ab, pariatur necessitatibus voluptate.</span>
                    <span>Aut inventore velit quam pariatur. Quaerat animi blanditiis eum rem maxime voluptatum, minus suscipit sunt est facere beatae asperiores mollitia, quasi laudantium assumenda deleniti minima omnis, consectetur repudiandae quisquam reiciendis.</span>
                </p>
                <p>
                    <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus asperiores, a quaerat. Obcaecati ea dolorem perspiciatis, culpa, saepe et a consequuntur autem sit quibusdam quae totam similique repudiandae dolor ratione.</span>
                    <span>Sequi vel magni modi ab recusandae, quisquam id quidem ipsum dignissimos amet, sed voluptatum, rerum molestias nobis iure nesciunt in voluptatem. Rerum provident tempore mollitia accusamus enim? Odio, quisquam, at!</span>
                    <span>Architecto neque obcaecati suscipit velit maiores, labore dicta, ipsa nesciunt odio, qui repudiandae quidem cupiditate! Voluptates possimus consequuntur maiores, quod ex, molestias atque ipsum eaque repellat doloribus et eius expedita!</span>
                </p>
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