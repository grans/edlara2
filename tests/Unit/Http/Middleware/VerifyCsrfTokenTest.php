<?php

declare(strict_types=1);

namespace App\Http\Middleware;

use Tests\TestCase;

class VerifyCsrfTokenTest extends TestCase
{
    /** @var VerifyCsrfToken */
    private $verifyCsrfToken;

    protected function setUp():void
    {
        $app = $this->createApplication();
        $this->verifyCsrfToken = new VerifyCsrfToken($app, $app->make('encrypter'));
    }

    public function testMissing()
    {
        $this->assertTrue(true);
    }
}
