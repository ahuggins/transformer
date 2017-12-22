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

use GrahamCampbell\TestBenchCore\ServiceProviderTrait;
use Ahuggins\Transformer\DummyClass;

/**
 * This is the service provider test class.
 *
 * @author {{ author }}
 */
class ServiceProviderTest extends AbstractTestCase
{
    use ServiceProviderTrait;

    public function testDummyClassIsInjectable()
    {
        $this->assertIsInjectable(DummyClass::class);
    }
}
