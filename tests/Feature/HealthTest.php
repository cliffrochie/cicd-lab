<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class HealthTest extends TestCase
{
    public function test_health_page_response(): void
    {
        $this->get('/up')->assertOk();
    }
}
