<?php
/*
Plugin Name:    HWDSB Mediacore URL 
Description:    Registers the Mediacore URL for all sites
Version:        1.0
Author:         Bob Fowler & Jared Bennett
*/

class HWDSB_mcore_URL {
	
	
	/**
	 * Static init method.
	 */
	public static function init() {
		return new self();
	}
	
	/**
	 * Constructor.
	 */
    public function __construct() {
        add_filter( 'pre_option_mcore_url', array( 'HWDSB_mcore_URL', 'get_mc_key' ) );
    }
	
	/**
	 * Returns VP license key
	 */
	public function get_mc_key($mcore_url) {
		$mcore_url = 'replace_with_your_URL';
		return $mcore_url;
	}
}

HWDSB_mcore_URL::init();
