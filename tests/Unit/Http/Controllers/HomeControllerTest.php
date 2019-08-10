<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Tests\TestCase;

class HomeControllerTest extends TestCase
{
    /** @var HomeController */
    private $homeController;

    protected function setUp():void
    {
        $this->homeController = new HomeController();
    }

    public function testMissing()
    {
        $this->assertTrue(true);
    }
}
