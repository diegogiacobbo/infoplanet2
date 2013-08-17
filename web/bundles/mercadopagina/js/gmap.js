function initialize() {
	// Create an array of styles.
	var styles = [ {
		stylers : [ {
			hue : "#00ffe6"
		}, {
			saturation : -20
		} ]
	}, {
		featureType : "road",
		elementType : "geometry",
		stylers : [ {
			lightness : 100
		}, {
			visibility : "simplified"
		} ]
	}, {
		featureType : "road",
		elementType : "labels",
		stylers : [ {
			visibility : "off"
		} ]
	} ];
	var styledMap = new google.maps.StyledMapType(styles, {
		name : "Styled Map"
	});
	var mapOptions = {
		zoom : 11,
		center : new google.maps.LatLng(55.6468, 37.581),
		mapTypeControlOptions : {
			mapTypeIds : [ google.maps.MapTypeId.ROADMAP, 'map_style' ]
		}
	};
	var map = new google.maps.Map(document.getElementById('map-canvas'),
			mapOptions);
	map.mapTypes.set('map_style', styledMap);
	map.setMapTypeId('map_style');
}