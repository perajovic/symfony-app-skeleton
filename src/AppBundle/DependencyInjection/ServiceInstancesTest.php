<?php

/*
 * This file is part of the Symfony App Skeleton project.
 *
 * (c) Pera Jovic <perajovic@me.com>. All rights reserved.
 */

declare(strict_types=1);

namespace Tests\AppBundle\DependencyInjection;

use Filos\FrameworkBundle\TestCase\FunctionalTestCase;

class ServiceInstancesTest extends FunctionalTestCase
{
    /**
     * @test
     * @dataProvider provideService
     */
    public function checkIfServicesIsInstantiable($class, $serviceId)
    {
        $this->assertInstanceOf($class, $this->getService($serviceId));
    }

    /**
     * @return array
     */
    public function provideService(): array
    {
        return [
            ['Filos\FrameworkBundle\Controller\ExceptionController', 'filos_framework.controller.exception'],
            ['AppBundle\Controller\HealthCheckController', 'controller.health_check'],
        ];
    }
}
