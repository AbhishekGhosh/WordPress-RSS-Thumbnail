<?php

/*
Plugin Name: WordPress RSS Feed Thumbnail
Description: Inserts post thumbnail to WordPress RSS feed.
Version: 1.0
License: GPL 3.0
Author: Abhishek Ghosh
Author URI: http://thecustomizewindows.com
*/

/*  Copyleft

    This program is a free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 3, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

function rssimgsrc_insert_thumb_rss($content) {
	global $post;
		if ( has_post_thumbnail( $post->ID ) ){
			$content = '' . get_the_post_thumbnail( $post->ID, 'thumbnail' ) . '' . $content;
		}
	return $content;
}

add_filter('the_excerpt_rss', 'rssimgsrc_insert_thumb_rss');
add_filter('the_content_feed', 'rssimgsrc_insert_thumb_rss');

?>
