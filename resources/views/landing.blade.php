<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Robot Checkpoints</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <style>
        #map {
            height: 600px;
            width: 100%;
        }
    </style>
</head>
<body>
    <div id="map"></div>

    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <script>
        // Initialize the map and set its view
        var map = L.map('map').setView([-6.200000, 106.816666], 5); // Centered in Jakarta

        // Load and display tile layer on the map
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        // Array of checkpoints passed from the controller
        var checkpoints = @json($checkpoints);

        // Draw checkpoints and lines between them
        for (var i = 0; i < checkpoints.length; i++) {
            // Draw circle for each checkpoint
            var circle = L.circle([checkpoints[i].lat, checkpoints[i].lng], {
                color: 'red',
                fillColor: '#f03',
                fillOpacity: 0.5,
                radius: 50000
            }).addTo(map);

            // Draw line to the next checkpoint if it exists
            if (i < checkpoints.length - 1) {
                var latlngs = [
                    [checkpoints[i].lat, checkpoints[i].lng],
                    [checkpoints[i+1].lat, checkpoints[i+1].lng]
                ];
                var polyline = L.polyline(latlngs, {color: 'blue'}).addTo(map);
            }
        }
    </script>
</body>
</html>