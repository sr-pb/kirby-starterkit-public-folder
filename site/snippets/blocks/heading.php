<?php /** @var \Kirby\Cms\Block $block */ ?>
<?php

$level = $block->level()->or('h2');
$text = $block->text();

?>
<<?= $level ?>><?= $text ?></<?= $level ?>>
