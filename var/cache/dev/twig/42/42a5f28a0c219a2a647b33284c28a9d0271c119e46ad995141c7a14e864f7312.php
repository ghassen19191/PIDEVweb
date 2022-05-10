<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* js/theme.js */
class __TwigTemplate_2c10605208de45a7342fdc3c0e6cd877d6f323d341446e4329b06cad5a97e24c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "js/theme.js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "js/theme.js"));

        // line 1
        echo "; (function (\$) {
    \"use strict\"


    var nav_offset_top = \$('header').height() + 50;
    /*-------------------------------------------------------------------------------
\t  Navbar 
\t-------------------------------------------------------------------------------*/

    //* Navbar Fixed  
    function navbarFixed() {
        if (\$('.header_area').length) {
            \$(window).scroll(function () {
                var scroll = \$(window).scrollTop();
                if (scroll >= nav_offset_top) {
                    \$(\".header_area\").addClass(\"navbar_fixed\");
                } else {
                    \$(\".header_area\").removeClass(\"navbar_fixed\");
                }
            });
        };
    };
    navbarFixed();


    /*----------------------------------------------------*/
    /*  Parallax Effect js
    /*----------------------------------------------------*/
    function parallaxEffect() {
        \$('.bg-parallax').parallax();
    }
    parallaxEffect();


    /*----------------------------------------------------*/
    /*  Clients Slider
    /*----------------------------------------------------*/
    function clients_slider() {
        if (\$('.clients_slider').length) {
            \$('.clients_slider').owlCarousel({
                loop: true,
                margin: 30,
                items: 5,
                nav: false,
                autoplay: false,
                smartSpeed: 1500,
                dots: false,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                    },
                    400: {
                        items: 2,
                    },
                    575: {
                        items: 3,
                    },
                    768: {
                        items: 4,
                    },
                    992: {
                        items: 5,
                    }
                }
            })
        }
    }
    clients_slider();
    /*----------------------------------------------------*/
    /*  MailChimp Slider
    /*----------------------------------------------------*/
    function mailChimp() {
        \$('#mc_embed_signup').find('form').ajaxChimp();
    }
    mailChimp();

    \$('select').niceSelect();

    \$('.counter').counterUp({
        delay: 10,
        time: 1000
    });

    \$(\".skill_main\").each(function () {
        \$(this).waypoint(function () {
            var progressBar = \$(\".progress-bar\");
            progressBar.each(function (indx) {
                \$(this).css(\"width\", \$(this).attr(\"aria-valuenow\") + \"%\")
            })
        }, {
                triggerOnce: true,
                offset: 'bottom-in-view'

            });
    });


    /*----------------------------------------------------*/
    /*  Magnific Pop up js (Home Video)
    /*----------------------------------------------------*/
    \$('#play-home-video').magnificPopup({
        type: 'iframe',
        mainClass: 'mfp-fade',
        removalDelay: 160,
        preloader: false,
        fixedContentPos: false
    });


    /*----------------------------------------------------*/
    /*  Magnific Pop up js (Image Gallery)
    /*----------------------------------------------------*/
    \$('.pop-up-image').magnificPopup({
        type: 'image',
        gallery: {
            enabled: true
        }
    });

    /*----------------------------------------------------*/
    /*  Isotope Fillter js
    /*----------------------------------------------------*/
    function projects_isotope() {
        if (\$('.projects_area').length) {
            // Activate isotope in container
            \$(\".projects_inner\").imagesLoaded(function () {
                \$(\".projects_inner\").isotope({
                    layoutMode: 'fitRows',
                    animationOptions: {
                        duration: 750,
                        easing: 'linear'
                    }
                });
            });

            // Add isotope click function
            \$(\".filter li\").on('click', function () {
                \$(\".filter li\").removeClass(\"active\");
                \$(this).addClass(\"active\");

                var selector = \$(this).attr(\"data-filter\");
                \$(\".projects_inner\").isotope({
                    filter: selector,
                    animationOptions: {
                        duration: 450,
                        easing: \"linear\",
                        queue: false,
                    }
                });
                return false;
            });
        }
    }
    projects_isotope();


    /*----------------------------------------------------*/
    /*  Testimonials Slider
    /*----------------------------------------------------*/
    function testimonials_slider() {
        if (\$('.testi_slider').length) {
            \$('.testi_slider').owlCarousel({
                loop: true,
                items: 1,
                nav: false,
                autoplay: true,
                smartSpeed: 500,
                dots: false,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                    },
                    768: {
                        items: 1,
                    },
                }
            })
        }
    }
    testimonials_slider();

    /*----------------------------------------------------*/
    /*  Google map js
    /*----------------------------------------------------*/

    if (\$('#mapBox').length) {
        var \$lat = \$('#mapBox').data('lat');
        var \$lon = \$('#mapBox').data('lon');
        var \$zoom = \$('#mapBox').data('zoom');
        var \$marker = \$('#mapBox').data('marker');
        var \$info = \$('#mapBox').data('info');
        var \$markerLat = \$('#mapBox').data('mlat');
        var \$markerLon = \$('#mapBox').data('mlon');
        var map = new GMaps({
            el: '#mapBox',
            lat: \$lat,
            lng: \$lon,
            scrollwheel: false,
            scaleControl: true,
            streetViewControl: false,
            panControl: true,
            disableDoubleClickZoom: true,
            mapTypeControl: false,
            zoom: \$zoom,
            styles: [
                {
                    \"featureType\": \"water\",
                    \"elementType\": \"geometry.fill\",
                    \"stylers\": [
                        {
                            \"color\": \"#dcdfe6\"
                        }
                    ]
                },
                {
                    \"featureType\": \"transit\",
                    \"stylers\": [
                        {
                            \"color\": \"#808080\"
                        },
                        {
                            \"visibility\": \"off\"
                        }
                    ]
                },
                {
                    \"featureType\": \"road.highway\",
                    \"elementType\": \"geometry.stroke\",
                    \"stylers\": [
                        {
                            \"visibility\": \"on\"
                        },
                        {
                            \"color\": \"#dcdfe6\"
                        }
                    ]
                },
                {
                    \"featureType\": \"road.highway\",
                    \"elementType\": \"geometry.fill\",
                    \"stylers\": [
                        {
                            \"color\": \"#ffffff\"
                        }
                    ]
                },
                {
                    \"featureType\": \"road.local\",
                    \"elementType\": \"geometry.fill\",
                    \"stylers\": [
                        {
                            \"visibility\": \"on\"
                        },
                        {
                            \"color\": \"#ffffff\"
                        },
                        {
                            \"weight\": 1.8
                        }
                    ]
                },
                {
                    \"featureType\": \"road.local\",
                    \"elementType\": \"geometry.stroke\",
                    \"stylers\": [
                        {
                            \"color\": \"#d7d7d7\"
                        }
                    ]
                },
                {
                    \"featureType\": \"poi\",
                    \"elementType\": \"geometry.fill\",
                    \"stylers\": [
                        {
                            \"visibility\": \"on\"
                        },
                        {
                            \"color\": \"#ebebeb\"
                        }
                    ]
                },
                {
                    \"featureType\": \"administrative\",
                    \"elementType\": \"geometry\",
                    \"stylers\": [
                        {
                            \"color\": \"#a7a7a7\"
                        }
                    ]
                },
                {
                    \"featureType\": \"road.arterial\",
                    \"elementType\": \"geometry.fill\",
                    \"stylers\": [
                        {
                            \"color\": \"#ffffff\"
                        }
                    ]
                },
                {
                    \"featureType\": \"road.arterial\",
                    \"elementType\": \"geometry.fill\",
                    \"stylers\": [
                        {
                            \"color\": \"#ffffff\"
                        }
                    ]
                },
                {
                    \"featureType\": \"landscape\",
                    \"elementType\": \"geometry.fill\",
                    \"stylers\": [
                        {
                            \"visibility\": \"on\"
                        },
                        {
                            \"color\": \"#efefef\"
                        }
                    ]
                },
                {
                    \"featureType\": \"road\",
                    \"elementType\": \"labels.text.fill\",
                    \"stylers\": [
                        {
                            \"color\": \"#696969\"
                        }
                    ]
                },
                {
                    \"featureType\": \"administrative\",
                    \"elementType\": \"labels.text.fill\",
                    \"stylers\": [
                        {
                            \"visibility\": \"on\"
                        },
                        {
                            \"color\": \"#737373\"
                        }
                    ]
                },
                {
                    \"featureType\": \"poi\",
                    \"elementType\": \"labels.icon\",
                    \"stylers\": [
                        {
                            \"visibility\": \"off\"
                        }
                    ]
                },
                {
                    \"featureType\": \"poi\",
                    \"elementType\": \"labels\",
                    \"stylers\": [
                        {
                            \"visibility\": \"off\"
                        }
                    ]
                },
                {
                    \"featureType\": \"road.arterial\",
                    \"elementType\": \"geometry.stroke\",
                    \"stylers\": [
                        {
                            \"color\": \"#d6d6d6\"
                        }
                    ]
                },
                {
                    \"featureType\": \"road\",
                    \"elementType\": \"labels.icon\",
                    \"stylers\": [
                        {
                            \"visibility\": \"off\"
                        }
                    ]
                },
                {},
                {
                    \"featureType\": \"poi\",
                    \"elementType\": \"geometry.fill\",
                    \"stylers\": [
                        {
                            \"color\": \"#dadada\"
                        }
                    ]
                }
            ]
        });
    }

    /*----------------------------------------------------*/
    /*  Google map js
    /*----------------------------------------------------*/

    if (\$('#mapBox2').length) {
        var \$lat = \$('#mapBox2').data('lat');
        var \$lon = \$('#mapBox2').data('lon');
        var \$zoom = \$('#mapBox2').data('zoom');
        var \$marker = \$('#mapBox2').data('marker');
        var \$info = \$('#mapBox2').data('info');
        var \$markerLat = \$('#mapBox2').data('mlat');
        var \$markerLon = \$('#mapBox2').data('mlon');
        var map = new GMaps({
            el: '#mapBox2',
            lat: \$lat,
            lng: \$lon,
            scrollwheel: false,
            scaleControl: true,
            streetViewControl: false,
            panControl: true,
            disableDoubleClickZoom: true,
            mapTypeControl: false,
            zoom: \$zoom,
            styles: [
                {
                    \"featureType\": \"administrative.country\",
                    \"elementType\": \"geometry\",
                    \"stylers\": [
                        {
                            \"visibility\": \"simplified\"
                        },
                        {
                            \"hue\": \"#ff0000\"
                        }
                    ]
                }
            ]
        });
    }


})(jQuery)";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "js/theme.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("; (function (\$) {
    \"use strict\"


    var nav_offset_top = \$('header').height() + 50;
    /*-------------------------------------------------------------------------------
\t  Navbar 
\t-------------------------------------------------------------------------------*/

    //* Navbar Fixed  
    function navbarFixed() {
        if (\$('.header_area').length) {
            \$(window).scroll(function () {
                var scroll = \$(window).scrollTop();
                if (scroll >= nav_offset_top) {
                    \$(\".header_area\").addClass(\"navbar_fixed\");
                } else {
                    \$(\".header_area\").removeClass(\"navbar_fixed\");
                }
            });
        };
    };
    navbarFixed();


    /*----------------------------------------------------*/
    /*  Parallax Effect js
    /*----------------------------------------------------*/
    function parallaxEffect() {
        \$('.bg-parallax').parallax();
    }
    parallaxEffect();


    /*----------------------------------------------------*/
    /*  Clients Slider
    /*----------------------------------------------------*/
    function clients_slider() {
        if (\$('.clients_slider').length) {
            \$('.clients_slider').owlCarousel({
                loop: true,
                margin: 30,
                items: 5,
                nav: false,
                autoplay: false,
                smartSpeed: 1500,
                dots: false,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                    },
                    400: {
                        items: 2,
                    },
                    575: {
                        items: 3,
                    },
                    768: {
                        items: 4,
                    },
                    992: {
                        items: 5,
                    }
                }
            })
        }
    }
    clients_slider();
    /*----------------------------------------------------*/
    /*  MailChimp Slider
    /*----------------------------------------------------*/
    function mailChimp() {
        \$('#mc_embed_signup').find('form').ajaxChimp();
    }
    mailChimp();

    \$('select').niceSelect();

    \$('.counter').counterUp({
        delay: 10,
        time: 1000
    });

    \$(\".skill_main\").each(function () {
        \$(this).waypoint(function () {
            var progressBar = \$(\".progress-bar\");
            progressBar.each(function (indx) {
                \$(this).css(\"width\", \$(this).attr(\"aria-valuenow\") + \"%\")
            })
        }, {
                triggerOnce: true,
                offset: 'bottom-in-view'

            });
    });


    /*----------------------------------------------------*/
    /*  Magnific Pop up js (Home Video)
    /*----------------------------------------------------*/
    \$('#play-home-video').magnificPopup({
        type: 'iframe',
        mainClass: 'mfp-fade',
        removalDelay: 160,
        preloader: false,
        fixedContentPos: false
    });


    /*----------------------------------------------------*/
    /*  Magnific Pop up js (Image Gallery)
    /*----------------------------------------------------*/
    \$('.pop-up-image').magnificPopup({
        type: 'image',
        gallery: {
            enabled: true
        }
    });

    /*----------------------------------------------------*/
    /*  Isotope Fillter js
    /*----------------------------------------------------*/
    function projects_isotope() {
        if (\$('.projects_area').length) {
            // Activate isotope in container
            \$(\".projects_inner\").imagesLoaded(function () {
                \$(\".projects_inner\").isotope({
                    layoutMode: 'fitRows',
                    animationOptions: {
                        duration: 750,
                        easing: 'linear'
                    }
                });
            });

            // Add isotope click function
            \$(\".filter li\").on('click', function () {
                \$(\".filter li\").removeClass(\"active\");
                \$(this).addClass(\"active\");

                var selector = \$(this).attr(\"data-filter\");
                \$(\".projects_inner\").isotope({
                    filter: selector,
                    animationOptions: {
                        duration: 450,
                        easing: \"linear\",
                        queue: false,
                    }
                });
                return false;
            });
        }
    }
    projects_isotope();


    /*----------------------------------------------------*/
    /*  Testimonials Slider
    /*----------------------------------------------------*/
    function testimonials_slider() {
        if (\$('.testi_slider').length) {
            \$('.testi_slider').owlCarousel({
                loop: true,
                items: 1,
                nav: false,
                autoplay: true,
                smartSpeed: 500,
                dots: false,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                    },
                    768: {
                        items: 1,
                    },
                }
            })
        }
    }
    testimonials_slider();

    /*----------------------------------------------------*/
    /*  Google map js
    /*----------------------------------------------------*/

    if (\$('#mapBox').length) {
        var \$lat = \$('#mapBox').data('lat');
        var \$lon = \$('#mapBox').data('lon');
        var \$zoom = \$('#mapBox').data('zoom');
        var \$marker = \$('#mapBox').data('marker');
        var \$info = \$('#mapBox').data('info');
        var \$markerLat = \$('#mapBox').data('mlat');
        var \$markerLon = \$('#mapBox').data('mlon');
        var map = new GMaps({
            el: '#mapBox',
            lat: \$lat,
            lng: \$lon,
            scrollwheel: false,
            scaleControl: true,
            streetViewControl: false,
            panControl: true,
            disableDoubleClickZoom: true,
            mapTypeControl: false,
            zoom: \$zoom,
            styles: [
                {
                    \"featureType\": \"water\",
                    \"elementType\": \"geometry.fill\",
                    \"stylers\": [
                        {
                            \"color\": \"#dcdfe6\"
                        }
                    ]
                },
                {
                    \"featureType\": \"transit\",
                    \"stylers\": [
                        {
                            \"color\": \"#808080\"
                        },
                        {
                            \"visibility\": \"off\"
                        }
                    ]
                },
                {
                    \"featureType\": \"road.highway\",
                    \"elementType\": \"geometry.stroke\",
                    \"stylers\": [
                        {
                            \"visibility\": \"on\"
                        },
                        {
                            \"color\": \"#dcdfe6\"
                        }
                    ]
                },
                {
                    \"featureType\": \"road.highway\",
                    \"elementType\": \"geometry.fill\",
                    \"stylers\": [
                        {
                            \"color\": \"#ffffff\"
                        }
                    ]
                },
                {
                    \"featureType\": \"road.local\",
                    \"elementType\": \"geometry.fill\",
                    \"stylers\": [
                        {
                            \"visibility\": \"on\"
                        },
                        {
                            \"color\": \"#ffffff\"
                        },
                        {
                            \"weight\": 1.8
                        }
                    ]
                },
                {
                    \"featureType\": \"road.local\",
                    \"elementType\": \"geometry.stroke\",
                    \"stylers\": [
                        {
                            \"color\": \"#d7d7d7\"
                        }
                    ]
                },
                {
                    \"featureType\": \"poi\",
                    \"elementType\": \"geometry.fill\",
                    \"stylers\": [
                        {
                            \"visibility\": \"on\"
                        },
                        {
                            \"color\": \"#ebebeb\"
                        }
                    ]
                },
                {
                    \"featureType\": \"administrative\",
                    \"elementType\": \"geometry\",
                    \"stylers\": [
                        {
                            \"color\": \"#a7a7a7\"
                        }
                    ]
                },
                {
                    \"featureType\": \"road.arterial\",
                    \"elementType\": \"geometry.fill\",
                    \"stylers\": [
                        {
                            \"color\": \"#ffffff\"
                        }
                    ]
                },
                {
                    \"featureType\": \"road.arterial\",
                    \"elementType\": \"geometry.fill\",
                    \"stylers\": [
                        {
                            \"color\": \"#ffffff\"
                        }
                    ]
                },
                {
                    \"featureType\": \"landscape\",
                    \"elementType\": \"geometry.fill\",
                    \"stylers\": [
                        {
                            \"visibility\": \"on\"
                        },
                        {
                            \"color\": \"#efefef\"
                        }
                    ]
                },
                {
                    \"featureType\": \"road\",
                    \"elementType\": \"labels.text.fill\",
                    \"stylers\": [
                        {
                            \"color\": \"#696969\"
                        }
                    ]
                },
                {
                    \"featureType\": \"administrative\",
                    \"elementType\": \"labels.text.fill\",
                    \"stylers\": [
                        {
                            \"visibility\": \"on\"
                        },
                        {
                            \"color\": \"#737373\"
                        }
                    ]
                },
                {
                    \"featureType\": \"poi\",
                    \"elementType\": \"labels.icon\",
                    \"stylers\": [
                        {
                            \"visibility\": \"off\"
                        }
                    ]
                },
                {
                    \"featureType\": \"poi\",
                    \"elementType\": \"labels\",
                    \"stylers\": [
                        {
                            \"visibility\": \"off\"
                        }
                    ]
                },
                {
                    \"featureType\": \"road.arterial\",
                    \"elementType\": \"geometry.stroke\",
                    \"stylers\": [
                        {
                            \"color\": \"#d6d6d6\"
                        }
                    ]
                },
                {
                    \"featureType\": \"road\",
                    \"elementType\": \"labels.icon\",
                    \"stylers\": [
                        {
                            \"visibility\": \"off\"
                        }
                    ]
                },
                {},
                {
                    \"featureType\": \"poi\",
                    \"elementType\": \"geometry.fill\",
                    \"stylers\": [
                        {
                            \"color\": \"#dadada\"
                        }
                    ]
                }
            ]
        });
    }

    /*----------------------------------------------------*/
    /*  Google map js
    /*----------------------------------------------------*/

    if (\$('#mapBox2').length) {
        var \$lat = \$('#mapBox2').data('lat');
        var \$lon = \$('#mapBox2').data('lon');
        var \$zoom = \$('#mapBox2').data('zoom');
        var \$marker = \$('#mapBox2').data('marker');
        var \$info = \$('#mapBox2').data('info');
        var \$markerLat = \$('#mapBox2').data('mlat');
        var \$markerLon = \$('#mapBox2').data('mlon');
        var map = new GMaps({
            el: '#mapBox2',
            lat: \$lat,
            lng: \$lon,
            scrollwheel: false,
            scaleControl: true,
            streetViewControl: false,
            panControl: true,
            disableDoubleClickZoom: true,
            mapTypeControl: false,
            zoom: \$zoom,
            styles: [
                {
                    \"featureType\": \"administrative.country\",
                    \"elementType\": \"geometry\",
                    \"stylers\": [
                        {
                            \"visibility\": \"simplified\"
                        },
                        {
                            \"hue\": \"#ff0000\"
                        }
                    ]
                }
            ]
        });
    }


})(jQuery)", "js/theme.js", "C:\\xampp\\htdocs\\PIDEV\\templates\\js\\theme.js");
    }
}
