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

    ymaps.ready(init);

    function init() {

        ////YandexApi ojakhuri map
        var ojakhuriMap = new ymaps.Map("ojakhuriMap", {
                center: [55.88109941, 37.41951084],
                zoom: 17,
                controls: []
            }),

        // Создаем геообъект с типом геометрии "Круг".
            OjakhuryPlacemark = new ymaps.GeoObject({
                // Описание геометрии
                geometry: {
                    type: "Point",
                    coordinates: [55.88109941, 37.41951084]

                }
            });

        ojakhuriMap.geoObjects
            .add(OjakhuryPlacemark);

        ////YandexApi khinkali map
        var khinkaliMap = new ymaps.Map("khinkaliMap", {
                center: [55.73798651, 37.56442454],
                zoom: 17,
                controls: []
            }),

        // Создаем геообъект с типом геометрии "Круг".
            khinkaliPlacemark = new ymaps.GeoObject({
                // Описание геометрии
                geometry: {
                    type: "Point",
                    coordinates: [55.73798651, 37.56442454]

                }
            });

        khinkaliMap.geoObjects
            .add(khinkaliPlacemark);

        ////YandexApi khinkali map
        var khinkaliMap = new ymaps.Map("ojakhuriMap3", {
                center: [55.73798651, 37.56442454],
                zoom: 17,
                controls: []
            }),

        // Создаем геообъект с типом геометрии "Круг".
            khinkaliPlacemark = new ymaps.GeoObject({
                // Описание геометрии
                geometry: {
                    type: "Point",
                    coordinates: [55.73798651, 37.56442454]

                }
            });

        khinkaliMap.geoObjects
            .add(khinkaliPlacemark);

    };


})(jQuery); // End of use strict
