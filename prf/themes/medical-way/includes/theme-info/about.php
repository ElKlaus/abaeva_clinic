<?php
/**
 * About configuration
 *
 * @package Medical_Way
 */

$config = array(
	'menu_name' => esc_html__( 'About Medical Way', 'medical-way' ),
	'page_name' => esc_html__( 'About Medical Way', 'medical-way' ),

	/* translators: theme version */
	'welcome_title' => sprintf( esc_html__( 'Welcome to %s - ', 'medical-way' ), 'Medical Way' ),

	/* translators: 1: theme name */
	'welcome_content' => sprintf( esc_html__( 'We hope this page will help you to setup %1$s with few clicks. We believe you will find it easy to use and perfect for your website development.', 'medical-way' ), 'Medical Way' ),

	// Quick links.
	'quick_links' => array(
		'theme_url' => array(
			'text' => esc_html__( 'Theme Details','medical-way' ),
			'url'  => 'https://www.prodesigns.com/wordpress-themes/downloads/medical-way/',
			),
		'demo_url' => array(
			'text' => esc_html__( 'View Demo','medical-way' ),
			'url'  => 'https://www.prodesigns.com/wordpress-themes/demo/medical-way/',
			),
		'documentation_url' => array(
			'text'   => esc_html__( 'View Documentation','medical-way' ),
			'url'    => 'https://www.prodesigns.com/wordpress-themes/documentation/medical-way/',
			'button' => 'primary',
			),
		'rate_url' => array(
			'text' => esc_html__( 'Rate This Theme','medical-way' ),
			'url'  => 'https://wordpress.org/support/theme/medical-way/reviews/',
			),
		),

	// Tabs.
	'tabs' => array(
		'getting_started'     => esc_html__( 'Getting Started', 'medical-way' ),
		'recommended_actions' => esc_html__( 'Recommended Actions', 'medical-way' ),
		'support'             => esc_html__( 'Support', 'medical-way' ),
		'upgrade_to_pro'      => esc_html__( 'Upgrade to Pro', 'medical-way' ),
		'free_pro'            => esc_html__( 'FREE VS. PRO', 'medical-way' ),
	),

	// Getting started.
	'getting_started' => array(
		array(
			'title'               => esc_html__( 'Theme Documentation', 'medical-way' ),
			'text'                => esc_html__( 'Find step by step instructions with video documentation to setup theme easily.', 'medical-way' ),
			'button_label'        => esc_html__( 'View documentation', 'medical-way' ),
			'button_link'         => 'https://www.prodesigns.com/wordpress-themes/documentation/medical-way/',
			'is_button'           => false,
			'recommended_actions' => false,
			'is_new_tab'          => true,
		),
		array(
			'title'               => esc_html__( 'Recommended Actions', 'medical-way' ),
			'text'                => esc_html__( 'We recommend few steps to take so that you can get complete site like shown in demo.', 'medical-way' ),
			'button_label'        => esc_html__( 'Check recommended actions', 'medical-way' ),
			'button_link'         => esc_url( admin_url( 'themes.php?page=medical-way-about&tab=recommended_actions' ) ),
			'is_button'           => false,
			'recommended_actions' => false,
			'is_new_tab'          => false,
		),
		array(
			'title'               => esc_html__( 'Customize Everything', 'medical-way' ),
			'text'                => esc_html__( 'Start customizing every aspect of the website with customizer.', 'medical-way' ),
			'button_label'        => esc_html__( 'Go to Customizer', 'medical-way' ),
			'button_link'         => esc_url( wp_customize_url() ),
			'is_button'           => true,
			'recommended_actions' => false,
			'is_new_tab'          => false,
		),
	),

	// Recommended actions.
	'recommended_actions' => array(
		'content' => array(
			
			'front-page' => array(
				'title'       => esc_html__( 'Setting Static Front Page','medical-way' ),
				'description' => esc_html__( 'Create a new page to display on front page ( Ex: Home ) and assign "Home" template. Select A static page then Front page and Posts page to display front page specific sections. Note: Static page will be set automatically when you import demo content.', 'medical-way' ),
				'id'          => 'front-page',
				'check'       => ( 'page' === get_option( 'show_on_front' ) ) ? true : false,
				'help'        => '<a href="' . esc_url( wp_customize_url() ) . '?autofocus[section]=static_front_page" class="button button-secondary">' . esc_html__( 'Static Front Page', 'medical-way' ) . '</a>',
			),

		),
	),

	// Support.
	'support_content' => array(
		'first' => array(
			'title'        => esc_html__( 'Contact Support', 'medical-way' ),
			'icon'         => 'dashicons dashicons-sos',
			'text'         => esc_html__( 'If you have any problem, feel free to create ticket on our dedicated Support forum.', 'medical-way' ),
			'button_label' => esc_html__( 'Contact Support', 'medical-way' ),
			'button_link'  => esc_url( 'https://www.prodesigns.com/wordpress-themes/support/item/medical-way/' ),
			'is_button'    => true,
			'is_new_tab'   => true,
		),
		'second' => array(
			'title'        => esc_html__( 'Theme Documentation', 'medical-way' ),
			'icon'         => 'dashicons dashicons-book-alt',
			'text'         => esc_html__( 'Kindly check our theme documentation for detailed information and video instructions.', 'medical-way' ),
			'button_label' => esc_html__( 'View Documentation', 'medical-way' ),
			'button_link'  => 'https://www.prodesigns.com/wordpress-themes/documentation/medical-way/',
			'is_button'    => false,
			'is_new_tab'   => true,
		),
		'third' => array(
			'title'        => esc_html__( 'Pro Version', 'medical-way' ),
			'icon'         => 'dashicons dashicons-products',
			'icon'         => 'dashicons dashicons-star-filled',
			'text'         => esc_html__( 'Upgrade to pro version for additional features and options.', 'medical-way' ),
			'button_label' => esc_html__( 'View Pro Version', 'medical-way' ),
			'button_link'  => 'https://www.prodesigns.com/wordpress-themes/downloads/medical-way-plus/',
			'is_button'    => true,
			'is_new_tab'   => true,
		),
		'fourth' => array(
			'title'        => esc_html__( 'Customization Request', 'medical-way' ),
			'icon'         => 'dashicons dashicons-admin-tools',
			'text'         => esc_html__( 'We have dedicated team members for theme customization. Feel free to contact us any time if you need any customization service.', 'medical-way' ),
			'button_label' => esc_html__( 'Customization Request', 'medical-way' ),
			'button_link'  => 'https://www.prodesigns.com/wordpress-themes/contact-us/',
			'is_button'    => false,
			'is_new_tab'   => true,
		),
		'fifth' => array(
			'title'        => esc_html__( 'Child Theme', 'medical-way' ),
			'icon'         => 'dashicons dashicons-admin-customizer',
			'text'         => esc_html__( 'If you want to customize theme file, you should use child theme rather than modifying theme file itself.', 'medical-way' ),
			'button_label' => esc_html__( 'About child theme', 'medical-way' ),
			'button_link'  => 'https://developer.wordpress.org/themes/advanced-topics/child-themes/',
			'is_button'    => false,
			'is_new_tab'   => true,
		),
		'sixth' => array(),
	),

	// Upgrade.
	'upgrade_to_pro' 	=> array(
		'description'   => esc_html__( 'Upgrade to pro version for more exciting features and additional theme options.', 'medical-way' ),
		'button_label' 	=> esc_html__( 'Upgrade to Pro', 'medical-way' ),
		'button_link'  	=> 'https://www.prodesigns.com/wordpress-themes/downloads/medical-way-plus/',
		'is_new_tab'   	=> true,
	),

    // Free vs pro array.
    'free_pro' => array(
	    array(
		    'title'     => esc_html__( 'Google Fonts', 'medical-way' ),
		    'desc' 		=> esc_html__( 'Google fonts options for changing the overall site fonts', 'medical-way' ),
		    'free'  	=> 'no',
		    'pro'   	=> esc_html__('100+','medical-way'),
	    ),
	    array(
		    'title'     => esc_html__( 'Color Options', 'medical-way' ),
		    'desc'      => esc_html__( 'Options to change primary color of the site', 'medical-way' ),
		    'free'      => esc_html__('no','medical-way'),
		    'pro'       => esc_html__('yes','medical-way'),
	    ),
	    array(
		    'title'     => esc_html__( 'WooCommerce Ready', 'medical-way' ),
		    'desc'      => esc_html__( 'Theme supports/works with WooCommerce plugin', 'medical-way' ),
		    'free'      => esc_html__('no','medical-way'),
		    'pro'       => esc_html__('yes','medical-way'),
	    ),
        array(
    	    'title'     => esc_html__( 'Hide Footer Credit', 'medical-way' ),
    	    'desc'      => esc_html__( 'Option to enable/disable Powerby(Designer) credit in footer', 'medical-way' ),
    	    'free'      => esc_html__('no','medical-way'),
    	    'pro'       => esc_html__('yes','medical-way'),
        ),
        array(
    	    'title'     => esc_html__( 'Override Footer Credit', 'medical-way' ),
    	    'desc'      => esc_html__( 'Option to Override existing Powerby credit of footer', 'medical-way' ),
    	    'free'      => esc_html__('no','medical-way'),
    	    'pro'       => esc_html__('yes','medical-way'),
        ),
	    array(
		    'title'     => esc_html__( 'SEO', 'medical-way' ),
		    'desc' 		=> esc_html__( 'Developed with high skilled SEO tools.', 'medical-way' ),
		    'free'  	=> 'yes',
		    'pro'   	=> 'yes',
	    ),
	    array(
		    'title'     => esc_html__( 'Support Forum', 'medical-way' ),
		    'desc'      => esc_html__( 'Highly experienced and dedicated support team for your help plus online chat.', 'medical-way' ),
		    'free'      => esc_html__('yes', 'medical-way'),
		    'pro'       => esc_html__('High Priority', 'medical-way'),
	    )

    ),

);
Medical_Way_About::init( apply_filters( 'medical_way_about_filter', $config ) );
