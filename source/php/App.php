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
        wp_enqueue_style('acf-collapser', ACFCOLLAPSER_URL . '/dist/css/advanced-custom-fields-collapser.dev.css', null, '1.0.0');
    }

    /**
     * Enqueue required scripts
     * @return void
     */
    public function enqueueScripts()
    {
        wp_enqueue_script('acf-collapser', ACFCOLLAPSER_URL . '/dist/js/advanced-custom-fields-collapser.dev.js', null, '1.0.0', true);
    }
}
