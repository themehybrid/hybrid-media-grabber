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
 * @copyright Copyright (c) 2008 - 2024, Theme Hybrid
 * @license   http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

namespace Hybrid\Media\Grabber\Contracts;

use Hybrid\Contracts\Displayable;
use Hybrid\Contracts\Renderable;

/**
 * Attributes interface.
 */
interface Grabber extends Displayable, Renderable {

}
