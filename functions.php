<?php

class TradYouth_Responsive {

	public function __construct() {

		add_action( 'wp_enqueue_scripts', array( &$this, 'do_styles' ) );

	}

	public function do_styles() {

		$parent = 'mildendo';

		wp_enqueue_style( $parent, get_template_directory_uri() . '/style.css' );

		wp_enqueue_style(
			'tradyouth_responsive',
			get_stylesheet_directory_uri() . '/style.css',
			array( $parent )
		);

	}

}

$tradyouth_responsive = new TradYouth_Responsive();

/* EOF */
