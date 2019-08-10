<?php declare(strict_types = 1);

namespace App\Http\Middleware;

use Tests\TestCase;

class CheckForMaintenanceModeTest extends TestCase
{
    /** @var CheckForMaintenanceMode */
    private $checkForMaintenanceMode;

    protected function setUp():void
{
        $this->checkForMaintenanceMode = new CheckForMaintenanceMode($this->createApplication());
    }

    public function testMissing()
    {
        $this->assertTrue(true);
    }
}
