<!-- All JS is here
============================================ -->

<!-- Modernizer JS -->
<script src="{{ asset('js/vendor/modernizr-3.6.0.min.js') }}" defer></script>
<!-- jquery -->
<script src="{{ asset('js/vendor/jquery-3.3.1.min.js') }}" async></script>
<!-- Popper JS -->
<script src="{{ asset('js/vendor/popper.js') }}" defer></script>
<!-- Bootstrap JS -->
<script src="{{ asset('js/vendor/bootstrap.min.js') }}" async></script>
<script src="{{ asset('js/plugins/owl-carousel.js') }}" defer></script>
<script src="{{ asset('js/plugins/slick.js') }}" defer></script>
<script src="{{ asset('js/plugins/jarallax.min.js') }}" defer></script>
<script src="{{ asset('js/plugins/countdown.js') }}" defer></script>
<script src="{{ asset('js/plugins/magnific-popup.js') }}" defer></script>
<script src="{{ asset('js/plugins/instafeed.js') }}" defer></script>
<script src="{{ asset('js/plugins/tilt.js') }}" defer></script>
<script src="{{ asset('js/plugins/images-loaded.js') }}" defer></script>
<script src="{{ asset('js/plugins/isotope.js') }}" defer></script>
<script src="{{ asset('js/plugins/scrolloverflow-fullpage.js') }}" defer></script>
<script src="{{ asset('js/plugins/fullpage.js') }}" defer></script>
<script src="{{ asset('js/plugins/jquery-ui-touch-punch.js') }}" defer></script>
<script src="{{ asset('js/plugins/jquery-ui.js') }}" defer></script>
<script src="{{ asset('js/plugins/easyzoom.js') }}" defer></script>
<script src="{{ asset('js/plugins/resizesensor.js') }}" defer></script>
<script src="{{ asset('js/plugins/sticky-sidebar.js') }}" defer></script>
<script src="{{ asset('js/plugins/scrollup.js') }}" defer></script>
<script src="{{ asset('js/plugins/select2.min.js') }}" defer></script>
<script src="{{ asset('js/plugins/cookie.js') }}" defer></script>
<script src="{{ asset('js/plugins/bpopup.js') }}" defer></script>
<script src="{{ asset('js/plugins/wow.js') }}" defer></script>
<script src="{{ asset('js/plugins/ajax-mail.js') }}" defer></script>
<!-- Main JS -->
<script src="{{ asset('js/main.js') }}" async></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAYNfZ-tL7Q_kGLMO4Y5xz4lCl70V74AF4" defer></script>
<script>
    function init() {
        var mapOptions = {
            zoom: 11,
            scrollwheel: false,
            center: new google.maps.LatLng(40.709896, -73.995481),
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
            position: new google.maps.LatLng(40.709896, -73.995481),
            map: map,
            icon: 'assets/images/icon-img/2.png',
            animation: google.maps.Animation.BOUNCE,
            title: 'Snazzy!'
        });
    }
    google.maps.event.addDomListener(window, 'load', init);
</script>
