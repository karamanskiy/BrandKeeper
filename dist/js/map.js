	// google.maps.event.addDomListener(window, 'load', init);

	function init_map() {
			var bounds = new google.maps.LatLngBounds();
			var center1 = new google.maps.LatLng(55.668369, 37.417836);
			bounds.extend(center1);
			var loc1 = new google.maps.LatLng(55.674617, 37.440392);
			bounds.extend(loc1);
			var mapOptions1 = {
				zoom: 13,
				scrollwheel: false,
				streetViewControl: false,
				panControl: true,
				panControlOptions: {
					position: google.maps.ControlPosition.TOP_RIGHT
				},
				mapTypeControl: false,
				zoomControl: true,
				zoomControlOptions: {
					position: google.maps.ControlPosition.RIGHT_BOTTOM
				},
					center: center1,
					styles:

					[
    {
        "stylers": [
            {       "hue": "#ff1a00"        },
            {         "invert_lightness": true        },
            {          "saturation": -100        },
            {           "lightness": 33       },
            {            "gamma": 0.5        }
        ]
    },
    {
        "featureType": "water",
        "elementType": "geometry",
        "stylers": [     {          "color": "#2D333C"      }    ]
    }
]
				};
				
			var mapElement1 = document.getElementById('map1');
			var map1 = new google.maps.Map(mapElement1, mapOptions1);

			var marker1 = new google.maps.Marker({
				position: loc1,
				map: map1,
					icon: {
							url: 'img/map-marker.png'
						},
						title: 'Brand Keeper'
					});
		}
	init_map();