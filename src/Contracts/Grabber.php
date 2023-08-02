<?php
/**
 * Media grabber interface.
 *
 * Defines the interface that media grabber classes must use.
 *
 * @package   HybridMediaGrabber
 * @link      https://github.com/themehybrid/hybrid-media-grabber
 *
 * @author    Theme Hybrid
 * @copyright Copyright (c) 2008 - 2023, Theme Hybrid
 * @license   http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

namespace Hybrid\Media\Grabber\Contracts;

use Hybrid\Contracts\Displayable;
use Hybrid\Contracts\Renderable;

/**
 * Attributes interface.
 *
 * @since  1.0.0
 *
 * @access public
 */
interface Grabber extends Renderable, Displayable {

}
