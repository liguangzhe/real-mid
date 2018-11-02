<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class InsertUserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {

        $user = new User();
        $user->name = 'my name';
        $user->email = 'my email';
        $user->password = 'my password';
        $user->email_verified_at = 'my time';
        $user->remember_token = 'my remember_token';
        $this->assertTrue($user->save());
    }





}
