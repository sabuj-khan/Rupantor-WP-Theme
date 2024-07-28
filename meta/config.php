<?php

add_action( 'cmb2_admin_init', 'posttype_meta_functions' );

function posttype_meta_functions(){

	$posttype = new_cmb2_box(array(
		'id'            => 'additional',
		'title'         => __('Additional Fields', 'rupantor'),
		'object_types'  => array( 'post' ),

		));

	$posttype->add_field( array(
		'name'       => esc_html__( 'Gallery Images', 'rupantor' ),
		'desc'       => esc_html__( 'Upload your all images here', 'rupantor'),
		'id'         => '_galley',
		'type'       => 'file_list',
		
	) );

	$posttype->add_field( array(
		'name'       => esc_html__( 'Audio URL', 'rupantor' ),
		'desc'       => esc_html__( 'The audio link would be here', 'rupantor'),
		'id'         => '_audio',
		'type'       => 'file',
		
	) );

	$posttype->add_field( array(
		'name'       => esc_html__( 'Video Url', 'rupantor' ),
		'desc'       => esc_html__( 'Upload the video here', 'rupantor'),
		'id'         => '_video',
		'type'       => 'oembed',
		
	) );


	$slidermeta = new_cmb2_box(array(
		'id'            => 'additionals',
		'title'         => __('Additional Fields', 'rupantor'),
		'object_types'  => array( 'sliders' ),
		));

	$slidermeta->add_field( array(
		'name'       => esc_html__( 'Subtitle', 'rupantor' ),
		'desc'       => esc_html__( 'Write your subtitle here', 'rupantor'),
		'id'         => '_slider',
		'type'       => 'text',
		
	) );

	$slidermeta->add_field( array(
		'name'       => esc_html__( 'First Button Text', 'rupantor' ),
		'desc'       => esc_html__( 'Write your first button text here', 'rupantor'),
		'id'         => '_fbuttont',
		'type'       => 'text',
		
	) );

	$slidermeta->add_field( array(
		'name'       => esc_html__( 'First Button Url', 'rupantor' ),
		'desc'       => esc_html__( 'Write your first button url here', 'rupantor'),
		'id'         => '_fbuttonu',
		'type'       => 'text',
		
	) );

	$slidermeta->add_field( array(
		'name'       => esc_html__( 'Second Button Text', 'rupantor' ),
		'desc'       => esc_html__( 'Write your second button text here', 'rupantor'),
		'id'         => '_sbuttont',
		'type'       => 'text',
		
	) );

	$slidermeta->add_field( array(
		'name'       => esc_html__( 'Second Button Url', 'rupantor' ),
		'desc'       => esc_html__( 'Write your second button url here', 'rupantor'),
		'id'         => '_sbuttonu',
		'type'       => 'text',
		
	) );

	$slidermeta->add_field( array(
		'name'       => esc_html__( 'First Button Type', 'rupantor' ),
		'desc'       => esc_html__( 'Write your first button type here', 'rupantor'),
		'id'         => '_fbuttonty',
		'type'       => 'select',
		'options'	 => array(
			'red'	 => 'Red Button',
			'transp' => 'Transperent Button'
			),
		
	) );

	$slidermeta->add_field( array(
		'name'       => esc_html__( 'Second Button Type', 'rupantor' ),
		'desc'       => esc_html__( 'Write your second button type here', 'rupantor'),
		'id'         => '_sbuttonty',
		'type'       => 'select',
		'options'	 => array(
			'red'	 => 'Red Button',
			'transp' => 'Transperent Button'
			),
		
	) );


	// Testimonials Meta

	$testimonial = new_cmb2_box(array(
		'id'			=> 'testadditional',
		'title'			=> __('Additional Fields'),
		'object_types'	=> 'testimonials'	
		));

	$testimonial->add_field(array(
		'name'		=> __('Designation', 'rupantor'),
		'desc'		=> __('Mention your designation', 'rupantor'),
		'id'		=> '_designation',
		'type'		=> 'text',
		));


}