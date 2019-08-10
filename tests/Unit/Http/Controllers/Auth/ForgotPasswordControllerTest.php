<?php

declare(strict_types=1);

namespace App\Http\Controllers\Auth;

use Tests\TestCase;

class ForgotPasswordControllerTest extends TestCase
{
    /** @var ForgotPasswordController */
    private $forgotPasswordController;

    protected function setUp():void
    {
        $this->forgotPasswordController = new ForgotPasswordController();
    }

    public function testMissing()
    {
        $this->assertTrue(true);
    }
}
