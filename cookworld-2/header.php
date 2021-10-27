<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo("name") ?></title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <?php wp_head(); ?>
</head>
<header>
    <?php wp_nav_menu(array("theme_location"=>"time_of_day_menu"))?>
</header>

<body>
    <?php while(have_posts()) : the_post() ?>
    <div class="wrapper">
        <div id="header">
            <div class="header-wrap">
                <div class="logo">
                    <!-- <img class="logo-img" src="<?php echo get_template_directory_uri() ?> /images/logo1.svg" /> -->
                    <p><?php bloginfo("name") ?></p>
                    <!-- <?php bloginfo("description") ?> -->
                </div>
                <div class="logo-icons">
                    <img class="shuffle" src="<?php echo get_template_directory_uri() ?>/images/shuffle.png" />
                    <img class="shuffle" src="<?php echo get_template_directory_uri() ?>/images/loupe.png" />
                </div>
            </div>

            <div class="my-nav">
                <?php wp_nav_menu(array("theme-location" => "main-menu")) ?>
            </div>
        </div>
    </div>
    <?php endwhile; ?>


    <script>
    $('#header').prepend(
        '<div id="menu-icon"><span class="first"></span><span class="second"></span><span class="third"></span></div>'
    );

    $("#menu-icon").on("click", function() {
        $("nav").slideToggle();
        $(this).toggleClass("active");
    });
    </script>