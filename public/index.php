<?php

use Kirby\Cms\App;

include __DIR__ . '/../kirby/bootstrap.php';

/**
 * Public folder setup, see:
 * - https://getkirby.com/docs/guide/configuration/custom-folder-setup
 * - https://github.com/bnomei/kirby3-with-public-folder-kit
 * - https://github.com/flokosiol/kirby-vitekit
 */

$kirby = new App([
    'roots' => [
        'index'    => __DIR__,
        'base'     => $base    = dirname(__DIR__),
        'content'  => $base . '/content',
        'site'     => $base . '/site',
        'storage'  => $storage = $base . '/storage',
        'accounts' => $storage . '/accounts',
        'cache'    => $storage . '/cache',
        'license'  => $storage . '/license/.license',
        'logs'     => $storage . '/logs',
        'sessions' => $storage . '/sessions',
    ]
]);

echo $kirby->render();
