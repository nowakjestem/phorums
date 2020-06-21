<?php

namespace Nowakjestem\Phorums;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Nowakjestem\Phorums\Skeleton\SkeletonClass
 */
class PhorumsFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'phorums';
    }
}
