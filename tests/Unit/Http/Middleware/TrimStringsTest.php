<?php

declare(strict_types=1);

namespace App\Http\Middleware;

use Tests\TestCase;

class TrimStringsTest extends TestCase
{
    /** @var TrimStrings */
    private $trimStrings;

    protected function setUp():void
    {
        $this->trimStrings = new TrimStrings();
    }

    public function testMissing()
    {
        $this->assertTrue(true);
    }
}
