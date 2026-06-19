<?php

$pages = site()->pages()->index();
$ignore = kirby()->option('sitemap.ignore', ['error']);

$ignoreTemplates = [
    'error',
];

?>
<?= '<?xml version="1.0" encoding="UTF-8"?>' . PHP_EOL; ?>
<?= '<?xml-stylesheet type="text/xsl" href="' . kirby()->url(). '/sitemap-style.xsl"?>' . PHP_EOL; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
        xmlns:xhtml="http://www.w3.org/1999/xhtml">
    <?php foreach ($pages as $p): ?>
        <?php if (in_array($p->uri(), $ignore) || in_array($p->intendedTemplate(), $ignoreTemplates)) continue ?>
        <url>
            <loc><?= html($p->url()) ?></loc>
            <lastmod><?= $p->modified('c', 'date') ?></lastmod>
        </url>
    <?php endforeach ?>
</urlset>
