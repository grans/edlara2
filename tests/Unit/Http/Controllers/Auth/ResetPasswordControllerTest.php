<?php

declare(strict_types=1);

namespace App\Http\Controllers\Auth;

use PHPUnit\Framework\TestCase;

class ResetPasswordControllerTest extends TestCase
{
    /** @var ResetPasswordController */
    private $resetPasswordController;

    protected function setUp():void
    {
        $this->resetPasswordController = new ResetPasswordController();
    }

    public function testMissing()
    {
        $this->assertTrue(true);
    }
}
