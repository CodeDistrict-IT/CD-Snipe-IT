<?php

namespace Tests\Feature\Departments\Api;

use App\Models\User;
use Tests\TestCase;

class CreateDepartmentsTest extends TestCase
{
    public function testRequiresPermissionToCreateDepartment()
    {
        $this->actingAsForApi(User::factory()->create())
            ->postJson(route('api.departments.store'))
            ->assertForbidden();
    }
}
