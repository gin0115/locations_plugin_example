<?php

declare(strict_types=1);

/**
 * Event Controller
 *
 * Used on both back and front ends.
 */

namespace PinkCrab\Locations\Event;

use Exception;
use PinkCrab\Locations\Event\Event_Post_Type;
use PcLocations_001\PinkCrab\Core\Application\App;
use PcLocations_001\PinkCrab\Registerables\MetaBox;
use PcLocations_001\PinkCrab\Core\Services\View\View;
use PcLocations_001\PinkCrab\Registerables\Post_Type;
use PcLocations_001\PinkCrab\Core\Application\App_Config;
use PcLocations_001\PinkCrab\Core\Interfaces\Registerable;
use PcLocations_001\Psr\Http\Message\ServerRequestInterface;
use PcLocations_001\PinkCrab\Core\Services\Registration\Loader;

class Event_Controller implements Registerable {

	/**
	 * @var App
	 */
	protected $app;

	/**
	 * @var View
	 */
	protected $view;

	/**
	 * @var ServerRequestInterface
	 */
	protected $request;

	/**
	 * @var Event_Mapper
	 */
	protected $event_mapper;

	/**
	 * @var App_Config
	 */
	protected $config;

	/**
	 * @var Post_Type
	 */
	protected $post_type;

	/**
	 * @var Event_View_Model
	 */
	protected $view_model;

	/**
	 * @param View $view
	 * @param App_Config $config
	 * @param ServerRequestInterface $request
	 */
	public function __construct(
		App $app,
		View $view,
		App_Config $config,
		ServerRequestInterface $request,
		Event_Mapper $event_mapper,
		Post_Type $post_type
	) {
		$this->app          = $app;
		$this->view         = $view;
		$this->request      = $request;
		$this->event_mapper = $event_mapper;
		$this->config       = $config;
		$this->post_type    = $post_type;
	}

	/**
	 * Hook registration.
	 *
	 * @param \PcLocations_001\PinkCrab\Core\Services\Registration\Loader $loader
	 * @return void
	 */
	public function register( Loader $loader ): void {
		$this->register_metabox( $loader );
	}

	/**
	 * Registers the event metabox
	 *
	 * @param \PcLocations_001\PinkCrab\Core\Services\Registration\Loader $loader
	 * @return void
	 */
	public function register_metabox( Loader $loader ): void {
		MetaBox::normal( 'event_details_metabox' )
			->label( 'Event Details' )
			->screen( $this->post_type::get_slug() )
			->view(
				function( \WP_Post $post, array $args ) {
					$this->view->render(
						'admin.event.metabox',
						array(
							'event' => new Event_View_Model(
								$this->event_mapper->from_post( $post )
							),
						)
					);
				}
			)
			->add_action( 'post_updated', array( $this, 'save_event_callback' ), 10, 3 )
			->register( $loader );
	}

	/**
	 * Callback for saving event meta.
	 *
	 * @param int $post_id
	 * @param \WP_Post $before
	 * @param \WP_Post $after
	 * @return void
	 */
	public function save_event_callback( int $post_id, \WP_Post $before, \WP_Post $after ): void {
		dd( $post_id, $before, $after, $this );
	}

}
