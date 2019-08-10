<?php

declare(strict_types=1);

namespace App\Http\Controllers\Auth;

use PHPUnit\Framework\TestCase;

class LoginControllerTest extends TestCase
{
    /** @var LoginController */
    private $loginController;

    protected function setUp():void
    {
        $this->loginController = new LoginController();
    }

    public function testMissing()
    {
        $this->assertTrue(true);
    }
}
