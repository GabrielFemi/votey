<?php

namespace Tests\Feature;

use Tests\TestCase;

class HandleDashboardTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testDashboardRedirect()
    {
        $response = $this->get('/dashboard');

        $response->assertStatus(302);
    }
}
