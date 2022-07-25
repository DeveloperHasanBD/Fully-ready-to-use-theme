<?php

add_action('vc_before_init', 'apt_hm_sec_2_sliders_backend');

function apt_hm_sec_2_sliders_backend()
{
    vc_map(
        array(
            "name" => __("Destinazioni", "urban"), // Element name
            "base" => "apt_hm_sec_2_sliders", // Element shortcode
            'icon' => get_template_directory_uri() . '/assets/images/vc-icon.png',
            'description' => 'Dedicated for urban',
            "class" => "urban-cstm-sliders",
            "category" => __('Home', 'urban'),
            'params' => array(
                array(
                    'type' => 'param_group',
                    'param_name' => 'apt_hm_sec_2_sliders_items',
                    'params' => array(
                        array(
                            "type" => "attach_image",
                            "holder" => "img",
                            "class" => "",
                            "heading" => __("Image", "urban"),
                            "param_name" => "apt_hm_sec_2_slider_img",
                            "value" => __("", "urban"),
                        ),

                    )
                ),
            )
        )
    );
}


add_shortcode('apt_hm_sec_2_sliders', 'apt_hm_sec_2_sliders_view');

function apt_hm_sec_2_sliders_view($atts)
{
    ob_start();
    $atts = shortcode_atts(array(
        'apt_hm_sec_2_sliders_items' => '',
    ), $atts, 'apt_hm_sec_2_sliders');

    // $heading = $atts['box_repeater_heading'];
    $items = vc_param_group_parse_atts($atts['apt_hm_sec_2_sliders_items']);


?>
    <div class="sbtm_slider_arrow d-none">
        <img id="spb_sl_arrow" src="<?php echo get_template_directory_uri(); ?>/assets/images/sl-arrow.png" alt="">
        <img id="spb_sr_arrow" src="<?php echo get_template_directory_uri(); ?>/assets/images/sr-arrow.png" alt="">
    </div>
    <div class="hm_destinazioni_section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="hm_destinazioni_title">
                        <p>Destinazioni</p>
                        <h2>Lasciati ispirare <br>
                            dalla tua prossima destinazione</h2>
                        <h3>Trova il tuo volo per TANTE METE DA SOGNO IN PARTENZA dall' aeroporto di FORLì</h3>
                    </div>
                </div>
            </div>
            <!-- end row  -->
            <div class="row">
                <div class="col-12">
                    <div class="hm_destinazioni_top_cat">
                        <h2>ITALIA</h2>
                    </div>
                </div>
            </div>
            <!-- end row  -->
            <div class="row ">
                <div class="col-sm-12">
                    <div class="hm_destinazioni_top_cat_slider owl-carousel">
                        <div class="hm_destinazioni_top_cat_slide_item">
                            <div class="hm_destinazioni_top_cat_img">
                                <img src="http://localhost:1010/urban/wp-content/uploads/2022/05/6.png" alt="">
                            </div>
                            <div class="hm_destinazioni_top_cat_info">
                                <div class="hm_sub_cat">
                                    <p>Sardegna</p>
                                </div>
                                <div class="hm_post_title">
                                    <span>Olbia</span> <span>, Alghero</span>
                                </div>
                            </div>
                        </div>
                        <!-- end item  -->
                        <div class="hm_destinazioni_top_cat_slide_item">
                            <div class="hm_destinazioni_top_cat_img">
                                <img src="http://localhost:1010/urban/wp-content/uploads/2022/05/6.png" alt="">
                            </div>
                            <div class="hm_destinazioni_top_cat_info">
                                <div class="hm_sub_cat">
                                    <p>Sardegna</p>
                                </div>
                                <div class="hm_post_title">
                                    <span>Olbia</span> <span>, Alghero</span>
                                </div>
                            </div>
                        </div>
                        <!-- end item  -->
                        <div class="hm_destinazioni_top_cat_slide_item">
                            <div class="hm_destinazioni_top_cat_img">
                                <img src="http://localhost:1010/urban/wp-content/uploads/2022/05/6.png" alt="">
                            </div>
                            <div class="hm_destinazioni_top_cat_info">
                                <div class="hm_sub_cat">
                                    <p>Sardegna</p>
                                </div>
                                <div class="hm_post_title">
                                    <span>Olbia</span> <span>, Alghero</span>
                                </div>
                            </div>
                        </div>
                        <!-- end item  -->
                        <div class="hm_destinazioni_top_cat_slide_item">
                            <div class="hm_destinazioni_top_cat_img">
                                <img src="http://localhost:1010/urban/wp-content/uploads/2022/05/6.png" alt="">
                            </div>
                            <div class="hm_destinazioni_top_cat_info">
                                <div class="hm_sub_cat">
                                    <p>Sardegna</p>
                                </div>
                                <div class="hm_post_title">
                                    <span>Olbia</span> <span>, Alghero</span>
                                </div>
                            </div>
                        </div>
                        <!-- end item  -->
                    </div>
                </div>
            </div>
            <!-- end row  -->
            <div class="row">
                <div class="col-12">
                    <div class="hm_destinazioni_top_cat hm_destinazioni_bottom_cat_ttle">
                        <h2>ESTERO</h2>
                    </div>
                </div>
            </div>
            <!-- end row  -->
            <div class="row ">
                <div class="col-sm-12">
                    <div class="hm_destinazioni_bottom_cat">
                        <div class="hm_destinazioni_top_cat_slide_item">
                            <div class="hm_destinazioni_top_cat_img">
                                <img src="http://localhost:1010/urban/wp-content/uploads/2022/05/6.png" alt="">
                            </div>
                            <div class="hm_destinazioni_top_cat_info">
                                <div class="hm_sub_cat">
                                    <p>Sardegna</p>
                                </div>
                                <div class="hm_post_title">
                                    <span>Olbia</span> <span>, Alghero</span>
                                </div>
                            </div>
                        </div>
                        <!-- end item  -->
                        <div class="hm_destinazioni_top_cat_slide_item">
                            <div class="hm_destinazioni_top_cat_img">
                                <img src="http://localhost:1010/urban/wp-content/uploads/2022/05/6.png" alt="">
                            </div>
                            <div class="hm_destinazioni_top_cat_info">
                                <div class="hm_sub_cat">
                                    <p>Sardegna</p>
                                </div>
                                <div class="hm_post_title">
                                    <span>Olbia</span> <span>, Alghero</span>
                                </div>
                            </div>
                        </div>
                        <!-- end item  -->
                        <div class="hm_destinazioni_top_cat_slide_item">
                            <div class="hm_destinazioni_top_cat_img">
                                <img src="http://localhost:1010/urban/wp-content/uploads/2022/05/6.png" alt="">
                            </div>
                            <div class="hm_destinazioni_top_cat_info">
                                <div class="hm_sub_cat">
                                    <p>Sardegna</p>
                                </div>
                                <div class="hm_post_title">
                                    <span>Olbia</span> <span>, Alghero</span>
                                </div>
                            </div>
                        </div>
                        <!-- end item  -->
                    </div>
                </div>
            </div>
            <!-- end row  -->

        </div>
    </div>

    <!-- end cat one  -->
<?php
    $result = ob_get_clean();
    return $result;
}
