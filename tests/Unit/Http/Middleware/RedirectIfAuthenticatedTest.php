<?php declare(strict_types = 1);

namespace App\Http\Middleware;

use Tests\TestCase;

class RedirectIfAuthenticatedTest extends TestCase
{
    /** @var RedirectIfAuthenticated */
    private $redirectIfAuthenticated;

    protected function setUp():void
{
        $this->redirectIfAuthenticated = new RedirectIfAuthenticated();
    }

    public function testMissing()
    {
        $this->assertTrue(true);
    }
}
