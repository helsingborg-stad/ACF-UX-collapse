<?php

namespace AcfUxCollapse;

use WpUtilService\Features\Enqueue\EnqueueManager;

class App
{
    public function __construct(
        private EnqueueManager $wpEnqueue,
    ) {
        add_action('admin_enqueue_scripts', function () {
            $this->wpEnqueue->add('css/acf-ux-collapse.css');
        });
        add_action('admin_enqueue_scripts', function () {
            $this->wpEnqueue->add('js/acf-ux-collapse.js', ['jquery']);
        });
    }
}
