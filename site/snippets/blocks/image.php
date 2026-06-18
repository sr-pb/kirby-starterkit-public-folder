<?php

/** @var \Kirby\Cms\Block $block */

$image = $block->image()->toFile();

?>
<?php if ($image) : ?>
<?php

$src = $image->thumb('small')->url();
$srcWebp = $image->thumb('smallWebp')->url();
$srcset = $image->srcset('default');
$width = $image->thumb('small')->width();
$height = $image->thumb('small')->height();
$caption = $image->caption()->kti()->value();
$alt = $image->alt()->value();
$sizes = "(min-width: 1024px) 12vw, (min-width: 768px) 50vw, 70vw";

?>
<div class="">
    <img
        loading="lazy"
        src="<?= $src ?>"
        srcset="<?= $srcset ?>"
        width="<?= $width ?>"
        height="<?= $height ?>"
        alt="<?= $alt ?>"
        sizes="<?= $sizes ?>"
        style="aspect-ratio: <?= $width/$height ?>"
    >
</div>
<?php endif ?>
