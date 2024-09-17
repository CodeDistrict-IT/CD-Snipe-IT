<?php

namespace Tests\Feature\Settings;

use App\Models\Asset;
use App\Models\User;
use Tests\TestCase;

class AlertsSettingTest extends TestCase
{
    public function testPermissionRequiredToViewAlertSettings()
    {
        $asset = Asset::factory()->create();
        $this->actingAs(User::factory()->create())
            ->get(route('settings.alerts.index'))
            ->assertForbidden();
    }
}
