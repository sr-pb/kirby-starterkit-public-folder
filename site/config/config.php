<?php

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
     * Localization
     *
     * Intl Date Format
     * https://unicode-org.github.io/icu/userguide/format_parse/datetime/#datetime-format-syntax
     */
    'date.handler' => 'intl',
    'locale' => [
        LC_ALL      => 'de_CH.utf-8',
    ],


    /**
     * Image sizes
     */
    'thumbs' => [
        'presets' => [
            'small' => ['width' => 400, 'height' => 400, 'quality' => 75, 'format' => 'webp'],
            'seo' => ['width' => 1200, 'quality' => 75, 'format' => 'webp'],
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

    /**
     * Security
     * - https://getkirby.com/docs/guide/security
     * - Disable Vue template compiler
     * - Content salt
     * - Cookie salt
     *
     * Salt: Run in terminal: php -r "echo bin2hex(random_bytes(64)), PHP_EOL;"
     */
    'panel.vue.compiler' => false,
    // 'content.salt' => '',
    // 'cookie.key' => '',

    /**
     * Minify HTML
     * https://github.com/afbora/kirby-minify-html
     */
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

    /**
     * Environment
     */
    'sr' => [
        'env' => 'prod',
    ],
];
