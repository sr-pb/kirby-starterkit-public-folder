<?php

use Kirby\Cms\App;
use Kirby\Toolkit\Str;


// Cookie salt
// Terminal: php -r "echo bin2hex(random_bytes(64)), PHP_EOL;"
// Kirby\Http\Cookie::$key = '';

date_default_timezone_set('Europe/Berlin');

return [
    'debug' => false,

    'cache' => [
        'uuid' => [
            'active' => true,
            'type' => 'file',
        ],
    ],

    /**
     * Intl Date Format
     * https://unicode-org.github.io/icu/userguide/format_parse/datetime/#datetime-format-syntax
     */
    'date.handler'  => 'intl',

     /**
     * Image sizes
     */
    'thumbs' => [
        'presets' => [
            'small' => ['width' => 400, 'height' => 400, 'quality' => 75],
            'smallWebp' => ['width' => 400,  'height' => 400,  'quality' => 75, 'format' => 'webp'],
            '1600' => ['width' => 1600, 'height' => 1600, 'quality' => 80, 'format' => 'webp']
        ],
        'srcsets' => [
            'default' => [
                '400w'  => ['width' => 400,  'height' => 400,  'quality' => 75, 'format' => 'webp'],
                '800w'  => ['width' => 800,  'height' => 800,  'quality' => 80, 'format' => 'webp'],
                '1600w' => ['width' => 1600, 'height' => 1600, 'quality' => 80, 'format' => 'webp'],
                '2400w' => ['width' => 2400, 'height' => 2400, 'quality' => 80, 'format' => 'webp'],
            ],
        ]
    ],

    'locale' => [
        LC_ALL      => 'de_CH.utf-8',
        LC_COLLATE  => 'de_CH.utf-8',
    ],

    /**
     * Content salt
     * Terminal: php -r "echo bin2hex(random_bytes(64)), PHP_EOL;"
     */

    // 'content' => [
    //     'salt' => ''
    // ],

    'sr' => [
        'showDev' => false,
        'env' => 'prod',
    ],

    'panel.vue.compiler' => false,

    'afbora.kirby-minify-html' => [
        'enabled' => true,
        'ignore' => [
            'sitemap',
            'rss'
        ],
        'options' => [
            'doOptimizeViaHtmlDomParser'     => true,
            'doRemoveSpacesBetweenTags'      => false,
            'doRemoveComments' => false
        ]
    ],
];
