<?php
//Declares function university_files()
function university_files(){
    //Loads JS file, get_theme_file_uri('/build/index.js') grabs index.js, array('jquery') specifies any JS dependencies, '1.0' version number of script, true = loads file right before </body> 
    wp_enqueue_script('main-university-js', get_theme_file_uri('/build/index.js'), array('jquery'), '1.0', true); 
    wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    //Loads font-awesome CDN for icons 
    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    //Loads CSS files, WP function, pulls in style-index.css and index.css, 'university_main_styles' this is a name we give it
    wp_enqueue_style('university_main_styles', get_theme_file_uri('/build/style-index.css'));
    wp_enqueue_style('university_extra_styles', get_theme_file_uri('/build/index.css'));
}

//add_action('wp_enqueue_scripts' ,'university_files') invokes university_files() function, 'wp_enqueue_scripts' before <body> is rendered
add_action('wp_enqueue_scripts', 'university_files');