<?php

class TradYouth_Responsive {

	public function __construct() {

		add_action( 'wp_enqueue_scripts', array( &$this, 'do_styles' ) );

	}

	public function do_styles() {

		$parent = 'mildendo';
		$child  = 'tradyouth_responsive';

		wp_enqueue_style( $parent, get_template_directory_uri() . '/style.css' );

		wp_enqueue_style(
			'roller',
			get_stylesheet_directory_uri() . '/roller.css',
			array( 'jquerymobile', $parent )
		);

		wp_enqueue_style(
			'roller_icons',
			get_stylesheet_directory_uri() . '/jquery.mobile.icons.min.css',
			array( 'jquerymobile', $parent, 'roller' )
		);

		wp_enqueue_style(
			$child,
			get_stylesheet_directory_uri() . '/style.css',
			array( 'jquerymobile', $parent, 'roller', 'roller_icons' )
		);

	}

}

$tradyouth_responsive = new TradYouth_Responsive();

/* EOF */
