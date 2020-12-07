<?php

namespace Plugin;

use Includes\Plugin_Name_Activator;
use Includes\Plugin_Name_Deactivator;
use Includes\Plugin_Name;

class Plugin
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
        $plugin = new Plugin_Name();
        $plugin->run();
    }
}
