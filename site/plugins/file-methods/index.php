<?php

use Kirby\Cms\App as Kirby;

Kirby::plugin('sr/file-methods', [
    'fileMethods' => [
        'imageDimension' => function () {
            if ($this->type() !== 'image') {
                return '';
            }

            return '<span style="font-family: var(--font-mono); font-size: var(--text-xs);">' . $this->dimensions() . 'px</span>';
        },
        'fileSize' => function () {

            return '<span style="font-family: var(--font-mono); font-size: var(--text-xs);">' . $this->niceSize() . '</span>';
        }
    ]
]);
