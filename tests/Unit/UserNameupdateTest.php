<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class UserNameupdateTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $user = user::inRandomorder()->first();
        $user->name = 'Steve Smith';
        $user->save();
        $this->assertEquals('Steve Smith', $user->name);
    }
}
