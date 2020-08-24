<!-- All JS is here
============================================ -->

<!-- Modernizer JS -->
<script src="{{ asset('js/vendor/modernizr-3.6.0.min.js') }}" ></script>
<!-- jquery -->
<script src="{{ asset('js/vendor/jquery-3.3.1.min.js') }}" ></script>
<!-- Popper JS -->
<script src="{{ asset('js/vendor/popper.js') }}" ></script>
<!-- Bootstrap JS -->
<script src="{{ asset('js/vendor/bootstrap.min.js') }}" ></script>
<script src="{{ asset('js/plugins/owl-carousel.js') }}" ></script>
<script src="{{ asset('js/plugins/slick.js') }}" ></script>
<script src="{{ asset('js/plugins/jarallax.min.js') }}" ></script>
<script src="{{ asset('js/plugins/countdown.js') }}" ></script>
<script src="{{ asset('js/plugins/magnific-popup.js') }}" ></script>
<script src="{{ asset('js/plugins/instafeed.js') }}" ></script>
<script src="{{ asset('js/plugins/tilt.js') }}" ></script>
<script src="{{ asset('js/plugins/images-loaded.js') }}" ></script>
<script src="{{ asset('js/plugins/isotope.js') }}" ></script>
<script src="{{ asset('js/plugins/scrolloverflow-fullpage.js') }}" ></script>
<script src="{{ asset('js/plugins/fullpage.js') }}" ></script>
<script src="{{ asset('js/plugins/jquery-ui-touch-punch.js') }}" ></script>
<script src="{{ asset('js/plugins/jquery-ui.js') }}" ></script>
<script src="{{ asset('js/plugins/easyzoom.js') }}" ></script>
<script src="{{ asset('js/plugins/resizesensor.js') }}" ></script>
<script src="{{ asset('js/plugins/sticky-sidebar.js') }}" ></script>
<script src="{{ asset('js/plugins/scrollup.js') }}" ></script>
<script src="{{ asset('js/plugins/select2.min.js') }}" ></script>
<script src="{{ asset('js/plugins/cookie.js') }}" ></script>
<script src="{{ asset('js/plugins/bpopup.js') }}" ></script>
<script src="{{ asset('js/plugins/wow.js') }}" ></script>
<script src="{{ asset('js/plugins/ajax-mail.js') }}" ></script>
<!-- Main JS -->
<script src="{{ asset('js/main.js') }}" ></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAYNfZ-tL7Q_kGLMO4Y5xz4lCl70V74AF4" ></script>
<script>
    function init() {
        var mapOptions = {
            zoom: 14,
            scrollwheel: false,
            center: new google.maps.LatLng(6.4602823, 3.2455577),
            styles: [{
                "featureType": "water",
                "elementType": "geometry",
                "stylers": [{
                    "color": "#e9e9e9"
                },
                    {
                        "lightness": 17
                    }
                ]
            },
                {
                    "featureType": "landscape",
                    "elementType": "geometry",
                    "stylers": [{
                        "color": "#f5f5f5"
                    },
                        {
                            "lightness": 20
                        }
                    ]
                },
                {
                    "featureType": "road.highway",
                    "elementType": "geometry.fill",
                    "stylers": [{
                        "color": "#ffffff"
                    },
                        {
                            "lightness": 17
                        }
                    ]
                },
                {
                    "featureType": "road.highway",
                    "elementType": "geometry.stroke",
                    "stylers": [{
                        "color": "#ffffff"
                    },
                        {
                            "lightness": 29
                        },
                        {
                            "weight": 0.2
                        }
                    ]
                },
                {
                    "featureType": "road.arterial",
                    "elementType": "geometry",
                    "stylers": [{
                        "color": "#ffffff"
                    },
                        {
                            "lightness": 18
                        }
                    ]
                },
                {
                    "featureType": "road.local",
                    "elementType": "geometry",
                    "stylers": [{
                        "color": "#ffffff"
                    },
                        {
                            "lightness": 16
                        }
                    ]
                },
                {
                    "featureType": "poi",
                    "elementType": "geometry",
                    "stylers": [{
                        "color": "#f5f5f5"
                    },
                        {
                            "lightness": 21
                        }
                    ]
                },
                {
                    "featureType": "poi.park",
                    "elementType": "geometry",
                    "stylers": [{
                        "color": "#dedede"
                    },
                        {
                            "lightness": 21
                        }
                    ]
                },
                {
                    "elementType": "labels.text.stroke",
                    "stylers": [{
                        "visibility": "on"
                    },
                        {
                            "color": "#ffffff"
                        },
                        {
                            "lightness": 16
                        }
                    ]
                },
                {
                    "elementType": "labels.text.fill",
                    "stylers": [{
                        "saturation": 36
                    },
                        {
                            "color": "#333333"
                        },
                        {
                            "lightness": 40
                        }
                    ]
                },
                {
                    "elementType": "labels.icon",
                    "stylers": [{
                        "visibility": "off"
                    }]
                },
                {
                    "featureType": "transit",
                    "elementType": "geometry",
                    "stylers": [{
                        "color": "#f2f2f2"
                    },
                        {
                            "lightness": 19
                        }
                    ]
                },
                {
                    "featureType": "administrative",
                    "elementType": "geometry.fill",
                    "stylers": [{
                        "color": "#fefefe"
                    },
                        {
                            "lightness": 20
                        }
                    ]
                },
                {
                    "featureType": "administrative",
                    "elementType": "geometry.stroke",
                    "stylers": [{
                        "color": "#fefefe"
                    },
                        {
                            "lightness": 17
                        },
                        {
                            "weight": 1.2
                        }
                    ]
                }
            ]
        };
        var mapElement = document.getElementById('contact-map');
        var map = new google.maps.Map(mapElement, mapOptions);
        var marker = new google.maps.Marker({
            position: new google.maps.LatLng(6.4602823, 3.2455577),
            map: map,
            icon: 'images/icon-img/2.png',
            animation: google.maps.Animation.BOUNCE,
            title: 'Snazzy!'
        });
    }
    google.maps.event.addDomListener(window, 'load', init);
</script>
<script>
    window.addEventListener("resize", resizeHandler);

    function resizeHandler() {
        var winWidth  = window.innerWidth,
            threshold = 767,
            els       = document.getElementsByClassName('animated');

        [].forEach.call(els, function (el) {
            if (winWidth < threshold) {
                el.removeAttribute("data-toggle");
            } else {
                el.setAttribute("data-toggle", "bar");
            }
        });
    }
</script>
