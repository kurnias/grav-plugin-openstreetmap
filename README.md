# grav-plugin-openstreetmap

Shortcodes :

[openstreetmap lat="-6.1753871" lng="106.8271528" zoom="16" marker-lat="-6.1753871" marker-lng="106.8271528" marker-popup="Monas tower here"]

Parameters
* lat: Latitude for the center of the map.
* lng: Longitude for the center of the map.
* zoom: Zoom level of the map (e.g., 16).
* marker-lat: Latitude for the marker position. Defaults to the value of lat if not specified.
* marker-lng: Longitude for the marker position. Defaults to the value of lng if not specified.
* marker-popup: Text to display in the marker's popup.

New Feature:

When marker-lat and marker-lng are not specified, the marker position will be set to the center of the map, which is the lat and lng value.

[openstreetmap lat="-6.1753871" lng="106.8271528" zoom="16" marker-popup="Monas tower here"]


This version includes proper headings and slight formatting improvements for better readability.

