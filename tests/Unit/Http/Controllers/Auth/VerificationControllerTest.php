<?php

declare(strict_types=1);

namespace App\Http\Controllers\Auth;

use Tests\TestCase;

class VerificationControllerTest extends TestCase
{
    /** @var VerificationController */
    private $verificationController;

    protected function setUp():void
    {
        $this->verificationController = new VerificationController();
    }

    public function testMissing()
    {
        $this->assertTrue(true);
    }
}
