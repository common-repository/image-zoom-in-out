<?php

/*
Plugin Name: Image Zoom-In-Out
Plugin URI: http://skybackup.dk/
Description: Image zoom in / out effect on hover.
Version: 1.0.0
Author: Kjeld Hansen
Author URI: #
Requires at least: 4.0
Tested up to: 4.6
Text Domain: image-zoom-in-out
*/

 if ( ! defined( 'ABSPATH' ) ) exit; 
add_action('admin_menu','image_zoom_in_out_admin_menu');
function image_zoom_in_out_admin_menu() { 
    add_menu_page(
		"Zoom In Out",
		" Zoom Effect",
		8,
		__FILE__,
		"image_zoom_in_out_admin_menu_list"/*,
		plugins_url( 'images/plugin-icon.png', __FILE__) */
	); 
}

function image_zoom_in_out_admin_menu_list(){
	echo '<h2>Image zoom effect</h2>';	
	?>
    <style type="text/css">
    	.rianim-outer{
			
		}
		.rianim-outer span {
			display: inline-block;
			width: 22%;
			margin: 10px 1%;
			padding: 0;
		}
		.rianim-outer img{
			/*width: 100%;
    		height: auto;*/
			-webkit-transition: all 1s ease;
			 -moz-transition: all 1s ease;
			   -o-transition: all 1s ease;
			  -ms-transition: all 1s ease;
				  transition: all 1s ease;
		}
		.rianim-outer img:hover{
			-moz-transform: scale(1.5);
			  -webkit-transform: scale(1.5);
			transform: scale(1.5);
			z-index: 9999999;
    		position: relative;
		}
    </style>
    <div class="rianim-outer">
    	<span class="riani-1"><img src="<?php echo plugins_url( 'images/butterfly.png', __FILE__) ?>" width="298" height="239" /></span>
        <span class="riani-2"><img src="<?php echo plugins_url( 'images/butterfly.png', __FILE__) ?>" width="298" height="239" /></span>
        <span class="riani-3"><img src="<?php echo plugins_url( 'images/butterfly.png', __FILE__) ?>" width="298" height="239" /></span>
        <span class="riani-4"><img src="<?php echo plugins_url( 'images/butterfly.png', __FILE__) ?>" width="298" height="239" /></span>
        <span class="riani-5"><img src="<?php echo plugins_url( 'images/butterfly.png', __FILE__) ?>" width="298" height="239" /></span>
        <span class="riani-6"><img src="<?php echo plugins_url( 'images/butterfly.png', __FILE__) ?>" width="298" height="239" /></span>
        <span class="riani-7"><img src="<?php echo plugins_url( 'images/butterfly.png', __FILE__) ?>" width="298" height="239" /></span>
        <span class="riani-8"><img src="<?php echo plugins_url( 'images/butterfly.png', __FILE__) ?>" width="298" height="239" /></span>
    </div>
    <i>Instructions : Use class "rizoomanim" for an image to animate or use class "rianim-outer" for a div if you want to animate all images inside that element</i>
    <?php
}

function image_zoom_in_out_scripts_js() {
    wp_enqueue_style( 'image-zoom-inout', plugins_url( '/image-zoom-inout.css', __FILE__) );
}
add_action( 'wp_enqueue_scripts', 'image_zoom_in_out_scripts_js' );

