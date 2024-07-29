<?php

/**
 * Protect direct access
 */
if ( ! defined( 'ABSPATH' ) ) die( GSL_HACK_MSG );

if ( ! class_exists( 'GS_Logo_Slider_Integration_WPB_VC' ) ) :

class GS_Logo_Slider_Integration_WPB_VC {

	private static $_instance = null;
        
    public static function get_instance() {

        if ( is_null( self::$_instance ) ) {
            self::$_instance = new self();
        }

        return self::$_instance;
        
    }

    public function __construct() {

        add_action( 'vc_before_init', [ $this, 'register_wpbakery_vc_widget' ] );

        add_action( 'admin_footer', [$this, 'print_wpbakery_vc_editor_scripts'] );

        add_action( 'vc_load_shortcode', [$this, 'enqueue_scripts']);
        
    }

    public function enqueue_scripts() {

        // Register Styles
        GS_Logo_Scripts::get_instance()->wp_enqueue_style_all( 'public', ['gs-logo-divi-public'] );
        
        // Register Scripts
        GS_Logo_Scripts::get_instance()->wp_enqueue_script_all( 'public' );

    }

    public function register_wpbakery_vc_widget() {

        $params = [

            'name' => __( 'GS Logo Slider', 'gslogo' ),
            'base' => 'gslogo',
            'description' => __( 'Show Logo Sliders from GS Logo plugin' ),
            'category' => 'GS Plugins',
            'icon' => GSL_PLUGIN_URI . '/assets/img/icon.svg',
            'params' => [
                [
                    'type' => 'dropdown',
                    'heading' => esc_html__( 'Select Shortcode', 'gslogo' ),
                    'param_name' => 'id',
                    'value' => $this->get_shortcode_list(),
                    'std' => $this->get_default_item(),
                    'description' => $this->get_field_description(),
                ]
            ]
        
        ];
        
        vc_map( $params );

    }

    public function print_wpbakery_vc_editor_scripts() {

        $screen = get_current_screen();

        if ( !(isset($_GET['vc_action']) && $_GET['vc_action'] == 'vc_inline') ) return; ?>

        <script>
            
            window.onload = function() {

                if ( ! window.vc ) return;

                function wpb_vc_gs_logo_slider_edit_link_fix() {

                    var gsLogoHandler6544_counter = 0;

                    var gsLogoHandler6544 = setInterval(function() {

                        gsLogoHandler6544_counter++;

                        var $shortcode_field = jQuery('.vc_ui-panel-window[data-vc-shortcode="gslogo"] .vc_shortcode-param[data-vc-shortcode-param-name="id"] .wpb-select');

                        if ( $shortcode_field.length || gsLogoHandler6544_counter > 100 ) clearInterval( gsLogoHandler6544 );

                        if ( $shortcode_field.length ) {

                            var $edit_link = jQuery('.vc_ui-panel-window[data-vc-shortcode="gslogo"] .vc_shortcode-param[data-vc-shortcode-param-name="id"] .gs-logo-slider-edit-link');
                            var shortcode_id = $shortcode_field.val();
                            var href = $edit_link.attr('href');
                            href = href.substring(0, href.indexOf('/shortcode/')+11);

                            $edit_link.attr( 'href', href + shortcode_id );

                            $shortcode_field.on('change', function() {
                                shortcode_id = jQuery(this).val();
                                $edit_link.attr( 'href', href + shortcode_id );
                            });

                        }

                    }, 50);

                }

                jQuery('body').delegate( '.wpb_gslogo .vc_control-btn-edit', 'click', wpb_vc_gs_logo_slider_edit_link_fix );
                jQuery('body').delegate( '.wpb-elements-list li.wpb-layout-element-button a#gslogo', 'click', wpb_vc_gs_logo_slider_edit_link_fix );
                jQuery('#vc_inline-frame').contents().find('body').delegate('.vc_gslogo .vc_controls .vc_control-btn-edit', 'mouseleave', wpb_vc_gs_logo_slider_edit_link_fix );

                jQuery( document ).ajaxComplete(function( event, xhr, settings ) {

                    if ( settings.data.includes('vc_load_shortcode') && settings.data.includes('gslogo') ) {
                        var frame = jQuery('#vc_inline-frame');
                        if ( frame.length ) frame[0].contentWindow.gs_logo_init();
                    }

                });

            };

        </script>

        <?php

    }

    protected function get_field_description() {

        $eidt_link = sprintf( '%s: <a class="gs-logo-slider-edit-link" href="%s" target="_blank">%s</a>',
            __('Edit this shortcode', 'gslogo'),
            admin_url( "edit.php?post_type=gs-logo-slider&page=gs-logo-shortcode#/shortcode/" ),
            __('Edit', 'gslogo')
        );

        $create_link = sprintf( '%s: <a class="gs-logo-slider-create-link" href="%s" target="_blank">%s</a>',
            __('Create new shortcode', 'gslogo'),
            admin_url( 'edit.php?post_type=gs-logo-slider&page=gs-logo-shortcode#/shortcode' ),
            __('Craete', 'gslogo')
        );

        return implode( '<br />', [$eidt_link, $create_link] );

    }

    protected function get_shortcode_list() {

        $shortcodes = gs_logo_get_shortcodes();

        if ( !empty($shortcodes) ) {
            return wp_list_pluck( $shortcodes, 'id', 'shortcode_name' );
        }
        
        return [];

    }

    protected function get_default_item() {

        $shortcodes = gs_logo_get_shortcodes();

        if ( !empty($shortcodes) ) {
            return $shortcodes[0]['shortcode_name'];
        }

        return '';

    }

}

endif;