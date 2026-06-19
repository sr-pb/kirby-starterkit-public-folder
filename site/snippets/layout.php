<?php

$env = $kirby->option('sr.env');

?>
<!DOCTYPE html>
<html lang="de">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- <link rel="preload" href="/assets/fonts/font.woff2" as="font" type="font/woff2" crossorigin> -->

        <?php snippet('head/scripts') ?>
        <?php snippet('head/favicon') ?>
        <?php snippet('head/meta') ?>

        <?php if ($env !== 'prod') : ?>
        <meta name="robots" content="noindex,nofollow">
        <?php endif ?>

        <?= Bnomei\Fingerprint::css('/assets/dist/app.css') ?>
    </head>
<body>
    <div id="wrapper">
        <?php snippet('header') ?>
        <main id="main">
            <?= $slot ?>
        </main>
        <?php snippet('footer') ?>
    </div>
    <?php snippet('tools/dev') ?>
    <?php if ($env === 'dev') snippet('tools/dev') ?>
    <?= Bnomei\Fingerprint::js('/assets/dist/app.js') ?>
</body>
</html>
