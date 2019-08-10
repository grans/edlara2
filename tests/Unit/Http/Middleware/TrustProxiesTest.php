<?php declare(strict_types = 1);

namespace App\Http\Middleware;

use Tests\TestCase;

class TrustProxiesTest extends TestCase
{
    /** @var TrustProxies */
    private $trustProxies;

    protected function setUp():void
{
        $this->trustProxies = new TrustProxies($this->createApplication()->make('config'));
    }

    public function testMissing()
    {
        $this->assertTrue(true);
    }
}
