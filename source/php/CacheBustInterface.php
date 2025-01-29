<?php

namespace AcfUxCollapse;

interface CacheBustInterface
{
    /**
     * Returns the revved/cache-busted file name of an asset.
     * @param string $name Asset name (array key) from rev-mainfest.json
     * @return string filename of the asset (including directory above)
     */
    public function getFilePathWithCacheBust(string $name):?string;
}