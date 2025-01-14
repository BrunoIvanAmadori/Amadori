<?php
/**
 * Different helpers filters used around
 */

add_filter( 'geot/get_country_regions', function () {
	$settings = geot_settings();
	$regions  = isset( $settings['region'] ) ? $settings['region'] : [];

	return array_merge( geot_predefined_regions(), $regions );
} );

add_filter( 'geot/get_city_regions', function () {
	$settings = geot_settings();
	$regions  = isset( $settings['city_region'] ) ? $settings['city_region'] : [];

	return $regions;
} );

add_filter( 'geot/get_state_regions', function () {
	$settings = geot_settings();
	$regions  = isset( $settings['state_region'] ) ? $settings['state_region'] : [];

	return $regions;
} );

add_filter( 'geot/get_zip_regions', function () {
	$settings = geot_settings();
	$regions  = isset( $settings['zip_region'] ) ? $settings['zip_region'] : [];

	return $regions;
} );

add_filter( 'geot/get_countries', function () {

	$countries = [
		(object) [ 'iso_code' => 'AD', 'country' => esc_html__( 'Andorra', 'geot' ) ],
		(object) [ 'iso_code' => 'AF', 'country' => esc_html__( 'Afghanistan', 'geot' ) ],
		(object) [ 'iso_code' => 'AX', 'country' => esc_html__( 'Åland Islands', 'geot' ) ],
		(object) [ 'iso_code' => 'AL', 'country' => esc_html__( 'Albania', 'geot' ) ],
		(object) [ 'iso_code' => 'DZ', 'country' => esc_html__( 'Algeria', 'geot' ) ],
		(object) [ 'iso_code' => 'AS', 'country' => esc_html__( 'American Samoa', 'geot' ) ],
		(object) [ 'iso_code' => 'AO', 'country' => esc_html__( 'Angola', 'geot' ) ],
		(object) [ 'iso_code' => 'AI', 'country' => esc_html__( 'Anguilla', 'geot' ) ],
		(object) [ 'iso_code' => 'AQ', 'country' => esc_html__( 'Antarctica', 'geot' ) ],
		(object) [ 'iso_code' => 'AG', 'country' => esc_html__( 'Antigua and Barbuda', 'geot' ) ],
		(object) [ 'iso_code' => 'AR', 'country' => esc_html__( 'Argentina', 'geot' ) ],
		(object) [ 'iso_code' => 'AM', 'country' => esc_html__( 'Armenia', 'geot' ) ],
		(object) [ 'iso_code' => 'AW', 'country' => esc_html__( 'Aruba', 'geot' ) ],
		(object) [ 'iso_code' => 'AU', 'country' => esc_html__( 'Australia', 'geot' ) ],
		(object) [ 'iso_code' => 'AT', 'country' => esc_html__( 'Austria', 'geot' ) ],
		(object) [ 'iso_code' => 'AZ', 'country' => esc_html__( 'Azerbaijan', 'geot' ) ],
		(object) [ 'iso_code' => 'BS', 'country' => esc_html__( 'Bahamas', 'geot' ) ],
		(object) [ 'iso_code' => 'BH', 'country' => esc_html__( 'Bahrain', 'geot' ) ],
		(object) [ 'iso_code' => 'BD', 'country' => esc_html__( 'Bangladesh', 'geot' ) ],
		(object) [ 'iso_code' => 'BB', 'country' => esc_html__( 'Barbados', 'geot' ) ],
		(object) [ 'iso_code' => 'BY', 'country' => esc_html__( 'Belarus', 'geot' ) ],
		(object) [ 'iso_code' => 'BE', 'country' => esc_html__( 'Belgium', 'geot' ) ],
		(object) [ 'iso_code' => 'BZ', 'country' => esc_html__( 'Belize', 'geot' ) ],
		(object) [ 'iso_code' => 'BJ', 'country' => esc_html__( 'Benin', 'geot' ) ],
		(object) [ 'iso_code' => 'BM', 'country' => esc_html__( 'Bermuda', 'geot' ) ],
		(object) [ 'iso_code' => 'BT', 'country' => esc_html__( 'Bhutan', 'geot' ) ],
		(object) [ 'iso_code' => 'BO', 'country' => esc_html__( 'Bolivia (Plurinational State of)', 'geot' ) ],
		(object) [ 'iso_code' => 'BQ', 'country' => esc_html__( 'Bonaire, Sint Eustatius and Saba', 'geot' ) ],
		(object) [ 'iso_code' => 'BA', 'country' => esc_html__( 'Bosnia and Herzegovina', 'geot' ) ],
		(object) [ 'iso_code' => 'BW', 'country' => esc_html__( 'Botswana', 'geot' ) ],
		(object) [ 'iso_code' => 'BV', 'country' => esc_html__( 'Bouvet Island', 'geot' ) ],
		(object) [ 'iso_code' => 'BR', 'country' => esc_html__( 'Brazil', 'geot' ) ],
		(object) [ 'iso_code' => 'IO', 'country' => esc_html__( 'British Indian Ocean Territory', 'geot' ) ],
		(object) [ 'iso_code' => 'BN', 'country' => esc_html__( 'Brunei Darussalam', 'geot' ) ],
		(object) [ 'iso_code' => 'BG', 'country' => esc_html__( 'Bulgaria', 'geot' ) ],
		(object) [ 'iso_code' => 'BF', 'country' => esc_html__( 'Burkina Faso', 'geot' ) ],
		(object) [ 'iso_code' => 'BI', 'country' => esc_html__( 'Burundi', 'geot' ) ],
		(object) [ 'iso_code' => 'CV', 'country' => esc_html__( 'Cabo Verde', 'geot' ) ],
		(object) [ 'iso_code' => 'KH', 'country' => esc_html__( 'Cambodia', 'geot' ) ],
		(object) [ 'iso_code' => 'CM', 'country' => esc_html__( 'Cameroon', 'geot' ) ],
		(object) [ 'iso_code' => 'CA', 'country' => esc_html__( 'Canada', 'geot' ) ],
		(object) [ 'iso_code' => 'KY', 'country' => esc_html__( 'Cayman Islands', 'geot' ) ],
		(object) [ 'iso_code' => 'CF', 'country' => esc_html__( 'Central African Republic', 'geot' ) ],
		(object) [ 'iso_code' => 'TD', 'country' => esc_html__( 'Chad', 'geot' ) ],
		(object) [ 'iso_code' => 'CL', 'country' => esc_html__( 'Chile', 'geot' ) ],
		(object) [ 'iso_code' => 'CN', 'country' => esc_html__( 'China', 'geot' ) ],
		(object) [ 'iso_code' => 'CX', 'country' => esc_html__( 'Christmas Island', 'geot' ) ],
		(object) [ 'iso_code' => 'CC', 'country' => esc_html__( 'Cocos (Keeling) Islands', 'geot' ) ],
		(object) [ 'iso_code' => 'CO', 'country' => esc_html__( 'Colombia', 'geot' ) ],
		(object) [ 'iso_code' => 'KM', 'country' => esc_html__( 'Comoros', 'geot' ) ],
		(object) [ 'iso_code' => 'CG', 'country' => esc_html__( 'Congo', 'geot' ) ],
		(object) [ 'iso_code' => 'CD', 'country' => esc_html__( 'Congo (Democratic Republic of the)', 'geot' ) ],
		(object) [ 'iso_code' => 'CK', 'country' => esc_html__( 'Cook Islands', 'geot' ) ],
		(object) [ 'iso_code' => 'CR', 'country' => esc_html__( 'Costa Rica', 'geot' ) ],
		(object) [ 'iso_code' => 'CI', 'country' => esc_html__( 'Côte d\'Ivoire', 'geot' ) ],
		(object) [ 'iso_code' => 'HR', 'country' => esc_html__( 'Croatia', 'geot' ) ],
		(object) [ 'iso_code' => 'CU', 'country' => esc_html__( 'Cuba', 'geot' ) ],
		(object) [ 'iso_code' => 'CW', 'country' => esc_html__( 'Curaçao', 'geot' ) ],
		(object) [ 'iso_code' => 'CY', 'country' => esc_html__( 'Cyprus', 'geot' ) ],
		(object) [ 'iso_code' => 'CZ', 'country' => esc_html__( 'Czech Republic', 'geot' ) ],
		(object) [ 'iso_code' => 'DK', 'country' => esc_html__( 'Denmark', 'geot' ) ],
		(object) [ 'iso_code' => 'DJ', 'country' => esc_html__( 'Djibouti', 'geot' ) ],
		(object) [ 'iso_code' => 'DM', 'country' => esc_html__( 'Dominica', 'geot' ) ],
		(object) [ 'iso_code' => 'DO', 'country' => esc_html__( 'Dominican Republic', 'geot' ) ],
		(object) [ 'iso_code' => 'EC', 'country' => esc_html__( 'Ecuador', 'geot' ) ],
		(object) [ 'iso_code' => 'EG', 'country' => esc_html__( 'Egypt', 'geot' ) ],
		(object) [ 'iso_code' => 'SV', 'country' => esc_html__( 'El Salvador', 'geot' ) ],
		(object) [ 'iso_code' => 'GQ', 'country' => esc_html__( 'Equatorial Guinea', 'geot' ) ],
		(object) [ 'iso_code' => 'ER', 'country' => esc_html__( 'Eritrea', 'geot' ) ],
		(object) [ 'iso_code' => 'EE', 'country' => esc_html__( 'Estonia', 'geot' ) ],
		(object) [ 'iso_code' => 'ET', 'country' => esc_html__( 'Ethiopia', 'geot' ) ],
		(object) [ 'iso_code' => 'FK', 'country' => esc_html__( 'Falkland Islands (Malvinas)', 'geot' ) ],
		(object) [ 'iso_code' => 'FO', 'country' => esc_html__( 'Faroe Islands', 'geot' ) ],
		(object) [ 'iso_code' => 'FJ', 'country' => esc_html__( 'Fiji', 'geot' ) ],
		(object) [ 'iso_code' => 'FI', 'country' => esc_html__( 'Finland', 'geot' ) ],
		(object) [ 'iso_code' => 'FR', 'country' => esc_html__( 'France', 'geot' ) ],
		(object) [ 'iso_code' => 'GF', 'country' => esc_html__( 'French Guiana', 'geot' ) ],
		(object) [ 'iso_code' => 'PF', 'country' => esc_html__( 'French Polynesia', 'geot' ) ],
		(object) [ 'iso_code' => 'TF', 'country' => esc_html__( 'French Southern Territories', 'geot' ) ],
		(object) [ 'iso_code' => 'GA', 'country' => esc_html__( 'Gabon', 'geot' ) ],
		(object) [ 'iso_code' => 'GM', 'country' => esc_html__( 'Gambia', 'geot' ) ],
		(object) [ 'iso_code' => 'GE', 'country' => esc_html__( 'Georgia', 'geot' ) ],
		(object) [ 'iso_code' => 'DE', 'country' => esc_html__( 'Germany', 'geot' ) ],
		(object) [ 'iso_code' => 'GH', 'country' => esc_html__( 'Ghana', 'geot' ) ],
		(object) [ 'iso_code' => 'GI', 'country' => esc_html__( 'Gibraltar', 'geot' ) ],
		(object) [ 'iso_code' => 'GR', 'country' => esc_html__( 'Greece', 'geot' ) ],
		(object) [ 'iso_code' => 'GL', 'country' => esc_html__( 'Greenland', 'geot' ) ],
		(object) [ 'iso_code' => 'GD', 'country' => esc_html__( 'Grenada', 'geot' ) ],
		(object) [ 'iso_code' => 'GP', 'country' => esc_html__( 'Guadeloupe', 'geot' ) ],
		(object) [ 'iso_code' => 'GU', 'country' => esc_html__( 'Guam', 'geot' ) ],
		(object) [ 'iso_code' => 'GT', 'country' => esc_html__( 'Guatemala', 'geot' ) ],
		(object) [ 'iso_code' => 'GG', 'country' => esc_html__( 'Guernsey', 'geot' ) ],
		(object) [ 'iso_code' => 'GN', 'country' => esc_html__( 'Guinea', 'geot' ) ],
		(object) [ 'iso_code' => 'GW', 'country' => esc_html__( 'Guinea-Bissau', 'geot' ) ],
		(object) [ 'iso_code' => 'GY', 'country' => esc_html__( 'Guyana', 'geot' ) ],
		(object) [ 'iso_code' => 'HT', 'country' => esc_html__( 'Haiti', 'geot' ) ],
		(object) [ 'iso_code' => 'HM', 'country' => esc_html__( 'Heard Island and McDonald Islands', 'geot' ) ],
		(object) [ 'iso_code' => 'VA', 'country' => esc_html__( 'Holy See', 'geot' ) ],
		(object) [ 'iso_code' => 'HN', 'country' => esc_html__( 'Honduras', 'geot' ) ],
		(object) [ 'iso_code' => 'HK', 'country' => esc_html__( 'Hong Kong', 'geot' ) ],
		(object) [ 'iso_code' => 'HU', 'country' => esc_html__( 'Hungary', 'geot' ) ],
		(object) [ 'iso_code' => 'IS', 'country' => esc_html__( 'Iceland', 'geot' ) ],
		(object) [ 'iso_code' => 'IN', 'country' => esc_html__( 'India', 'geot' ) ],
		(object) [ 'iso_code' => 'ID', 'country' => esc_html__( 'Indonesia', 'geot' ) ],
		(object) [ 'iso_code' => 'IR', 'country' => esc_html__( 'Iran (Islamic Republic of)', 'geot' ) ],
		(object) [ 'iso_code' => 'IQ', 'country' => esc_html__( 'Iraq', 'geot' ) ],
		(object) [ 'iso_code' => 'IE', 'country' => esc_html__( 'Ireland', 'geot' ) ],
		(object) [ 'iso_code' => 'IM', 'country' => esc_html__( 'Isle of Man', 'geot' ) ],
		(object) [ 'iso_code' => 'IL', 'country' => esc_html__( 'Israel', 'geot' ) ],
		(object) [ 'iso_code' => 'IT', 'country' => esc_html__( 'Italy', 'geot' ) ],
		(object) [ 'iso_code' => 'JM', 'country' => esc_html__( 'Jamaica', 'geot' ) ],
		(object) [ 'iso_code' => 'JP', 'country' => esc_html__( 'Japan', 'geot' ) ],
		(object) [ 'iso_code' => 'JE', 'country' => esc_html__( 'Jersey', 'geot' ) ],
		(object) [ 'iso_code' => 'JO', 'country' => esc_html__( 'Jordan', 'geot' ) ],
		(object) [ 'iso_code' => 'KZ', 'country' => esc_html__( 'Kazakhstan', 'geot' ) ],
		(object) [ 'iso_code' => 'KE', 'country' => esc_html__( 'Kenya', 'geot' ) ],
		(object) [ 'iso_code' => 'KI', 'country' => esc_html__( 'Kiribati', 'geot' ) ],
		(object) [ 'iso_code' => 'KP', 'country' => esc_html__( 'Korea (Democratic People\'s Republic of)', 'geot' ) ],
		(object) [ 'iso_code' => 'KR', 'country' => esc_html__( 'Korea (Republic of)', 'geot' ) ],
		(object) [ 'iso_code' => 'KW', 'country' => esc_html__( 'Kuwait', 'geot' ) ],
		(object) [ 'iso_code' => 'KG', 'country' => esc_html__( 'Kyrgyzstan', 'geot' ) ],
		(object) [ 'iso_code' => 'XK', 'country' => esc_html__( 'Kosovo', 'geot' ) ],
		(object) [ 'iso_code' => 'LA', 'country' => esc_html__( 'Lao People\'s Democratic Republic', 'geot' ) ],
		(object) [ 'iso_code' => 'LV', 'country' => esc_html__( 'Latvia', 'geot' ) ],
		(object) [ 'iso_code' => 'LB', 'country' => esc_html__( 'Lebanon', 'geot' ) ],
		(object) [ 'iso_code' => 'LS', 'country' => esc_html__( 'Lesotho', 'geot' ) ],
		(object) [ 'iso_code' => 'LR', 'country' => esc_html__( 'Liberia', 'geot' ) ],
		(object) [ 'iso_code' => 'LY', 'country' => esc_html__( 'Libya', 'geot' ) ],
		(object) [ 'iso_code' => 'LI', 'country' => esc_html__( 'Liechtenstein', 'geot' ) ],
		(object) [ 'iso_code' => 'LT', 'country' => esc_html__( 'Lithuania', 'geot' ) ],
		(object) [ 'iso_code' => 'LU', 'country' => esc_html__( 'Luxembourg', 'geot' ) ],
		(object) [ 'iso_code' => 'MO', 'country' => esc_html__( 'Macao', 'geot' ) ],
		(object) [ 'iso_code' => 'MK', 'country' => esc_html__( 'Macedonia (the former Yugoslav Republic of)', 'geot' ) ],
		(object) [ 'iso_code' => 'MG', 'country' => esc_html__( 'Madagascar', 'geot' ) ],
		(object) [ 'iso_code' => 'MW', 'country' => esc_html__( 'Malawi', 'geot' ) ],
		(object) [ 'iso_code' => 'MY', 'country' => esc_html__( 'Malaysia', 'geot' ) ],
		(object) [ 'iso_code' => 'MV', 'country' => esc_html__( 'Maldives', 'geot' ) ],
		(object) [ 'iso_code' => 'ML', 'country' => esc_html__( 'Mali', 'geot' ) ],
		(object) [ 'iso_code' => 'MT', 'country' => esc_html__( 'Malta', 'geot' ) ],
		(object) [ 'iso_code' => 'MH', 'country' => esc_html__( 'Marshall Islands', 'geot' ) ],
		(object) [ 'iso_code' => 'MQ', 'country' => esc_html__( 'Martinique', 'geot' ) ],
		(object) [ 'iso_code' => 'MR', 'country' => esc_html__( 'Mauritania', 'geot' ) ],
		(object) [ 'iso_code' => 'MU', 'country' => esc_html__( 'Mauritius', 'geot' ) ],
		(object) [ 'iso_code' => 'YT', 'country' => esc_html__( 'Mayotte', 'geot' ) ],
		(object) [ 'iso_code' => 'MX', 'country' => esc_html__( 'Mexico', 'geot' ) ],
		(object) [ 'iso_code' => 'FM', 'country' => esc_html__( 'Micronesia (Federated States of)', 'geot' ) ],
		(object) [ 'iso_code' => 'MD', 'country' => esc_html__( 'Moldova (Republic of)', 'geot' ) ],
		(object) [ 'iso_code' => 'MC', 'country' => esc_html__( 'Monaco', 'geot' ) ],
		(object) [ 'iso_code' => 'MN', 'country' => esc_html__( 'Mongolia', 'geot' ) ],
		(object) [ 'iso_code' => 'ME', 'country' => esc_html__( 'Montenegro', 'geot' ) ],
		(object) [ 'iso_code' => 'MS', 'country' => esc_html__( 'Montserrat', 'geot' ) ],
		(object) [ 'iso_code' => 'MA', 'country' => esc_html__( 'Morocco', 'geot' ) ],
		(object) [ 'iso_code' => 'MZ', 'country' => esc_html__( 'Mozambique', 'geot' ) ],
		(object) [ 'iso_code' => 'MM', 'country' => esc_html__( 'Myanmar', 'geot' ) ],
		(object) [ 'iso_code' => 'NA', 'country' => esc_html__( 'Namibia', 'geot' ) ],
		(object) [ 'iso_code' => 'NR', 'country' => esc_html__( 'Nauru', 'geot' ) ],
		(object) [ 'iso_code' => 'NP', 'country' => esc_html__( 'Nepal', 'geot' ) ],
		(object) [ 'iso_code' => 'NL', 'country' => esc_html__( 'Netherlands', 'geot' ) ],
		(object) [ 'iso_code' => 'NC', 'country' => esc_html__( 'New Caledonia', 'geot' ) ],
		(object) [ 'iso_code' => 'NZ', 'country' => esc_html__( 'New Zealand', 'geot' ) ],
		(object) [ 'iso_code' => 'NI', 'country' => esc_html__( 'Nicaragua', 'geot' ) ],
		(object) [ 'iso_code' => 'NE', 'country' => esc_html__( 'Niger', 'geot' ) ],
		(object) [ 'iso_code' => 'NG', 'country' => esc_html__( 'Nigeria', 'geot' ) ],
		(object) [ 'iso_code' => 'NU', 'country' => esc_html__( 'Niue', 'geot' ) ],
		(object) [ 'iso_code' => 'NF', 'country' => esc_html__( 'Norfolk Island', 'geot' ) ],
		(object) [ 'iso_code' => 'MP', 'country' => esc_html__( 'Northern Mariana Islands', 'geot' ) ],
		(object) [ 'iso_code' => 'NO', 'country' => esc_html__( 'Norway', 'geot' ) ],
		(object) [ 'iso_code' => 'OM', 'country' => esc_html__( 'Oman', 'geot' ) ],
		(object) [ 'iso_code' => 'PK', 'country' => esc_html__( 'Pakistan', 'geot' ) ],
		(object) [ 'iso_code' => 'PW', 'country' => esc_html__( 'Palau', 'geot' ) ],
		(object) [ 'iso_code' => 'PS', 'country' => esc_html__( 'Palestine, State of', 'geot' ) ],
		(object) [ 'iso_code' => 'PA', 'country' => esc_html__( 'Panama', 'geot' ) ],
		(object) [ 'iso_code' => 'PG', 'country' => esc_html__( 'Papua New Guinea', 'geot' ) ],
		(object) [ 'iso_code' => 'PY', 'country' => esc_html__( 'Paraguay', 'geot' ) ],
		(object) [ 'iso_code' => 'PE', 'country' => esc_html__( 'Peru', 'geot' ) ],
		(object) [ 'iso_code' => 'PH', 'country' => esc_html__( 'Philippines', 'geot' ) ],
		(object) [ 'iso_code' => 'PN', 'country' => esc_html__( 'Pitcairn', 'geot' ) ],
		(object) [ 'iso_code' => 'PL', 'country' => esc_html__( 'Poland', 'geot' ) ],
		(object) [ 'iso_code' => 'PT', 'country' => esc_html__( 'Portugal', 'geot' ) ],
		(object) [ 'iso_code' => 'PR', 'country' => esc_html__( 'Puerto Rico', 'geot' ) ],
		(object) [ 'iso_code' => 'QA', 'country' => esc_html__( 'Qatar', 'geot' ) ],
		(object) [ 'iso_code' => 'RE', 'country' => esc_html__( 'Réunion', 'geot' ) ],
		(object) [ 'iso_code' => 'RO', 'country' => esc_html__( 'Romania', 'geot' ) ],
		(object) [ 'iso_code' => 'RU', 'country' => esc_html__( 'Russian Federation', 'geot' ) ],
		(object) [ 'iso_code' => 'RW', 'country' => esc_html__( 'Rwanda', 'geot' ) ],
		(object) [ 'iso_code' => 'BL', 'country' => esc_html__( 'Saint Barthélemy', 'geot' ) ],
		(object) [ 'iso_code' => 'SH', 'country' => esc_html__( 'Saint Helena, Ascension and Tristan da Cunha', 'geot' ) ],
		(object) [ 'iso_code' => 'KN', 'country' => esc_html__( 'Saint Kitts and Nevis', 'geot' ) ],
		(object) [ 'iso_code' => 'LC', 'country' => esc_html__( 'Saint Lucia', 'geot' ) ],
		(object) [ 'iso_code' => 'MF', 'country' => esc_html__( 'Saint Martin (French part)', 'geot' ) ],
		(object) [ 'iso_code' => 'PM', 'country' => esc_html__( 'Saint Pierre and Miquelon', 'geot' ) ],
		(object) [ 'iso_code' => 'VC', 'country' => esc_html__( 'Saint Vincent and the Grenadines', 'geot' ) ],
		(object) [ 'iso_code' => 'WS', 'country' => esc_html__( 'Samoa', 'geot' ) ],
		(object) [ 'iso_code' => 'SM', 'country' => esc_html__( 'San Marino', 'geot' ) ],
		(object) [ 'iso_code' => 'ST', 'country' => esc_html__( 'Sao Tome and Principe', 'geot' ) ],
		(object) [ 'iso_code' => 'SA', 'country' => esc_html__( 'Saudi Arabia', 'geot' ) ],
		(object) [ 'iso_code' => 'SN', 'country' => esc_html__( 'Senegal', 'geot' ) ],
		(object) [ 'iso_code' => 'RS', 'country' => esc_html__( 'Serbia', 'geot' ) ],
		(object) [ 'iso_code' => 'SC', 'country' => esc_html__( 'Seychelles', 'geot' ) ],
		(object) [ 'iso_code' => 'SL', 'country' => esc_html__( 'Sierra Leone', 'geot' ) ],
		(object) [ 'iso_code' => 'SG', 'country' => esc_html__( 'Singapore', 'geot' ) ],
		(object) [ 'iso_code' => 'SX', 'country' => esc_html__( 'Sint Maarten (Dutch part)', 'geot' ) ],
		(object) [ 'iso_code' => 'SK', 'country' => esc_html__( 'Slovakia', 'geot' ) ],
		(object) [ 'iso_code' => 'SI', 'country' => esc_html__( 'Slovenia', 'geot' ) ],
		(object) [ 'iso_code' => 'SB', 'country' => esc_html__( 'Solomon Islands', 'geot' ) ],
		(object) [ 'iso_code' => 'SO', 'country' => esc_html__( 'Somalia', 'geot' ) ],
		(object) [ 'iso_code' => 'ZA', 'country' => esc_html__( 'South Africa', 'geot' ) ],
		(object) [ 'iso_code' => 'GS', 'country' => esc_html__( 'South Georgia and the South Sandwich Islands', 'geot' ) ],
		(object) [ 'iso_code' => 'SS', 'country' => esc_html__( 'South Sudan', 'geot' ) ],
		(object) [ 'iso_code' => 'ES', 'country' => esc_html__( 'Spain', 'geot' ) ],
		(object) [ 'iso_code' => 'LK', 'country' => esc_html__( 'Sri Lanka', 'geot' ) ],
		(object) [ 'iso_code' => 'SD', 'country' => esc_html__( 'Sudan', 'geot' ) ],
		(object) [ 'iso_code' => 'SR', 'country' => esc_html__( 'Suriname', 'geot' ) ],
		(object) [ 'iso_code' => 'SJ', 'country' => esc_html__( 'Svalbard and Jan Mayen', 'geot' ) ],
		(object) [ 'iso_code' => 'SZ', 'country' => esc_html__( 'Swaziland', 'geot' ) ],
		(object) [ 'iso_code' => 'SE', 'country' => esc_html__( 'Sweden', 'geot' ) ],
		(object) [ 'iso_code' => 'CH', 'country' => esc_html__( 'Switzerland', 'geot' ) ],
		(object) [ 'iso_code' => 'SY', 'country' => esc_html__( 'Syrian Arab Republic', 'geot' ) ],
		(object) [ 'iso_code' => 'TW', 'country' => esc_html__( 'Taiwan, Province of China', 'geot' ) ],
		(object) [ 'iso_code' => 'TJ', 'country' => esc_html__( 'Tajikistan', 'geot' ) ],
		(object) [ 'iso_code' => 'TZ', 'country' => esc_html__( 'Tanzania, United Republic of', 'geot' ) ],
		(object) [ 'iso_code' => 'TH', 'country' => esc_html__( 'Thailand', 'geot' ) ],
		(object) [ 'iso_code' => 'TL', 'country' => esc_html__( 'Timor-Leste', 'geot' ) ],
		(object) [ 'iso_code' => 'TG', 'country' => esc_html__( 'Togo', 'geot' ) ],
		(object) [ 'iso_code' => 'TK', 'country' => esc_html__( 'Tokelau', 'geot' ) ],
		(object) [ 'iso_code' => 'TO', 'country' => esc_html__( 'Tonga', 'geot' ) ],
		(object) [ 'iso_code' => 'TT', 'country' => esc_html__( 'Trinidad and Tobago', 'geot' ) ],
		(object) [ 'iso_code' => 'TN', 'country' => esc_html__( 'Tunisia', 'geot' ) ],
		(object) [ 'iso_code' => 'TR', 'country' => esc_html__( 'Turkey', 'geot' ) ],
		(object) [ 'iso_code' => 'TM', 'country' => esc_html__( 'Turkmenistan', 'geot' ) ],
		(object) [ 'iso_code' => 'TC', 'country' => esc_html__( 'Turks and Caicos Islands', 'geot' ) ],
		(object) [ 'iso_code' => 'TV', 'country' => esc_html__( 'Tuvalu', 'geot' ) ],
		(object) [ 'iso_code' => 'UG', 'country' => esc_html__( 'Uganda', 'geot' ) ],
		(object) [ 'iso_code' => 'UA', 'country' => esc_html__( 'Ukraine', 'geot' ) ],
		(object) [ 'iso_code' => 'AE', 'country' => esc_html__( 'United Arab Emirates', 'geot' ) ],
		(object) [ 'iso_code' => 'GB', 'country' => esc_html__( 'United Kingdom of Great Britain and Northern Ireland', 'geot' ) ],
		(object) [ 'iso_code' => 'UM', 'country' => esc_html__( 'United States Minor Outlying Islands', 'geot' ) ],
		(object) [ 'iso_code' => 'US', 'country' => esc_html__( 'United States of America', 'geot' ) ],
		(object) [ 'iso_code' => 'UY', 'country' => esc_html__( 'Uruguay', 'geot' ) ],
		(object) [ 'iso_code' => 'UZ', 'country' => esc_html__( 'Uzbekistan', 'geot' ) ],
		(object) [ 'iso_code' => 'VU', 'country' => esc_html__( 'Vanuatu', 'geot' ) ],
		(object) [ 'iso_code' => 'VE', 'country' => esc_html__( 'Venezuela (Bolivarian Republic of)', 'geot' ) ],
		(object) [ 'iso_code' => 'VN', 'country' => esc_html__( 'Viet Nam', 'geot' ) ],
		(object) [ 'iso_code' => 'VG', 'country' => esc_html__( 'Virgin Islands (British)', 'geot' ) ],
		(object) [ 'iso_code' => 'VI', 'country' => esc_html__( 'Virgin Islands (U.S.)', 'geot' ) ],
		(object) [ 'iso_code' => 'WF', 'country' => esc_html__( 'Wallis and Futuna', 'geot' ) ],
		(object) [ 'iso_code' => 'EH', 'country' => esc_html__( 'Western Sahara', 'geot' ) ],
		(object) [ 'iso_code' => 'YE', 'country' => esc_html__( 'Yemen', 'geot' ) ],
		(object) [ 'iso_code' => 'ZM', 'country' => esc_html__( 'Zambia', 'geot' ) ],
		(object) [ 'iso_code' => 'ZW', 'country' => esc_html__( 'Zimbabwe', 'geot') ],
	];

	return $countries;
} );