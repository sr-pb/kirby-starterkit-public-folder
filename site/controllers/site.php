<?php

use Kirby\Toolkit\Str;

return function ($page, $pages, $site, $kirby) {
    $seoTitle = '';

    $seoSiteName = $site->seoTitle() ?? '';

    if ($page->seoTitle()->isNotEmpty()) {
        $seoTitle = $page->seoTitle();
    } else {
        $seoTitle = $page->title();
    }

    $seoPageTitle = $page->isHomePage() ? $seoTitle : $seoTitle . ' – ' . $seoSiteName;

    $seoDescription = '';

    if ($page->seoDescription()->isNotEmpty()) {
        $seoDescription = $page->seoDescription();
    } else if ($site->seoDescription()->isNotEmpty()) {
        $seoDescription = $site->seoDescription();
    }

    $seoImage = null;

    if ($page->seoImage()->isNotEmpty()) {
        $seoImage = $page->seoImage()->toFile();
    } else if ($site->seoImage()->isNotEmpty()) {
        $seoImage = $site->seoImage()->toFile();
    }

    return [
        'seoSiteName' => $seoSiteName,
        'seoPageTitle' => $seoPageTitle,
        'seoTitle' => $seoTitle,
        'seoDescription' => Str::unhtml($seoDescription),
        'seoImage' => $seoImage,
    ];
};
