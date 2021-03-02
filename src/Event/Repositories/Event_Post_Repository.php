<?php

declare(strict_types=1);

/**
 * WP_Post implentation of the Event Repository
 *
 * @since 0.1.0
 * @author Glynn Quelch <glynn.quelch@gmail.com>
 * @package PinkCrab/Locations
 */

namespace PinkCrab\Locations\Event\Repositories;

use WP_Post;
use stdClass;
use PinkCrab\Locations\Event\Event_Repository;
use PcLocations_001\PinkCrab\Core\Application\App_Config;

class Event_Post_Repository implements Event_Repository {

	protected $app_config;

	public function __construct( App_Config $app_config ) {
		$this->app_config = $app_config;
	}

	/**
	 * @inheritDoc
	 */
	public function find( int $id ): ?stdClass {
		$posts = get_posts(
			array(
				'post_type'   => $this->app_config->post_types( 'event', 'slug' ),
				'post__in'    => array( $id ),
				'numberposts' => 1,
			)
		);

		if ( is_array( $posts ) ) {
			$posts = array_values( $posts );
			return $this->post_to_dto( $posts[0] );
		} elseif ( is_a( $posts, WP_Post::class ) ) {
			return $this->post_to_dto( $posts );
		} else {
			return null;
		}
	}

	/**
	 * Popuates a simple DTO From post.
	 *
	 * @param \WP_Post $post
	 * @return \stdClass
	 */
	protected function post_to_dto( \WP_Post $post ): stdClass {
		$meta = get_post_meta( $post->ID );

		return (object) array(
			'id'      => $post->ID,
			'content' => $post->post_content,
			'title'   => $post->post_title,
			'slug'    => $post->post_name,
			'excerpt' => $post->post_excerpt,
			'date'    => array_key_exists( 'date', $meta ) ? $meta['date'][0] : '',
		);
	}


}
