<?php
/* Custm shortcodes for Seveti

Developed by: John Zdanis
*/


/* Map Markers Custom Shortcode
 *
 * This shortcode will display map markers in a nice grid
 * when comma separated text/links are placed in between it's
 * opening [map-marker-grid] and closing [/map-marker-grid] tags
 *
*/
add_shortcode( 'map-marker-grid', 'seveti_map_marker_grid_output' );

/* Plus Box Custom Shortcodes
 *
 * This shortcode will display the top of the 'plus box'
 *
*/
add_shortcode( 'plus-box-top', 'seveti_plus_box_top_output' );
add_shortcode( 'plus-box-bottom', 'seveti_plus_box_bottom_output' );

/* Fancy Black Box Custom Shortcodes
 *
 * This is for the black box with an image on the left.
 * Has one arg for the img url.
 *
*/
add_shortcode( 'fancy-black-box-one', 'seveti_fancy_black_box_one_output' );
add_shortcode( 'fancy-black-box-two', 'seveti_fancy_black_box_two_output' );








function seveti_fancy_black_box_one_output( $atts, $content = null ) {
	// shortcode options
	$a = shortcode_atts( array(
		'img' => 'http://placehold.it/300x300',
	), $atts );

	$fancy_black_box_one = '';

	if (!empty($content)) {

		// start the two-col wrapping row
		$fancy_black_box_one .= '<div class="row">';


		$fancy_black_box_one .= '<div class="col-md-6 col-sm-12 lg-marb no-underline">';

		$fancy_black_box_one .= '  <div class="row seveti-fancy-black-box-one">';
		$fancy_black_box_one .= '    <div class="seveti-fancy-left-img" style="background-image: url(\''.$a['img'].'\');"></div>';
		$fancy_black_box_one .= '    <div class="seveti-fancy-right-content">';
		$fancy_black_box_one .= 	   do_shortcode($content);
		$fancy_black_box_one .= '    </div>';
		$fancy_black_box_one .= '  </div>';

		$fancy_black_box_one .= '</div>';
	}

	return $fancy_black_box_one;

}

function seveti_fancy_black_box_two_output( $atts, $content = null ) {
	// shortcode options
	$a = shortcode_atts( array(
		'img' => 'http://placehold.it/300x300',
	), $atts );

	$fancy_black_box_two = '';

	if (!empty($content)) {
		$fancy_black_box_two .= '<div class="col-md-6 col-sm-12 lg-marb no-underline">';

		$fancy_black_box_two .= '  <div class="row seveti-fancy-black-box-two">';
		$fancy_black_box_two .= '    <div class="seveti-fancy-left-img" style="background-image: url(\''.$a['img'].'\');"></div>';
		$fancy_black_box_two .= '    <div class="seveti-fancy-right-content">';
		$fancy_black_box_two .= 	   do_shortcode($content);
		$fancy_black_box_two .= '    </div>';
		$fancy_black_box_two .= '  </div>';

		$fancy_black_box_two .= '</div>';



		// end the two-col wrapping row
		$fancy_black_box_two .= '</div>';
	}

	return $fancy_black_box_two;

}


function seveti_plus_box_top_output( $atts, $content = null ) {
	// shortcode options
	$a = shortcode_atts( array(
		'class' => '',
	), $atts );

	$plus_box_top = '';

	if (!empty($content)) {
		$plus_box_top .= '<div class="row '.$a['class'].'">';

		$plus_box_top .= '<div class="seveti-top-box">';
		$plus_box_top .= do_shortcode($content);
		$plus_box_top .= '</div>';

		$plus_box_top .= '</div>';

		$plus_box_top .= '<div class="plus-box-divider"></div>';
	}

	return $plus_box_top;

}



function seveti_plus_box_bottom_output( $atts, $content = null ) {
	// shortcode options
	$a = shortcode_atts( array(
		'class' => '',
	), $atts );

	$plus_box_bottom = '';

	if (!empty($content)) {
		$plus_box_bottom .= '<div class="row '.$a['class'].'">';

		$plus_box_bottom .= '<div class="seveti-bottom-box">';
		$plus_box_bottom .= do_shortcode($content);
		$plus_box_bottom .= '</div>';

		$plus_box_bottom .= '</div>';
	}

	return $plus_box_bottom;

}




function seveti_map_marker_grid_output( $atts, $content = null ) {
	// shortcode options
	$a = shortcode_atts( array(
		// 'class' => 'caption',
	), $atts );

	$map_marker_grid = '';

	// If there is somthing in between the shortcode tags
	if (!empty($content)) {

		// split it on the commas
		$grid_items = explode(',', trim($content));

		if (!empty($grid_items)) {
			$map_marker_grid .= '<div class="row">';

			// start the ul
			$map_marker_grid .= '<ul class="seveti-map-marker-grid clearfix">';
			foreach ($grid_items as $item) {
				$map_marker_grid .= '<li class="seveti-map-marker-item col-lg-2 col-md-4 col-sm-6 col-xs-12">';

				$item = trim($item);

				// trim the content of extra space, and do_shortcodes
				if (!empty($item)) {
					$map_marker_grid .= do_shortcode($item);
				}

				$map_marker_grid .= '</li>';
			}

			$map_marker_grid .= '</div>';
		}
	}

	return $map_marker_grid;

}

?>
