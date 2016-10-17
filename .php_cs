<?php

/*
 * This file is part of the Symfony App Skeleton project.
 *
 * (c) Pera Jovic <perajovic@me.com>. All rights reserved.
 */

$header = <<<'EOF'
This file is part of the Symfony App Skeleton project.

(c) Pera Jovic <perajovic@me.com>. All rights reserved.
EOF;

Symfony\CS\Fixer\Contrib\HeaderCommentFixer::setHeader($header);

return (new Symfony\CS\Config\Config())
    ->level(Symfony\CS\FixerInterface::SYMFONY_LEVEL)
    ->fixers([
        '-psr0',
        '-ternary_spaces',
        'header_comment',
    ])
    ->finder((new Symfony\CS\Finder\DefaultFinder())
    ->exclude('config')
    ->in([
        __DIR__.'/app',
        __DIR__.'/src',
        __DIR__.'/tests',
        __DIR__.'/web',
    ]));
