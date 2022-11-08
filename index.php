<?php
/*
Plugin Name: DSGVO Youtube
Plugin URI: https://www.ericmaechler.com/produkt/dsgvo-youtube/
Description: Add your youtube videos as according to the GDPR / DSGVO regulations. Füge deine Videos gemäss den DSGVO Richtlinien ein. (<a href="options-general.php?page=QGA_dsgvoyoutube">Instruction</a>)
Author: Eric-Oliver Mächler
Version: 1.2.1
Author URI: https://www.ericmaechler.com
Requires at least: 3.5
Tested up to: 6.0
*/

//dsgvo youtube mehrsprachig machen
function my_plugin_initdsgvoyoutube() {
    load_plugin_textdomain( 'dsgvo-youtube', false, dirname( plugin_basename( __FILE__ ) ) . '/languages' );
  }
  add_action('init', 'my_plugin_initdsgvoyoutube');




// add menu section
include 'conf.php';

// add css JS -> includes/add-js-css.php
include ("includes/add-js-css.php");

// add Button für Text-Editor mit standard-bild
include ("includes/add-button-texteditor.php");

// add Button für Text-Editor mit standard-bild
include ("includes/add-button-texteditor-eigenesbild.php");



add_action( 'wp_head', 'dsgvogdpryoutube' );

function dsgvogdpryoutube() {
	
				function youtubesecure_shortcode( $atts, $content = null ) {
    			//set default attributes and values
    			$values = shortcode_atts( array(
        			'url'   	=> '#',
        			'target'	=> '_self',
					'images'	=> '#',
					'alt'	=> '#',
    			), $atts );
					
					$array = explode("=",$values['url']);
					$youtubecode = ($array[1]);
					$test = 'test2.0';
					$images = $values['images'];
					$alt = $values['alt'];

					if ($images =='#'){
					
						$thumbnail = '<div class="dsgvoyoutube"><a data-fancybox href="'. esc_attr($values['url']) .'" "><img src="https://img.youtube.com/vi/'.$youtubecode.'/0.jpg"></a></div>';
					}
					else
					{
						//$thumbnail = "<img src='$images'>";
						//$thumbnail = '<a data-fancybox href="'. esc_attr($values['url']) .'" "><img src='$images'></a>';

						if ($alt == '#'){
							$thumbnail = "<div class='dsgvoyoutube'><a data-fancybox href='esc_attr($values[url])'><img src='$images'></a></div>";
						}
						else
						{
							$thumbnail = "<div class='dsgvoyoutube'><a data-fancybox href='esc_attr($values[url])'><img src='$images' alt='$alt'></a></div>";
						}
						
					}
					//echo $tumbnail;
					
					//<img src="https://img.youtube.com/vi/fKkNvDtauI0/0.jpg>">
     
    		//return '<a href="'. esc_attr($values['url']) .'">'. $content .'$youtubecode'.'</a>';
					return $thumbnail;
 			
}
add_shortcode( 'dsgvo-youtube', 'youtubesecure_shortcode' );
	
}
