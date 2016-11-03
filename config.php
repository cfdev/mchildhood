<?php 
/**
	Author: cfdev
	website: http://cfdev.fr/
	PluCSS: http://plucss.pluxml.org/
	Shortcodes plugin: http://secretsitebox.fr/site/index.php?categorie2/pluxml-plugins#post-10/
	
*/     
   
   
   
/**
	PluCSS Alerte: info
*/   
function info_shortcode( $atts, $content = null ) {

   return '<div class="alert blue">' . $content . '</div>';

}
add_shortcode('info', 'info_shortcode'); 


/**
	PluCSS Alerte: success
*/   
function success_shortcode( $atts, $content = null ) {

   return '<div class="alert green">' . $content . '</div>';

}
add_shortcode('success', 'success_shortcode'); 

/**
	PluCSS Alerte: warning
*/   
function warning_shortcode( $atts, $content = null ) {

   return '<div class="alert orange">' . $content . '</div>';

}
add_shortcode('warning', 'warning_shortcode'); 

/**
	PluCSS Alerte: error
*/   
function error_shortcode( $atts, $content = null ) {

   return '<div class="alert red">' . $content . '</div>';

}
add_shortcode('error', 'error_shortcode'); 
  

/**
	PluCSS Button
	(blue green orange red)
*/   
function button_shortcode( $atts, $content = null ) {

   extract( shortcode_atts( array(

      'color' => 'caption',
	  'link' => 'caption',

      ), $atts ) );

   return '<a href="' . $link . '" class="button ' . $color . '">' . $content . '</a>';

}
add_shortcode('button', 'button_shortcode'); 
  
  
/**
	PluCSS Progress bar
	(value en percent)
*/
function progressbar_shortcode( $atts, $content = null ) {

   extract( shortcode_atts( array(

      'val' => 'caption',

      ), $atts ) );

   return '<div class="progress"><span style="width:' . $val . ';">' . $val . '</span></div>';

}
add_shortcode('progressbar', 'progressbar_shortcode'); 

?>

