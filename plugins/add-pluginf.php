<?php 

add_action('vc_before_init', 'vcmap_functionalities');

function vcmap_functionalities(){

	vc_map( array(
		'name'						=> 'Rupantor Slider',
		'base'						=> 'slider',
		'show_settings_on_create'	=> false
		));

	vc_map( array(
		'name'						=> 'Simple Section',
		'base'						=> 'simple-section',
		'params'					=> array(
			array(
				'type'				=> 'textfield',
				'param_name'		=> 'title',
				'heading'			=> 'Title',
				'value'				=> 'This is title'
				),
			array(
				'type'				=> 'textfield',
				'param_name'		=> 'subtitle',
				'heading'			=> 'Sub-Title',
				'value'				=> 'This is subtitle'
				),
			array(
				'type'				=> 'textarea_html',
				'param_name'		=> 'content',
				'heading'			=> 'Description',
				'value'				=> 'This is content'
				),
			),
		
		));

	vc_map( array(
		'name'						=> 'Expertise Section',
		'base'						=> 'expertise',
		'params'					=> array(
			array(
				'type'				=> 'textfield',
				'param_name'		=> 'title',
				'heading'			=> 'Title',
				'value'				=> 'This is title'
				),
			array(
				'type'				=> 'textfield',
				'param_name'		=> 'subtitle',
				'heading'			=> 'Sub-Title',
				'value'				=> 'This is subtitle'
				),
			array(
				'type'				=> 'attach_image',
				'param_name'		=> 'bgimage',
				'heading'			=> 'Background Image',
				
				),
			array(
				'type'				=> 'textfield',
				'param_name'		=> 'first_ficon',
				'heading'			=> 'First front icon',
				
				),
			array(
				'type'				=> 'textfield',
				'param_name'		=> 'first_title',
				'heading'			=> 'First Title',
				
				),
			array(
				'type'				=> 'textfield',
				'param_name'		=> 'first_bicon',
				'heading'			=> 'First back icon',
				
				),
			array(
				'type'				=> 'textfield',
				'param_name'		=> 'first_subtitle',
				'heading'			=> 'First Sub-Title',
				
				),


			array(
				'type'				=> 'textfield',
				'param_name'		=> 'se_ficon',
				'heading'			=> 'Second front icon',
				
				),
			array(
				'type'				=> 'textfield',
				'param_name'		=> 'se_bicon',
				'heading'			=> 'Second back icon',
				
				),
			array(
				'type'				=> 'textfield',
				'param_name'		=> 's_title',
				'heading'			=> 'First Title',
				
				),
			
			array(
				'type'				=> 'textfield',
				'param_name'		=> 's_subtitle',
				'heading'			=> 'Second Sub-Title',
				
				),



			array(
				'type'				=> 'textfield',
				'param_name'		=> 't_ficon',
				'heading'			=> 'Third front icon',
				
				),
			array(
				'type'				=> 'textfield',
				'param_name'		=> 't_bicon',
				'heading'			=> 'Third back icon',
				
				),
			array(
				'type'				=> 'textfield',
				'param_name'		=> 't_title',
				'heading'			=> 'Third Title',
				
				),
			
			array(
				'type'				=> 'textfield',
				'param_name'		=> 't_subtitle',
				'heading'			=> 'Third Sub-Title',
				
				),

			array(
				'type'				=> 'textfield',
				'param_name'		=> 'f_ficon',
				'heading'			=> 'Forth front icon',
				
				),
			array(
				'type'				=> 'textfield',
				'param_name'		=> 'f_bicon',
				'heading'			=> 'Forth back icon',
				
				),
			array(
				'type'				=> 'textfield',
				'param_name'		=> 'f_title',
				'heading'			=> 'Forth Title',
				
				),
			
			array(
				'type'				=> 'textfield',
				'param_name'		=> 'f_subtitle',
				'heading'			=> 'Forth Sub-Title',
				
				),

			),
		
		));

	vc_map(array(
		'name'		=> 'Vision Section',
		'base'		=> 'vision',
		'params'	=> array(
			array(
				'type'			=> 'textfield',
				'param_name'	=> 'title',
				'heading'		=> 'Title',
				'value'			=> 'This is title',
				),
			array(
				'type'			=> 'textfield',
				'param_name'	=> 'subtitle',
				'heading'		=> 'sub-Title',
				'value'			=> 'This is subtitle',
				),
			array(
				'type'				=> 'attach_image',
				'param_name'		=> 'bgimage',
				'heading'			=> 'Background Image',
				),
			array(
				'type'			=> 'textfield',
				'param_name'	=> 'f_title',
				'heading'		=> 'First Title',
				'value'			=> 'This is first title',
				),
			array(
				'type'			=> 'textfield',
				'param_name'	=> 'f_subtitle',
				'heading'		=> 'First Sub-Title',
				'value'			=> 'This is first subtitle',
				),
			array(
				'type'			=> 'textfield',
				'param_name'	=> 's_title',
				'heading'		=> 'Second Title',
				'value'			=> 'This is second title',
				),
			array(
				'type'			=> 'textfield',
				'param_name'	=> 's_subtitle',
				'heading'		=> 'Second Sub-Title',
				'value'			=> 'This is second subtitle',
				),
			array(
				'type'			=> 'textfield',
				'param_name'	=> 't_title',
				'heading'		=> 'Third Title',
				'value'			=> 'This is third title',
				),
			array(
				'type'			=> 'textfield',
				'param_name'	=> 't_subtitle',
				'heading'		=> 'Third Sub-Title',
				'value'			=> 'This is third subtitle',
				),
			array(
				'type'			=> 'textfield',
				'param_name'	=> 'fo_title',
				'heading'		=> 'Forth Title',
				'value'			=> 'This is forth title',
				),
			array(
				'type'			=> 'textfield',
				'param_name'	=> 'fo_subtitle',
				'heading'		=> 'Forth Sub-Title',
				'value'			=> 'This is forth subtitle',
				),
			),
		));

	vc_map(array(
		'name'		=> 'Portfolio Section',
		'base'		=> 'filtering',
		'params'	=> array(
			array(
				'type'			=> 'textfield',
				'param_name'	=> 'title',
				'heading'		=> 'Title',
				'value'			=> 'This is title',
				),
			array(
				'type'			=> 'textfield',
				'param_name'	=> 'subtitle',
				'heading'		=> 'Sub-Title',
				'value'			=> 'This is sub-title',
				),
			),

		));


	vc_map(array(
		'name'		=> 'Clients Section',
		'base'		=> 'clients',
		'params'	=> array(
			array(
				'type'			=> 'textfield',
				'param_name'	=> 'title',
				'heading'		=> 'Title',
				'value'			=> 'This is title',
				),
			array(
				'type'			=> 'textfield',
				'param_name'	=> 'subtitle',
				'heading'		=> 'Sub-Title',
				'value'			=> 'This is sub-title',
				),
			),

		));

	vc_map(array(
		'name'		=> 'Testimonials',
		'base'		=> 'testimonials',
		'params'	=> array(
			array(
				'type'			=> 'textfield',
				'param_name'	=> 'title',
				'heading'		=> 'Title',
				'value'			=> 'This is title',
				),
			array(
				'type'			=> 'attach_image',
				'param_name'	=> 'bgimage',
				'heading'		=> 'Background Image',
				
				),
			),

		));
	vc_map(array(
		'name'		=> 'Blog Slider',
		'base'		=> 'blog-slider',
		'params'	=> array(
			
			array(
				'type'			=> 'attach_image',
				'param_name'	=> 'bgimage',
				'heading'		=> 'Background Image',
				
				),
			),

		));
}