<?php
/**
 * Plugin Name: p5.js Embedder
 * Plugin URI: https://github.com/lmccart/p5.js/wiki/wordpress-embedder
 * Description: A brief description of the Plugin.
 * Version: 0.1.0
 * Author: Lauren McCarthy
 * Author URI: http://lauren-mccarthy.com
 * License: GPL2
 */

/*  Copyright 2014 Lauren McCarthy (email: hello@p5js.org)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

defined('ABSPATH') or die("No script kiddies please!");


function add_header() {
  echo '<script type="text/javascript" src="http://code.jquery.com/jquery-2.1.1.min.js"></script>';
  echo '<script type="text/javascript" src="http://cdn.jsdelivr.net/p5.js/0.3.4/p5.min.js"></script>';
  echo '<script src="http://cdn.jsdelivr.net/ace/1.1.5/min/ace.js" type="text/javascript" charset="utf-8"></script>';
  echo '<script src="http://cdn.jsdelivr.net/ace/1.1.5/min/ext-beautify.js" type="text/javascript" charset="utf-8"></script>';
  echo '<link rel="stylesheet" type="text/css" href="style.css">';
}
add_action('get_header', add_header);

function build_sketch($content) {
  return $content.'<script type="text/javascript" src="helper.js"></script>';
}
add_filter('the_content', build_sketch);

?>