<?php
/**
 * Plugin Name: Edit Homepage Link
 * Plugin URI: https://github.com/allan23/edit-homepage-link
 * Description: Adds a link to the homepage in the wp-admin menu (Pages->Edit Homepage).
 * Version: 0.0.1
 * Author: Allan Collins
 * Author URI: http://www.allancollins.net/
 *
 * @package edit-homepage-link
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

add_action( 'admin_menu', function () {
	$page_id = absint( get_option( 'page_on_front', 0 ) );
	if ( 0 === $page_id ) {
		return;
	}
	add_submenu_page( 'edit.php?post_type=page', __( 'Edit Homepage' ), __( 'Edit Homepage' ),
		'edit_pages', esc_url( get_edit_post_link( $page_id ) ) );
} );
