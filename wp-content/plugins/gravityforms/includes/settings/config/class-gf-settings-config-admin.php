<?php

namespace Gravity_Forms\Gravity_Forms\Settings\Config;

use Gravity_Forms\Gravity_Forms\Config\GF_Config;
use GFForms;

/**
 * Config items for the Settings I18N
 *
 * @since 2.6.2
 */
class GF_Settings_Config_Admin extends GF_Config {

	protected $name               = 'gform_admin_config';
	protected $script_to_localize = 'gform_gravityforms_admin_vendors';

	/**
	 * Only enqueue in the admin.
	 *
	 * @since 2.6.2
	 *
	 * @return bool
	 */
	public function should_enqueue() {
		return GFForms::is_gravity_page();
	}

	/**
	 * Config data.
	 *
	 * @since 2.6.2
	 *
	 * @return array[]
	 */
	public function data() {
		$post_types = apply_filters( 'gform_post_select_post_types', array( 'post', 'page' ) );
		$count      = apply_filters( 'gform_post_select_initial_count', 5 );

		$data = array(
			'components' => array(
				'post_select' => array(),
			),
		);

		foreach( $post_types as $post_type ) {
			$post_type_obj = get_post_type_object( $post_type );
			if ( $post_type_obj ) {
				$post_plural = $post_type_obj->labels->name;
				$data['components']['post_select'][ $post_type ] = array(
					'endpoints' => array(
						'get' => rest_url( '/wp/v2/' . $post_plural ),
					),
					'data' => $this->get_first_posts_for_type( $post_type, $count ),
				);
			}
		}

		return $data;
	}

	/**
	 * Get the first posts to populate the dropdown.
	 *
	 * @since 2.6.2
	 *
	 * @param string $post_type Post type slug
	 * @param int    $count     Number of posts
	 *
	 * @return array|false
	 */
	public function get_first_posts_for_type( $post_type, $count ) {
		$first_posts = array();
		$posts       = get_posts( array( 'post_type' => $post_type, 'number' => $count ) );

		if ( ! is_array( $posts ) || empty( $posts ) ) {
			return false;
		}

		foreach ( $posts as $post ) {
			$first_posts[] = array(
				'label' => esc_html( $post->post_title ),
				'value' => esc_attr( $post->ID ),
			);
		}

		return $first_posts;
	}
}
