<?php

/**
 * Divi Extension
 *
 * @link       https://geotargetingwp.com/geotargeting-pro
 * @since      1.6.3
 *
 * @package    GeoTarget
 * @subpackage GeoTarget/includes
 * @author     Damian Logghe
 */
class GeotWP_Divi {
	/**
	 * Instance of `ET_Builder_Global_Presets_Settings`.
	 *
	 * @var ET_Builder_Global_Presets_Settings
	 */
	protected static $global_presets_manager = null;

	public function __construct() {
		add_action( 'et_pagebuilder_module_init', [ $this, 'module_init' ], 10, 1 );
		add_filter( 'et_builder_main_tabs', [ $this, 'add_tabs' ], 10, 1 );
		add_filter( 'et_module_shortcode_output', [ $this, 'render' ], 10, 3 );
		add_filter( 'et_builder_get_parent_modules', [ $this, 'get_fields' ], 10, 2 );
		add_filter( 'et_builder_get_child_modules', [ $this, 'get_fields' ], 10, 2 );
		
		// Recover depreciate fields
		add_filter( 'et_pb_module_shortcode_attributes', [ $this, 'recover_fields' ], 10, 2 );
		add_action( 'init', [ $this, 'updater_init' ] );
	}



	/**
	 * Format regions and normalize
	 *
	 * @param $check_multi
	 * @param string $separator
	 * @param $regions
	 *
	 * @return array
	 */
	static function format_regions( $check_multi, $separator = '|', $regions = [] ) {

		if ( empty( $check_multi ) || empty( $regions ) || strpos( $check_multi, $separator ) === false ) {
			return [];
		}

		$output_regions = [];

		foreach ( explode( $separator, $check_multi ) as $key => $onoff ) {
			if ( strtolower( $onoff ) == 'on' && isset( $regions[ $key ] ) ) {
				$output_regions[] = $regions[ $key ];
			}
		}

		return $output_regions;
	}


	public function updater_init() {
		require_once GEOWP_PLUGIN_DIR . 'includes/divi/divi-geot-updater.php';
	}

	/**
	 * Module Init
	 *
	 * @return array
	 */
	public function module_init() {

		require_once GEOWP_PLUGIN_DIR . 'includes/divi/divi-geot-country.php';
		require_once GEOWP_PLUGIN_DIR . 'includes/divi/divi-geot-city.php';
		require_once GEOWP_PLUGIN_DIR . 'includes/divi/divi-geot-state.php';
		require_once GEOWP_PLUGIN_DIR . 'includes/divi/divi-geot-zipcode.php';
		require_once GEOWP_PLUGIN_DIR . 'includes/divi/divi-geot-radius.php';
	}


	/**
	 * Register Tabs
	 * @return array
	 * @var
	 */
	public function add_tabs( $tabs ) {

		$new_tab         = [];
		$new_tab['geot'] = esc_html__( 'Geotargeting', 'geot' );

		return apply_filters( 'geot/divi/add_tabs', array_merge( $tabs, $new_tab ) );
	}


	public function get_fields( $modules = [], $post_type = '' ) {

		// Ensure we run this code only once because it's expensive.
		//static $is_applied = false;
		//if( $is_applied )
		//	return $modules;

		// Bail early if the modules list empty.
		if ( empty( $modules ) )
			return $modules;

		foreach( $modules as $module_slug => $module ) {

			// Ensure toggles and fields list exist.
			if( ! isset( $module->settings_modal_toggles ) ||
				! isset( $module->fields_unprocessed )
			) continue;

			// Temporary variables
			$toggles_list 	= $module->settings_modal_toggles;
			$fields_list 	= $module->fields_unprocessed;

			
			// Add new Toggle.
			$toggles_list['geot']['toggles']['country'] = [
				'title'    => esc_html__( 'Country', 'geot' ),
				'priority' => 220,
			];

			$toggles_list['geot']['toggles']['city'] = [
				'title'    => esc_html__( 'City', 'geot' ),
				'priority' => 230,
			];

			$toggles_list['geot']['toggles']['state'] = [
				'title'    => esc_html__( 'State', 'geot' ),
				'priority' => 240,
			];

			$toggles_list['geot']['toggles']['zipcode'] = [
				'title'    => esc_html__( 'Zipcode', 'geot' ),
				'priority' => 250,
			];

			$toggles_list['geot']['toggles']['radius'] = [
				'title'    => esc_html__( 'Radius', 'geot' ),
				'priority' => 260,
			];

			$modules[ $module_slug ]->settings_modal_toggles = $toggles_list;


			// Create Fields
			if( ! empty( $fields_list ) ) {
				$fields_geot = [];

				$fields_country		= Divi_GeoCountry::get_fields();
				$fields_city		= Divi_GeoCity::get_fields();
				$fields_states		= Divi_GeoState::get_fields();
				$fields_zipcodes	= Divi_GeoZipcode::get_fields();
				$fields_radius		= Divi_GeoRadius::get_fields();

				$fields_geot = array_merge(
					$fields_list,
					$fields_country,
					$fields_city,
					$fields_states,
					$fields_zipcodes,
					$fields_radius
				);

				$modules[ $module_slug ]->fields_unprocessed = $fields_geot;
			}

			if ( null === self::$global_presets_manager ) {
				self::$global_presets_manager = ET_Builder_Global_Presets_Settings::instance();
			}

			$additional_slugs = self::$global_presets_manager->get_module_additional_slugs( $module_slug );
			foreach ( $additional_slugs as $alias ) {
				$modules[ $alias ] = $modules[ $module_slug ];
			}
		}

		//$is_applied = true;
		return $modules;
	}


