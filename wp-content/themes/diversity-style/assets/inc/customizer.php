<?php

function diversity_customize_register($wp_customize) {
    // Setting group for selecting slider
   $wp_customize->add_section( 'diversity_general_options' , array(
    'title'      => __('General Options','diversity'),
    'priority'   => 30,
   ) );
   
   $wp_customize->add_section( 'diversity_slider_options' , array(
    'title'      => __('Slider Options','diversity'),
    'priority'   => 35,
   ) );
   
	
	// Begin slider section
	$wp_customize->add_setting( 'diversity_slider_transition', array(
		'default' => 'slide',
		'sanitize_callback' => 'diversity_sanitize_escaping'
	) );

	
	$wp_customize->add_control( 'diversity_slider_transition', array(
    'label'   => __( 'Slider Transition', 'diversity' ),
    'section' => 'diversity_slider_options',
	'priority' => '2',
    'type'    => 'radio',
        'choices' => array(
            'slide' => __( 'Slide', 'diversity' ),
            'slide carousel-fade' => __( 'Fade', 'diversity' ),
        ),
    ));
	
    //  = Category Dropdown =

    $categories = get_categories();
	$cats = array();
	$i = 0;
	foreach($categories as $category){
		if($i==0){
			$default = $category->slug;
			$i++;
		}
		$cats[$category->slug] = $category->name;
	}
 
	$wp_customize->add_setting('diversity_slide_cat', array(
		'default'        => $default,
'sanitize_callback' => 'diversity_sanitize_escaping'		
	));
	$wp_customize->add_control( 'diversity_slide_cat', array(
		'settings' => 'diversity_slide_cat',
		'label'   => __('Select Slider Category:','diversity'),
		'section'  => 'diversity_slider_options',
		'priority' => '3',
		'type'    => 'select',
		'choices' => $cats,
	));
	
	$wp_customize->add_setting(
    'diversity_slide_number',
		array(
			'sanitize_callback' => 'diversity_sanitize_integer'
		)
    );

    $wp_customize->add_control(
    'diversity_slide_number',
    array(
        'type' => 'text',
		'default' => 5,
        'label' => __('Number Of Slides To Show - i.e 10 (default is 5)','diversity'),
        'section' => 'diversity_slider_options',
		'priority' => '4',
        )
    );
	
	$wp_customize->add_setting(
    'diversity_slider_excerpt', 
		array(
			'sanitize_callback' => 'diversity_sanitize_integer'
		)
    );

    $wp_customize->add_control(
    'diversity_slider_excerpt',
    array(
        'type' => 'text',
		'default' => 40,
        'label' => __('Enter excerpt length for the slider (default is 40)','diversity'),
        'section' => 'diversity_slider_options',
        )
    );
	
	$wp_customize->add_setting(
    'diversity_slider_visibility',
			array(
			'sanitize_callback' => 'diversity_sanitize_escaping'
		)
	
    );

    $wp_customize->add_control(
    'diversity_slider_visibility',
    array(
        'type' => 'checkbox',
        'label' => __('Show Home Slider','diversity'),
        'section' => 'diversity_slider_options',
		'priority' => 1,
        )
    );
	

	
/*******************************************
Color scheme
********************************************/
$wp_customize->add_setting(
        'diversity_background_color',
        array(
            'default'     => '#0d3070',
			'sanitize_callback' => 'diversity_sanitize_hex_color'
        )
    );
 
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'background_color',
            array(
                'label'      => __( 'Background color', 'diversity' ),
                'section'    => 'colors',
                'sanitize_callback' => 'diversity_sanitize_escaping'
            )
        )
    );
 $wp_customize->add_setting(
        'diversity_link_color',
        array(
            'default'     => '#2a9ed4',
			'sanitize_callback' => 'diversity_sanitize_hex_color'
        )
    );
 
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'link_color',
            array(
                'label'      => __( 'Linc color', 'diversity' ),
                'section'    => 'colors',
                'settings'   => 'diversity_link_color'
            )
        )
    );
	 $wp_customize->add_setting(
        'diversity_bac_single_color',
        array(
            'default'     => '#ffffff',
			'sanitize_callback' => 'diversity_sanitize_hex_color'
        )
    );
 
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'bac_single_color',
            array(
                'label'      => __( 'Post background color', 'diversity' ),
                'section'    => 'colors',
                'settings'   => 'diversity_bac_single_color'
            )
        )
    );
	 $wp_customize->add_setting(
        'diversity_sb_right_color',
        array(
            'default'     => '#f4f4f4',
			'sanitize_callback' => 'diversity_sanitize_hex_color'
        )
    );
 
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'sb_right_color',
            array(
                'label'      => __( 'Right sidebar background color', 'diversity' ),
                'section'    => 'colors',
                'settings'   => 'diversity_sb_right_color'
            )
        )
    );
		 $wp_customize->add_setting(
        'diversity_footer_color',
        array(
            'default'     => '#e8e8e8',
			'sanitize_callback' => 'diversity_sanitize_hex_color'
        )
    );
 
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'footer_color',
            array(
                'label'      => __( 'Footer background color', 'diversity' ),
                'section'    => 'colors',
                'settings'   => 'diversity_footer_color'
            )
        )
    );
			 $wp_customize->add_setting(
        'diversity_header_text_color',
        array(
            'default'     => '#ffffff',
			'sanitize_callback' => 'diversity_sanitize_hex_color'
        )
    );
 
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'header-text_color',
            array(
                'label'      => __( 'Site Title and Tagline color', 'diversity' ),
                'section'    => 'colors',
                'settings'   => 'diversity_header_text_color'
            )
        )
    );
	
	function diversity_sanitize_integer( $input ) {
    	if( is_numeric( $input ) ) {
        return intval( $input );
   	}
	}
		function diversity_sanitize_escaping( $input) {
		$input = esc_attr( $input);
		return $input;
	}
	function diversity_sanitize_hex_color( $color ) {
	if ( '' === $color )
		return '';
	
	if ( preg_match('|^#([A-Fa-f0-9]{3}){1,2}$|', $color ) )
		return $color;
}
	
}

add_action( 'customize_register', 'diversity_customize_register' );