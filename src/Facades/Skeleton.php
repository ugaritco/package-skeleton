<?php

declare(strict_types=1);

namespace VendorName\Skeleton\Facades;

use Heritage\Support\Facades\Facade;

/**
 * @see \VendorName\Skeleton\Skeleton
 */
class Skeleton extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \VendorName\Skeleton\Skeleton::class;
    }
}
