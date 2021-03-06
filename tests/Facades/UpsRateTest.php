<?php

namespace Ptondereau\Tests\LaravelUpsApi\Facades;

use GrahamCampbell\TestBenchCore\FacadeTrait;
use Ptondereau\LaravelUpsApi\Facades\UpsRate;
use Ptondereau\Tests\LaravelUpsApi\TestCase;
use Ups\Rate;

/**
 * This is the UpsRateTest facade test class.
 *
 * @author Pierre Tondereau <pierre.tondereau@gmail.com>
 */
class UpsRateTest extends TestCase
{
    use FacadeTrait;

    /**
     * Get the facade accessor.
     *
     * @return string
     */
    protected function getFacadeAccessor()
    {
        return 'ups.rate';
    }

    /**
     * Get the facade class.
     *
     * @return string
     */
    protected function getFacadeClass()
    {
        return UpsRate::class;
    }

    /**
     * Get the facade root.
     *
     * @return string
     */
    protected function getFacadeRoot()
    {
        return Rate::class;
    }
}
