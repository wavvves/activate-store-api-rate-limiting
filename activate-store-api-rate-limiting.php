<?php
/**
 * Plugin Name: Rate Limiting for Store API
 * Plugin URI: https://github.com/wavvves/activate-store-api-rate-limiting
 * Description: Enables Store API Rate Limiting feature
 * Version: 1.0
 * Author: Paulo Arromba
 * Author URI: https://github.com/wavvves
 * Developer: Paulo Arromba
 *
 * Requires at least: 6.1.1
 * Requires PHP: 7.0
 * WC requires at least: 7.2
 * WC tested up to: 7.2
 *
 * Copyright: © 2022 Automattic.
 * License: GNU General Public License v3.0
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
 */

add_filter( 'woocommerce_store_api_rate_limit_options', function() {

	return [
		'enabled' => defined('STORE_API_RATE_LIMITING_ENABLED') ? STORE_API_RATE_LIMITING_ENABLED : true, // enables/disables Rate Limiting
		'proxy_support' => defined('STORE_API_RATE_LIMITING_PROXY_SUPPORT') ? STORE_API_RATE_LIMITING_PROXY_SUPPORT : false, //enables/disables Proxy support. Default:false
		'limit' => defined('STORE_API_RATE_LIMITING_LIMIT') ? STORE_API_RATE_LIMITING_LIMIT : 25, // limit of request per timeframe. Default: 25
		'seconds' => defined('STORE_API_RATE_LIMITING_SECONDS') ? STORE_API_RATE_LIMITING_SECONDS : 10, // timeframe in seconds. Default: 10
	];
} );