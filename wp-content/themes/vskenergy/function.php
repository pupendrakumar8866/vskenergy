<?php

function vsk_energy_assets (){
	wp_enqueue_style('style',get_stylesheet_uri());
}

add_action('wp_enqueue_scripts','vsk_energy_assets');

?>
