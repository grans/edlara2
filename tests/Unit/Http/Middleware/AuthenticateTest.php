<?php declare(strict_types=1);

namespace App\Http\Middleware;

use Tests\TestCase;

class AuthenticateTest extends TestCase
{
    /** @var Authenticate */
    private $authenticate;
    
    protected function setUp(): void
    {
        $this->authenticate = new Authenticate($this->createApplication()->make('auth'));
    }
    
    public function testMissing()
    {
        $this->assertTrue(TRUE);
    }
}
