
<?php
function myportfolio_enqueue_style() {
    wp_enqueue_style("portfolio-style", get_stylesheet_uri());
}

add_action("wp_enqueue_scripts", "myportfolio_enqueue_style");


function cookworld_register_menu(){
    register_nav_menu("time_of_day_menu,Time_of_day_menu");
}