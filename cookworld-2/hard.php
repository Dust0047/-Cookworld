<?php get_header(); ?>
<?php while(have_posts()) : the_post() ?>

<?php if ( is_home() && ! is_front_page() && ! empty( single_post_title( '', false ) ) ) : ?>
	<header class="page-header alignwide">
		<h1 class="page-title"><?php single_post_title(); ?></h1>
	</header><!-- .page-header -->
<?php endif; ?>

<div class="recipe-wrap">
        <div class="recipe">
          <div class="left">
            <div class="intro">
              <h2>Bolognese</h2>
              <p>
                this is the recipe for an Italian dish. It’s very easy to make
                for even newbies.
              </p>
            </div>

            <div class="ingredients">
              <h3>Ingredients</h3>
              <div class="ingredients-wrap">
                <p>Pasta</p>
                <p>Sauce</p>
              </div>
              <div class="ingredients-wrap">
                <p>Cheese</p>
                <p>Seasoning</p>
              </div>
            </div>

            <div class="nv">
              <h3>Nutritional Values</h3>
              <div class="nv-wrap">
                <div>
                  <p class="number">357</p>
                  <p class="label">Calories</p>
                </div>

                <div>
                  <p class="number">15</p>
                  <p class="label">Protein</p>
                </div>

                <div>
                  <p class="number">75</p>
                  <p class="label">Fats</p>
                </div>

                <div>
                  <p class="number">82</p>
                  <p class="label">Carbs</p>
                </div>
              </div>
            </div>

            <div class="recipe-btn-wrap">
              <button class="recipe-btn">See full Recipe</button>
              <button class="recipe-btn">Download</button>
            </div>
          </div>

          <div class="right">
            <img src="images/pasta.png" alt="" />
          </div>
        </div>
      </div>

      


    <div class="jumbo-bottom">
    <img class="cropped2"
        src="<?php echo get_template_directory_uri() ?>/images/food-hero.jpg" />
    </div>
</div>




<?php endwhile; ?>
<?php get_footer(); ?>