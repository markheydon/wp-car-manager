<?php

namespace Never5\WPCarManager\Vehicle;

class Data {

	/**
	 * Get Vehicle fields
	 *
	 * @param string $type Not used at the moment, but will be used when more than 1 vehicle type is offered
	 *
	 * @return array
	 */
	public static function get_fields( $type = 'car' ) {
		return array(
			'condition'    => array(
				'type'    => 'select',
				'options' => array(
					'new'  => 'New',
					'used' => 'Used'
				),
				'label'   => __( 'Condition', 'wp-car-manager' ),
				'key'     => 'condition'
			),
			'make'         => array(
				'type'  => 'text',
				'label' => __( 'Make', 'wp-car-manager' ),
				'key'   => 'make'
			),
			'model'        => array(
				'type'  => 'text',
				'label' => __( 'Model', 'wp-car-manager' ),
				'key'   => 'model'
			),
			'year'         => array(
				'type'  => 'text',
				'label' => __( 'Year', 'wp-car-manager' ),
				'key'   => 'year'
			),
			'price'        => array(
				'type'  => 'text',
				'label' => __( 'Price', 'wp-car-manager' ),
				'key'   => 'price'
			),
			'mileage'      => array(
				'type'  => 'text',
				'label' => __( 'Mileage', 'wp-car-manager' ),
				'key'   => 'mileage'
			),
			'fuel_type'    => array(
				'type'  => 'text',
				'label' => __( 'Fuel Type', 'wp-car-manager' ),
				'key'   => 'fuel_type'
			),
			'color'        => array(
				'type'  => 'text',
				'label' => __( 'Color', 'wp-car-manager' ),
				'key'   => 'color'
			),
			'body_style'   => array(
				'type'  => 'text',
				'label' => __( 'Body Style', 'wp-car-manager' ),
				'key'   => 'body_style'
			),
			'transmission' => array(
				'type'    => 'select',
				'options' => array(
					'automatic' => 'Automatic',
					'manual'    => 'Manual'
				),
				'label'   => __( 'Transmission', 'wp-car-manager' ),
				'key'     => 'transmission'
			),
			'engine'       => array(
				'type'  => 'text',
				'label' => __( 'Engine', 'wp-car-manager' ),
				'key'   => 'engine'
			),
			'doors'        => array(
				'type'  => 'text',
				'label' => __( 'Doors', 'wp-car-manager' ),
				'key'   => 'doors'
			),
		);
	}

}