(function ($) {
    $(document).ready(function () {

//         $('.hm_menu').slicknav({
//             label: '',
//             appendTo: '.mobile_menu',
//             easingOpen: 'swing',
//         });

//         $('.hm_destinazioni_top_cat_slider').owlCarousel({
//             animateOut: 'animate__fadeOut',
//             animateIn: 'animate__fadeIn',
//             smartSpeed: 450,
//             nav: true,
//             loop: true,
//             autoplay: true,
//             dots: false,
//             smartSpeed: 1000,
//             margin: 20,
//             responsiveClass: true,
//             responsive: {
//                 0: {
//                     items: 1,
//                     nav: true
//                 },
//                 700: {
//                     items: 2,
//                     nav: true
//                 },
//                 1000: {
//                     items: 3,
//                     nav: true,
//                     loop: false
//                 },
//             }
//         });

//         var spb_sl_arrow = $("#spb_sl_arrow").attr('src');
//         var spb_sr_arrow = $("#spb_sr_arrow").attr('src');


//         $('.hm_destinazioni_top_cat_slider button.owl-prev').html("<img src=" + spb_sl_arrow + ">");
//         $('.hm_destinazioni_top_cat_slider button.owl-next').html("<img src=" + spb_sr_arrow + ">");



        
        // var grid = $('.grid_items').isotope();
        
        // grid.imagesLoaded().progress( function() {
            
        //     grid.isotope('layout');
            
        //     $('.menu_box').on('click', 'li', function () {
        //         var filterValue = $(this).attr('data-filter');
        //         grid.isotope({ filter: filterValue });
        //     });
            
            
        //   });
          


        // nel mondo country search 
        // $("#nl_mnd_country_search").on('keyup', function () {
        //     var input_value = $("#nl_mnd_country_search").val();
        //     var input_value_length = input_value.length;
        //     if (input_value_length > 0) {
        //         $.ajax({
        //             url: url,
        //             data: {
        //                 action: 'nel_mondo_country_search',
        //                 input_value: input_value,
        //             },
        //             type: 'post',
        //             success: function (data) {
        //                 $(".crzf_country_list").html(data);
        //             },
        //         });
        //     } else {
        //         $.ajax({
        //             url: url,
        //             data: {
        //                 action: 'existing_nel_mondo_country_search',
        //                 input_value: input_value,
        //             },
        //             type: 'post',
        //             success: function (data) {
        //                 $(".crzf_country_list").html(data);
        //             },
        //         });
        //     }
        // });


        // start octgn_common_form form  
        // $("#octgn_common_form").validate({
        //     rules: {
        //         name: {
        //             required: true
        //         },
        //         cognome: {
        //             required: true
        //         },
        //         telefono: {
        //             required: true,
        //             number: true
        //         },
        //         email: {
        //             required: true,
        //             email: true,
        //         },
        //         messaggio: {
        //             required: true,
        //         },
        //         voglio_ricevere_two: {
        //             required: true,
        //         },
        //     },
        //     submitHandler: function () {
        //         var url = action_url_ajax.ajax_url;
        //         var form = $("#octgn_common_form");
        //         $.ajax({
        //             url: url,
        //             data: form.serialize() + '&action=' + 'octgn_common_form_action' + '&param=' + 'mail_form_data',
        //             type: 'post',
        //             success: function (data) {
        //                 $("#octgn_common_form_message").html(data);
        //             }
        //         });
        //     }

        // });


    });
})(jQuery)


