<?php
/**
 * Plugin Name: Show Hidden Post Meta
 * Plugin URI: http://wordpress.org/plugins/show-hidden-post-meta/
 * Description: Makes hidden post meta visible on post edit screens
 * Version: 1.0.1
 * Author: Philip Newcomer
 * Author URI: http://philipnewcomer.net
 * License: GPLv2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 *
 * Copyright (C) 2014-2019  Philip Newcomer
 *
 * This program is free software; you can redistribute it and/or modify it under the terms of the GNU General Public
 * License as published by the Free Software Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied
 * warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU General Public License for more
 * details.
 */

/**
 * Add a filter on `is_protected_meta` to always return false.
 */
add_filter( 'is_protected_meta', '__return_false', 999 );
