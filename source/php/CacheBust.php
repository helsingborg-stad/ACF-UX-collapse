<?php

namespace AcfUxCollapse;

class CacheBust implements CacheBustInterface
{
    /**
     * @inheritDoc
     */
    public function getFilePathWithCacheBust(string $name):?string
    {
        $jsonPath = ACFUXCOLLAPSE_PATH . 'dist/manifest.json';
        $revManifest = [];

        if (!file_exists($jsonPath)) {
            return null;
        }

        $revManifest = json_decode(file_get_contents($jsonPath), true);

        if (!isset($revManifest[$name])) {
            return null;
        }

        return ACFUXCOLLAPSE_URL . '/dist/' . $revManifest[$name];
    }
}