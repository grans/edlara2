<?php declare(strict_types = 1);

namespace App\Http\Controllers\Auth;

use PHPUnit\Framework\TestCase;

class RegisterControllerTest extends TestCase
{
    /** @var RegisterController */
    private $registerController;

    protected function setUp():void
    {
        $this->registerController = new RegisterController();
    }

    public function testMissing()
    {
        $this->assertTrue(true);
    }
}
