<?php
/*
 * This file is part of YourPackage.
 *
 * (c) {{ author }}
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Ahuggins\Tests\Transformer;

use GrahamCampbell\TestBench\AbstractPackageTestCase;
use Ahuggins\Transformer\YourPackageServiceProvider;

abstract class AbstractTestCase extends AbstractPackageTestCase
{
    /**
     * Get the service provider class.
     *
     * @param \Illuminate\Contracts\Foundation\Application $app
     *
     * @return string
     */
    protected function getServiceProviderClass($app)
    {
        return TransformerServiceProvider::class;
    }
}