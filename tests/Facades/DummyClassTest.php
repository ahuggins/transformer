<?php

namespace Ahuggins\Tests\Transformer\Facades;

use GrahamCampbell\TestBenchCore\FacadeTrait;
use Ahuggins\Tests\Transformer\AbstractTestCase;

/**
 * This is the UpsLocatorTest facade test class.
 *
 * @author {{ author }}
 */
class DummyClassTest extends AbstractTestCase
{
    use FacadeTrait;
    /**
     * Get the facade accessor.
     *
     * @return string
     */
    protected function getFacadeAccessor()
    {
        return 'transformer.dummyclass';
    }
    /**
     * Get the facade class.
     *
     * @return string
     */
    protected function getFacadeClass()
    {
        return \Ahuggins\Transformer\Facades\DummyClass::class;
    }
    /**
     * Get the facade root.
     *
     * @return string
     */
    protected function getFacadeRoot()
    {
        return \Ahuggins\Transformer\DummyClass::class;
    }
}