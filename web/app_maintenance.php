<?php

/*
 * This file is part of the Symfony App Skeleton project.
 *
 * (c) Pera Jovic <perajovic@me.com>. All rights reserved.
 */

header('HTTP/1.1 503 Service Temporarily Unavailable');
header('Status: 503 Service Temporarily Unavailable');

$message = 'Maintenance in progress. We will be back very soon!';
$isAjax = isset($_SERVER['HTTP_X_REQUESTED_WITH'])
    && $_SERVER['HTTP_X_REQUESTED_WITH'] === 'XMLHttpRequest';
$format = 'html';

if (isset($_SERVER['HTTP_ACCEPT'])) {
    if (0 === strpos($_SERVER['HTTP_ACCEPT'], 'application/json')) {
        $format = 'json';
    }
}

if ($isAjax) {
    echo $message;

    return;
}

echo <<<EOD
<!DOCTYPE html>
<html>
    <head>
        <title>Syx Maintenance</title>
        <meta charset="utf-8">
        <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico?v1">
    </head>
    <style type="text/css">
        body {
            background-color: #f9f9f9;
        }
        .maintenance-text {
            width: 600px;
            padding: 30px 40px;
            position: absolute;
            top: 50%;
            left: 50%;
            line-height: 1.7;
            background-color: #fff;
            font-family: "Raleway", "Helvetica Neue", Helvetica, Arial, sans-serif;
            font-size: 16px;
            color: #d5772d;
            text-align: center;
            border-radius: 2px;
            -webkit-transform: translate(-50%,-50%);
               -moz-transform: translate(-50%,-50%);
                    transform: translate(-50%,-50%);
        }
    </style>
<body>
<div class="maintenance-text">
    $message
</div>
</body>
</html>
EOD;
