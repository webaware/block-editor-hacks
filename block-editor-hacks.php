<?php
/*
Plugin Name: Block Editor Hacks
Plugin URI: https://github.com/webaware/block-editor-hacks
Description: hacks like a wider block editor in Gutenberg
Version: 0.0.1
Author: WebAware
Author URI: https://shop.webaware.com.au/
*/

/*
copyright (c) 2018 WebAware Pty Ltd (email : support@webaware.com.au)

This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
*/

if (!defined('ABSPATH')) {
	exit;
}

const BLOCK_EDITOR_HACK_VERSION		= '0.0.1';

/**
* load some CSS for hacking the block editor
*/
add_action('enqueue_block_editor_assets', function() {
	$ver = SCRIPT_DEBUG ? time() : BLOCK_EDITOR_HACK_VERSION;

	wp_enqueue_style('block-editor-hacks-editor', plugins_url('css/style-editor.css', __FILE__), [], $ver);
});
