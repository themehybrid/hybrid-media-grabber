<?php
/**
 * Media grabber helper functions.
 *
 * Helper functions and template tags related to media.
 *
 * @package   HybridCore
 * @author    Justin Tadlock <justintadlock@gmail.com>
 * @copyright Copyright (c) 2008 - 2021, Justin Tadlock
 * @link      https://themehybrid.com/hybrid-core
 * @license   http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

namespace Hybrid\Media\Grabber;

/**
 * Outputs the media grabber HTML.
 *
 * @since  1.0.0
 * @access public
 * @param  array  $args
 * @return void
 */
function display( array $args = [] ) {
	( new Grabber( $args ) )->display();
}

/**
 * Returns the media grabber HTML.
 *
 * @since  1.0.0
 * @access public
 * @param  array  $args
 * @return string
 */
function render( array $args = [] ) {
	return ( new Grabber( $args ) )->render();
}
