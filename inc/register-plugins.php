<?php
/**
 * Register required plugins for TGM Plugin Activator
 *
 * @package Cherry
 */
add_action( 'tgmpa_register', 'cherry_register_required_plugins' );
/**
 * Register the required plugins for this theme.
 *
 * In this example, we register five plugins:
 * - one included with the TGMPA library
 * - two from an external source, one from an arbitrary source, one from a GitHub repository
 * - two from the .org repo, where one demonstrates the use of the `is_callable` argument
 *
 * The variable passed to tgmpa_register_plugins() should be an array of plugin
 * arrays.
 *
 * This function is hooked into tgmpa_init, which is fired within the
 * TGM_Plugin_Activation class constructor.
 */
function cherry_register_required_plugins() {
	/*
	 * Array of plugin arrays. Required keys are name and slug.
	 * If the source is NOT from the .org repo, then source is also required.
	 */
	$plugins = array(
		array(
			'name' => esc_html__( 'Contact Form 7', 'cherry' ),
			'slug' => 'contact-form-7',
		),
		array(
			'name' => esc_html__( 'DW Question & Answer', 'cherry' ),
			'slug' => 'dw-question-answer',
		),
		array(
			'name' => esc_html__( 'Cherry Sidebars', 'cherry' ),
			'slug' => 'cherry-sidebars',
		),
		array(
			'name' => esc_html__( 'Cherry Projects', 'cherry' ),
			'slug' => 'cherry-projects',
		),
		array(
			'name' => esc_html__( 'Cherry Testimonials', 'cherry' ),
			'slug' => 'cherry-testi',
		),
		array(
			'name' => esc_html__( 'Cherry Team Members', 'cherry' ),
			'slug' => 'cherry-team-members',
		),
		array(
			'name' => esc_html__( 'TM Timeline', 'cherry' ),
			'slug' => 'tm-timeline',
		),
		array(
			'name' => esc_html__( 'Cherry Site Shortcodes', 'cherry' ),
			'slug' => 'cherry-site-shortcodes',
			'source'   => CHERRY_THEME_DIR . '/assets/plugins/cherry-site-shortcodes.zip',
		),
		array(
			'name' => esc_html__( 'Cherry site plugins list', 'cherry' ),
			'slug' => 'cherry-site-plugins-list',
			'source'   => CHERRY_THEME_DIR . '/assets/plugins/cherry-site-plugins-list.zip',
		),
		array(
			'name' => esc_html__( 'Cherry Get Cherry', 'cherry' ),
			'slug' => 'cherry-get-cherry',
			'source'   => CHERRY_THEME_DIR . '/assets/plugins/cherry-get-cherry.zip',
		),
	);

	/*
	 * Array of configuration settings. Amend each line as needed.
	 *
	 * TGMPA will start providing localized text strings soon. If you already have translations of our standard
	 * strings available, please help us make TGMPA even better by giving us access to these translations or by
	 * sending in a pull-request with .po file(s) with the translations.
	 *
	 * Only uncomment the strings in the config array if you want to customize the strings.
	 */
	$config = array(
		'id'           => 'cherry',                  // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => true,                    // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.
	);

	tgmpa( $plugins, $config );
}
