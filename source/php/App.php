<?php

namespace AcfCollapser;

class App
{
    public function __construct()
    {
        add_action('admin_enqueue_scripts', array($this, 'enqueueStyles'));
        add_action('admin_enqueue_scripts', array($this, 'enqueueScripts'));
    }

    /**
     * Enqueue required style
     * @return void
     */
    public function enqueueStyles()
    {

    }

    /**
     * Enqueue required scripts
     * @return void
     */
    public function enqueueScripts()
    {
        wp_enqueue_script('acf-collapse', ACFCOLLAPSER_URL . 'dist/js/advanced-custom-fields-collapse.min.js', null, '1.0.0');
    }
}
