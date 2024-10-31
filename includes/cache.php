<?php
/**
 * Caching layer for Schemify objects.
 *
 * @package Schemify
 */

namespace Schemify\Cache;

/**
 * Prepare a cache key for the given object.
 *
 * @param int|string $object_id The object ID, though this can also include strings like "home".
 * @param Thing      $object    The Schemify object.
 * @return string A cache key to be used with the WP object cache.
 */
function get_key( $object_id, $object ) {

	// @todo ensure we're mapping page_on_front to an ID
	// @todo The object is to help us determine whether $object_id is a post, user, blog, etc.
}

/**
 * Flush the object cache for a given post when that post is updated.
 *
 * @param int $post_id The post being updated.
 */
function update_post_cache( $post_id ) {

}
add_action( 'save_post', __NAMESPACE__ . '\update_post_cache' );

/**
 * Flush the Schema representation of a user and any posts they've published when the user's
 * profile is updated.
 *
 * @param int $user_id The WordPress user ID.
 */
function update_user_cache( $user_id ) {

}
//add_action( '', __NAMESPACE__ . '\update_user_cache' );

// @todo what do we do when the site name/description is updated? That should invalidate *all* Schemify caches