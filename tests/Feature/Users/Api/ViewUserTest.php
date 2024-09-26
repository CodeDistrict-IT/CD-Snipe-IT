<?php

namespace Tests\Feature\Users\Api;

use App\Models\User;
use Tests\TestCase;

class ViewUserTest extends TestCase
{
    public function testCanReturnUser()
    {
        $user = User::factory()->create();

        $this->actingAsForApi(User::factory()->viewUsers()->create())
            ->getJson(route('api.users.show', $user))
            ->assertOk();
    }
}
