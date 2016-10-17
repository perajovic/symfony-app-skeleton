<?php

/*
 * This file is part of the Symfony App Skeleton project.
 *
 * (c) Pera Jovic <perajovic@me.com>. All rights reserved.
 */

declare(strict_types=1);

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;

class HealthCheckController
{
    /**
     * @return JsonResponse
     */
    public function indexAction(): JsonResponse
    {
        return new JsonResponse([
            'status' => 'ok',
        ]);
    }
}
