<?php

add_action('vc_before_init', 'apt_hm_sec_1_sliders_backend');

function apt_hm_sec_1_sliders_backend()
{
    vc_map(
        array(
            "name" => __("Slider", "urban"), // Element name
            "base" => "apt_hm_sec_1_sliders", // Element shortcode
            'icon' => get_template_directory_uri() . '/assets/images/vc-icon.png',
            'description' => 'Dedicated for urban',
            "class" => "urban-cstm-sliders",
            "category" => __('Home', 'urban'),
            'params' => array(
                array(
                    "type" => "textarea_raw_html",
                    "holder" => "",
                    "class" => "",
                    "heading" => __("Description", "urban"),
                    "param_name" => "mtshm_sec_2_desc",
                    "value" => __("", "metaswiss"),
                ),
                array(
                    'type' => 'param_group',
                    'param_name' => 'apt_hm_sec_1_sliders_items',
                    'params' => array(
                        array(
                            "type" => "attach_image",
                            "class" => "",
                            "heading" => __("Image", "urban"),
                            "param_name" => "apt_hm_sec_1_slider_img",
                            "value" => __("", "urban"),
                        ),
                    )
                ),
            )
        )
    );
}


add_shortcode('apt_hm_sec_1_sliders', 'apt_hm_sec_1_sliders_view');

function apt_hm_sec_1_sliders_view($atts)
{
    ob_start();
    $atts = shortcode_atts(array(
        'apt_hm_sec_1_sliders_items' => '',
    ), $atts, 'apt_hm_sec_1_sliders');

    // $heading = $atts['box_repeater_heading'];
    $items = vc_param_group_parse_atts($atts['apt_hm_sec_1_sliders_items']);
    //$mtshm_sec_2_title = rawurldecode(base64_decode($atts['mtshm_sec_2_title']));


?>
    <!-- html design is here  -->

<?php
    $result = ob_get_clean();
    return $result;
}
