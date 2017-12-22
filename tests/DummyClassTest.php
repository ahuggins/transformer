<?php
/*
 * This file is part of Transformer.
 *
 * (c) {{ author }}
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Ahuggins\Tests\Transformer;

use Ahuggins\Transformer\DummyClass;

/**
 * This is the dummy test class.
 *
 * @author {{ author }}
 */
class DummyClassTest extends AbstractTestCase
{
    public function testConstruct()
    {
        $dummy = new DummyClass($this->app['config']);
        $this->assertInstanceOf(DummyClass::class, $dummy);
    }

    public function testGetFoo()
    {
        $dummy = new DummyClass($this->app['config']);
        $this->assertSame('bar', $dummy->getFoo());
    }
}
