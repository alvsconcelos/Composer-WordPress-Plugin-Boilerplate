<?php

namespace PluginNamePlugin;

use PluginNamePlugin\Includes\Plugin_Name_Activator;
use PluginNamePlugin\Includes\Plugin_Name_Deactivator;
use PluginNamePlugin\Includes\Plugin_Name_Core;

class Plugin_Name
{
    public function __construct($plugin_file)
    {
        register_activation_hook($plugin_file, array($this, 'activate_plugin_name'));
        register_deactivation_hook($plugin_file, array($this, 'deactivate_plugin_name'));
        $this->run_plugin_name();
    }

    public function activate_plugin_name()
    {
        Plugin_Name_Activator::activate();
    }

    public function deactivate_plugin_name()
    {
        Plugin_Name_Deactivator::deactivate();
    }

    public function run_plugin_name()
    {
        $plugin = new Plugin_Name_Core();
        $plugin->run();
    }
}
