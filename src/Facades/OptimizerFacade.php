<?php

namespace Admingate\Optimize\Facades;

use Admingate\Optimize\Supports\Optimizer;
use Illuminate\Support\Facades\Facade;

/**
 * @see \Admingate\Optimize\Supports\Optimizer
 */
class OptimizerFacade extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return Optimizer::class;
    }
}
