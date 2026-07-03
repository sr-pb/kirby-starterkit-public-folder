<?php

use Kirby\Toolkit\Str;

?>
<title><?= $seoPageTitle ?></title>
<meta name="description" content="<?= $seoDescription ?>">
<meta property="og:site_name" content="<?= $seoSiteName ?>">
<meta property="og:locale" content="de_CH">
<meta property="og:type" content="website">
<meta property="og:title" content="<?= $seoPageTitle ?>">
<meta property="og:description" content="<?= $seoDescription ?>">
<meta property="og:url" content="<?= $page->url() ?>">
<?php if ($seoImage !== null) : ?>
<?php $seoThumb = $seoImage->thumb('seo'); ?>
<meta property="og:image" content="<?= $seoThumb->url() ?>">
<meta property="og:image:width" content="<?= $seoThumb->width() ?>">
<meta property="og:image:height" content="<?= $seoThumb->height() ?>">
<meta property="og:image:type" content="<?= $seoImage->mime() ?>">
<?php endif ?>
