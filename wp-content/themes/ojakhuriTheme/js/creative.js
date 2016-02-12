(function ($) {
    "use strict"; // Start of use strict

    //add class for main menu links a
    $('nav ul li a').addClass('page-scroll');

    // jQuery for page scrolling feature - requires jQuery Easing plugin
    $('a.page-scroll').bind('click', function (event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: ($($anchor.attr('href')).offset().top - 50)
        }, 1250, 'easeInOutExpo');
        event.preventDefault();
    });

    // Highlight the top nav as scrolling occurs
    $('body').scrollspy({
        target: '.navbar-fixed-top',
        offset: 51
    })

    // Closes the Responsive Menu on Menu Item Click
    $('.navbar-collapse ul li a').click(function () {
        $('.navbar-toggle:visible').click();
    });

    // Fit Text Plugin for Main Header
    $(".header-h1").fitText(
        1.2, {
            minFontSize: '35px',
            maxFontSize: '60px'
        }
    );

    // Offset for Main Navigation - scrollspy
    $('#mainNav').affix({
        offset: {
            top: 30
        }
    })
    //slow ride, take it easy
    $(function () {

        $('.slow-ride').on('click', function (e) {
            $('html,body').stop().animate({scrollTop: $('#news').offset().top}, 1000);
            e.preventDefault();
        });

    });

    $(function(){
        $('.khimki').hover(function(){
            $('.khimki-photo').fadeIn(500)
        },function(){
            $('.khimki-photo').fadeOut(500)
        })
    });

    $(function(){
        $('.korolev').hover(function(){
            $('.korolev-photo').fadeIn(500)
        },function(){
            $('.korolev-photo').fadeOut(500)
        })
    });

    //$(function(){
    //    $('.sch').hover(function(){
    //        $('.sch-photo').fadeIn(500)
    //    },function(){
    //        $('.sch-photo').fadeOut(500)
    //    })
    //});
    //ymaps.ready(init);
    //
    //function init() {
    //
    //    ////YandexApi ojakhuri map
    //    var ojakhuriMap = new ymaps.Map("ojakhuriMap", {
    //            center: [55.88109941, 37.41951084],
    //            zoom: 17,
    //            controls: []
    //        }),
    //
    //    // Создаем геообъект с типом геометрии "Круг".
    //        OjakhuryPlacemark = new ymaps.GeoObject({
    //            // Описание геометрии
    //            geometry: {
    //                type: "Point",
    //                coordinates: [55.88109941, 37.41951084]
    //
    //            }
    //        });
    //
    //    ojakhuriMap.geoObjects
    //        .add(OjakhuryPlacemark);
    //
    //////YandexApi korolev map
    //    var korolevMap = new ymaps.Map("korolevMap", {
    //            center: [55.92056778, 37.83797400],
    //            zoom: 17,
    //            controls: []
    //        }),
    //
    //    // Создаем геообъект с типом геометрии "Круг".
    //        korolevPlacemark = new ymaps.GeoObject({
    //            // Описание геометрии
    //            geometry: {
    //                type: "Point",
    //                coordinates: [55.92056778, 37.83797400]
    //
    //            }
    //        });
    //
    //    korolevMap.geoObjects
    //        .add(korolevPlacemark);
    //
    //////YandexApi sch map
    //    var schMap = new ymaps.Map("schMap", {
    //            center: [55.76439428, 37.65509500],
    //            zoom: 17,
    //            controls: []
    //        }),
    //
    //    // Создаем геообъект с типом геометрии "Круг".
    //        schPlacemark = new ymaps.GeoObject({
    //            // Описание геометрии
    //            geometry: {
    //                type: "Point",
    //                coordinates: [55.76439428, 37.65509500]
    //
    //            }
    //        });
    //
    //    schMap.geoObjects
    //        .add(schPlacemark);
    //
    //};


})(jQuery); // End of use strict
