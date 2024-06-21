<?php
namespace Grav\Plugin\Shortcodes;

use Thunder\Shortcode\Shortcode\ShortcodeInterface;
use Grav\Plugin\ShortcodeCore\Shortcode;

class OpenStreetMapShortcode extends Shortcode
{
    public function init()
    {
        $this->shortcode->getHandlers()->add('openstreetmap', function(ShortcodeInterface $sc) {
            $lat = $sc->getParameter('lat', $sc->getBbCode());
            $lng = $sc->getParameter('lng', $sc->getBbCode());
            $zoom = $sc->getParameter('zoom', $sc->getBbCode());
	    $markerLat = $sc->getParameter('marker-lat', $lat);
	    $markerLng = $sc->getParameter('marker-lng', $lng);
            $markerPopup = $sc->getParameter('marker-popup', $sc->getBbCode());

            return $this->twig->processTemplate('partials/openstreetmap.html.twig', [
                'lat' => $lat,
                'lng' => $lng,
                'zoom' => $zoom,
                'marker_lat' => $markerLat,
                'marker_lng' => $markerLng,
                'marker_popup' => $markerPopup,
            ]);
        });
    }
}
