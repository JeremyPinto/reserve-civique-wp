<?php
/**
 * name             - Wireframe title
 * cat_name         - Comma separated list for multiple categories (cat display name)
 * custom_class     - Space separated list for multiple categories (cat ID)
 * dependency       - Array of dependencies
 * is_content_block - (optional) Best in a content block
 *
 * @version  1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

$wireframe_categories = UNCDWF_Dynamic::get_wireframe_categories();
$data                 = array();

// Wireframe properties

$data[ 'name' ]             = esc_html__( 'Call To Action Buttons Alt', 'uncode-wireframes' );
$data[ 'cat_name' ]         = $wireframe_categories[ 'call_to_action' ];
$data[ 'custom_class' ]     = 'call_to_action';
$data[ 'image_path' ]       = UNCDWF_THUMBS_URL . 'call-to-action/Call-To-Action-Buttons-Alt.jpg';
$data[ 'dependency' ]       = array();
$data[ 'is_content_block' ] = false;

// Wireframe content

$data[ 'content' ]      = '
[vc_row row_height_percent="0" override_padding="yes" h_padding="2" top_padding="5" bottom_padding="5" overlay_alpha="49" equal_height="yes" gutter_size="4" column_width_percent="100" shift_y="0" z_index="0"][vc_column column_width_use_pixel="yes" position_vertical="middle" align_horizontal="align_center" overlay_alpha="50" gutter_size="3" medium_width="0" mobile_width="0" shift_x="0" shift_y="0" shift_y_down="0" z_index="0" width="1/1" column_width_pixel="900"][vc_custom_heading heading_semantic="h3" text_size="'. uncode_wf_print_font_size( 'fontsize-338686' ) .'"]Long headline on two lines to turn your visitors into users[/vc_custom_heading][vc_column_text text_lead="yes"]Change the color to match your brand or vision, add your logo, choose the perfect layout, modify menu settings, add animations, add shape dividers, increase engagement with call to action and more.[/vc_column_text][vc_row_inner][vc_column_inner column_width_percent="100" align_horizontal="align_right" gutter_size="3" overlay_alpha="50" medium_width="4" align_mobile="align_center_mobile" mobile_width="0" shift_x="0" shift_y="0" shift_y_down="0" z_index="0" width="1/2"][vc_button button_color="accent" border_width="0" link="url:%23||target:%20_blank|"]Click the button[/vc_button][/vc_column_inner][vc_column_inner column_width_percent="100" gutter_size="3" overlay_alpha="50" medium_width="4" align_mobile="align_center_mobile" mobile_width="0" shift_x="0" shift_y="0" shift_y_down="0" z_index="0" width="1/2"][vc_button button_color="accent" border_width="0" link="url:%23||target:%20_blank|"]Click the button[/vc_button][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
';

// Check if this wireframe is for a content block
if ( $data[ 'is_content_block' ] && ! $is_content_block ) {
	$data[ 'custom_class' ] .= ' for-content-blocks';
}

// Check if this wireframe requires a plugin
foreach ( $data[ 'dependency' ]  as $dependency ) {
	if ( ! UNCDWF_Dynamic::has_dependency( $dependency ) ) {
		$data[ 'custom_class' ] .= ' has-dependency needs-' . $dependency;
	}
}

vc_add_default_templates( $data );
