<?php get_header() ?>
<?php while(have_posts()): the_post() ?>


<?php if ( is_home() && ! is_front_page() && ! empty( single_post_title( '', false ) ) ) : ?>
	<header class="page-header alignwide">
		<h1 class="ther"><?php single_post_title(); ?></h1>
	</header><!-- .page-header -->
<?php endif; ?>


<header>
    <?php wp_nav_menu(array("theme_location"=>"time_of_day_menu"))?>
</header>

  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div class="wrapper-recipe-site">
      <div id="header">
        <div class="header-wrap">
          <div class="logo">
            <!-- <img class="logo-img" src="<?php echo get_template_directory_uri() ?> /images/logo1.svg" /> -->
            <p>Cookworld</p>
            <!-- <?php bloginfo("description") ?> -->
          </div>
          <div class="logo-icons">
            <img class="shuffle" src="images/shuffle.png" />
            <img class="shuffle" src="images/loupe.png" />
          </div>
        </div>

        <div class="my-nav">
          <ul>
            <li><a href="">All Recipes</a></li>
            <li><a href="">Easy Recipes</a></li>
            <li><a href="">Medium Recipes</a></li>
            <li><a href="">Hard Recipes</a></li>
          </ul>
        </div>
      </div>
      <!-- HEADER END -->

      <div class="content-wrap-recipe">
        <p class="site-text">
          Here is a list over all the breakfast, lunch and dinner recipes you
          can find. They are all between easy, medium and hard. So you have a
          lot to choose from
        </p>

        <div class="meal-list">
          <h3>Breakfast</h3>
          <div class="meal-list-wrap">
            <div><img src="images/egg_fried_rice_05277_16x9.jpg" alt="" /></div>
            <div><img src="images/egg_fried_rice_05277_16x9.jpg" alt="" /></div>
            <div><img src="images/egg_fried_rice_05277_16x9.jpg" alt="" /></div>
          </div>
          <p>See More</p>
        </div>

        <div class="meal-list">
          <h3>Lunch</h3>
          <div class="meal-list-wrap">
            <div><img src="images/egg_fried_rice_05277_16x9.jpg" alt="" /></div>
            <div><img src="images/egg_fried_rice_05277_16x9.jpg" alt="" /></div>
            <div><img src="images/egg_fried_rice_05277_16x9.jpg" alt="" /></div>
          </div>
          <p>See More</p>
        </div>

        <div class="meal-list">
          <h3>Dinner</h3>
          <div class="meal-list-wrap">
            <div><img src="images/egg_fried_rice_05277_16x9.jpg" alt="" /></div>
            <div><img src="images/egg_fried_rice_05277_16x9.jpg" alt="" /></div>
            <div><img src="images/egg_fried_rice_05277_16x9.jpg" alt="" /></div>
          </div>
          <p>See More</p>
        </div>

        <h3 class="cookbooks-title">Get our Cookbooks</h3>
        <div class="cookbook-list">
          <div>
            <img src="images/cookbook.jpg" alt="" />
            <h5>Cookbook</h5>
            <p>this is dummy text</p>
            <button class="book-btn">Buy</button>
          </div>
          <div>
            <img src="images/cookbook.jpg" alt="" />
            <h5>Cookbook</h5>
            <p>this is dummy text</p>
            <button class="book-btn">Buy</button>
          </div>
          <div>
            <img src="images/cookbook.jpg" alt="" />
            <h5>Cookbook</h5>
            <p>this is dummy text</p>
            <button class="book-btn">Buy</button>
          </div>
        </div>
      </div>
    </div>




<?php endwhile; ?>
<?php get_footer(); ?>