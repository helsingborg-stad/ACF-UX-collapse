<?php

namespace AcfUxCollapse;

use ModularityOpenStreetMap\Helper\CacheBust;

class App
{
    public function __construct(private CacheBustInterface $cacheBust)
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
        if($file = $this->cacheBust->getFilePathWithCacheBust('css/acf-ux-collapse.css')) {
            wp_enqueue_style('acf-collapser', $file, null, '1.0.0');
        }
    }

    /**
     * Enqueue required scripts
     * @return void
     */
    public function enqueueScripts()
    {
        
        if($file = $this->cacheBust->getFilePathWithCacheBust('js/acf-ux-collapse.js')) {
            wp_enqueue_script('acf-collapser', $file, null, '1.0.0', true);
        }
    }
}
