<?php

declare(strict_types=1);

namespace App\Http\Middleware;

use Tests\TestCase;

class EncryptCookiesTest extends TestCase
{
    /** @var EncryptCookies */
    private $encryptCookies;

    protected function setUp():void
    {
        $this->encryptCookies = new EncryptCookies($this->createApplication()->make('encrypter'));
    }

    public function testMissing()
    {
        $this->assertTrue(true);
    }
}
