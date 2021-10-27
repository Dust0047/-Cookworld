<?php get_header() ?>
<div class="row archive-header d-flex justify-content-center align-items-center">
    <h1><?php $term = get_term_by( 'slug', get_query_var( 'medium' ), get_query_var( 'medium' ) ); echo $term->name; ?></h1>
</div>
<div class="row archive-list m-0" >
               

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


    <div class="jumbo-bottom">
    <img class="cropped2"
        src="<?php echo get_template_directory_uri() ?>/images/food-hero.jpg" />
    </div>
</div>




</div>
<?php get_footer() ?>