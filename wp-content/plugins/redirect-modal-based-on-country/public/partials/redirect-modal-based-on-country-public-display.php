<?php

/**
 * Provide a public-facing view for the plugin
 *
 * This file is used to markup the public-facing aspects of the plugin.
 *
 * @link       https://github.com/David-Kurniawan/
 * @since      1.0.0
 *
 * @package    Redirect_Modal_Based_On_Country
 * @subpackage Redirect_Modal_Based_On_Country/public/partials
 */
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->
<main-modal title="<?php echo esc_html__('Tenemos un sitio para tu pais 😀', 'redirect-modal-based-on-country'); ?>" text="<?php echo wp_sprintf('%s %l', esc_html__('Parece que vienes de', 'redirect-modal-based-on-country'), '#country'); ?>" icon="info" country="<?php echo esc_attr($visitorInfo->country); ?>" redirect_to_btn_text="<?php echo wp_sprintf('%s %l', esc_html__('Quiero ir a', 'redirect-modal-based-on-country'), '#country'); ?>" redirect_to_btn_color="#3FC3EE" stay_btn_text="<?php echo esc_html__('Quedarme aquí', 'redirect-modal-based-on-country'); ?>" stay_btn_color="#6E7D88" host="<?php echo esc_attr($host); ?>" cookie_name="<?php echo esc_attr($cookieName); ?>" href="<?php echo esc_url($setting); ?>"></main-modal>