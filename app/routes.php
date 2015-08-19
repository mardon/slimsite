<?php

$app->get('/', function () use($app) {
    $app->render('home.twig');
})->name('home');

$app->get('/sluzby', function () use($app) {
    $app->render('sluzby.twig');
})->name('sluzby');

$app->get('/kontakt', function () use($app) {
    $app->render('kontakt.twig');
})->name('kontakt');