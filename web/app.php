<?php

/*
 * This file is part of the Symfony App Skeleton project.
 *
 * (c) Pera Jovic <perajovic@me.com>. All rights reserved.
 */

use Composer\Autoload\ClassLoader;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Debug\Debug;
use Symfony\Component\Debug\ErrorHandler;

$env = getenv('SYMFONY__APP_ENV');

/** @var ClassLoader $loader */
$loader = require __DIR__.'/../app/autoload.php';
if ('prod' === $env) {
    include_once __DIR__.'/../var/bootstrap.php.cache';
}

if ('prod' !== $env) {
    Debug::enable();
}

$kernel = new AppKernel($env, true);
$kernel->loadClassCache();

if ('prod' === $env) {
    ErrorHandler::register();
}

$request = Request::createFromGlobals();
$response = $kernel->handle($request);
$response->send();
$kernel->terminate($request, $response);
