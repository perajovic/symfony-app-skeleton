<?php

/*
 * This file is part of the Symfony App Skeleton project.
 *
 * (c) Pera Jovic <perajovic@me.com>. All rights reserved.
 */

use Doctrine\Common\Annotations\AnnotationRegistry;
use Composer\Autoload\ClassLoader;

error_reporting(-1);
mb_internal_encoding('UTF-8');
date_default_timezone_set('UTC');

ini_set('error_log', __DIR__.'/../var/error.log');

/** @var ClassLoader $loader */
$loader = require __DIR__.'/../vendor/autoload.php';

AnnotationRegistry::registerLoader([$loader, 'loadClass']);

return $loader;
