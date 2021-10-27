<?php get_header(); ?>
<?php while(have_posts()) : the_post() ?>

<?php if ( is_home() && ! is_front_page() && ! empty( single_post_title( '', false ) ) ) : ?>
	<header class="page-header alignwide">
		<h1 class="page-title"><?php single_post_title(); ?></h1>
	</header><!-- .page-header -->
<?php endif; ?>

<div class="wrapper-landing">
    <div class="jumbo-landing">
        <h1>Find or get a <br> surprise recipe</h1>
        <p>Search for your specific recipe or be surprised by <br> pressing shuffle to get a random one.</p>
        <input type="text" class="searchbar" name="" id="">
        <img class="shuffle-jumbo" src="<?php echo get_template_directory_uri() ?>/images/loupe.png" />
        <img class="shuffle-jumbo" src="<?php echo get_template_directory_uri() ?>/images/shuffle.png" />
    </div>

    <div class="jumbo-bottom">
    <img class="cropped2"
        src="<?php echo get_template_directory_uri() ?>/images/food-hero.jpg" />
    </div>
</div>




<?php endwhile; ?>
<?php get_footer(); ?>