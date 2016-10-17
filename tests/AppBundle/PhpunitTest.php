<?php

/*
 * This file is part of the Symfony App Skeleton project.
 *
 * (c) Pera Jovic <perajovic@me.com>. All rights reserved.
 */

declare(strict_types=1);

namespace Tests\AppBundle;

use Filos\FrameworkBundle\TestCase\TestCase;

class Phpunit extends TestCase
{
    /**
     * @test
     */
    public function ensurePhpunitWorks()
    {
        $this->assertTrue(true);
    }
}
