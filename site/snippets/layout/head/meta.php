<?php

use Kirby\Toolkit\Str;

$pageTitle = $seoTitle . ' – ';

$metaTitle = $pageTitle . $seoPageTitle;

if($page->isHomePage()) {
    $metaTitle = $site->seoTitle() . ' – ' . Str::unhtml( Str::replace( $site->claim(), '<br>', ' ') );
}

?>
<title><?= $metaTitle ?></title>
<meta name="description" content="<?= Str::unhtml($seoDescription) ?>">
<meta property="og:site_name" content="<?= $site->seoTitle() ?>">
<meta property="og:locale" content="de_CH">
<meta property="og:type" content="website">
<meta property="og:title" content="<?= $metaTitle ?>">
<meta property="og:description" content="<?= Str::unhtml($seoDescription) ?>">
<meta property="og:url" content="<?= $page->url() ?>">
<meta property="og:image" content="<?= $seoImage?->url() ?>">
<meta property="og:image:width" content="<?= $seoImage?->width() ?>">
<meta property="og:image:height" content="<?= $seoImage?->height() ?>">
<meta property="og:image:type" content="<?= $seoImage?->mime() ?>">
