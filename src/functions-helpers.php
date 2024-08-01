<?php
/**
 * Media grabber helper functions.
 *
 * Helper functions and template tags related to media.
 *
 * @package   HybridMediaGrabber
 * @link      https://github.com/themehybrid/hybrid-media-grabber
 *
 * @author    Theme Hybrid
 * @copyright Copyright (c) 2008 - 2024, Theme Hybrid
 * @license   http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

namespace Hybrid\Media\Grabber;

if ( ! function_exists( __NAMESPACE__ . '\\display' ) ) {
    /**
     * Outputs the media grabber HTML.
     *
     * @since  1.0.0
     * @param  array $args
     * @return void
     *
     * @access public
     */
    function display( array $args = [] ) {
        ( new Grabber( $args ) )->display();
    }
}

if ( ! function_exists( __NAMESPACE__ . '\\render' ) ) {
    /**
     * Returns the media grabber HTML.
     *
     * @since  1.0.0
     * @param  array $args
     * @return string
     *
     * @access public
     */
    function render( array $args = [] ) {
        return ( new Grabber( $args ) )->render();
    }
}