	/**
	 * Recover fields
	 * @param  array  $module_props
	 * @param  array  $attrs
	 * @return mixed
	 */
	public function recover_fields( $module_props = [], $attrs = [] ) {

		$module_props = Divi_GeoCountry::recover_fields( $module_props, $attrs );
		$module_props = Divi_GeoCity::recover_fields( $module_props, $attrs );
		$module_props = Divi_GeoState::recover_fields( $module_props, $attrs );
		$module_props = Divi_GeoZipcode::recover_fields( $module_props, $attrs );
		$module_props = Divi_GeoRadius::recover_fields( $module_props, $attrs );

		return $module_props;
	}

	/**
	 * @param $output
	 * @param $render_slug
	 * @param $module
	 *
	 * @return string
	 */
	public function render( $output, $render_slug, $module ) {

		global $et_fb_processing_shortcode_object;

		// if is builder / edit mode
		if ( $et_fb_processing_shortcode_object == 1 || !$this->has_geot_opts( $module->props ) ) {
			return $output;
		}

		$opts 			= geot_settings();
		$reg_countries 	= array_values( self::get_regions( 'country' ) );
		$reg_cities 	= array_values( self::get_regions( 'city' ) );
		$reg_states		= array_values( self::get_regions( 'state' ) );
		$reg_zips 		= array_values( self::get_regions( 'zip' ) );

		if ( isset( $opts['ajax_mode'] ) && $opts['ajax_mode'] == '1' ) {

			$output = Divi_GeoRadius::ajax_render( $module->props, $output );
			$output = Divi_GeoZipcode::ajax_render( $module->props, $reg_zips, $output );
			$output = Divi_GeoState::ajax_render( $module->props, $reg_states, $output );
			$output = Divi_GeoCity::ajax_render( $module->props, $reg_cities, $output );
			$output = Divi_GeoCountry::ajax_render( $module->props, $reg_countries, $output );

		} else {

			if ( ! Divi_GeoCountry::is_render( $module->props, $reg_countries ) ||
			     ! Divi_GeoCity::is_render( $module->props, $reg_cities ) ||
			     ! Divi_GeoState::is_render( $module->props, $reg_states ) ||
			     ! Divi_GeoZipcode::is_render( $module->props, $reg_zips ) ||
			     ! Divi_GeoRadius::is_render( $module->props )
			) {
				return '';
			}
		}

		return $output;
	}

	/**
	 * Check if values are set
	 *
	 * @param $props
	 *
	 * @return bool
	 */
	private function has_geot_opts( $props ) {
		$keys = [
			'countries_mode',
			'countries_input',
			'countries_region',
			'cities_mode',
			'cities_input',
			'cities_region',
			'states_mode',
			'states_input',
			'states_region',
			'zipcodes_mode',
			'zipcodes_input',
			'zipcodes_region',
			'radius_mode',
			'radius_km',
			'radius_lat',
			'radius_lng',
			'in_countries',
			'in_region_countries',
			'ex_countries',
			'ex_region_countries',
			'in_states',
			'in_region_states',
			'ex_states',
			'ex_region_states',
			'in_cities',
			'in_region_cities',
			'ex_cities',
			'ex_region_cities',
			'in_zipcodes',
			'in_region_zips',
			'ex_zipcodes',
			'ex_region_zips',
		];

		// check if any of the valid key has a value
		foreach ( $keys as $key ) {
			if ( ! empty( $props[ $key ] ) ) {
				return true;
			}
		}

		return false;
	}

	/**
	 * Get Regions
	 *
	 * @param string $slug_region
	 *
	 * @return array
	 */
	static function get_regions( $slug_region = 'country' ) {

		$dropdown_values = [];

		switch ( $slug_region ) {
			case 'city':
				$regions = geot_city_regions();
				break;
			case 'state':
				$regions = geot_state_regions();
				break;
			case 'zip':
				$regions = geot_zip_regions();
				break;
			default:
				$regions = geot_country_regions();
		}

		if ( ! empty( $regions ) ) {
			foreach ( $regions as $r ) {
				if ( isset( $r['name'] ) ) {
					$dropdown_values[ $r['name'] ] = $r['name'];
				}
			}
		}

		return $dropdown_values;
	}

}