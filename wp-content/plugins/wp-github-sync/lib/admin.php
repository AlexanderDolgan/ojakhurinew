<?php

/**
 * Administrative UI views and callbacks
 */
class WordPress_GitHub_Sync_Admin {

	/**
	 * Hook into GitHub API
	 */
	public function __construct() {
		add_action( 'admin_menu', array( &$this, 'add_admin_menu' ) );
		add_action( 'admin_init', array( &$this, 'register_settings' ) );
		add_action( 'current_screen', array( &$this, 'callback' ) );
	}

	/**
	 * Callback to render the settings page view
	 */
	public function settings_page() {
		include dirname( dirname( __FILE__ ) ) . '/views/options.php';
	}

	/**
	 * Callback to register the plugin's options
	 */
	public function register_settings() {
		add_settings_section( 'general', 'General Settings', array( &$this, 'section_callback' ), WordPress_GitHub_Sync::$text_domain );

		register_setting( WordPress_GitHub_Sync::$text_domain, 'wpghs_host' );
		add_settings_field( 'wpghs_host', __( 'GitHub hostname', 'wordpress-github-sync' ), array( &$this, 'field_callback' ), WordPress_GitHub_Sync::$text_domain, 'general', array(
				'default'   => 'https://api.github.com',
				'name'      => 'wpghs_host',
				'help_text' => __( 'The GitHub host to use. Can be changed to support a GitHub Enterprise installation.', 'wordpress-github-sync' ),
			)
		);

		register_setting( WordPress_GitHub_Sync::$text_domain, 'wpghs_repository' );
		add_settings_field( 'wpghs_repository', __( 'Repository', 'wordpress-github-sync' ), array( &$this, 'field_callback' ), WordPress_GitHub_Sync::$text_domain, 'general', array(
				'default'   => '',
				'name'      => 'wpghs_repository',
				'help_text' => __( 'The GitHub repository to commit to, with owner (<code>[OWNER]/[REPOSITORY]</code>), e.g., <code>benbalter/benbalter.github.com</code>. The repository should contain an initial commit.', 'wordpress-github-sync' ),
			)
		);

		register_setting( WordPress_GitHub_Sync::$text_domain, 'wpghs_oauth_token' );
		add_settings_field( 'wpghs_oauth_token', __( 'Oauth Token', 'wordpress-github-sync' ), array( &$this, 'field_callback' ), WordPress_GitHub_Sync::$text_domain, 'general', array(
				'default'   => '',
				'name'      => 'wpghs_oauth_token',
				'help_text' => __( "A <a href='https://github.com/settings/tokens/new'>personal oauth token</a> with <code>public_repo</code> scope.", 'wordpress-github-sync' ),
			)
		);

		register_setting( WordPress_GitHub_Sync::$text_domain, 'wpghs_secret' );
		add_settings_field( 'wpghs_secret', __( 'Webhook Secret', 'wordpress-github-sync' ), array( &$this, 'field_callback' ), WordPress_GitHub_Sync::$text_domain, 'general', array(
				'default'   => '',
				'name'      => 'wpghs_secret',
				'help_text' => __( "The webhook's secret phrase.", 'wordpress-github-sync' ),
			)
		);

		register_setting( WordPress_GitHub_Sync::$text_domain, 'wpghs_default_user' );
		add_settings_field( 'wpghs_default_user', __( 'Default Import User', 'wordpress-github-sync' ), array( &$this, 'user_field_callback' ), WordPress_GitHub_Sync::$text_domain, 'general', array(
				'default'   => '',
				'name'      => 'wpghs_default_user',
				'help_text' => __( 'The fallback user for import, in case WordPress <--> GitHub Sync cannot find the committer in the database.', 'wordpress-github-sync' ),
			)
		);
	}

	/**
	 * Callback to render an individual options field
	 *
	 * @param array $args
	 */
	public function field_callback( $args ) {
		include dirname( dirname( __FILE__ ) ) . '/views/setting-field.php';
	}

	/**
	 * Callback to render the default import user field.
	 *
	 * @param array $args
	 */
	public function user_field_callback( $args ) {
		include dirname( dirname( __FILE__ ) ) . '/views/user-setting-field.php';
	}

	/**
	 * Displays settings messages from background processes
	 */
	public function section_callback() {
		if ( 'settings_page_' . WordPress_GitHub_Sync::$text_domain !== get_current_screen()->id ) {
			return;
		}

		if ( 'yes' === get_option( '_wpghs_export_started' ) ) { ?>
			<div class="updated">
				<p><?php esc_html_e( 'Export to GitHub started.', 'wordpress-github-sync' ); ?></p>
			</div><?php
			delete_option( '_wpghs_export_started' );
		}

		if ( $message = get_option( '_wpghs_export_error' ) ) { ?>
			<div class="error">
				<p><?php esc_html_e( 'Export to GitHub failed with error:', 'wordpress-github-sync' ); ?> <?php echo esc_html( $message );?></p>
			</div><?php
			delete_option( '_wpghs_export_error' );
		}

		if ( 'yes' === get_option( '_wpghs_export_complete' ) ) { ?>
			<div class="updated">
				<p><?php esc_html_e( 'Export to GitHub completed successfully.', 'wordpress-github-sync' );?></p>
			</div><?php
			delete_option( '_wpghs_export_complete' );
		}

	}

	/**
	 * Add options menu to admin navbar
	 */
	public function add_admin_menu() {
		add_options_page( __( 'WordPress <--> GitHub Sync', WordPress_GitHub_Sync::$text_domain ), __( 'GitHub Sync', 'wordpress-github-sync' ), 'manage_options', WordPress_GitHub_Sync::$text_domain, array( &$this, 'settings_page' ) );
	}

	/**
	 * Admin callback to trigger import/export because WordPress admin routing lol
	 */
	public function callback() {
		global $wpghs;

		if ( ! current_user_can( 'manage_options' ) ) {
			return;
		}

		if ( 'settings_page_' . WordPress_GitHub_Sync::$text_domain !== get_current_screen()->id ) {
			return;
		}

		if ( ! isset( $_GET['action'] ) ) {
			return;
		}

		if ( 'export' === $_GET['action'] ) {
			$wpghs->start_export();
		}

		if ( 'import' === $_GET['action'] ) {
			$wpghs->start_import();
		}

		wp_redirect( admin_url( 'options-general.php?page=wordpress-github-sync' ) );
	}
}
