<?php

namespace Tests\Feature;

use App\Models\User;
use App\UserRoles;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UsersRequirementTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_it_saves_users()
    {
        $newUser = User::factory()->create();

        $this->assertTrue(in_array($newUser->role, UserRoles::ROLES));
    }
}
