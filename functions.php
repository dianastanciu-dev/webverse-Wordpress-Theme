<?php

function webverse_register_styles(){
    $version = wp_get_theme()->get( 'Version' );

    wp_enqueue_styles('webverse_style', get_template_directory_uri()."style.css", $version );
    wp_enqueue_styles('bootstrap_style', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css");
    wp_enqueue_styles('fontawesome_style', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css");
   
 
}

add_action( 'wp_enqueue_scripts', 'webverse_register_styles' );


?>
