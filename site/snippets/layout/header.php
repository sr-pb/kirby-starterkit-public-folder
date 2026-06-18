<?php

$env = $kirby->option('sr.env');

?><!DOCTYPE html>
<html lang="de">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!-- <link rel="preload" href="/assets/fonts/UT-Marx-Regular.woff2" as="font" type="font/woff2" crossorigin> -->

        <?php if ($env != 'prod') : ?>
        <meta name="robots" content="noindex,nofollow">
        <?php endif ?>

        <?php snippet('layout/head/scripts') ?>
        <?php snippet('layout/head/favicon') ?>
        <?php snippet('layout/head/meta') ?>

        <?php echo Bnomei\Fingerprint::css('/assets/dist/app.css'); ?>
    </head>
<body class="">
<div id="wrapper">
    <header id="header"></header>
    <main id="main">
