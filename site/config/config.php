<?php

date_default_timezone_set('Europe/Berlin');

/**
 * Cookie salt
 * https://getkirby.com/docs/guide/security#set-secure-random-values-for-the-content-salt-and-cookie-key
 *
 * Run in terminal: php -r "echo bin2hex(random_bytes(64)), PHP_EOL;"
 */

// Kirby\Http\Cookie::$key = '';

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
     * Content salt
     * https://getkirby.com/docs/guide/security#set-secure-random-values-for-the-content-salt-and-cookie-key
     *
     * Run in terminal: php -r "echo bin2hex(random_bytes(64)), PHP_EOL;"
     */

    // 'content' => [
    //     'salt' => ''
    // ],

    /**
     * Disable Vue template compiler
     * https://getkirby.com/docs/guide/security#disable-the-vue-template-compiler
     */
    'panel.vue.compiler' => false,


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
