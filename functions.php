<?php

class TradYouth_Responsive {

	public function __construct() {

		add_action( 'wp_enqueue_scripts', array( &$this, 'do_styles' ) );

		add_filter( 'user_contactmethods', array( &$this, 'add_twitter' ) );

		add_action( 'admin_init', array( &$this, 'do_contrib_uploads' ) );
	}

	public function do_styles() {

		wp_enqueue_style( 'mildendo', get_template_directory_uri() . '/style.css' );

		wp_enqueue_style(
			'tradyouth-responsive',
			get_stylesheet_directory_uri() . '/style.css',
			array( 'jquerymobile', 'mildendo' )
		);

	}

	public function add_twitter( $fields ) {

		$fields['twitter'] = 'Twitter';

		return $fields;
	}

	public function do_contrib_uploads() {

		$contrib = get_role( 'contributor' );

		$contrib->add_cap( 'upload_files' );

	}

}

$tradyouth_responsive = new TradYouth_Responsive();

/* EOF */
