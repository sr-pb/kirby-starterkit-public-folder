<?php

use Kirby\Cms\App as Kirby;
use Kirby\Cms\Response;

Kirby::plugin('sr/sitemap', [
    'snippets' => [
        'sitemap/robots' => __DIR__ . '/snippets/robots.php',
        'sitemap/sitemap-style' => __DIR__ . '/snippets/sitemap-style.php',
        'sitemap/sitemap' => __DIR__ . '/snippets/sitemap.php',
    ],
    'routes' => [
        [
            'pattern' => 'sitemap.xml',
            'action'  => function () {
                $content = snippet('sitemap/sitemap', [], true);

                // return response with correct header type
                return new Response($content, 'application/xml');
            }
        ],
        [
            'pattern' => 'sitemap-style.xsl',
            'action'  => function () {
                $content = snippet('sitemap/sitemap-style', [], true);

                return new Response($content, 'text/xsl');
            }
        ],
        [
            'pattern' => 'sitemap',
            'action'  => function () {
                return go('sitemap.xml', 301);
            }
        ],
        [
            'pattern' => 'robots.txt',
            'method' => 'GET',
            'action' => function () {
                $content = snippet('sitemap/robots', [], true);

                return new \Kirby\Http\Response($content, 'text/plain', 200);
            }
        ]
    ]
]);
