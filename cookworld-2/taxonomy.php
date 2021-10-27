<?php get_header() ?>
<div class="row archive-header d-flex justify-content-center align-items-center">
    <h1><?php $term = get_term_by( 'slug', get_query_var( 'medium' ), get_query_var( 'medium' ) ); echo $term->name; ?></h1>
</div>
<div class="row archive-list m-0" >
               

<div class="recipe-wrap">
        <div class="recipe">
          <div class="left">
            <div class="intro">
              <h2>Bolognese</h2>
              <p>
                this is                for even newbies.
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




</div>
<?php get_footer() ?>