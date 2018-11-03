<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class UserdeleteTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $user = User::inRandomorder()->first();




        //$user = new User();
        //$user->name = 'my name';
        //$user->email = 'my email';
        //$user->password = 'my password';
        //$user->email_verified_at = 'my time';
        ///$user->remember_token = 'my remember_token';
        //$user->save();
        $this->assertTrue($user->delete());
    }
}
