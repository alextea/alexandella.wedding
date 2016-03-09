mapboxgl.accessToken = 'pk.eyJ1IjoiYWxleHRlYSIsImEiOiJjaWxwcmRhbDMwMDQ5dXNsdWlrcmExYzluIn0.5U1UWSai2SL2ywdVGTRXtA';

var map = new mapboxgl.Map({
  container: 'map',
  center: [-0.3688, 50.812],
  zoom: 14,
  style: 'mapbox://styles/alextea/cilprg1ca004ec7luymbqt7b3',
  interactive: false,
});

map.on('style.load', function() {
  map.addSource('markers', {
    'type': 'geojson',
    'data': {
      'type': 'FeatureCollection',
      'features': [{
        'type': 'Feature',
        'geometry': {
          'type': 'Point',
          'coordinates': [-0.3688, 50.807]
        },
        'properties': {
          'title': 'Southern Pavillion',
          'marker-symbol': 'marker',
          'marker-color': '#ff46b0'
        }
      }]
    }
  });

  map.addLayer({
    "id": "markers",
    "type": "symbol",
    "source": "markers",
    "layout": {
      "icon-image": "{marker-symbol}-15",
      "icon-color": "{marker-color}",
      "text-field": "{title}",
      "text-font": ["Open Sans Semibold", "Arial Unicode MS Bold"],
      "text-offset": [0, 0.6],
      "text-anchor": "top"
    }
  });
});