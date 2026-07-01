<?php

use Kirby\Toolkit\Str;

$title = $page->isHomePage() ? $seoTitle : $seoTitle . ' – ' . $seoPageTitle;

?>
<title><?= $title ?></title>
<meta name="description" content="<?= Str::unhtml($seoDescription) ?>">
<meta property="og:site_name" content="<?= $site->seoTitle() ?>">
<meta property="og:locale" content="de_CH">
<meta property="og:type" content="website">
<meta property="og:title" content="<?= $title ?>">
<meta property="og:description" content="<?= Str::unhtml($seoDescription) ?>">
<meta property="og:url" content="<?= $page->url() ?>">
<?php if ($seoImage !== null) : ?>
<?php $seoThumb = $seoImage->thumb('seo'); ?>
<meta property="og:image" content="<?= $seoThumb->url() ?>">
<meta property="og:image:width" content="<?= $seoThumb->width() ?>">
<meta property="og:image:height" content="<?= $seoThumb->height() ?>">
<meta property="og:image:type" content="<?= $seoImage->mime() ?>">
<?php endif ?>
