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

$data[ 'name' ]             = esc_html__( 'Pricing Table Custom', 'uncode-wireframes' );
$data[ 'cat_name' ]         = $wireframe_categories[ 'pricing_tables' ];
$data[ 'custom_class' ]     = 'pricing_tables';
$data[ 'image_path' ]       = UNCDWF_THUMBS_URL . 'pricing-tables/Pricing-Table-Custom.jpg';
$data[ 'dependency' ]       = array();
$data[ 'is_content_block' ] = false;

// Wireframe content

$data[ 'content' ]      = '
[vc_row row_height_percent="0" override_padding="yes" h_padding="2" top_padding="5" bottom_padding="5" back_color="accent" back_image="'. uncode_wf_print_single_image( '80472' ) .'" parallax="yes" overlay_color="accent" overlay_alpha="80" gutter_size="4" column_width_percent="100" shift_y="0" z_index="0"][vc_column column_width_percent="100" position_vertical="bottom" align_horizontal="align_center" style="dark" overlay_alpha="50" gutter_size="3" medium_width="0" mobile_width="0" shift_x="0" shift_y="0" shift_y_down="0" z_index="0" width="1/3"][vc_row_inner][vc_column_inner column_width_percent="100" align_horizontal="align_center" style="dark" gutter_size="2" overlay_alpha="50" medium_width="0" mobile_width="0" shift_x="0" shift_y="0" shift_y_down="0" z_index="0" width="1/1"][vc_custom_heading heading_semantic="h3" text_size="'. uncode_wf_print_font_size( 'fontsize-160000' ) .'" text_space="'. uncode_wf_print_font_space( 'fontspace-135905' ) .'" text_transform="uppercase"]Tagline[/vc_custom_heading][vc_custom_heading heading_semantic="h3" text_size="'. uncode_wf_print_font_size( 'fontsize-338686' ) .'" sub_reduced="yes" subheading="Change the color to match your brand or vision, add your logo, choose the perfect layout, modify menu settings and more."]$25[/vc_custom_heading][/vc_column_inner][/vc_row_inner][vc_button border_width="0" link="url:%23|||"]Click the button[/vc_button][/vc_column][vc_column column_width_percent="100" position_vertical="bottom" align_horizontal="align_center" style="dark" overlay_alpha="50" gutter_size="3" medium_width="0" mobile_width="0" shift_x="0" shift_y="0" shift_y_down="0" z_index="0" width="1/3"][vc_row_inner][vc_column_inner column_width_percent="100" align_horizontal="align_center" style="dark" gutter_size="2" overlay_alpha="50" medium_width="0" mobile_width="0" shift_x="0" shift_y="0" shift_y_down="0" z_index="0" width="1/1"][vc_custom_heading heading_semantic="h3" text_size="'. uncode_wf_print_font_size( 'fontsize-160000' ) .'" text_space="'. uncode_wf_print_font_space( 'fontspace-135905' ) .'" text_transform="uppercase"]Tagline[/vc_custom_heading][vc_custom_heading heading_semantic="h3" text_size="'. uncode_wf_print_font_size( 'fontsize-445851' ) .'" sub_reduced="yes" subheading="Change the color to match your brand or vision, add your logo, choose the perfect layout, modify menu settings and more."]$50[/vc_custom_heading][/vc_column_inner][/vc_row_inner][vc_button border_width="0" link="url:%23|||"]Click the button[/vc_button][/vc_column][vc_column column_width_percent="100" position_vertical="bottom" align_horizontal="align_center" style="dark" overlay_alpha="50" gutter_size="3" medium_width="0" mobile_width="0" shift_x="0" shift_y="0" shift_y_down="0" z_index="0" width="1/3"][vc_row_inner][vc_column_inner column_width_percent="100" align_horizontal="align_center" style="dark" gutter_size="2" overlay_alpha="50" medium_width="0" mobile_width="0" shift_x="0" shift_y="0" shift_y_down="0" z_index="0" width="1/1"][vc_custom_heading heading_semantic="h3" text_size="'. uncode_wf_print_font_size( 'fontsize-160000' ) .'" text_space="'. uncode_wf_print_font_space( 'fontspace-135905' ) .'" text_transform="uppercase"]Tagline[/vc_custom_heading][vc_custom_heading heading_semantic="h3" text_size="'. uncode_wf_print_font_size( 'fontsize-338686' ) .'" sub_reduced="yes" subheading="Change the color to match your brand or vision, add your logo, choose the perfect layout, modify menu settings and more."]$75[/vc_custom_heading][/vc_column_inner][/vc_row_inner][vc_button border_width="0" link="url:%23|||"]Click the button[/vc_button][/vc_column][/vc_row]
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
