<?php

require 'vendor/autoload.php';

/**
 * This is project's console commands configuration for Robo task runner.
 *
 * @see http://robo.li/
 */
class RoboFile extends PressShack\Builder\Robo_Task {

    public function __construct() {
        $this->plugin_name = 'publishpress-content-checklist';
        $this->version_constant = 'PP_CONTENT_CHECKLIST_VERSION';
    }
}
