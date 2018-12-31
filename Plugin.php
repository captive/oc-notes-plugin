<?php namespace Captive\Notes;

use Config;
use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'captive.notes::lang.plugin.name',
            'description' => 'captive.notes::lang.plugin.description',
            'author'      => 'Captive Audience Inc.',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Register the plugin's form widgets
     *
     * @return array
     */
    public function registerFormWidgets()
    {
        return [
            'Captive\Notes\FormWidgets\Notes' => 'notes',
        ];
    }
}
