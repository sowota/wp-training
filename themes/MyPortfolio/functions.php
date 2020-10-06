<?php

// CSS

function stUp(){    
  wp_enqueue_style('style', get_template_directory_uri() . '/style.css', array(),'1', 'all');
  wp_enqueue_style('font', '//fonts.googleapis.com/css2?family=Kaushan+Script&family=Open+Sans:wght@600&display=swap');
  wp_enqueue_script('icon', '//kit.fontawesome.com/e1926f967d.js');

}

add_action('wp_enqueue_scripts', 'stUp');


?>
