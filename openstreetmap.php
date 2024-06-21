<?php
namespace Grav\Plugin;

use Grav\Common\Plugin;
use Grav\Plugin\Shortcodes\OpenStreetMapShortcode;

class OpenStreetMapPlugin extends Plugin
{
    public static function getSubscribedEvents()
    {
        return [
            'onPluginsInitialized' => ['onPluginsInitialized', 0],
        ];
    }

    public function onPluginsInitialized()
    {
        // Don't proceed if we are in the admin plugin
        if ($this->isAdmin()) {
            return;
        }

        $this->enable([
            'onTwigTemplatePaths' => ['onTwigTemplatePaths', 0],
            'onTwigSiteVariables' => ['onTwigSiteVariables', 0],
            'onShortcodeHandlers' => ['onShortcodeHandlers', 0],
        ]);
    }

    public function onTwigTemplatePaths()
    {
        $this->grav['twig']->twig_paths[] = __DIR__ . '/templates';
    }

    public function onTwigSiteVariables()
    {
        $this->grav['assets']->addJs('plugin://openstreetmap/js/openstreetmap.js');
        $this->grav['assets']->addCss('https://unpkg.com/leaflet@1.7.1/dist/leaflet.css');
        $this->grav['assets']->addJs('https://unpkg.com/leaflet@1.7.1/dist/leaflet.js');
    }

    public function onShortcodeHandlers()
    {
        require_once __DIR__ . '/shortcodes/OpenStreetMapShortcode.php';
        $this->grav['shortcode']->registerAllShortcodes(__DIR__ . '/shortcodes');
    }
}
