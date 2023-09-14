<?php

class JqueryChosenPlugin extends MantisPlugin {

	function register() {
		$this->name = 'Jquery Chosen';
		$this->description = 'Applies the Chosen jQuery plugin on all html selects that don't have css .not-chosen-plugin';

		$this->version = '0.4';
		$this->requires = array(
			'MantisCore' => '2.0.0'
		);

		$this->author	= 'Speisekatze';
		$this->contact	= 'speisekatze@gmail.com';
		$this->url	= 'https://github.com/speisekatze/JqueryChosen';
	}

	function hooks() {
		return array(
			'EVENT_LAYOUT_RESOURCES' => 'resources',
		);
	}

	/**
	 * Create the resource link to load the jQuery library.
	 */
	function resources( $p_event ) {
		$resources = '<link rel="stylesheet" type="text/css" href="' . plugin_file( 'chosen.css') . '" />' .
					'<script type="text/javascript" src="' . plugin_page( 'chosen_js_params' ) . '"></script> '.
					'<script type="text/javascript" src="' . plugin_file( 'chosenmin.js' ) . '"></script> '.
					'<script type="text/javascript" src="' . plugin_file( 'chosen.js' ) . '"></script> '.
					'<script type="text/javascript" src="' . plugin_file( 'chosen_html_validation_fix.js' ) . '"></script> ';
		return  $resources;
	}
}

