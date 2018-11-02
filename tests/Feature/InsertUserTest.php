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
    public function testExample(){

        $user = new User();
        $user->name = 'Guangzhe Li';
        $user->email = 'gl279@njit.edu';
        $user->password = '90909';
        $user->remember_token = 'my remember_token';
        $this->assertTrue($user->save());
    }

}
