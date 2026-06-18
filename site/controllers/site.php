<?php

return function ($page, $pages, $site, $kirby) {
    $seoTitle = '';
    $seoPageTitle = '';

    if($site->seoTitle()->isNotEmpty()) {
        $seoPageTitle = $site->seoTitle();
    }

    if($page->seoTitle()->isNotEmpty()) {
        $seoTitle = $page->seoTitle();
    } else {
        $seoTitle = $page->title();
    }

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
        'seoPageTitle' => $seoPageTitle,
        'seoTitle' => $seoTitle,
        'seoDescription' => $seoDescription,
        'seoImage' => $seoImage,
    ];

};
